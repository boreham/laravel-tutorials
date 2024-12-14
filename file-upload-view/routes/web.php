<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', [UploadController::class, 'index']);
Route::post('/store', [UploadController::class, 'store'])->name('upload.file');