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
        }

        // EmailBox::send('joerocknpc@gmail.com','มีรายการสั่งซื้อ','โปรดตรวจสอบรายการสั่งซื้อ');
        return $charge['source']['scannable_code']['image']['download_uri'];
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
