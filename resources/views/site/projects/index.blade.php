@extends('site.index')
@section('title', 'Home ')

@section('content')



<div class="tf-section post-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                

                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->
                <div class="wg-post-comments wg-post-project">
                    
                    <div class="row">

                        <div class="col-auto col-project-video">
                            <iframe class="project-iframe-youtube" width="500" height="315" src="https://www.youtube.com/embed/nwVbTEGrM9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                        
                        <div class="col-auto col-project-info">
                            <h1>Dollar Blue Tool</h1>
                            <p>Dollar Blue Tool is a versatile tool ideal for exchanging currencies in Argentina, it can calculate currencies, search for stores and quotes in real time.</p>
                            <p>Application built with <strong>Ionic 5</strong>, <strong>Angular 8</strong>, with styles based on <strong>Material Design</strong>.</p>

                            <div class="project-info-links-container">

                                <a href="https://play.google.com/store/apps/details?id=www.cristiangonzalez.site.dollarbluetool" target="_blank">
                                    <div class="project-info-link project-info-link-play-store"></div>
                                </a>

                                <a href="https://github.com/crisgonzalez94/dolar-blue-tool" target="_blank">
                                    <div class="project-info-link project-info-link-github"></div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->


                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->
                <div class="wg-post-comments wg-post-project">
                    
                    <div class="row">

                        <div class="col-auto col-project-video">
                            <img src="{{env('ASSETS_URL')}}assets/images/projects/periodic-table-1.png" alt="" class="project-iframe-youtube">
                        </div>

                        <div class="col-auto col-project-info">
                            <h1>Cristal Periodic Table</h1>
                            <p>Cristal Period Table is a web application that plays with a transparency style built with <strong>ReactJS</strong> and a fork of <strong>Boostrap</strong>. In Cristal Periodic Table, users can filter between the elements, for these filters I have used the React Hook libraries.</p>
                            

                            <div class="project-info-links-container">

                                <a href="https://cristianngonzalez.github.io/periodic-table/" target="_blank">
                                    <div class="project-info-link project-info-link-webapp">Go to web app.</div>
                                </a>

                                <a href="https://github.com/cristianngonzalez/periodic-table" target="_blank">
                                    <div class="project-info-link project-info-link-github"></div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->

                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->
                <div class="wg-post-comments wg-post-project">
                    
                    <div class="row">

                        <div class="col-auto col-project-video">
                            <img src="{{env('ASSETS_URL')}}assets/images/projects/whatsapp-button-maker.png" alt="" class="project-iframe-youtube">
                        </div>

                        <div class="col-auto col-project-info">
                            <h1>Whatsapp Button Maker</h1>
                            <p>This is an application that I have made to help some people who have consulted me on fiverr to add a WhatsApp link, so in my opinion it is a simple task for them to transfer repositories and other tasks. So I built this free tool for you to do it quickly and easily. Built with <strong>VueJS</strong></p>
                            
                            <div class="project-info-links-container">

                                <a href="https://www.socialmaker.link/" target="_blank">
                                    <div class="project-info-link project-info-link-webapp">Go to web app.</div>
                                </a>

                                <a href="https://github.com/cristianngonzalez/whatsappbuttonmaker" target="_blank">
                                    <div class="project-info-link project-info-link-github"></div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->

                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->
                <div class="wg-post-comments wg-post-project">
                    
                    <div class="row">

                        <div class="col-auto col-project-video">
                            <img src="{{env('ASSETS_URL')}}assets/images/projects/data-mining.png" alt="" class="project-iframe-youtube">
                        </div>

                        <div class="col-auto col-project-info">
                            <h1>ML Data Miner</h1>
                            <p>MercadoLibre is the most popular store in the most south american countries, with this code made in <strong>Python</strong> and <strong>Selenium</strong> you can convert all any product post in a csv file in minutes.</p>
                            <p>To run this code you need install Jupiter notebooks. Contact me for any help. </p>
                            <div class="project-info-links-container">

                                <a href="https://github.com/cristianngonzalez/webscraping_mercadolibre" target="_blank">
                                    <div class="project-info-link project-info-link-github"></div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
                <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////--->
                


            </div>
        </div>
    </div>
</div>




<style>

    .wg-post-project{
        margin-bottom: 20px;
    }

    .col-project-video{
        width: 500px;
    }
    @media (max-width: 991px) {
        .col-project-video{
            width: 100%;
        }
    }

        .col-project-video .project-iframe-youtube{
            border-radius: 20px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        @media(max-width: 767px){
            .col-project-video .project-iframe-youtube{
                width: calc(100% - 40px);
                margin-left: 20px;
            }
        }


    .col-project-info{
        width: calc(100% - 500px);
        padding-left: 10px;
        padding-right: 10px;
    }
    @media (max-width: 991px) {
        .col-project-info{
            width: 100%;
        }
    }
        .col-project-info h1{
            text-align: center;
            font-size: 35px;
        }
        .col-project-info p{
            font-size: 20px;
        }
        .project-info-links-container{
            margin-top: 20px;
        }

        


    .project-info-link{
        height: 60px;
        float: left;
    }
        .project-info-link:first-child{
            margin-right: 10px;
        }

        .project-info-link-play-store{
            width: 204px;
            background-image: url('https://www.cristianngonzalez.com/public/assets/icon/play_store_get.svg');
        }
        .project-info-link-github{
            width: 60px;
            background-image: url('https://www.cristianngonzalez.com/public/assets/icon/github.svg');
        }
        .project-info-link-webapp{
            width: 200px;
            background: red;
            border-radius: 10px;
            padding: 22px;
            text-align: center;
            background: linear-gradient(132.71deg, #6345ED 18.12%, #DC39FC 81.74%);
        }

</style>

@endsection