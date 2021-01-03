@extends('layout.publicmain')

@section('content')
<!--img/product/product35.jpg-->
<!--{{asset('/image/categories/$input->cat_image')}}-->
<section class="inner-page-banner bg-common" data-bg-image="{{asset('public/img/figure/inner-page-banner1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Recipe Categories</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Categories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- Category Area Start Here -->
        <section class="category-page-wrap padding-top-80 padding-bottom-50">
            <div class="container">
                <div class="row">
                @if(isset($all_category))
                @foreach($all_category as $key => $input)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="category-box-layout1">
                                    <figure class="item-figure"><a href='/recipes/{{$input->id}}'><img src='{{asset("image/categories/$input->cat_image")}}' style="height: 370px; width: 399px;" alt="Product"></a></figure>
                                    <div class="item-content">
                                        <h3 class="item-title"><a href='/recipes/{{$input->id}}'>{{$input['cat_name']}}</a></h3>
                                        <span class="sub-title"></span>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>
        <!-- Category Area End Here -->
@endsection
