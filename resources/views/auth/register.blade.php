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
                                <h3>{{ __('Register') }}</h3>
                            </div>
                        </div>
                        <form id="create-item-1" method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <div class="col-12 mt-3">
                                <label for="name" >{{ __('Name') }}</label>      
                                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 mt-3">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 mt-3">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" value="{{ old('email') }}" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="col-12 mt-3">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="@error('password') is-invalid @enderror" value="{{ old('email') }}" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="sc-button style letter style-2">
                                    {{ __('Register') }}
                                </button>
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
