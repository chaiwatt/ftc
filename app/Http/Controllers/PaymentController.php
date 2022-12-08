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
        $charge = null;
        $amount = 20;
        $source = OmiseSource::create([
            // 'amount' => $request->amount * 100,
            'amount' => $amount * 100,
            // 'phone_number' => $request->phoneNo,
            'currency' => 'THB',
            'type' => 'promptpay',
        ]);
        
        if($source['object'] == 'source'){
            $charge = OmiseCharge::create([
                // 'amount' => $request->amount * 100,
                'amount' => $amount * 100,
                'currency' => 'THB',
                'source' => $source['id'],
                'return_uri' => 'http://example.com/orders/345678/complete',
            ]);

        }
        return $charge['source']['scannable_code']['image']['download_uri'];
    }
    public function redirect(Request $request)
    {
        $transaction = new Transaction();
        $transaction->name = 'JO';
        $transaction->save(); 
        // dd($request->all());
        // Storage::put('my_result.txt',$request->all());
        // $respFile = fopen("resp-log.txt", "w") or die("Unable to open file!");

        // $json_str = file_get_contents('php://input');
        // fwrite($respFile, $json_str . "\n\n");

        // $json_obj = json_decode($json_str);

        // fwrite($respFile, "resultCode=" . 'hello' . "\n");

        // fwrite($respFile, "resultCode=" . $json_obj->resultCode . "\n");
        // fwrite($respFile, "amount=" . $json_obj->amount . "\n");
        // fwrite($respFile, "referenceNo=" . $json_obj->referenceNo . "\n");
        // fwrite($respFile, "gbpReferenceNo=" . $json_obj->gbpReferenceNo . "\n");
        // fwrite($respFile, "currencyCode=" . $json_obj->currencyCode . "\n");
        
        // fclose($respFile);
        // return view('redirect');
    }
}
