<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css">


</head>

<body>


    @guest
        @php
            header("Location: " . URL::to('/'), true, 302);    exit();
        @endphp
    @else
        @if(Auth::user()->admin)
            <aside class="sidebar pos-absolute z-2"
                data-role="sidebar"
                data-toggle="#sidebar-toggle-4"
                id="sb4"
                data-shift=".shifted-content-2"
                data-static-shift=".shifted-content-2"
                data-static="md">
                <div class="sidebar-header" data-image="images/sb-bg-1.jpg">
                    <div class="avatar">
                        <img data-role="gravatar" data-email="sergey@pimenov.com.ua">
                    </div>
                    <span class="title fg-dark">{{Auth::user()->name}}</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>    
                    <a href="" class="subtitle fg-dark"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </div>
                <ul class="sidebar-menu">
                    <li class="group-title">Blog</li>
                        <li><a href="{{route('admin.blogs')}}"><span class="mif-search icon"></span>Search blog</a></li>
                        <li><a href="{{route('admin.blogs.new')}}"><span class="mif-add icon"></span>New blog</a></li>
                    <li class="divider"></li>
                    <li class="group-title">Messages</li>
                        <li><a href="{{route('admin.messages')}}"><span class="mif-envelop icon"></span>All Messages</a></li>
                    <li class="divider"></li>
                    <li class="group-title">Users</li>
                        <li><a href="{{route('admin.users')}}"><span class="mif-users icon"></span>Manage users</a></li>
                    <li class="divider"></li>
                </ul>
            </aside>
        
            <!--Content--------------------------------------------------->
            <div class="shifted-content-2 h-100 p-ab">
                <div class="appbar pos-absolute bg-red z-1" data-role="appbar">
                    <button class="app-bar-item c-pointer" id="sidebar-toggle-4">
                        <span class="mif-menu fg-white"></span>
                    </button>
                </div>

                @yield('content')

            </div>
            <!--End Content--------------------------------------------------->

            <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>

        @else
            <h1>Necesitas ser administrador idiota</h1>
        @endif
    @endguest
    

</body>
</html>