

<section class="new-letter">
    <div class="container">

        <div class="new-letter-inner style-2 flex">
            <div class="new-letter-content">
                <h3 class="heading">Newsletters</h3>
                <p class="sub-heading">Subscribe to receive news about web development</p>
            </div>
            <div class="new-letter-img">
                <div class="form-subcribe">
                    <form id="subscribe-form"  action="{{route('subscription.create')}}" method="POST" accept-charset="utf-8" class="form-submit">
                        @csrf
                        @method('POST')
                        <input name="email" value="" class="email" type="email" placeholder="Enter Email Address" required="">
                        <button name="submit" type="submit" id="submit"  class="sc-button"><span>Subscribe</span> </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@if(isset($subscription))
    <script>
        setTimeout(() => {
            swal(`Thank you!`, "You are subscribe now!", "success");
        }, 2000);
    </script>
@endif




<footer id="footer" class="clearfix bg-style ft-home-1">
    <div class="container">
        <div class="row justify-content-md-between justify-content-center">
            <div class="col-lg-3 col-md-6 col-12">
                
                <div class="row justify-content-md-start justify-content-center text-md-left text-center">
                    <div class="widget widget-logo">
                        <div class="logo-footer" id="logo-footer">
                            <a href="index.html">
                                <img id="logo_footer" src="{{env('ASSETS_URL')}}assets/images/logo/logo_dark.png" alt="cristianngonzalez" width="151" height="45" data-retina="assets/images/logo/logo_dark@2x.png" data-width="151" data-height="45">
                            </a>
                        </div>
                        <p class="sub-widget-logo"></p>
                        
                        <!------------------------------------------------------------------------------------------------------>
                        <div class="col-12">
                            <div class="row justify-content-md-start justify-content-center">
                                <div class="col-auto">
                                    <a href="https://www.facebook.com/cristianngonzalezok" class="social-link-footer" target="_blank" class="active"><i class="bi bi-facebook"></i></a>
                                </div>
                                <div class="col-auto">
                                    <a href="https://github.com/cristianngonzalez/cristianngonzalez.com" class="social-link-footer" target="_blank" class="active"><i class="bi bi-github"></i></a>
                                </div>
                                <div class="col-auto">
                                    <a href="https://www.linkedin.com/in/cristianngonzalez/" class="social-link-footer" target="_blank" class="active"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <div class="col-auto">
                                    <a href="https://www.youtube.com/channel/UCTfVTTAkvF7KF4CF7U64ORQ" class="social-link-footer" target="_blank" class="active"><i class="bi bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------->

                    </div>
                </div>
                
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                <div class="widget widget-menu menu-marketplace text-md-left text-center">
                    <h5 class="title-widget">Services</h5>
                    <ul>
                        <li><a href="#">Mobile apps</a></li>
                        <li><a href="#">Web apps</a></li>
                        <li><a href="#">Backend</a></li>
                        <li><a href="#">Data Science</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-------------------------------------------------------------------------------->






<!-- Footer -->
<footer class="bg-primary text-white text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5>Cristian N Gonzalez</h5>
          <p>
            Web and aplications development and dataminer.
          </p>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Enlaces</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Enlace 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Enlace 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Enlace 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Enlace 4</a>
            </li>
          </ul>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contacto</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Derechos de autor -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Derechos Reservados:
      <a class="text-white" href="https://tusitio.com/">tusitio.com</a>
    </div>
  </footer>