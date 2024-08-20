<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('barcode', function () {
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    $image = $generatorPNG->getBarcode('000005263635', $generatorPNG::TYPE_CODE_128);

    return response($image)->header('Content-type','image/png');
});

Route::get('barcode-save', function () {
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    $image = $generatorPNG->getBarcode('000005263635', $generatorPNG::TYPE_CODE_128);

    Storage::put('barcodes/demo.png', $image);

    return response($image)->header('Content-type','image/png');
});

Route::get('barcode-blade', function () {
    $generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();
    $barcode = $generatorHTML->getBarcode('0001245259636', $generatorHTML::TYPE_CODE_128);

    return view('barcode', compact('barcode'));
});