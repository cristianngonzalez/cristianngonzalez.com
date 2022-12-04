@extends('site.index')
@section('title', 'Home ')

@section('content')


<section class="fl-page-title">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-inner flex">
                    <div class="page-title-heading">
                        <h2 class="heading">Code blog</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Code blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="tf-section sc-card-blog">
    <div class="container">
        <div class="row">

            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <article class="sc-card-article">
                        <div class="card-media">
                            <a href="blog-details.html"><img src="assets/images/post/post-1.jpg" alt=""></a>
                        </div>
                        <div class="content">
                            <div class="meta-info">
                                <div class="item author">
                                    <a href="author02.html">Cristian N. Gonzalez</a>
                                </div>
                                <div class="item date">25 JAN 2022</div>
                            </div>
                            <div class="text-article">
                                <h5><a href="{{route('blog.detail' , [$blog] )}}">{{$blog->title}}</a></h5>
                            </div>


                            <a href="{{route('blog.detail' , [$blog] )}}" class="sc-button btn-bordered-white style letter"><span>Read More</span></a>

                            
                        </div>
                    </article>
                </div>
            @endforeach
            

            
            <!--
            <div class="col-md-12">
                <div class="wg-themesflat-pagination">
                    <ul>
                        <li><a href="#" class="page-numbers prev active"></a></li>
                        <li><a href="#" class="page-numbers">01</a></li>
                        <li><a href="#" class="page-numbers">02</a></li>
                        <li><a href="#" class="page-numbers current">03</a></li>
                        <li><a href="#" class="page-numbers">04</a></li>
                        <li><a href="#" class="page-numbers next"></a></li>
                    </ul>
                </div>
            </div>
            -->


        </div>
    </div>
</div>


@endsection