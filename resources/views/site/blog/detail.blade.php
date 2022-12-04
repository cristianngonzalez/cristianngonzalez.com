@extends('site.index')
@section('title', 'Home ')

@section('content')

<!-- page title -->
<section class="fl-page-title">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-inner flex">
                    <div class="page-title-heading">
                        <h2 class="heading">{{$blog->title}}</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>{{$blog->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="tf-section post-details" style="padding: 100px 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <article class="blog-details">
                    <div class="post-media">
                        <img src="{{env('ASSETS_URL')}}assets/images/post/post-detail-1.jpg" alt="">
                    </div>
                    <div class="post-content">
                        <h1 class="post-title">{{$blog->title}}</h1>
                        
                        {!! $blog->article !!}


                    </div>
                    
                    
                </article>
                <div class="post-details">
                    
                    <div class="details-right">
                        <div class="wg-title style-2">
                            Share Post
                        </div>
                        <div class="widget-social style-3">
                            <ul>
                                <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="post-author style-2">
                    <div class="avatar">
                        <img src="assets/images/avatar/avt-12.jpg" alt="">
                    </div>
                    <div class="content">
                        <h4><a href="#">Cristian N Gonzalez</a></h4>
                        <div class="job">Web Developer</div>
                        <p>Preparing biography Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit, rem, aliquam reprehenderit cumque vitae ipsum deserunt laborum architecto voluptas neque est quos dolorum accusantium! Ducimus quisquam a iusto esse.</p>
                        <div class="widget-social style-4">
                            <ul>
                                <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
                <div class="wg-post-comments">
                    <div class="wg-title">
                        Leave a Reply
                    </div>
                    <div class="desc">We’re Ready to Help Your Buisness</div>
                    <form method="post" id="contactform" class="comment-form form-submit"
                        action="./contact/contact-process.php" accept-charset="utf-8"
                        novalidate="novalidate">
                        <div class="text-wrap clearfix">
                            <fieldset class="name-wrap">
                                <input type="text" id="name" class="tb-my-input" name="name" tabindex="1"
                                    placeholder="Full Name" value="" size="32" aria-required="true"
                                    required="">
                            </fieldset>
                            <fieldset class="email-wrap">
                                <input type="email" id="email" class="tb-my-input" name="email" tabindex="2"
                                    placeholder="Email Address" value="" size="32" aria-required="true"
                                    required="">
                            </fieldset>
                        </div>
                        <fieldset class="message-wrap">
                            <textarea id="comment-message" name="message" tabindex="4"
                                placeholder="Write Message" aria-required="true"></textarea>
                        </fieldset>
                        <button name="submit" type="submit" id="comment-reply"
                            class="sc-button style letter style-2"><span>Send Reply</span> </button>
                    </form>
                </div>
            </div>


            
        </div>
    </div>
</div>

@endsection