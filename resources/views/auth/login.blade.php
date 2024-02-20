@extends('layouts.site')
@section('title', 'Home ')

@section('content')


<div class="container-fluid">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-md-6 p-4 rounded-5 bg-warning">
            <div class="sc-heading">
                <h1 class="text-center">@lang('links.login')</h1>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">@lang('forms.email')</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" aria-required="true" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div id="emailHelp" class="form-text">@lang('forms.we_will_not_share_your_email_with_anyone')</div>
                </div>

                <!--Password ------------------------------------------------------------------------------->
                <label class="form-label" for="password">@lang('forms.password')</label>
                <div class="input-group mb-3">
                    <input type="password" id="input-password-1" class="form-control @error('password') is-invalid @enderror "  name="password" required autocomplete="current-password">
                    <!--Boton para mostrar contraseña-->
                    <button class="btn btn-primary btn-password-eye" type="button" id="btn-password-eye-1"><i id="bi-password-eye-1" class="bi bi-eye"></i></button>
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                  

                <!--End Password ------------------------------------------------------------------------------->

                <div class="mb-3 form-check">

                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">@lang('forms.remember')</label>
                   

                </div>
                <button type="submit" class="btn btn-primary">@lang('forms.login')</button>
            </form>

            <!-- La funcionalidad de recuperar contraseña todavia no existe
            <div class="col-6 mt-3">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
            </div>
            -->

            <div class="col-6 mt-3">
                <span><a href="{{route('register')}}">@lang('forms.i_am_new_here_register_you_here')</a></span>
            </div>

        </div>
    </div>
</div>


@endsection


