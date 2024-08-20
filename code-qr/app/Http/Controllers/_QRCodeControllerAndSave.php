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
        $path = public_path('qrcode/'.time().'.png');
  
        return QrCode::size(300)
                     ->generate('A simple example of QR code', $path);
    }
}

