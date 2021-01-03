@extends('layout.publicmain')

@section('content')
    <!-- Login Area Start Here -->
    <section class="login-page-wrap padding-top-80 padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-8">
                    <div class="login-box-layout1">
                        <div class="section-heading heading-dark">
                            <h2 class="item-heading">JOIN FOODACITY!</h2>
                        </div>
                        <form class="login-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mb-3">First Name</label>
                                    <input class="main-input-box" type="text" placeholder="Enter first name" name="firstName" value="{{old('firstName')}}" />
                                    @error('firstName')
                                    <div class="text-danger col-md-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3">Last Name</label>
                                    <input class="main-input-box" type="text" placeholder="Enter last name" name="lastName" value="{{old('lastName')}}"/>
                                    @error('lastName')
                                    <div class="text-danger col-md-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3">Email</label>
                                    <input class="main-input-box" type="text" placeholder="Enter Email" name="email" value="{{old('email')}}"/>
                                    @error('email')
                                    <div class="text-danger col-md-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3">Bio</label>
                                    <input class="main-input-box" type="text" placeholder="Enter bio" name="bio" value="{{old('bio')}}"/>
                                    @error('bio')
                                    <div class="text-danger col-md-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3">Password</label>
                                    <input class="main-input-box" type="password" placeholder="Enter password" name="password" />
                                    @error('password')
                                    <div class="text-danger col-md-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-3">Confirm Password</label>
                                    <input class="main-input-box" type="password" placeholder="Confirm Password" name="password_confirmation" />
                                    @error('password_confirmation')
                                    <div class="text-danger col-md-6" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="btn-area">
                                <button class="btn-fill btn-primary" type="submit">Register<i
                                        class="flaticon-next"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Area End Here -->
@endsection
