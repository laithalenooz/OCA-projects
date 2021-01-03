@extends('layout.publicmain')

@section('content')
<!-- Inne Page Banner Area Start Here -->
<section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Search Your Recipes</h1>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>All Recipes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inne Page Banner Area End Here -->
<!-- Recipe Without Sidebar Area Start Here -->
<section class="recipe-without-sidebar-wrap padding-top-80 padding-bottom-22">
    <div class="container">
        <div class="adv-search-wrap">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Author Name or Recipe Search . . ." />
                <div class="btn-group">
                    <div class="input-group-btn">
                        <button type="submit" class="btn-search"><i class="flaticon-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-box-layout1">
                    <figure class="item-figure"><a href="/recipe/single/{{$post->id}}"><img
                                style="width: 370px; height: 272.250px;"
                                src='{{asset("/storage/postImages/$post->image")}}' alt="Product"></a></figure>
                    <div class="item-content">
                        <span class="sub-title">{{$post->category->cat_name}}</span>
                        <h3 class="item-title"><a href="/recipe/single/{{$post->id}}">{{$post->title}}</a></h3>
                        <p>{{$post->description}} </p>
                        <ul class="entry-meta">
                            <li><a href="#"><i class="fas fa-clock"></i>{{$post->preparation_time}} Mins</a></li>
                            <li><a href="/author/{{$post->user->id}}"><i class="fas fa-user"></i>by
                                    <span></span>{{$post->user->firstName}}</a></li>
                                    @auth
                                    @if(!$post->likedBy(auth()->user()->id))
                                  <li>
                                <a href="/like/{{$post->id}}" class=" text-danger" style="font-size: 1.5rem"><i class="fas fa-heart">Like</i></a><span>{{$post->likes->count()}} {{ Str::plural('like',$post->likes->count())}}</span>
                            </li>
                            @else
                            <li>
                           <a href="/like/delete/{{$post->id}}" class=" text-danger" style="font-size: 1.5rem" style="font-size: 1.5rem"><i class="fas fa-heart">Unlike</i></a><span>{{$post->likes->count()}} {{ Str::plural('like',$post->likes->count())}}</span>
                            </li>
                            @endif
                            @endauth

                            @guest 
                            <li>
                                <a href="/login" class=" text-danger" style="font-size: 1.5rem"><i class="fas fa-heart">Like</i></a><span>{{$post->likes->count()}} {{ Str::plural('like',$post->likes->count())}}</span>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Recipe Without Sidebar Area End Here -->
@endsection
