@extends('site.index')
@section('title', 'Home ')

@section('content')


<section class="tf-slider mb-4">
    <div class="swiper-container slider ">
        <div class="swiper-wrapper">
            <div class="swiper-slide wow fadeInUp">
                <div class="slider-item">
                    <div class="overlay"></div>
                    <div class="slider-inner flex home-1">
                        <div class="slider-content">
                            <h1 class="heading">Mobile apps for Android and IOS</h1>
                            <p class="sub-heading">Mobile applications created with web technology converted to native, we can create your app from scratch or take advantage of your current site and expand to the native mobile world.</p>
                            <!--
                            <div class="button-slider">
                                <a href="explore-1.html" class="sc-button btn-bordered-white style letter "><span>Explore More</span></a>
                                <a href="create-item.html" class="sc-button btn-bordered-white style file"><span>Create Now</span></a>
                            </div>
                            -->
                        </div>
                        <div class="slider-img">
                            <div class="img-home-1"><img src="{{env('ASSETS_URL')}}assets/images/slider/img-slider-1.png" alt="Image"></div>
                        </div>
                    </div>
                </div><!-- item-->
            </div>
            <div class="swiper-slide wow fadeInUp">
                <div class="slider-item ">
                    <div class="overlay "></div>
                    <div class="container">
                        <div class="slider-inner style-2 home-1 flex">
                            <div class="slider-content">
                                <h1 class="heading">Frontend development</h1>
                                <p class="sub-heading">Frontend development, we turn any sketch, photoshop or figma into an incredible website. We adapt it to the most popular frontend framework technologies.</p>
                                <!--
                                <div class="button-slider">
                                    <a href="explore-1.html" class="sc-button btn-bordered-white style letter "><span>Explore More</span></a>
                                    <a href="create-item.html" class="sc-button btn-bordered-white style file"><span>Create Now</span></a>
                                </div>
                                -->
                            </div>
                            <div class="slider-img flex">
                                <div class="img-left">
                                    <div class="img-1"><img src="assets/images/slider/img-slider-3.jpg"
                                            alt="Image"></div>
                                    <div class="img-2"><img src="assets/images/slider/img-slider-4.jpg"
                                            alt="Image"></div>

                                </div>
                                <div class="img-right">
                                    <img src="assets/images/slider/img-slider-5.jpg" alt="Image">
                                    <div class="box-avatar flex">
                                        <div class="list-avatar flex">
                                            <img src="assets/images/avatar/avt-8.jpg" alt="Image">
                                            <img src="assets/images/avatar/avt-9.jpg" alt="Image">
                                            <img src="assets/images/avatar/avt-10.jpg" alt="Image">
                                            <img src="assets/images/avatar/avt-11.jpg" alt="Image">
                                        </div>
                                        <div class="icon-plus">
                                            <a href="#"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- item-->
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next btn-slide-next "></div>
        <div class="swiper-button-prev btn-slide-prev"></div>
    </div>
</section>

    
@endsection