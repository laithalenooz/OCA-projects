@extends('layout.dashboardmain')

@section('content')
<div class="col-md-10 mx-auto">
    <div class="main-card mb-3 card">
       <div class="card-body"><h5 class="card-title">Create Admin</h5>
            <form action="manageadmin/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10"><input name="name" id="examplename" placeholder="Enter Your Full Name " type="text" class="form-control"></div>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="Enter Your Email" type="email" class="form-control"></div>
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="Enter Your Password" type="password" class="form-control"></div>
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                    <div class="col-sm-10"><select name="is_super_admin" id="exampleSelect" class="form-control"><option value="0">Admin</option>
                        <option value="1">Super Admin</option></select></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10"><input name="image" id="exampleFile" type="file" class="form-control-file">
                    </div>
                </div>
                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-primary" name="submit" value="Submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Admins</h5>
            <table class="table table-bordered table-striped">
          <thead>
            <tr>
                 <th>image</th>
                 <th>Full Name</th>
                 <th>Email</th>
                 <th>Edit</th>
                 <th>Delete</th>

                </tr>
                </thead>
                @foreach($admins as $value)
                <tbody>
                <tr>
                  {{-- <th scope="row">{{$value->manageadmin}}</th> --}}
                  <td><img src="{{ URL::to('/') }}/admin/images/{{ $value->image }}" class="img-thumbnail" width="75"/></td>
                  <td>{{$value->name}}</td>
                  <td>{{$value->email}}</td>
                  <td><a href="/admin/manageadmin/{{$value->id}}/edit"> <button type="button" class="btn btn-primary">Edit</button></a></td>
                  <td><a href="/admin/manageadmin/{{$value->id}}/delete"><button type="button" class="btn btn-danger">Delete</button></a>
                  </td>
                  {{-- <td><a href = 'manageedit/{{$value->id}}'> Update</a></td> --}}
                  {{-- <td><a href="{{ route('manage.admin.edit', $value->id) }}" class="btn btn-warning">Edit</a></td> --}}
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
                </div>
                </div>


@endsection
