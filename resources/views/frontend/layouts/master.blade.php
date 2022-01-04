<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="csrf-token" content="xGeoE3PH7ezG3SmNALprFlw8FwLblQGnLLvOoazm">
    <meta name="keywords" content="Pdf to word, Free Pdf editor, Free convert Pdf, Convert Pdf to word, Pdf converter, Online Pdf converter, Online Pdf editor, Pdf to word converter free, Jpg to Pdf converter, Editor Pdf online free">
    <meta name="description" content="Online PDF to Word converter free to convert documents online, Upload your file and transform it into Word in one click. Convert your Doc and Docx right now into Word and PDF formate.">
    <link rel="canonical" href="https://freeconvertpdf.com/"/>
    <title>Online PDF to Word converter Free | Free Convert PDF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/main_roman.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/main_oleg.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/main_grisyuk.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/main_alex.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/media_main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/media_roman.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/media_oleg.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/main_anton.css')}}">
    <link rel="stylesheet" href="{{asset('frontend-assets/freeconvert/css/fixes.css')}}">
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G3WNC97WGK"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-G3WNC97WGK');
    </script>
</head>
<body >
<!-- dani pdf header started -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-10 col-sm-10 col-10">
				<div class="logo">
					<a href="/">
						<?php include('frontend-assets/freeconvert/img/logo.svg'); ?>
					</a>
				</div>
			</div>
			<div class="col-xl-10 col-lg-10 col-md-2 col-sm-2 col-2">
				<div class="burger_menu">
                    <?php include('frontend-assets/freeconvert/img/open-menu.svg'); ?>
                </div>
                @include('frontend.layouts.includes.sidebar')
            </div>
        </div>
    </div>

    <div class="psd-popup login-popup ">
    <div class="login ">
        <div class="login__inner ">
            <div class="login__close ">
                <img src="https://freeconvertpdf.com/freeconvert/img/popup-close.svg " width="21 " height="20 " alt="close ">
            </div>
            <h3 class="login_h ">Login</h3>

            <div class="login__button ">
                <div class="login__button-inner ">
                    <a href="https://freeconvertpdf.com/google-auth " class="login__google " id="loginViaGoogle ">
                        <img src="https://freeconvertpdf.com/freeconvert/img/flat-color-icons_google.svg " alt="google " width="24 "
                             height="25 ">
                        Google
                    </a>
                </div>
                <div class="login__button-inner ">
                    <a href="https://freeconvertpdf.com/facebook-auth " class="login__facebook " id="loginViaFacebook ">
                        <img src="https://freeconvertpdf.com/freeconvert/img/cib_facebook.svg " alt="facebook " width="24 "
                             height="25 ">
                        Facebook
                    </a>
                </div>
            </div>

            <div id="loginSection ">
                <input type="email " class="login__input " name="email " placeholder="Your Email "/>
                <input type="password " class="login__input " name="password " placeholder="Your Password "/>
                <span class="text-danger " role="alert " data-action="default-login-error "></span>
                <a href="# " class="login__enter " id="login ">Login</a>
            </div>

            <div class="login__links ">
                <span><a href="# " class="login__link forgot-password-trigger ">Forgot password?</a></span>
                <span>
                    Don&#039;t have membership?
                    <a href="# " class="login__link sign-up-trigger ">Sign Up!</a>
                </span>
            </div>
        </div>
    </div>
</div>    <div class="psd-popup sign-up-popup ">
    <div class="sign-up ">
        <div class="sign-up__close ">
            <img src="https://freeconvertpdf.com/freeconvert/img/popup-close-small.svg " width="21 " height="20 " alt="close ">
        </div>
        <div class="sign-up__header ">
            <h3 class="sign-up__h ">Sign up</h3>
        </div>
        <div class="sign-up__content ">
            <span class="text-danger " data-field="email "></span>
            <input type="email " class="sign-up__input " name="email " placeholder="Your Email ">
            <span class="text-danger " data-field="password "></span>
            <input type="password " class="sign-up__input " name="password " placeholder="Your Password ">
            <span class="text-danger " data-field="name "></span>
            <input type="text " class="sign-up__input " name="name " placeholder="Your Name ">

            <a href="# " class="sign-up__sign " id="register ">Sign up</a>
        </div>
    </div>
</div>    <div class="psd-popup subscription-purchase-popup ">
    <div class="sign-up " id="stepAccountCredentials ">
        <div class="sign-up__close ">
            <img src="https://freeconvertpdf.com/freeconvert/img/popup-close-small.svg " width="21 " height="20 " alt="close ">
        </div>
        <div class="sign-up__header ">
            <h3 class="sign-up__h ">Purchase <span class="sign-up__period ">1 month</span></h3>
            <h4 class="sign-up__sub-title ">
                The membership for <a href="https://freeconvertpdf.com ">https://freeconvertpdf.com</a>
            </h4>
        </div>
        <div class="sign-up__content ">
            <input type="hidden " name="subscription_plan_id " value=" ">
            <span class="text-danger " data-field="email "></span>
            <input type="email " class="sign-up__input " name="email "
                   value="adzdeveloper@gmail.com " placeholder="Your Email ">
                            <span class="text-danger " data-field="password "></span>
                <input type="password " class="sign-up__input " name="password " placeholder="Your Password ">
                        <div class="sign-up__total ">
                Your total is <span class="sign-up__price ">6,00 USD</span>
            </div>
            <div class="sign-up__then ">
                Then 6,00 USD/month
            </div>
            <a href="# " class="sign-up__sign next-step ">Login</a>
        </div>
    </div>

   
   
  
</div>
    <div class="psd-popup forgot-password-popup ">
    <div class="sign-up ">
        <div class="sign-up__close ">
            <img src="https://freeconvertpdf.com/freeconvert/img/popup-close-small.svg " width="21 " height="20 " alt="close ">
        </div>
        <div class="sign-up__header ">
            <h3 class="sign-up__h ">Reset Password</h3>
        </div>
        <div class="sign-up__content ">
            <span class="text-danger " data-field="email "></span>
            <span class="text-success " data-action="success " style="display: none ">Reset password email was sent</span>
            <input type="email " class="sign-up__input " name="email " placeholder="Your Email ">

            <a href="# " class="sign-up__sign next-step " id="resetPassword ">Reset</a>
        </div>
    </div>
</div>
</header>
<!-- dani pdf header ends here -->

                    @yield("main_content")

<!-- footer -->


@include("frontend.layouts.includes.footer")


<script src="https://www.paypal.com/sdk/js?client-id=ASu1PCaG0Ssa9BILRMbTGKUuEdB3FlgnWGMdnf69qqpovp6HkSRXbdU7DqmvQOedq86F14fGRkwAUS1F"></script>
<script src="https://apis.google.com/js/platform.js"></script>
<script src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs"
        data-app-key="u1dqp3wz58hy30v"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://freeconvertpdf.com/freeconvert/js/jquery.mask.min.js"></script>

<script src="https://freeconvertpdf.com/freeconvert/js/main.js"></script>
<script src="https://freeconvertpdf.com/freeconvert/js/main_roman.js"></script>
<script src="https://freeconvertpdf.com/freeconvert/js/main_oleg.js"></script>
<script src="https://freeconvertpdf.com/freeconvert/js/main_grisyuk.js"></script>
<script>
    var skip_simple_viewer = false;
</script>
<script src="https://freeconvertpdf.com/assets/select2/select2.full.min.js"></script>
<script src="https://freeconvertpdf.com/js/JavaScript.js"></script>
<script src="https://freeconvertpdf.com/js/auth.js"></script>
<script src="https://freeconvertpdf.com/js/subscription-purchase.js"></script>
<script src="https://freeconvertpdf.com/freeconvert/js/jquery.nice-select.min.js"></script>

    <script src="https://freeconvertpdf.com/js/pdftool.js"></script>
    <script src="https://freeconvertpdf.com/libs/pdfjs-dist/build/pdf.js"></script>




<script src="https://freeconvertpdf.com/libs/pdfjs-dist/web/pdf_viewer.js"></script>








<script>
    localStorage.removeItem('uploadedFileUrl');
    localStorage.removeItem('uploadedFileName');
</script>
<script src="https://freeconvertpdf.com/js/pdf-loader.js"></script>

<script src="https://freeconvertpdf.com/js/simpleviewer.js"></script>
<script src="https://freeconvertpdf.com/js/new_viewer.js"></script>
<script type="text/javascript" src="https://freeconvertpdf.com/js/dropbox-chooser.js"></script>
<script type="text/javascript" src="https://freeconvertpdf.com/js/dropbox-saver.js"></script>
<script type="text/javascript" src="https://freeconvertpdf.com/js/google-drive-chooser.js"></script>
<script type="text/javascript" src="https://freeconvertpdf.com/js/google-drive-saver.js"></script>
<script>
    async function createFile2(url, filename, accessToken) {
        let response = await fetch(url, {
            headers: new Headers({
                'Authorization': 'Bearer ' + accessToken,
            }),
        });
        let data = await response.blob();
        let metadata = {type: 'application/pdf'};
        return new File([data], filename, metadata);
    }

    var scripts = [
            {
            script: "https://apis.google.com/js/client.js?onload=handleClientLoad", callback: function () {
                console.log('client.js')
            }, data: false
        },
        {
            script: "https://apis.google.com/js/api.js", callback: function () {
                console.log("api.js");
            }, data: false
        },
        {
            script: "https://www.dropbox.com/static/api/2/dropins.js", callback: function () {
                console.log("dropin.js");
                // }, data: {"data-app-key": "kmnvanr1sm5jlg1"}, id: "dropboxjs"
            }, data: {"data-app-key": "777"}, id: "dropboxjs"
        },
        //{script: "https://apis.google.com/js/client.js?onload=loadPickerCallback", callback: function(){  console.log("client.js"); }, data: false},
        {
            script: "https://apis.google.com/js/platform.js", callback: function () {
                console.log("platform.js");
            }, data: false
        },
            ];

    var loadJS = function (url, implementationCode, location, data = false) {
        var scriptTag = document.createElement('script');
        if (data) {
            $(scriptTag).attr(data);
        }
        scriptTag.src = url;
        if (typeof implementationCode == 'function') {
            scriptTag.onload = implementationCode;
            scriptTag.onreadystatechange = implementationCode;
        }
        location.appendChild(scriptTag);
    };
    //
    $.each(scripts, function (i, script) {
        loadJS(script.script, script.callback, document.body,);

    });
</script>


<script src="https://freeconvertpdf.com/freeconvert/js/main_alex.js"></script>
<script src="https://freeconvertpdf.com/freeconvert/js/equal-heights.js"></script>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
</body>

</html>

@yield("scripts")



