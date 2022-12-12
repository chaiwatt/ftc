<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PromoCode;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function checkpromo(Request $request){
        $promocode = PromoCode::where('name',trim($request->promocode))
                    ->whereDate('startdate', '<=', Carbon::today())
                    ->whereDate('enddate', '>=', Carbon::now())
                    ->where('status',1)
                    ->first();           
        if (!empty($promocode)){
            return '1';
        }else{
            return '0';
        }
        
    }
}
