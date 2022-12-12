<?php
namespace App\Helper;

use App\Mail\FTCMail;
use App\Models\Transaction;
use Illuminate\Support\Facades\Mail;

class EmailBox
{
    public static function send($sourceid,$chargeid,$title,$message,$type){
        $transaction = Transaction::where('charge_id',$chargeid)->where('source_id',$sourceid)->first();
        $mailto = "fullstacktrainingclass@gmail.com";
        if ($type == 'customer'){
            $mailto = $transaction->email;
        }

        // dd($transaction);

        $suffix = strtoupper(substr($sourceid, -10));

        $data = [
            'sendermail' => env('MAIL_FROM_ADDRESS'),
            'sendername' => 'Full-Stack Training Class',
            'type' => $type,
            'title' => $title.'_'.$suffix,
            'message' => $message,
            'name' => $transaction->name,
            'lastname' => $transaction->lastname,
            'amount' => $transaction->amount,
            'discount' => $transaction->discount,
            'phone' => $transaction->phone,
            'email' => $transaction->email,
            'address' => $transaction->address,
            'participant' => $transaction->participant,
            'trainingdate' => $transaction->trainingdate,
            'company' => $transaction->company,
            'vatnumber' => $transaction->vatnumber,
            'paymentdate' => $transaction->paymentdate,
            'status' => $transaction->status
            ];

            // dd($data)
            Mail::to($mailto)->send(new FTCMail($data));
         
    } 

    public static function emailSignature(){
        $data ='<span style="color:#6C6A6A;"><br>--
        <br>
        <br>Thailand Technology Rating Support and Service Center (TTRS)
        <br>National Science and Technology Development Agency (NSTDA)
        <br>111 Thailand Science Park, Phahonyothin Rd.,
        <br>Klong Nueng, Klong Luang, Pathumthani 12120
        
        <br>Tel.0 2564 7000
        <br>Fax. 0 2564 7004
        <br>website: www.nstda.or.th</span>' ;
            
        return $data;
    } 
}