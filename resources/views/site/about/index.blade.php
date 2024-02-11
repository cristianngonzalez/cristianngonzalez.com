@extends('layouts.site')
@section('title', 'Home ')

@section('content')


<div class="container">
    <div class="row mt-5">
        <div class="col-md-5 col-sm-4">
            <img class="w-100" src="{{env('ASSETS_URL')}}assets/images/avatar/profile.png" alt="">
        </div>
        <div class="col-md-7 col-sm-8">
            <h1><a href="#">Cristian N. Gonzalez</a></h1>
            <div class="job">Web developer</div>
            <p>I am a technology enthusiast, since I started my working career at the age of 18. I have gone through various work areas, I must tell you that my career did not begin in the world of software development, but rather my Master of Works title gave me the opportunity to work with CAD plan drawings. Little by little, that took me to vector illustration moving on to video animations. That fueled my curiosity so that in 2019 I started self-taught at first to dedicate myself to the world of frontend web development, until a very short time later I went through full stack web development.</p>
            <ul>
                <li><a href="https://www.facebook.com/cristianngonzalezok" target="_blank"><i class="bi bi-facebook"></i> Facebook</a></li>
                <li><a href="www.instagram.com/cristianngonzalez_" target="_blank"><i class="bi bi-instagram"></i></a> Instagram</li>
                <li><a href="https://www.linkedin.com/in/cristianngonzalez/" target="_blank"><i class="bi bi-linkedin"></i> Linkedin</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12"> 
            <h2>Technologies I use</h2>
            <p>In this time I have been able to learn and use some popular technologies in various web or web related projects.</p>
        </div>

        <div class="col-md-3 mt-2 mb-2">
            <div class="card">
                <img class="card-img-top" src="{{env('ASSETS_URL')}}assets/images/icon/icon-1.svg" alt="">
                <div class="card-body">
                    <h3 class="card-title">React</h3>
                    <p class="card-text">React is a JavaScript frontend framework for building complex applications in a simpler and more scalable way.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-2 mb-2">
            <div class="card">
                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-2.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Angular</h3>
                    <p class="card-text">Angular is a JavaScript frontend framework for building complex applications in a simpler and more scalable way.</p>
                </div>
                
            </div>
        </div>


        <div class="col-md-3 mt-2 mb-2">
            <div class="card">
                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-3.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Vue</h3>
                    <p class="card-text">Vue is a JavaScript frontend framework for building complex applications in a simpler and more scalable way.</p>
                </div>
            </div>
        </div>

      

        <div class="col-md-3 mt-2 mb-1">
            <div class="card">
                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-4.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">WebGL & Unity</h3>
                    <p class="card-text">Unity is the most popular graphic engine, this engine allows you to create very powerful graphic applications and export them to the web and other devices.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-2 mb-2">
            <div class="card">
                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-5.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Laravel</h3>
                    <p class="card-text">Laravel is a Php framework for building backends for web applications. Laravel is based on the Symphony framework.</p>
                </div>
            </div>
        </div>


        <div class="col-md-3 mt-2 mb-2">
            <div class="card">
                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-6.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">NodeJS</h3>
                    <p class="card-text">Nodejs is a JavaScript runtime built on Chrome's V8 JavaScript engine. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mt-2 mb-2">
            <div class="card">
                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-7.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Wordpress</h3>
                    <p class="card-text">Wordpress is the most popular cms, the vast majority of the world's websites use it. It has extensive documentation and tools created by third parties.</p>
                </div>
            </div>
        </div>
                    
        <div class="col-md-3 mt-2 mb-2">
            <div class="card">
                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-8.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">AdobeXD, Figma and Zeplin</h3>
                    <p class="card-text">Adobe xd and figma are used to create and design application sketches, I am not a designer but in this time I have had to work with this.</p>
                </div>
            </div>
        </div>

    
     

        <div class="col-md-3 mt-2 mb-2">
            <div class="card">
                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-9.svg" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title">Electron & Ionic</h3>
                    <p class="card-text">Ionic builds hybrid apps compatible with IOS, Android, Windows and Web. Ionic uses web standards (html, css, JavaScript)</p>
                </div>
            </div>
        </div>


    </div>

</div>





@endsection
