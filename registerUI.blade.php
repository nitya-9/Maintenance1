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
                <div class="card-header">Lecture Room Online Booking - Register</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register2') }}">
                        @csrf
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name')}}" autofocus>
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email')}}" autofocus>
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('userid') ? ' has-error' : '' }}">
                            <label for="userid" class="col-md-4 col-form-label text-md-right">User Id</label>
                            <div class="col-md-6">
                                <input id="userid" type="text" class="form-control" name="userid" value="{{ old('userid')}}" autofocus>
                                <small class="text-danger">{{ $errors->first('userid') }}</small>
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password')}}" autofocus>
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a type="button" class="btn btn-primary" href="{{route('cancelRegLink')}}">
                                    {{ __('Cancel') }}
                                </a>

                            <!-- ???? xtau fungsi apa-->
                            @error('invalidUseridPassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
