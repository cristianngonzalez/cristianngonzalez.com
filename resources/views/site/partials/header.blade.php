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
                                            <li class="menu-item  @if (Request::path() == '/' || Request::path() == 'home') current-item  @endif">
                                                <a href="{{url('/')}}">Home</a>
                                            </li>

                                            <li class="menu-item @if (Request::path() == 'contact') current-item  @endif">
                                                <a href="{{route('contact')}}">Contact</a>
                                            </li>

                                            <li class="menu-item  @if (Request::path() == 'aboutme') current-item  @endif">
                                                <a href="{{route('aboutme')}}">About me</a>
                                            </li>

                                            @guest
                                                <li class="menu-item @if (Request::path() == 'login') current-item  @endif">
                                                    <a href="{{route('login')}}">Login</a>  
                                                </li>
                                            @else
                                                <li class="menu-item menu-item-has-children  @if (Request::path() == 'login' || Request::path() == 'signup' || Request::path() == 'profile') current-item  @endif">
                                                    <a href="#">Profile <i class="bi bi-chevron-down"></i></a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item "><a href="blog.html">Settings</a></li>
                                                        <li class="menu-item">
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form>    
                                                            <a href="blog-details.html" 
                                                                onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            @endguest

                                        </ul>
                                    </nav>
                                    <!-- /#main-nav -->
                                </div>

                                <div class="mode_switcher">
                                    <h6><span>Dark Mode</span> <strong>Activate</strong></h6>
                                    <a href="#" class="light d-flex align-items-center">
                                        <img src="{{env('ASSETS_URL')}}assets/images/icon/sun.png" alt="">
                                    </a>
                                    <a href="#" class="dark d-flex align-items-center is_active">
                                        <img id="moon_dark" src="{{env('ASSETS_URL')}}assets/images/icon/moon.png" alt="">
                                    </a>
                                </div>

                                


                                <div class="mobile-button"><span></span></div><!-- /.mobile-button -->

                                
                            </div>
                        </div>
                    </div>
                </div>

            </header>


            @include('site.partials.modal-contact')
