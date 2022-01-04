@extends('frontend.layouts.master')
@section("title","home page")
<form action="{{route('convertFile')}}" enctype="multipart/form-data" method="post">
    @csrf
    <input type="file" name="file">
    <input type="submit">
</form>

<script>
    alert("done");
    var docxConverter = require('docx-pdf');
    $("document").ready(function(){
        alert("hehehe");
    })
</script>

@section("main_conten")
<main class="file_not_loaded">
    <section class="section_top before_upload r_upload_section tool_section">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="h30-title title_main">Online PDF Converter</h2>
                <h3 class="sub-title">Easily convert to and from PDF in seconds.</h3>
            </div>
            <div class="downloader" style="padding-bottom:300px">
                <div class="downloader__img">
                    <div style="min-width: 250px;">
                       
                    </div>
                </div>

             

                <!-- test form ends -->

                <!-- uploader -->

                <div class="xxz_zz downloader__upload-wrapper">
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="PoEmRMJfH9OI9GFH0hzVO3R1FlQ1sL0Td1uPgf9D" id="editor_csrf">
                        <div class="downloader__doshed">
                            <input class="user_pdf" type="file" accept="application/pdf">
                            <div class="downloader__upload">
                                <div class="downloader__icon"><img src="https://freeconvertpdf.com/freeconvert/img/doc.svg"></div>
                                <div class="downloader__text"> Upload PDF file </div>
                                <div class="downloader__arrow" id="docSelectBtn">
                                    <img src="https://freeconvertpdf.com/freeconvert/img/arrow-white-down.svg">
                                </div>
                            </div>
                            <div class="downloader__sub-text">or Drop files here</div>
                        </div>
                        <div class="select_wrapper " id="docSelect">
                            <a id="drpbox-chooser" href="#" class="select_item drpbox-chooser">
                            <?php include(public_path('frontend-assets/freeconvert/img/logos_dropbox.svg')) ?>
                                Dropbox
                            </a>
                            <a id="gdrive-chooser" href="#" class="select_item gdrive-chooser">
                                <img src="https://freeconvertpdf.com/freeconvert/img/logos_google-drive.png" alt="">
                                Google Drive
                            </a>
                            <a href="#" class="select_item weburl-chooser">
                                <img src="https://freeconvertpdf.com/freeconvert/img/logo-link.png" alt="">
                                Web Address (URL)
                            </a>
                        </div>
                    </form>
                </div>




                <div class="downloader__img">
                    <div style="min-width: 250px;">
                      
                    </div>
                </div>
            </div>
               <!-- show file section here -->
            <section style="" id="showUploadedFilesSection">
                
                <div class="convert_docs_wrapper" id="pages-pdf">
                    <div class="convert_doc left_doc">
                        <div class="convert_doc_content">
                            <form action="#" enctype="multipart/form-data" method="POST">
                                <input id="addMoreFiles" type="file" accept="application/msword" title="Upload" multiple="multiple" data-scope="task-file" name="file" class="fileupload upload-file-tool">
                            </form>
                            <h4 class="title_convert_doc">Choose file</h4>
                            <div class="icon_add_doc">
                                <img src="https://freeconvertpdf.com/freeconvert/img/icon-add-file.svg" alt="">
                                <div class="icon_add_select" id="docSelectBtn">
                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.76664 0.741665L4.99997 3.975L8.2333 0.741665C8.31046 0.664513 8.40205 0.603313 8.50285 0.561559C8.60365 0.519805 8.71169 0.498314 8.8208 0.498314C8.92991 0.498314 9.03795 0.519805 9.13876 0.561559C9.23956 0.603313 9.33115 0.664513 9.4083 0.741665C9.48546 0.818816 9.54665 0.910408 9.58841 1.01121C9.63016 1.11202 9.65165 1.22006 9.65165 1.32916C9.65165 1.43827 9.63016 1.54631 9.58841 1.64712C9.54665 1.74792 9.48546 1.83951 9.4083 1.91666L5.5833 5.74167C5.50621 5.81892 5.41463 5.88021 5.31382 5.92203C5.21301 5.96384 5.10494 5.98537 4.9958 5.98537C4.88666 5.98537 4.77859 5.96384 4.67778 5.92203C4.57697 5.88021 4.4854 5.81892 4.4083 5.74167L0.583303 1.91666C0.50605 1.83957 0.44476 1.748 0.402942 1.64718C0.361124 1.54637 0.3396 1.4383 0.3396 1.32916C0.3396 1.22002 0.361124 1.11196 0.402942 1.01114C0.44476 0.910333 0.50605 0.818759 0.583303 0.741665C0.908303 0.424998 1.44164 0.416665 1.76664 0.741665Z" fill="#979797"></path>
                                    </svg>
                                </div>
                            </div>
                            <h5 class="sub_title_convert_doc">or drop files here</h5>
                        </div>
                    </div>
                </div>
            

                <div class="btn btn-sm" id="processPdf">
                    <div class="downloader__upload" style="width:auto !important">
                        <div class="downloader__icon">
                            <img src="https://freeconvertpdf.com/freeconvert/img/download_arrow.svg">
                        </div>
                        <div class="downloader__text save-pdf">Process PDF</div>
                        <div class="downloader__arrow"></div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    

    <input type="hidden" name="allUploadedFiles[]" id="allUploadedFiles">
    <!-- uploader ends -->

    <!-- uploaded image  process or add more section -->
  
    <!-- ends add more section -->
    
        
	
</main>


@endsection
@section("scripts")
<script>
    $("document").ready(function(){
        
        
        $("#showUploadedFilesSection").hide();
        $(".user_pdf").on("change",function(){
            if($(this)[0].files.length>0){
                alert("here"+$(this)[0].files);
                // formData.append('file[]', $(this)[0].files); 
                var formData= new FormData();
                formData.append("name","dan11i");
                formData.append("name1","da1ni");
                formData.append("name2","d2ani");
                formData.append("name3","dan23i");
                for (var key in formData) {
                    alert(key);
                    alert(formData[key]);
                    console.log(key, formData[key]);
                    
                }
                // $.ajax({
                //     type:"post",
                //     url:"{{route('sendFilesToServer')}}",
                //     dataType: 'json',
                //     contentType: false,
                //     processData: false,
                //     data:{'formdata':formData},
                //     success:function(data){
                //         console.log(data);
                //     },
                //     error:function(xhr,error,http){
                //         console.log("error");
                //         console.log(xhr);
                //         console.log(xhr.responseText)
                //     }
                // }); 
                // console.log("directFn");
                // var raw=show_uploadedFiles($(this)[0].files);
                // $("#showUploadedFilesSection #pages-pdf").append(raw);
                // $(".downloader").hide();
                // $("#showUploadedFilesSection").show();
            }
        });
        $("#addMoreFiles").on("change",function(){
            alert($(this)[0].files.length);
            if($(this)[0].files.length>0){
                var raw=show_uploadedFiles($(this)[0].files);
                $("#showUploadedFilesSection #pages-pdf").append(raw);
            }
        });
        $("#processPdf").on("click",function(){
            // alert("clikced");
            // console.log(formData.files);
            alert(formData);
            $.ajax({
                type:"post",
                url:"{{route('sendFilesToServer')}}",
                dataType: 'json',
                contentType: false,
                processData: false,
                data:{'formdata':formData},
                success:function(data){
                    console.log(data);
                },
                error:function(xhr,error,http){
                    console.log("error");
                    console.log(xhr);
                    console.log(xhr.responseText)
                }
            }); 
            var file=$(".user_pdf").val();
            // alert(file.files.length);
        });




        function show_uploadedFiles(allFiles){
            
            var output='<div class="convert_doc right_doc image-canvas-li" data-number="0"><div class="convert_doc_content"><div class="download_convert_doc"><img src="https://toppng.com/uploads/preview/pdf-icon-11549528510ilxx4eex38.png" alt=""></div></div><div class="download_icon_doc remove_icon_doc"><a class="remove-uploaded-file" href="#" data-number="0"><img src="frontend-assets/freeconvert/img/close_icon.svg"></a></div><div class="download_icon_doc"><a class="save-image-page" href="#" data-number="0"><img src="frontend-assets/freeconvert/img/download_arrow.svg"></a></div><div class="name_doc"><h6>result (2).docx</h6></div></div>';
            var output= '';
            
    
            $.each(allFiles,function(index,value){
                // formData.append("files[]",value.files);

                alert(value.files);
                var url=URL.createObjectURL(value);
                console.log(url);
                output +='<div class="convert_doc right_doc image-canvas-li" data-number="0"><div class="convert_doc_content"><div class="download_convert_doc"><img src="'+url+'" alt=""></div></div><div class="download_icon_doc remove_icon_doc"><a class="remove-uploaded-file" href="#" data-number="0"><img src="frontend-assets/freeconvert/img/close_icon.svg"></a></div><div class="download_icon_doc"><a class="save-image-page" href="#" data-number="0"><img src="frontend-assets/freeconvert/img/download_arrow.svg"></a></div><div class="name_doc"><h6>'+value.name+'</h6></div></div>';
            });
            return output;
        }

    });
</script>
@endsection