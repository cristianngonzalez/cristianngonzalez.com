@extends('layouts.site')
@section('title', 'Home ')

@section('content')

<!--Top Carousel--------------------------------------------------------->
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{env('ASSETS_URL')}}assets/images/banners/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Backend Development</h5>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{env('ASSETS_URL')}}assets/images/banners/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Frontend Development</h5>
                <p></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{env('ASSETS_URL')}}assets/images/banners/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Scraping and data mining</h5>
                <p></p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--End Top Carousel----------------------------------------------------->

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-12">
            <h2>Videos</h2>
        </div>
    </div>
    <div class="row mb-5 justify-content-center">

        <!--Video--------------------------------------------------------->
        <div class="col-md-4 col-sm-6 mt-1 mb-1">
            <div class="card">
                <iframe src="https://www.youtube.com/embed/Ku5eYEJQowM?si=t9xu4hT3qnEXS4yb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <!--End Video----------------------------------------------------->

        <!--Video--------------------------------------------------------->
        <div class="col-md-4 col-sm-6 mt-1 mb-1">
            <div class="card">
                <iframe src="https://www.youtube.com/embed/Mc45cf0AVJg?si=IezABD2S-c9j33Nr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <!--End Video----------------------------------------------------->

        <!--Video--------------------------------------------------------->
        <div class="col-md-4 col-sm-6 mt-1 mb-1">
            <div class="card">
                <iframe src="https://www.youtube.com/embed/nwVbTEGrM9I?si=MrZo6mH1FdjMPC_Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <!--End Video----------------------------------------------------->

    </div>
</div>


{{-- Blogs se van a guardar para futuro 
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-12">
            <h2>Blogs</h2>
        </div>
    </div>
    <div class="row mb-5 justify-content-center">
        <div class="col-md-4 col-sm-6 mt-1 mb-1">
            <div class="card">
                <img src="https://cdn2.hubspot.net/hubfs/156214/blog/Que%20es%20un%20banner-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title
                    ">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-1 mb-1">
            <div class="card">
                <img src="https://cdn2.hubspot.net/hubfs/156214/blog/Que%20es%20un%20banner-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title
                    ">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-1 mb-1">
            <div class="card">
                <img src="https://cdn2.hubspot.net/hubfs/156214/blog/Que%20es%20un%20banner-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title
                    ">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>  
    </div>
</div> --}}

    
@endsection