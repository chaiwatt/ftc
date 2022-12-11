<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FTCMailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WebHookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('getCharge', [PaymentController::class, 'getCharge'])->name('getCharge');
Route::get('redirect', [PaymentController::class, 'redirect'])->name('redirect');
// Route::post('webhook', [WebHookController::class, 'webhook'])->name('webhook');

Route::get('sendmail', [FTCMailController::class, 'sendmail'])->name('sendmail');

Route::get('/policy', function () {
    return view('policy');
});
