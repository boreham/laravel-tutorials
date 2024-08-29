<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuillController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('quill-editor', [QuillController::class, 'index']);
Route::post('quill-editor', [QuillController::class, 'store'])->name('quill.store');