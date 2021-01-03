@extends('layout.dashboardmain')

@section('content')

    <div class="col-lg-12 mx-auto">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Posts Table</h5>
                {{--                <a href="/admin/add_user" class="float-right"><i class="fa fa-fw" aria-hidden="true"></i></a>--}}
                <table class="mb-0 table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Cat_name</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Recipe</th>
                        <th>Cooking Time</th>
                        <th>Preparation Time</th>
                        <th>Serving People</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($y as $value)
                        <tr>
                            <th>{{$value->id}}</th>
                            <th>{{$value->category->cat_name}}</th>
                            <td>{{$value->title}}</td>
                            <td>{{$value->description}}</td>
                            <td>{{$value->recipe}}</td>
                            <td>{{$value->cooking_time}}</td>
                            <td>{{$value->preparation_time}}</td>
                            <td>{{$value->serving_people}}</td>
                            <td><a href="/admin/post_delete/{{ $value->id }}" class="text-decoration-none btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
