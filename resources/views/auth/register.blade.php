@extends('layouts.site')
@section('title', 'Home ')

@section('content')



<div class="container-fluid">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-md-6 p-4 rounded-5 bg-warning">
            <div class="sc-heading">
                <h1 class="text-center">{{ __('Register') }}</h1>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>      
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">


                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">{{ __('Password') }}</label>
                    <input id="input-password-1" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('email') }}" name="password" required autocomplete="new-password">
                    <button class="btn btn-password-eye" type="button" id="btn-password-eye-1">
                        <i id="bi-password-eye-1" class="bi bi-eye"></i>
                    </button>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="mb-3">
                        <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="input-password-2" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('email') }}" name="password_confirmation" required autocomplete="new-password">
                        <button class="btn btn-password-eye" type="button" id="btn-password-eye-2">
                            <i id="bi-password-eye-2" class="bi bi-eye"></i>
                        </button>
                 
                </div>


                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>

                

            </form>


            <div class="col-12 mt-3">
                <span><a href="{{route('login')}}">I have an account, login here.</a></span>
            </div>

        </div>
    </div>
</div>


@endsection
