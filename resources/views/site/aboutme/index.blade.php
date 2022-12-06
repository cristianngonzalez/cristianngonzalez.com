@extends('site.index')
@section('title', 'Home ')

@section('content')






    <div class="container">



        <!----------------------------------------------------------------------------------------------------------------------------------------->
        <!--Our tecnologies-->
        <section class="tf-section connect-wallet">
            <div class="container">

                <div class="post-author style-2">
                    <div class="avatar">
                        <img src="assets/images/avatar/avt-12.jpg" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Cristian N. Gonzalez</a></h4>
                        <div class="job">Web developer</div>
                        <p>I am a technology enthusiast, since I started my working career at the age of 18. I have gone through various work areas, I must tell you that my career did not begin in the world of software development, but rather my Master of Works title gave me the opportunity to work with CAD plan drawings. Little by little, that took me to vector illustration moving on to video animations. That fueled my curiosity so that in 2019 I started self-taught at first to dedicate myself to the world of frontend web development, until a very short time later I went through full stack web development.</p>
                        
                        <div class="widget-social style-4">
                            <ul>
                                <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="sc-heading">
                            <h3>Technologies I use</h3>
                            <p class="desc">In this time I have been able to learn and use some popular technologies in various web or web related projects.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-1.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">React</a></h4>
                                <p>React is a JavaScript frontend framework for building complex applications in a simpler and more scalable way.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-2.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">Angular</a></h4>
                                <p>Angular is a JavaScript frontend framework for building complex applications in a simpler and more scalable way.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-3.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">Vue</a></h4>
                                <p>Vue is a JavaScript frontend framework for building complex applications in a simpler and more scalable way.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-4.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">WebGL & Unity</a></h4>
                                <p>Unity is the most popular graphic engine, this engine allows you to create very powerful graphic applications and export them to the web and other devices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-5.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">Laravel</a></h4>
                                <p>Laravel is a Php framework for building backends for web applications. Laravel is based on the Symphony framework.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-6.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">NodeJS</a></h4>
                                <p>When you use nodejs you are using js but outside of the browser, nodejs is used to create server applications. In addition to js we can also create libraries with c++ so we can increase its performance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet mg-bt-0">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-7.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">Wordpress</a></h4>
                                <p>Wordpress is the most popular cms, the vast majority of the world's websites use it. It has extensive documentation and tools created by third parties.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet mg-bt-0">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-8.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">AdobeXD & Figma</a></h4>
                                <p>Adobe xd and figma are used to create and design application sketches, I am not a designer but in this time I have had to work with this.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sc-wallet mg-bt-0">
                            <div class="icon">
                                <img src="{{env('ASSETS_URL')}}assets/images/icon/icon-9.svg" alt="">
                            </div>
                            <div class="content">
                                <h4><a href="#">Electron & Ionic</a></h4>
                                <p>Ionic builds hybrid apps compatible with IOS, Android, Windows and Web. Ionic uses web standards (html, css, JavaScript)</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!--End Our tecnologies-->
        <!------------------------------------------------------------------------------------------------------------------------------------------>

    </div>



@endsection
