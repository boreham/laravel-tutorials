<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('google-autocomplete', [GoogleController::class, 'index']);