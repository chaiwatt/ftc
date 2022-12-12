<?php

namespace App\Http\Controllers;

use App\Models\PromoCode;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function checkpromo(Request $request){
        $promocode = PromoCode::where('name',trim($request->promocode))->first();
        if (!empty($promocode)){
            return '1';
        }else{
            return '0';
        }
        
    }
}
