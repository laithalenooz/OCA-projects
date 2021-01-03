@extends('layout.dashboardmain')

@section('content')

    <div class="col-md-10 mx-auto">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Controls Types</h5>
                <form method="post" action="/admin/user_update" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group"><label for="firstName" class="">First Name</label><input name="firstName" id="examplefirstName" placeholder="Enter First Name" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label for="lastName" class="">Last Name</label><input name="lastName" id="examplelastName" placeholder="Enter Last Name" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label for="email" class="">Email</label><input name="email" id="exampleEmail" placeholder="Enter Email" type="email" class="form-control"></div>
                    <div class="position-relative form-group"><label for="bio" class="">Bio</label><textarea name="bio" id="examplebio" class="form-control"></textarea></div>
                    <div class="position-relative form-group"><label for="image" class="">Upload Image</label><input name="image" id="exampleImage" type="file" class="form-control-file">
                    </div>
                    <button type="submit" class="mt-1 btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
