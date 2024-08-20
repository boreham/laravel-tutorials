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
        return QrCode::size(300)
                     ->backgroundColor(255,55,0)
                     ->generate('A simple example of QR code');
    }
}
