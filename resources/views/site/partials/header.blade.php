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

                                <li class="menu-item  @if (Request::path() == 'projects') current-item  @endif">
                                    <a href="{{route('projects')}}">Projectos de ejemplo....</a>
                                </li>

                                @guest
                                    <li class="menu-item @if (Request::path() == 'login') current-item  @endif">
                                        <a href="{{route('login')}}">@lang('links.login')</a>  
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