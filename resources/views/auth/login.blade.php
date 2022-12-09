@extends('site.index')
@section('title', 'Home ')

@section('content')


<section class="tf-section login-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-create-item-content">
                    <div class="form-create-item">
                        <div class="sc-heading">
                            <div class="col-12">
                                <h3>{{ __('Login') }}</h3>
                            </div>
                        </div>
                        <form id="create-item-1" method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="col-12 mt-3">
                                <label for="email" >{{ __('Email Address') }}</label>      
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                            <div class="col-12 mt-3">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="col-12 mt-3">
                                <div class="btn-check">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="sc-button style letter style-2">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>



                        </form>
                    </div>
                    <div class="form-background">
                        <img src="{{env('ASSETS_URL')}}assets/images/background/img-login.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


