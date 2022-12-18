<?php

namespace App\Http\Controllers;

use Config; 
use Carbon\Carbon;
use App\Helper\EmailBox;
use App\Helper\LineNotify;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderPlacedNotification;

class WebHookController extends Controller
{
    // public function url() {
    //   return 
    // }
    public function webhook(Request $request){
        
        $payload = json_decode($request->getContent(),JSON_PRETTY_PRINT);
        if (trim($payload['data']['status']) != 'pending'){
          $paymentdate = Carbon::parse($payload['created_at'])->tz('Asia/Bangkok');
          $transaction = Transaction::where('charge_id',trim($payload['data']['id']))->where('source_id',trim($payload['data']['source']['id']))->update([
            'status' => trim($payload['data']['status']),
            'paymentdate' => $paymentdate->format('d-m-Y') . ' ' . $paymentdate->format('H:i:s')
          ]);

          // EmailBox::send($payload['data']['source']['id'],$payload['data']['id'],'โปรดตรวจสอบทำคำสั่งซื้อ','โปรดตรวจสอบทำคำสั่งซื้อ ' . trim($payload['data']['status']),'admin');
          // if($payload['data']['status'] == 'successful'){
          //   EmailBox::send($payload['data']['source']['id'],$payload['data']['id'],'คำสั่งซื้อสำเร็จ','คำสั่งซื้อ ' . trim($payload['data']['status']),'customer');
          // }

          // $sourceinfo = [
          //   'name' => $transaction->name, 
          //   'lastname' => $transaction->lastname,
          //   'phone' => $transaction->phone,
          //   'email' => $transaction->email,
          //   'company' => $transaction->company,
          //   'address' => $transaction->address,
          //   'amount' => $transaction->amount,
          //   'participant' => $transaction->participant,
          //   'trainingdate' => $transaction->trainingdate,
          //   'discount' => $transaction->discount,
          //   'status' => $transaction->status
          // ];

          // $pacakage = [
          //   'email' => 'joerocknpc@gmail.com',
          //   'name' => 'noreply',
          //   'title' => 'คำสั่งซื้อสำเร็จ',
          //   'transaction' => $sourceinfo
          // ];
          // $this->sendmail($pacakage);
          // $pacakage = [
          //   'email' => $transaction->email,
          //   'name' => 'noreply',
          //   'title' => 'คำสั่งซื้อสำเร็จ',
          //   'transaction' => $sourceinfo
          // ];
          // $this->sendmail($pacakage);
          
        } else if($payload['data']['status'] == 'pending'){
          $transaction = Transaction::where('charge_id',trim($payload['data']['id']))->where('source_id',trim($payload['data']['source']['id']))->first();
          $sourceinfo = [
              'name' => $transaction->name, 
              'lastname' => $transaction->lastname,
              'phone' => $transaction->phone,
              'email' => $transaction->email,
              'company' => $transaction->company,
              'address' => $transaction->address,
              'amount' => $transaction->amount,
              'participant' => $transaction->participant,
              'trainingdate' => $transaction->trainingdate,
              'discount' => $transaction->discount,
              'status' => $transaction->status
          ];
          $pacakage = [
            'email' => 'joerocknpc@gmail.com',
            'name' => 'noreply',
            'title' => 'โปรดตรวจสอบทำคำสั่งซื้อ',
            'sourceinfo' => $sourceinfo
          ];
          $this->sendmail($pacakage);
        }      
    }

    public function sendmail($pacakage){
        Notification::route('mail', [
          $pacakage['email'] => $pacakage['name'],
      ])->notify(new OrderPlacedNotification($pacakage));
    }

    public function sendNotify($message){
      $lineapi = 'NgUog6LoVij7JHkH4pJXhj2DPLhiE2hnGnJL5khDuhx';  // config('line.linetoken');
      $mms =  trim($message); // ข้อความที่ต้องการส่ง
      date_default_timezone_set("Asia/Bangkok");
      $chOne = curl_init(); 
      curl_setopt( $chOne, CURLOPT_URL, 'https://notify-api.line.me/api/notify'); 
      curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
      curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
      curl_setopt( $chOne, CURLOPT_POST, 1); 
      curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms"); 
      curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
      $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', ); 
      curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
      curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
      $result = curl_exec( $chOne ); 
      //Check error 
      if(curl_error($chOne)) 
          { 
          // echo 'error:' . curl_error($chOne); 
      } 
      else { 
          // $result_ = json_decode($result, true); 
          // echo "status : ".$result_['status']; echo "message : ". $result_['message'];
      } 
      curl_close( $chOne );   
  }
}
