<?php

namespace App\Http\Controllers;

use Config;
use Carbon\Carbon;
use App\Helper\EmailBox;
use App\Models\PromoCode;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use ox01code\Omise\process\OmiseCharge;
use ox01code\Omise\process\OmiseSource;

class PaymentController extends Controller
{
    public function getCharge(Request $request)
    {
        
        $promocode = PromoCode::where('name',trim($request->promocode))
                            ->whereDate('startdate', '<=', Carbon::today())
                            ->whereDate('enddate', '>=', Carbon::now())
                            ->where('status',1)
                            ->first(); 
        $discount = 0;                    
        if (!empty($promocode)){
            $discount = $promocode->percentdiscount / 100 ;
        }                    
        
        $charge = null;
        $source = OmiseSource::create([
            'amount' => floatval($request->amount) * (1-$discount) * 100,
            'store_name' => 'ftc',
            'name' => 'ftc',
            'email' => $request->email,
            // 'phone_number' => $request->phone,
            'currency' => 'THB',
            'type' => 'promptpay',
            // 'type' => 'truemoney',
        ]);
        
        if($source['object'] == 'source'){
            $charge = OmiseCharge::create([
                'amount' => floatval($request->amount) * (1-$discount) * 100,
                'currency' => 'THB',
                'source' => $source['id'],
                'return_uri' => URL::to('/redirect?source='.$source['id']),
            ]);
            
            $transaction = new Transaction();
            $transaction->storename = $source['store_name'];
            $transaction->name = $request->name;
            $transaction->lastname = $request->lastname;
            $transaction->amount = $request->amount;
            $transaction->discount = floatval($request->amount) * $discount;
            $transaction->address = $request->address;
            
            $transaction->email = $request->email;
            $transaction->phone = $request->phone;
            $transaction->participant = $request->participant;
            $transaction->schedule_id = $request->trainingdate;
            $transaction->company = $request->company;
            $transaction->vatnumber = $request->vatnumber;
            $transaction->promocode = $request->promocode;
            $transaction->source_id = $source['id'];
            $transaction->charge_id = $charge['id'];
            $transaction->save();

            // dd($charge);
        }

        // EmailBox::send('joerocknpc@gmail.com','มีรายการสั่งซื้อ','โปรดตรวจสอบรายการสั่งซื้อ');
        // $result = {
        //     $charge['source']['scannable_code']['image']['download_uri']
        // };
 
        $result = collect([
            'image' => $charge['source']['scannable_code']['image']['download_uri'],
            'source_id' => $source['id'],
            'charge_id' => $charge['id'],
            ]);

        return $result; //$charge['source']['scannable_code']['image']['download_uri'];
    }

    public function getPrompayPaymentStatus(Request $request){
        $source_id = $request->source;
        $charge_id = $request->charge;

        $transaction = Transaction::where('source_id',$source_id)->where('charge_id',$charge_id)->first();
        if ($transaction->status == 'successful'){
            $result = collect([
                'status' => 1,
                'uri' => URL::to('/redirect?source='.$source_id),
                ]);
        }else{
            $result = collect([
                'status' => 0,
                'uri' => URL::to('/redirect?source='.$source_id),
                ]);
        }

        // $result = collect([
        //     'source_id' => $source_id,
        //     'charge_id' => $charge_id,
        //     ]);

        return $result; //$charge['source']['scannable_code']['image']['download_uri'];
    }

    public function webhook(Request $request)
    {
        dd($request->all());
    }
    public function redirect(Request $request)
    {
        $transaction = Transaction::where('source_id',trim($request->source))->first();
        // dd($transaction)
        return view('thanks',[
            'transaction' => $transaction
        ]);
    }


}
