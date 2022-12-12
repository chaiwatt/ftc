<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PaidCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->source){
            $transaction = Transaction::where('source',trim($request->source))->first();
            if ($transaction->status == 'successful'){
                return $next($request);
            }else{
                return abort(403, 'Unauthorized action.');
            }
            
        }else{
            return abort(403, 'Unauthorized action.');
        }

        
    }
}
