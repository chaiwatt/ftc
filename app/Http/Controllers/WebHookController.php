<?php

namespace App\Http\Controllers;

use Config; 
use App\Helper\EmailBox;
use App\Helper\LineNotify;
use App\Models\Transaction;
use Illuminate\Http\Request;

class WebHookController extends Controller
{
    // public function url() {
    //   return 
    // }
    public function webhook(Request $request){
        
        $payload = json_decode($request->getContent(),JSON_PRETTY_PRINT);
        if (trim($payload['data']['status']) != 'pending'){
          
          Transaction::where('charge_id',trim($payload['data']['id']))->where('source_id',trim($payload['data']['source']['id']))->update([
            'status' => trim($payload['data']['status'])
          ]);

          $transaction = Transaction::where('charge_id',trim($payload['data']['id']))->where('source_id',trim($payload['data']['source']['id']))->first();
          EmailBox::send($transaction,'ทำคำสั่งซื้อเสร็จสิ้น','คำสั่งซื้อ ' . trim($payload['data']['status']),'admin');
          EmailBox::send($transaction,'ทำคำสั่งซื้อเสร็จสิ้น','คำสั่งซื้อ ' . trim($payload['data']['status']),'customer');
          $this->sendNotify('ทำคำสั่งซื้อเสร็จสิ้น');
          
        } else if(trim($payload['data']['status']) == 'pending'){
          $transaction = Transaction::where('charge_id',trim($payload['data']['id']))->where('source_id',trim($payload['data']['source']['id']))->first();
          EmailBox::send($transaction,'มีรายการสั่งซื้อ','โปรดตรวจสอบรายการสั่งซื้อ','admin');
          $this->sendNotify('มีรายการสั่งซื้อ');
        }      
    }

    public function sendNotify($message){
      $lineapi = config('line.linetoken');
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
