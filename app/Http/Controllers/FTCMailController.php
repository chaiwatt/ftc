<?php

namespace App\Http\Controllers;

use App\Mail\FTCMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FTCMailController extends Controller
{
    public function sendmail()
    {
        $mailData = [
            'title' => 'มีรายการสั่งซื้อ',
            'body' => 'โปรดตรวจสอบรายการสั่งซื้อ'
        ];
         
        Mail::to('joerocknpc@gmail.com')->send(new FTCMail($mailData));
           
        // dd("Email is sent successfully.");
    }
}
