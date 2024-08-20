<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
  
class FileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fileUpload');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
   
        $fileName = time().'.'.$request->file->getClientOriginalExtension();
   
        // Store File in Public Folder
        $request->file->move(public_path('files'), $fileName);

        // Store File in Storage Folder
        // $request->file->storeAs('uploads', $fileName);

        // Store File in S3
        // $request->file->storeAs('uploads', $fileName, 's3');
   
        return response()->json(['success' => 'You have successfully upload file.']);
    }
}
