<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropzoneController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dropzone', [DropzoneController::class, 'index']);
Route::post('dropzone/store', [DropzoneController::class, 'store'])->name('dropzone.store');