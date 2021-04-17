<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('throttle:api')->post('/send_mail', function (Request $request) {
    $msg = "Bạn {$request->name}, \nemail {$request->email} \nphone {$request->phone} \nmessage: {$request->message}";
    Mail::raw($msg, function ($message) {
        $message->subject("Tin nhắn từ khách trên noithatc3.com");
        $message->to(config('app.email'));
        $message->cc('vnhtanhoi@gmail.com');
    });
    return redirect()->back()
        ->with(['success' => 'Tin nhắn của bạn đã được gửi đi. Cảm ơn đã liên hệ với chúng tôi']);
});

Route::middleware('auth.basic')->resource('posts', PostController::class)->except([
    'show'
]);

Route::get('/news/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/news', [PostController::class, 'allPost']);
