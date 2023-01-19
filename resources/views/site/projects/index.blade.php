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

                            

                            <div class="project-info-links-container">

                                <a href="" class="play-store-link"></a>
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
        }

        

</style>

@endsection