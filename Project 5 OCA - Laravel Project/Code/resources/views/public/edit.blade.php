@extends('layout.publicmain')

@section('content')

    <section class="login-page-wrap padding-top-80 padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-8">
                    <div class="login-box-layout1">
                        <div class="section-heading heading-dark">
                            <h2 class="item-heading">Update Information</h2>
                        </div>
                        <form class="login-form" method="post" action="/user/{{$user->id}}/update" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="firstName" class="mb-3">First Name</label>
                                    <input class="main-input-box" type="text" value="{{ $user->firstName }}" placeholder="Enter your first name" name="firstName" />
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="mb-3">Last Name</label>
                                    <input class="main-input-box" type="text" name="lastName"  value="{{ $user->lastName }}" placeholder="Enter your last name" />
                                </div>
                                <div class="col-md-6">
                                    <label for="bio" class="mb-3">Bio</label>
                                    <input class="main-input-box" type="text" name="bio"  value="{{ $user->bio }}" placeholder="Enter your bio" />
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="mb-3">Email</label>
                                    <input class="main-input-box" type="email" name="email"  value="{{ $user->email }}" placeholder="Enter your Email" />
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="mb-3">Password</label>
                                    <input class="main-input-box" name="password" type="password" placeholder="" />
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <label for="image" class="mb-3">Image</label>
                                    <input class="main-input-box" type="file" name="image"  value="{{ $user->image }}" />
                                </div>
                            <div class="btn-area">
                                <button class="btn-fill btn-primary" type="submit" value="Update">Update<i class="flaticon-next"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
