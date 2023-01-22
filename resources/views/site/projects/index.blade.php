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
                            <p>Dollar Blue Tool es una herramienta versatil ideal para intercambiantes de divisas, puede calcular divisas, buscar tiendas y cotizaciones en tiempo real.</p>
                            <p>Aplicacion construida con <strong>Ionic 5</strong>, <strong>Angular 8</strong>, con estetica basada en <strong>Material Design</strong>.</p>
                            

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
                            <p>Cristal Period Table es una aplicacion web que juega con un estilo de transparencias construida con <strong>ReactJS</strong> y un fork de <strong>Boostrap</strong>. En Cristal Periodic Table los usuarios pueden filtrar entre los elementos, para estos filtros me he ayudado de las librerias de React Hook.</p>
                            

                            <div class="project-info-links-container">

                                <a href="https://cristianngonzalez.github.io/periodic-table/" target="_blank">
                                    <div class="project-info-link project-info-link-webapp">Ir a la aplicacion web.</div>
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
                            <p>Esta es una aplicacion que he hecho para ayudar a algunas personas que me han consultado en fiverr para agregar un link de Whatsapp, por lo que a mi parecer es una tarea sencilla como para que ellos transifieran repositorios y demas tareas. Entonces les construi esta herramienta gratuita para que lo haga de manera rapida y facil. Construida con <strong>VueJS</strong></p>
                            

                            <div class="project-info-links-container">

                                <a href="https://www.socialmaker.link/" target="_blank">
                                    <div class="project-info-link project-info-link-webapp">Ir a la aplicacion web.</div>
                                </a>

                                <a href="https://github.com/cristianngonzalez/whatsappbuttonmaker" target="_blank">
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