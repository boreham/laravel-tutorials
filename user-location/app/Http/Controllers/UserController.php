<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\View\View;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        // Static IP
        $ip = '0.0.0.0';

        //  Dynamic IP
        // $ip = $request->ip();
        $currentUserInfo = Location::get($ip);
          
        return view('user', compact('currentUserInfo'));
    }
}
