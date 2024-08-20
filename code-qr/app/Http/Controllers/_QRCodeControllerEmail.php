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
        return QrCode::size(500)
                 ->email('hardik@itsolutionstuff.com', 'Welcome to ItSolutionStuff.com!', 'This is !.');
    }
}
