<?php
      
namespace App\Http\Controllers;
       
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
    
class PDFController extends Controller
{
     
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mergePDF');
    }
        
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'mimes:pdf'
        ]);
      
         if($request->hasFile('filenames')){
            $pdf = new Fpdi();
      
            foreach ($request->file('filenames') as $key => $value) {
                
                $pageCount =  $pdf->setSourceFile($value->getPathName());
 
                // for ($i=0; $i AddPage();

                //     //import a page then get the id and will be used in the template
                //     $tplId = $pdf->importPage($i+1);

                //     //use the template of the imporated page
                //     $pdf->useTemplate($tplId);
                // }

            }

            return response($pdf->Output())
                    ->header('Content-Type', 'application/pdf');
  
        }
    }
     
}   
