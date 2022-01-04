<?php

namespace App\Http\Controllers\frontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
