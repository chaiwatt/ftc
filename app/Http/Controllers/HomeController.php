<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Helper\EmailBox;
use App\Models\Schedule;
use App\Models\PromoCode;
use Illuminate\Http\Request;
use App\Helper\DateConversion;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OrderPlacedNotification;

class HomeController extends Controller
{

    public function index()
    {
        $promocode = PromoCode::whereDate('startdate', '<=', Carbon::today())
                    ->whereDate('enddate', '>=', Carbon::now())
                    ->where('status',1)
                    ->where('showpage',1)
                    ->latest('id')
                    ->first(); 
        $schdules = Schedule::where('month',Carbon::now()->month)->where('year',Carbon::now()->year)->get();
        return view('index',[
            'promocode' => $promocode,
            'schdules' => $schdules,
            'month' => DateConversion::thaiMonthLong(Carbon::now()->month),
            'year' => intVal(Carbon::now()->year) + 543,
        ]);
    }

    public function testsendmail(){
        EmailBox::send('src_test_5u3w92i17a39jgotxal','chrg_test_5u3w92joxuhs7x1lsrd','ทำคำสั่งซื้อสำเร็จ','คำสั่งซื้อ ','admin');
    }

}
