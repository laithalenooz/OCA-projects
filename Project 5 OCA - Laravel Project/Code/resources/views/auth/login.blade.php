@extends('layout.publicmain')

@section('content')
<!-- Login Area Start Here -->
<section class="login-page-wrap padding-top-80 padding-bottom-50">
    <div class="container">
        <div class="row gutters-60">
            <div class="col-lg-8">
                <div class="login-box-layout1">
                    <div class="section-heading heading-dark">
                        <h2 class="item-heading">LOGIN FORM</h2>
                    </div>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-3">Email Address</label>
                                <input class="main-input-box" type="text" placeholder="" name="email" />
                                @error('email')
                                <div class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="mb-3">Password</label>
                                <input class="main-input-box" type="password" placeholder="" name="password" />
                                @error('password')
                                <div class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label for="checkbox1">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="btn-area">
                            <button class="btn-fill btn-primary" type="submit">Login<i
                                    class="flaticon-next"></i></button>
                            <a href="{{ route('register') }}" class="btn-fill btn-dark">Create an Account<i
                                    class="flaticon-next"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Area End Here -->
@endsection
