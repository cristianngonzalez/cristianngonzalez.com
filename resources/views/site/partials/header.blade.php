<!----------------------------------------------------------------------------------------------------->
<!--NavBar-->
<nav class="navbar bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
            <img id="logo_header" src="{{env('ASSETS_URL')}}assets/images/logo/logo_dark.png" alt="cristianngonzalez.com" width="85" data-retina="{{env('ASSETS_URL')}}assets/images/logo/logo_dark@2x.png" data-width="151" data-height="45">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (Request::path() == '/' || Request::path() == 'home') active  @endif" aria-current="page" href="{{url('/')}}">@lang('links.home')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @if (Request::path() == 'contact') active  @endif" href="{{route('contact')}}">@lang('links.contact')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  @if (Request::path() == 'about') active  @endif" href="{{route('about')}}">@lang('links.aboutme')</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  @if (Request::path() == 'projects') active  @endif" href="{{route('projects')}}">@lang('links.projects')</a>
                </li>


                <!--Dropdown----------------------------------------------------------------------------->
                <li class="nav-item dropdown">
                
                    @guest
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('links.login') / @lang('links.register')
                        </a>
                        <ul class="dropdown-menu">
                            <!--Divisor-->
                            <!--<li><hr class="dropdown-divider"></li>-->
                            <li><a class="dropdown-item @if (Request::path() == 'login') active  @endif" href="{{route('login')}}">@lang('links.login')</a></li>
                            <li><a class="dropdown-item" href="#">@lang('links.register')</a></li>
                        </ul>
                    @else
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('links.profile')
                        </a>
                        <ul class="dropdown-menu">
                            <!--Divisor-->
                            <!--<li><hr class="dropdown-divider"></li>-->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>    
                            <li><a class="dropdown-item" href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}>@lang('logout')</a></li>
                        </ul>
                    @endguest

                </li>
                <!--End Dropdown----------------------------------------------------------------------------->

            </ul>

            <!--Search Bar (Por ahora no lo programamos, a futuro esta planeada)------------------------------------------->
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
            <!--End Search Bar------------------------------------------------------------------------------------------------>
        </div>
    </div>
</nav>
<!--NavBar-->
<!----------------------------------------------------------------------------------------------------->





