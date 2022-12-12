<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PromoCode;
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
    
        return view('index',[
            'promocode' => $promocode
        ]);
    }
}
