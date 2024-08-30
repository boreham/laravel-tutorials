<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('order_detail', OrderDetailController::class);