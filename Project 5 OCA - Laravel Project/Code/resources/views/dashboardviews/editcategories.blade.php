@extends('layout.dashboardmain')

@section('content')
<div class="col-md-8 mx-auto">
<div class="main-card mb-3 card">
   <div class="card-body"><h5 class="card-title">Manage maria</h5>
       <form action="" method="post" enctype="multipart/form-data">
       @csrf
     <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Category Name</label>
             <div class="col-sm-10"><input name="cat_name" id="exampleEmail" placeholder="Name" type="text" class="form-control" value="{{$categories['cat_name']}}"></div>
                </div>
                @error('cat_name')
                <div>
                <p style="color: red;font-size:0.7rem">{{$message}}</p>
                </div>
                 @enderror
               
     <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Category Image</label>
      <div class="col-sm-10"><input name="cat_image" id="exampleFile" type="file" class="form-control-file">
                  
         </div>
        </div>
        @error('cat_image')
                <div>
                <p style="color: red;font-size:0.7rem">{{$message}}</p>
                </div>
                 @enderror
                  
       
   <div class="position-relative row form-check">
   <div class="col-sm-10 ">

      <!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
      <input class="btn btn-secondary" type="submit">

    </div>
        </div>
     </form>
  </div>
  </div>
</div>

@endsection