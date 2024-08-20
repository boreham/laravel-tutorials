<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $image = QrCode::format('png')
                         ->merge(public_path('images/YOUR_IMAGE_NAME.png'), 0.5, true)
                         ->size(500)
                         ->errorCorrection('H')
                         ->generate('A simple example of QR code!');
  
        return response($image)->header('Content-type','image/png');
    }
}
