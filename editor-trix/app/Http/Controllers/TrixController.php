<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrixController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('trix');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        dd($request->body);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function upload(Request $request)
    {
        if($request->hasFile('file')) {
            //get filename with extension
            $filenamewithextension = $request->file('file')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('file')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('file')->move(public_path('media'), $filenametostore);

            // you can save image path below in database
            $path = asset('media/'.$filenametostore);

            echo $path;
            exit;
        }
    }
}
