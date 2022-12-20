<?php

namespace App\Http\Controllers;

use Config; 
use Carbon\Carbon;
use App\Models\User;
use App\Helper\EmailBox;
use App\Helper\LineNotify;
use App\Models\MediaTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderPlacedNotification;

class WebHookController extends Controller
{
    public function webhook(Request $request){ 
        $payload = json_decode($request->getContent(),JSON_PRETTY_PRINT); 
        if(trim($payload['data']['status']) == 'successful'){
            $pacakage = [
              'reciever_email' => $payload['data']['source']['email'],
              'reciever_name' => $payload['data']['source']['name'],
              'title' => 'คำสั่งซื้อสำเร็จ',
              'payload' => $payload
            ];
            $this->sendmail($pacakage);
            $pacakage = [
              'reciever_email' => 'joerocknpc@gmail.com',
              'reciever_name' => 'Admin',
              'title' => 'คำสั่งซื้อสำเร็จ',
              'payload' => $payload
            ];
            $this->sendmail($pacakage);
            $mediatransaction = new MediaTransaction();
            $mediatransaction->source_id = $payload['data']['source']['id'];
            $mediatransaction->charge_id = $payload['data']['id'];
            $mediatransaction->status = $payload['data']['status'];
            $mediatransaction->paid_at = $payload['data']['paid_at'];
            $mediatransaction->save();
        } 
    }
    
    public function sendmail($pacakage){
        Notification::route('mail', [
          $pacakage['reciever_email'] => $pacakage['reciever_name'],
      ])->notify(new OrderPlacedNotification($pacakage));
    }


    public function webhook_demo(Request $request){ 
      $payload = json_decode($request->getContent(),JSON_PRETTY_PRINT);    
      if(trim($payload['data']['status']) == 'successful'){
          $pacakage = [
            'reciever_email' => $payload['data']['source']['email'],
            'reciever_name' => $payload['data']['source']['name'],
            'title' => 'คำสั่งซื้อสำเร็จ',
            'payload' => $payload
          ];
          $this->sendmail($pacakage);
          $pacakage = [
            'reciever_email' => 'joerocknpc@gmail.com',
            'reciever_name' => 'Admin',
            'title' => 'คำสั่งซื้อสำเร็จ',
            'payload' => $payload
          ];
          $this->sendmail($pacakage);
      } 
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
