@extends('layout.publicmain')

@section('content')
<!-- Slider Area Start Here -->
<section class="ranna-slider-area">
    <div class="container">
        <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="30" data-margin="5"
            data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true"
            data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false"
            data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1"
            data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1" data-r-medium-nav="true"
            data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true" data-r-large-dots="false"
            data-r-extra-large="1" data-r-extra-large-nav="true" data-r-extra-large-dots="false">

            <div class="ranna-slider-content-layout1">
                <figure class="item-figure justify-content-center"><a href="/recipe/single/{{$slider->id}}"><img style="height:518px; width:1170px;"
                            src='{{asset("storage/postImages/$slider->image")}}' alt="Product"></a></figure>
                <div class="item-content">
                    <span class="sub-title"></span>
                    <h1 class="item-title text-danger">Most Liked Post</h1>
                    <h2 class="item-title"><a href="/recipe/single/{{$slider->id}}">{{$slider->title}}</a></h2>
                    <p>{{$slider->description}} </p>
                    <ul class="entry-meta">
                        <li><a href="#"><i class="fas fa-clock"></i>{{$slider->preparation_time}}</a></li>
                        <li><a href="/author/{{$slider->user->id}}"><i class="fas fa-user"></i>by
                                <span>{{$slider->user->firstName}}</span></a>
                        </li>
                        @auth
                                @if(!$slider->likedBy(auth()->user()->id))
                                  <li>
                                <a href="/like/{{$slider->id}}" class=" text-danger" style="font-size: 1.5rem"><i class="fas fa-heart">Like</i></a><span>{{$slider->likes->count()}} {{ Str::plural('like',$slider->likes->count())}}</span>
                            </li>
                            @else
                            <li>
                           <a href="/like/delete/{{$slider->id}}" class=" text-danger" style="font-size: 1.5rem" style="font-size: 1.5rem"><i class="fas fa-heart">Unlike</i></a><span>{{$slider->likes->count()}} {{ Str::plural('like',$slider->likes->count())}}</span>
                            </li>
                            @endif
                            @endauth

                            @guest
                            <li>
                                <a href="/login" class=" text-danger" style="font-size: 1.5rem"><i class="fas fa-heart">Like</i></a><span>{{$slider->likes->count()}} {{ Str::plural('like',$slider->likes->count())}}</span>
                            </li>
                            @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="padding-bottom-18">
    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="product-box-layout1">
                    <figure class="item-figure"><a href="/recipe/single/{{$post->id}}"><img
                                style="width: 370px; height: 272.250px;"
                                src='{{asset("storage/postImages/$post->image")}}' alt="Product"></a></figure>
                    <div class="item-content text-break">
                        <span class="sub-title">{{$post->category->cat_name}}</span>
                        <h3 class="item-title"><a href="/recipe/single/{{$post->id}}">{{$post->title}}</a></h3>
                        <p class="text-break">{{$post->description}} </p>
                        <ul class="entry-meta">
                            <li><a href="#"><i class="fas fa-clock"></i>{{$post->preparation_time}}</a></li>
                            <li><a href="/author/{{$post->user->id}}"><i class="fas fa-user"></i>by
                                    <span>{{$post->user->firstName}}</span></a>
                            </li>
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
@endsection
