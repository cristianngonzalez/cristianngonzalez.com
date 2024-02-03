

<!--Newsletter form-->
    <div class="container-fluid bg-warning">
        <div class="row justify-content-center">
            <div class="col-md-9 mt-4 mb-4 p-4 rounded-5">
                <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                <form action="">
                    <div class="mb-3">
                        
                        <form action="{{route('subscription.create')}}" method="POST" accept-charset="utf-8" class="form-submit" >
                            @csrf
                            @method('POST')
                            <div class="input-group mb-3">
                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="emailHelp">
                              <button type="submit" name="submit" id="submit" class="btn btn-primary" id="button-addon2">Subscribe</button> 
                            </div>
                        </form>
                        

                        <div id="emailHelp" class="form-text">We will never share your email with anyone else.</div>

                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Newsletter form-->


    @if(isset($subscription))
    <script>
        setTimeout(() => {
            swal(`Thank you!`, "You are subscribe now!", "success");
        }, 2000);
    </script>
@endif


<!-- Footer -->
<footer class="bg-primary text-white text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <span><img id="logo_footer" src="{{env('ASSETS_URL')}}assets/images/logo/logo_dark.png" alt="cristianngonzalez" width="151" height="45" data-retina="assets/images/logo/logo_dark@2x.png" data-width="151" data-height="45"></span>
          <p>
            Web and aplications development and dataminer.
          </p>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Enlaces</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">About</a>
            </li>
            <li>
              <a href="#!" class="text-white">Contact</a>
            </li>
            <li>
              <a href="#!" class="text-white">Projects</a>
            </li>
            <li>
              <a href="#!" class="text-white">Courses</a>
            </li>
          </ul>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contacto</h5>

          <ul class="list-unstyled">
            <li>
              <a href="https://www.linkedin.com/in/cristianngonzalez/" target="_blank" class="text-white"><i class="bi bi-linkedin"></i> Linkedin</a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCTfVTTAkvF7KF4CF7U64ORQ" class="text-white"><i class="bi bi-youtube"></i> YouTube</a>
            </li>
            <li>
              <a href="https://github.com/cristianngonzalez/cristianngonzalez.com" target="_blank" class="text-white"><i class="bi bi-github"></i> Github</a>
            </li>
            <li>
              <a href="https://www.facebook.com/cristianngonzalezok" target="_blank" class="text-white"><i class="bi bi-facebook"></i> Facebook</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Derechos de autor -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © {{date('Y')}} Derechos Reservados:
      <a class="text-white" href="{{url('/')}}">www.cristianngonzalez.com</a>
    </div>
</footer>