<?php
  
namespace App\Http\Controllers;
       
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
      
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('fileUpload');
    }
        
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        
        $fileName = time().'.'.$request->file->extension();  
         
        // Store File in Public Folder
        $request->file->move(public_path('uploads'), $fileName);
       
        // Store File in Storage Folder
        // $request->file->storeAs('uploads', $fileName);

        // Store File in S3
        // $request->file->storeAs('uploads', $fileName, 's3');

        /*  
            Write Code Here for
            Store $fileName name in DATABASE from HERE 
        */
         
        return back()->with('success', 'File uploaded successfully!')
                     ->with('file', $fileName);
   
    }
}
