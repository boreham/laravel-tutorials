<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrixController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('trix', [TrixController::class, 'index']);
Route::post('trix/upload', [TrixController::class, 'upload'])->name('trix.upload');
Route::post('trix/store', [TrixController::class, 'store'])->name('trix.store');