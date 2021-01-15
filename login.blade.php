@extends('layouts.master_login')

@section('content')
<div class="content-header">
    <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                font-color: #ffffff;
                height: 100vh;
                margin: 0;
                background-image: url("../image/fsktm-blok.jpg");
            }
        </style>

</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">Lecture Room Online Booking</div>
                <div class="card-body">
                  @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                  @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">User ID</label>
                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control" name="userid" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                        <a class="btn btn-link" href="{{ route('registerLink') }}">
                                    {{ __('Register New User') }}
                                </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
