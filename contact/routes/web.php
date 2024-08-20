<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');