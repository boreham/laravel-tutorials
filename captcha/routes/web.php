<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('my-captcha', [HomeController::class, 'myCaptcha'])->name('myCaptcha');
Route::post('my-captcha', [HomeController::class, 'myCaptchaPost'])->name('myCaptcha.post'); 
Route::get('refresh_captcha', [HomeController::class, 'refreshCaptcha'])->name('refresh_captcha');