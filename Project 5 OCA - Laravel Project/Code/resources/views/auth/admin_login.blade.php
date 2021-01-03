{{-- @extends('layouts.master')

@section('content')

@endsection --}}

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('admin/login/css/login.css') }}">
<!------ Include the above in your HEAD tag ---------->

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post" action="/admin/login/submit">
                @csrf
                <span class="login100-form-title">
                    Admin Login
                </span>
                @if(session()->has('message'))
                <div class="text-danger my-2 mx-3">
                    {{ session()->get('message') }}
                </div>
                @endif
                @error('email')
                <div class="text-danger my-2 mx-3 sm">{{ $message }} *</div>
                @enderror
                <div class="wrap-input100 validate-input" data-validate="Valid email is required">

                    <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                @error('password')
                <div class="text-danger my-2 mx-3">{{ $message }} *</div>
                @enderror
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
