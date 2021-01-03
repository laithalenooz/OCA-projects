@extends('layout.dashboardmain')

@section('content')

    <div class="col-lg-10 mx-auto">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Users Table</h5>
                {{--<a href="/admin/add_user" class="float-right"><i class="fa fa-fw" aria-hidden="true"></i></a>--}}
                <table class="mb-0 table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Bio</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($x as $value)
                    <tr>
                        <th>{{$value->id}}</th>
                        <td>{{$value->firstName}}</td>
                        <td>{{$value->lastName}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->bio}}</td>
                        <td><a href="/admin/user_delete/{{ $value->id }}" class="text-decoration-none text-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


@endsection
