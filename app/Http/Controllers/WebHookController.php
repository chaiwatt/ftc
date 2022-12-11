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
          
          
        } else if(trim($payload['data']['status']) == 'pending'){
          $transaction = Transaction::where('charge_id',trim($payload['data']['id']))->where('source_id',trim($payload['data']['source']['id']))->first();
          EmailBox::send($transaction,'มีรายการสั่งซื้อ','โปรดตรวจสอบรายการสั่งซื้อ','admin');
          LineNotify::sendNotify('มีรายการสั่งซื้อ');
        }      
    }
}
