<?php

namespace App\Http\Controllers;

use App\Helper\EmailBox;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use ox01code\Omise\process\OmiseCharge;
use ox01code\Omise\process\OmiseSource;
use Config;

class PaymentController extends Controller
{
    public function getCharge(Request $request)
    {
        
    //    dd(config('line.linetoken')) ;
        // $data = $request->all();
        $charge = null;
        $source = OmiseSource::create([
            'amount' => $request->amount * 100,
            // 'phone_number' => $request->phone,
            'currency' => 'THB',
            'type' => 'promptpay',
            // 'type' => 'truemoney',
        ]);
        
        if($source['object'] == 'source'){
            $charge = OmiseCharge::create([
                'amount' => $request->amount * 100,
                'currency' => 'THB',
                'source' => $source['id'],
                'return_uri' => URL::to('/redirect?source=1234'),
            ]);
            
            $customer = new Transaction();
            $customer->name = $request->name;
            $customer->amount = $request->amount;
            $customer->lastname = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
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
        dd($request->all());
    }


}
