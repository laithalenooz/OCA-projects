@extends('layout.dashboardmain')

@section('content')
<div class="col-md-8 mx-auto">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Manage maria</h5>
            <form action="../admin/categories" method="post" enctype="multipart/form-data">
                @csrf
                <div class="position-relative row form-group"><label for="exampleEmail"
                        class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-10"><input name="cat_name" id="exampleEmail" placeholder="Name" type="text"
                            class="form-control" value="{{old('cat_name')}}"></div>
                </div>
                @error('cat_name')
                <div>
                    <p style="color: red;font-size:0.7rem">{{$message}}</p>
                </div>
                @enderror

                <div class="position-relative row form-group"><label for="exampleFile"
                        class="col-sm-2 col-form-label">Category Image</label>
                    <div class="col-sm-10"><input name="cat_image" id="exampleFile" type="file"
                            class="form-control-file">

                    </div>
                </div>
                @error('cat_image')
                <div>
                    <p style="color: red;font-size:0.7rem">{{$message}}</p>
                </div>
                @enderror


                <div class="position-relative row form-check">
                    <div class="col-sm-10 ">
                        <button class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">categories</h5>
            @if(isset($all_category))
            <table class="mb-0 table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Category Image</th>
                        <th>Edite</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($all_category as $key => $input)
                    <tr>
                        <th scope="row">{{$input['id']}}</th>
                        <td>{{$input['cat_name']}}</td>
                        <td><img src='{{asset("/image/categories/$input->cat_image")}}' style="width: 80px;height:80px">
                        </td>
                        <td><a href="../admin/edit/{{$input['id']}}"><button type="button"
                                    class="btn btn-primary">Edit</button></a></td>
                        <td><a href="../admin/categories/{{$input['id']}}"><button type="button"
                                    class="btn btn-danger">delete</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

</div>

@endsection
