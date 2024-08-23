<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileManagerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('filemanager', [FileManagerController::class, 'index']);