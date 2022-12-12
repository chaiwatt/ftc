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
            // 'amount' => $request->amount * (1-$discount) * 100,
            'amount' => $request->amount * 100,
            // 'phone_number' => $request->phone,
            'currency' => 'THB',
            'type' => 'promptpay',
            // 'type' => 'truemoney',
        ]);
       
        if($source['object'] == 'source'){
            $charge = OmiseCharge::create([
                // 'amount' => $request->amount * (1-$discount) * 100,
                'amount' => $request->amount * 100,
                'currency' => 'THB',
                'source' => $source['id'],
                'return_uri' => URL::to('/redirect?source='.$source['id']),
            ]);
            
            $customer = new Transaction();
            $customer->name = $request->name;
            $customer->amount = $request->amount;
            // $customer->discount = $request->amount * ($discount);
            $customer->discount = 0;
            $customer->address = $request->address;
            $customer->lastname = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->participant = $request->participant;
            $customer->trainingdate = $request->trainingdate;
            $customer->company = $request->company;
            $customer->vatnumber = $request->vatnumber;
            $customer->promocode = $request->promocode;
            $customer->source_id = $source['id'];
            $customer->charge_id = $charge['id'];
            $customer->save();
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
