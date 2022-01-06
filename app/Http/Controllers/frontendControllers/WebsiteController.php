<?php

namespace App\Http\Controllers\frontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Config;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("frontend.home");
    }
    public function file_form(Request $request){
        return $request->all();
    }


    public function convertFile(Request $request){
        $file=$request->file('file');

        $cntnt = file_get_contents($file);
        // file_put_contents(public_path("test.pdf"),$content);
        // $content->save("uploads/converted/pdfs/","newsample.pdf");
        // return $file->getClientOriginalName();
        // return $request->all();

        $domPdfPath = base_path('vendor/dompdf/dompdf');
        
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
         
        //Load word file
        // return public_path();
        $Content = \PhpOffice\PhpWord\IOFactory::load(public_path("result.docx")); 
        // return $Content;
 
        //Save it into PDF
        $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
        $PDFWriter->save(public_path('new-result.pdf')); 
        return 'File has been successfully converted';
    }
    public function sendFilesToServer(Request $request){
        // return ["hellow"=>"world"];
        // return $request->formdata;
        return $request->all();
    }

   
    public function destroy($id)
    {
        //
    }
    public function word2pdf(){
        $info=[
            "from"=>'word',
            "to"=>'pdf',
            "action"=>'word2pdf',
            "accept"=>'.doc,.docx',
        ];
        return view("frontend.home",compact('info'));
    }
    public function pdf2word(){
        $info=[
            "from"=>'pdf',
            "to"=>'word',
            "action"=>'pdf2word',
            "accept"=>'application/pdf',
        ];
        return view("frontend.home",compact('info'));
    }
    public function pdf2excel(){
        $info=[
            "from"=>'pdf',
            "to"=>'excel',
            "action"=>'pdf2word',
            "accept"=>'.csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel',
        ];
        return view("frontend.home",compact('info'));
    }



    // testtest
    public function testtest(Request $request){
        return view('frontend.test');
    }


    // ajax

    public function sendFileToServer(Request $request){
        if($request->ajax() && $request->hasFile("file")){
            $f=$request->file("file");
            $fName=$f->getClientOriginalName();
            $fileName=uniqid().$fName;
            // $f->move(public_path("uploads/temps"),$fileName);
            $flink=$f->move("https://freeconvertpdf.com/",$fileName);
            return [
                "status"=>true,
                "message"=>"file uploaded to our server and will be expire in one hour",
                "fileName"=>$fName,
                "file_link"=>$flink,
                "action"=>$request->action,
                "filetype"=>$f->getClientOriginalExtension(),
                "endpoint"=>Config::get("docuris.".$request->action)
            ];
        }else{
            return [
                "status"=>false,
                "message"=>"something went wrong",
            ];
        }
    }


}
