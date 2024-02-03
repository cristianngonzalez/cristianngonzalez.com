<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8B0MNXZD93"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8B0MNXZD93');
    </script>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title') | cristianngonzalez.com</title>

    <meta name="author" content="Cristian Nazareno Gonzalez">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{env('ASSETS_URL')}}assets/css/style.css">
    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{env('ASSETS_URL')}}assets/css/responsive.css">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{env('ASSETS_URL')}}assets/icon/Favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/icon/Favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!--Prism show prety sinthax code-->
    <link rel="stylesheet" href="{{env('ASSETS_URL')}}assets/css/prism.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{env('ASSETS_URL')}}assets/js/jquery.min.js"></script>



</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8B0MNXZD93"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8B0MNXZD93');
</script>

<body class="body header-fixed is_dark">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">


           @include('site.partials.header')


            @yield('content')


            @include('site.partials.modal-contact')






            @include('site.partials.footer')

            
            
            <!-- Javascript -->
            <script src="{{env('ASSETS_URL')}}assets/js/jquery.easing.js"></script>
            <script src="{{env('ASSETS_URL')}}assets/js/bootstrap.min.js"></script>
            <script src="{{env('ASSETS_URL')}}assets/js/swiper-bundle.min.js"></script>
            <script src="{{env('ASSETS_URL')}}assets/js/swiper.js"></script>
            
            <script src="{{env('ASSETS_URL')}}assets/js/plugin.js"></script>
            <script src="{{env('ASSETS_URL')}}assets/js/count-down.js"></script>
            <script src="{{env('ASSETS_URL')}}assets/js/shortcodes.js"></script>
            <script src="{{env('ASSETS_URL')}}assets/js/main.js"></script>
            <script src="{{env('ASSETS_URL')}}assets/js/prism.js"></script>
            
            <script src="{{env('ASSETS_URL')}}assets/js/password-eye.js"></script>
            
            
            
            
            
            </body>
            
            </html>