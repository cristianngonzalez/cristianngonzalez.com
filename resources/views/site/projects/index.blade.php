@extends('site.index')
@section('title', 'Home ')

@section('content')



<div class="tf-section post-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <div class="wg-post-comments">
                    
                    <div class="row">

                        <div class="col-auto col-project-video">
                            <iframe class="project-iframe-youtube" width="500" height="315" src="https://www.youtube.com/embed/nwVbTEGrM9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                        <div class="col-auto col-project-info">
                            <h1>Dollar Blue Tool</h1>
                            <p>Dollar Blue Tool es una herramienta versatil ideal para intercambiantes de divisas, puede calcular divisas, buscar tiendas y cotizaciones en tiempo real.</p>
                            <p>Aplicacion construida con <strong>Ionic 6</strong>, <strong>Angular 8</strong>, con estetica basada en <strong>Material Design</strong>.</p>
                            

                            <div class="project-info-links-container">

                                <a href="https://play.google.com/store/apps/details?id=www.cristiangonzalez.site.dollarbluetool" target="_blank">
                                    <div class="project-info-link project-info-link-play-store"></div>
                                </a>

                                <a href="https://play.google.com/store/apps/details?id=www.cristiangonzalez.site.dollarbluetool" target="_blank">
                                    <div class="project-info-link project-info-link-github"></div>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
</div>




<style>
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

</style>

@endsection