<?php

namespace App\Http\Controllers;

use App\Helper\DateConversion;
use Carbon\Carbon;
use App\Models\PromoCode;
use App\Models\Schedule;
use Illuminate\Http\Request;

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
}
