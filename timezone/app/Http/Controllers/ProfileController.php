<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Timezone;
  
class ProfileController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $timezones = Timezone::Orderby('offset')->get();
  
        return view('timezoneList', compact('timezones'));
    }
}