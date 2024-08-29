<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('site-register', [AuthController::class, 'siteRegister'])->name('siteRegister');
Route::post('site-register', [AuthController::class, 'siteRegisterPost'])->name('siteRegister'); 
