<?php

namespace App\Http\Controllers;

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
                'return_uri' => URL::to('/redirect'),
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
        // dd($charge);
        return $charge['source']['scannable_code']['image']['download_uri'];
    }
    public function webhook(Request $request)
    {
        dd($request->all());
    }
    public function redirect(Request $request)
    {
        dd('thank you');
    }
}
