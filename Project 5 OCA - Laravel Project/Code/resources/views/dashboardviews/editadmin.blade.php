@extends('layout.dashboardmain')

@section('content')
<div class="col-md-10 mx-auto">
    <div class="main-card mb-3 card">
       <div class="card-body"><h5 class="card-title">Update Admin</h5>
            <form action="update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10"><input name="name" id="examplename" placeholder="Enter Your Full Name " type="text" class="form-control" value="{{$admin->name}}"></div>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="Enter Your Email" type="email" class="form-control"value="{{$admin->email}}"></div>
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="Enter Your Password" type="password" class="form-control"value="{{$admin->password}}"></div>
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                    <div class="col-sm-10"><select name="is_super_admin" id="exampleSelect" class="form-control"><option value="0">Admin</option>
                        <option value="1">Super Admin</option></select></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label"value="{{$admin->image}}">File</label>
                    <div class="col-sm-10"><input name="image" id="exampleFile" type="file" class="form-control-file">
                    </div>
                </div>
                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-secondary" name="submit" value="Submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
 </div>

@endsection