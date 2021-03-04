<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('throttle:api')->post('/send_mail', function (Request $request) {
    $msg = "Từ noithatc3.com, Bạn {$request->name}, email {$request->email}  phone {$request->phone} viết: {$request->message}";
    Mail::raw($msg, function ($message) {
        $message->to(config('app.email'));
        $message->cc('vnhtanhoi@gmail.com');
    });
    return redirect()->back()
        ->with(['success' => 'Tin nhắn của bạn đã được gửi đi. Cảm ơn đã liên hệ với chúng tôi']);
});

//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
