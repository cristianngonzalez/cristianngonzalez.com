<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
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

    <script src="{{env('ASSETS_URL')}}assets/js/jquery.min.js"></script>

</head>

<body class="body header-fixed is_dark">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">


            <header id="header_main" class="header_1 js-header">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div id="site-header-inner" class="flex justify-content-between">
                                
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner">
                                        <a href="{{url('/')}}" rel="home" class="main-logo">
                                            <img id="logo_header" src="{{env('ASSETS_URL')}}assets/images/logo/logo_dark.png" alt="cristianngonzalez.com" width="151" height="45" data-retina="{{env('ASSETS_URL')}}assets/images/logo/logo_dark@2x.png" data-width="151" data-height="45">
                                        </a>
                                    </div>
                                </div>

                                <div id="site-menu">
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class="menu-item current-item">
                                                <a href="{{url('/')}}">Home</a>
                                            </li>

                                            <li class="menu-item ">
                                                <a href="contact.html" data-toggle="modal" data-target="#contact-modal">Contact</a>
                                            </li>

                                            <li class="menu-item ">
                                                <a href="contact.html" data-toggle="modal" data-target="#contact-modal">About me</a>
                                            </li>

                                            <li class="menu-item">
                                                <a href=""  data-toggle="modal" data-target="#modal-login-register">Login</a>
                                            </li>

                                        </ul>
                                    </nav><!-- /#main-nav -->
                                </div>

                                <div class="mode_switcher">
                                    <h6><span>Dark Mode</span> <strong>Activate</strong></h6>
                                    <a href="#" class="light d-flex align-items-center">
                                        <img src="assets/images/icon/sun.png" alt="">
                                    </a>
                                    <a href="#" class="dark d-flex align-items-center is_active">
                                        <img id="moon_dark" src="assets/images/icon/moon.png" alt="">
                                    </a>
                                </div>

                                


                                <div class="mobile-button"><span></span></div><!-- /.mobile-button -->

                                
                            </div>
                        </div>
                    </div>
                </div>

            </header>


            @include('site.partials.modal-contact')

            @include('site.partials.modal-login-register')


