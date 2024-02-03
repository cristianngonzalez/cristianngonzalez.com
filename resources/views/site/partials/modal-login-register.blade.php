<div class="modal fade" id="modal-login-register" tabindex="-1" aria-labelledby="modal-login-register" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="container mt-4 mb-4">

                <div class="row">
                    <div class="col-6" id="btn-modal-register">
                        <h4 class="text-center">Register</h4>
                    </div>
                    <div class="col-6" id="btn-modal-login">
                        <h4 class="text-center">Login</h4>
                    </div>
                </div>

                <!--Register Form-------------------------------->
                <form id="modal-register-form" class="form-container" action="./contact/contact-process.php" method="post" accept-charset="utf-8" novalidate="novalidate">
                    <div class="row mt-4">

                        
                        <div class="col-12 mt-3">
                            <input type="email" id="name" class="tb-my-input" name="name" tabindex="2" placeholder="Your Name" value="" aria-required="true" required="">                  
                        </div>

                        <div class="col-12 mt-3">
                            <input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Email Address" value="" aria-required="true" required="">                  
                        </div>
                        
                        <div class="col-12 mt-3">
                            <input type="password" id="name" class="tb-my-input" name="password" tabindex="1" placeholder="Password" value="" aria-required="true" required="">                    
                        </div>
                        <div class="col-12 mt-3">
                            <input type="password" id="name" class="tb-my-input" name="repeat-password" tabindex="1" placeholder="Confirm Password" value="" aria-required="true" required="">                    
                        </div>
                        
                        <div class="col-12 mt-3">
                            <button name="submit" type="submit" id="comment-reply" class="sc-button style letter style-2"><span>Register</span></button>
                        </div>

                    </div>
                </form>
                <!--End Register Form-------------------------------->

                <!--Login Form-------------------------------->
                <form >
                    
                </form>



                <form method="POST" action="{{ route('login') }}" id="modal-login-form" style="display: none;" class="form-container" accept-charset="utf-8" novalidate="novalidate">
                    @csrf

                    <div class="row mt-4">

                        <div class="col-12">
                            <input id="email" type="email" class="tb-my-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="2" placeholder="Email Address" aria-required="true" required="" autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror             
                        </div>
                        <div class="col-12 mt-3">
                            <input id="password" type="password" class="tb-my-input @error('password') is-invalid @enderror" name="password" placeholder="Password" tabindex="1" aria-required="true" required="" autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-6 mt-3">
                                <div class="btn-check">
                                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Remember Me</label>
                                </div>
                        </div>
                        <div class="col-6 mt-3">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit"  class="sc-button style letter style-2"><span>{{ __('Login') }}</span> </button>
                        </div>
                        
                    </div>






                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            

                           
                        </div>
                    </div>
                </form>
                <!--End Login Form-------------------------------->

            </div>

        </div>
    </div>
</div>


  <style>
    #modal-login-register .modal-content{
      background: var(--color-4);
    }
  </style>


<script>

    $('#btn-modal-login').click(() => {
        $('#modal-login-form').css('display' , 'inline');
        $('#modal-register-form').css('display' , 'none');
    });

    $('#btn-modal-register').click(() => {
        $('#modal-register-form').css('display' , 'inline');
        $('#modal-login-form').css('display' , 'none');
    });

</script>