<?php

namespace App\Http\Controllers;

use App\Helper\EmailBox;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class WebHookController extends Controller
{
    public function webhook(Request $request){
        $payload = json_decode($request->getContent(),JSON_PRETTY_PRINT);
        if (trim($payload['data']['status']) != 'pending'){
          Transaction::where('charge_id',trim($payload['data']['id']))->where('source_id',trim($payload['data']['source']['id']))->update([
            'status' => trim($payload['data']['status'])
          ]);
          EmailBox::send('joerocknpc@gmail.com','ทำคำสั่งซื้อเสร็จสิ้น','คำสั่งซื้อ ' . trim($payload['data']['status']));
        } else if(trim($payload['data']['status']) == 'pending'){
          EmailBox::send('joerocknpc@gmail.com','มีรายการสั่งซื้อ','โปรดตรวจสอบรายการสั่งซื้อ');
        }      
    }
}
