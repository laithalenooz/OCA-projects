@extends('layout.publicmain')

@section('content')
<section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Single Recipe</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Recipe Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
             <!-- Single Recipe Main Banner Area Start Here -->
             <div class="container">
             <div class="row">
                 <div class="col-md-2"></div>
             <div class="col-md-8">
 <img src='{{asset("storage/postImages/$post->image")}}'  alt="Banner" style="max-height: 400px; max-width: 600px;" class="mx-auto d-block">
    </div>

        </div>
             </div>
        <!-- Single Recipe Main Banner Area End Here -->
        <!-- Single Recipe Without Sidebar Area Start Here -->
        <section class="single-recipe-wrap-layout2 padding-bottom-80">
            <div class="container">
                <div class="single-recipe-layout2">
                    <div class="ctg-name">{{$post->category->cat_name}}</div>
                    <h2 class="item-title">{{$post->title}}</h2>
                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-5">
                        <ul class="entry-meta">
                            <li class="single-meta"><a href="#"><i class="far fa-calendar-alt"></i>Nov 14,
                                    2018</a></li>
                            <li class="single-meta"><a href="/author/{{$post->user->id}}"><i class="fas fa-user"></i>by <span>{{$post->user->firstName}}</span></a></li>

                            @auth
                                @if(!$post->likedBy(Auth::user()->id))
                                  <li>
                                <a href="/like/{{$post->id}}" class=" text-danger" style="font-size: 1.7rem"><i class="fas fa-heart">Like</i></a><span>{{" ".$post->likes->count()}} {{ Str::plural('like',$post->likes->count())}}</span>
                            </li>
                            @else
                            <li>
                           <a href="/like/delete/{{$post->id}}" class=" text-danger" style="font-size: 1.7rem" style="font-size: 1.5rem"><i class="fas fa-heart">Unlike</i></a><span>{{" " .$post->likes->count()}} {{ Str::plural('like',$post->likes->count())}}</span>
                            </li>
                            @endif
                            @endauth

                            @guest
                            <li>
                                <a href="/login" class=" text-danger" style="font-size: 1.7rem"><i class="fas fa-heart">Like</i></a><span>{{" ".$post->likes->count()}} {{ Str::plural('like',$post->likes->count())}}</span>
                            </li>
                            @endguest
                        </ul>

                    </div>
                    <div class="item-feature">
                        <ul>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">PREP TIME</div>
                                            <div class="feature-sub-title">{{$post->preparation_time}} Mins</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="fas fa-utensils"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">COOK TIME</div>
                                            <div class="feature-sub-title">{{$post->cooking_time}} Mins</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">SERVING</div>
                                            <div class="feature-sub-title">{{$post->serving_people}} People</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="feature-wrap">
                                    <div class="media">
                                        <div class="feature-icon">
                                            <i class="far fa-eye"></i>
                                        </div>
                                        <div class="media-body space-sm">
                                            <div class="feature-title">VIEWS</div>
                                            <div class="feature-sub-title" id="demo"></div>
                                            <script>
                                                document.getElementById("demo").innerHTML = Math.floor(Math.random() * Math.floor(300));
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="item-description">{{$post->description}}</p>

                    <div class="related-recipe">
                        <h4 class="heading-title">User Posts</h4>
                        <div class="rc-carousel nav-control-layout3" data-loop="true" data-items="5" data-margin="40"
                            data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false"
                            data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                            data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true"
                            data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false"
                            data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3"
                            data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="3"
                            data-r-extra-large-nav="true" data-r-extra-large-dots="false">

                            @foreach($usersposts as $posts)
                            <div class="shop-box-layout1" >
                                <div class=" bg--light" >
                                    <div class="item-figure">
                                        <a href="/recipe/single/{{$posts->id}}">
                                        <img src='{{asset("storage/postImages/$posts->image")}}' style="height: 250px;">
                                        </a>
                                    </div>

                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="/recipe/single/{{$posts->id}}">{{$posts->title}}</a></h3>
                                    <div class="item-price"><span class="currency"></span>{{$posts->category->cat_name}}</div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Single Recipe Without Sidebar Area End Here -->

@endsection
