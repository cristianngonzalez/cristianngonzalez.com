




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
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white text-decoration-none">@lang('links.aboutme')</a>
            </li>
            <li>
              <a href="#!" class="text-white text-decoration-none">@lang('links.contact')</a>
            </li>
            <li>
              <a href="#!" class="text-white text-decoration-none">@lang('links.projects')</a>
            </li>
            <li>
              <a href="#!" class="text-white text-decoration-none">@lang('links.courses')</a>
            </li>
          </ul>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact</h5>

          <ul class="list-unstyled">
            <li>
              <a href="https://www.linkedin.com/in/cristianngonzalez/" target="_blank" class="text-white text-decoration-none"><i class="bi bi-linkedin"></i> Linkedin</a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCTfVTTAkvF7KF4CF7U64ORQ" class="text-white text-decoration-none"><i class="bi bi-youtube"></i> YouTube</a>
            </li>
            <li>
              <a href="https://github.com/cristianngonzalez/cristianngonzalez.com" target="_blank" class="text-white text-decoration-none"><i class="bi bi-github"></i> Github</a>
            </li>
            <li>
              <a href="https://www.facebook.com/cristianngonzalezok" target="_blank" class="text-white text-decoration-none"><i class="bi bi-facebook"></i> Facebook</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Derechos de autor -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © {{date('Y')}} Cristian Gonzalez | All rights reserved | Developed by:
      <a class="text-white" href="{{url('/')}}">www.cristianngonzalez.com</a>
    </div>
</footer>