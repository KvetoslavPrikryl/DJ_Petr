<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');

//SEND EMAIL
Route::post('send-email', [ContactController::class, 'sendEmail'])->name('send.email');

//RESET PASSWORD

Route::get('/forgot-password', function(){
    return view('auth.password.email');
})->middleware('quest')->name('password.request');

Route::post('/forgot-password', function(Request $request){
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT ? back()->with(['status' => __($status)]) : back()->withErrors(['email' => __($status)]);
})->middleware('quest')->name('password.email');

//AUTH
Route::middleware(['auth'])->group(function(){
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
