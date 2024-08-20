<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('merge-pdf', [PDFController::class, 'index']);
Route::post('merge-pdf', [PDFController::class, 'store'])->name('merge.pdf.post');