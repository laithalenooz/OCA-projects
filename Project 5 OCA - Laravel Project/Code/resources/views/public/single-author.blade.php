@extends('layout.publicmain')

@section('content')
    <!-- Inne Page Banner Area Start Here -->
    <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Single Author Archives</h1>
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>Author Archives</li>
                        </ul>
                    </div>
                </div>


                {{-- @if(auth()->check())
                @if($user->followedBy($user->id))
                <a class="btn-lg btn-danger" href="/author/{{$user->id}}/unFollow">Unfollow</a>
                @else
                <a class="btn-lg btn-primary" href="/author/{{$user->id}}/follow">Follow</a>
                @endif
                @else
                <a class="btn-lg btn-primary" href="/login">Follow</a>
                @endif --}}





            </div>
        </div>
    </section>
    <!-- Inne Page Banner Area End Here -->
    <!-- Single Author Area Start Here -->
    <section class="single-author-page-wrap padding-top-80 padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-8">
                    <div class="author-info">
                        <div class="media media-none--xs">
                            <img src='{{asset("image/users/$user->image")}}' alt="Blog Author" style="width: 182px; height: 182px;" class="rounded-circle media-img-auto">
                            <div class="media-body">
                                <h2 class="author-title">{{$user->firstName}} {{$user->lastName}}</h2>
                                <div class="author-designation">
                                    <hr style="width: 45%; border: 1px solid tomato ; color: #ff4f57;"></div>
                                <p>{{$user->bio}}</p>
                            </div>

                            @if($user->followedBy($user->id))
                                <a class="btn-lg text-white btn-info" href="/author/{{$user->id}}/unFollow">Unfollow</a>
                            @else
                                <a class="btn-lg text-white" style="background: tomato;" href="/author/{{$user->id}}/follow">Follow</a>
                            @endif
                        </div>
                    </div>
                    <div class="section-heading heading-dark">
                        <h2 class="item-heading">RECIPES</h2>
                    </div>
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="product-box-layout1">
                                    <figure class="item-figure"><a href="/recipe/single/{{$post->id}}"><img src='{{asset("storage/postImages/$post->image")}}'
                                                                                                            style="width: 370px; height: 272.250px;"    alt="Product"></a></figure>
                                    <div class="item-content">
                                        <span class="sub-title">{{$post->category->cat_name}}</span>
                                        <h3 class="item-title"><a href="/recipe/single/{{$post->id}}">{{$post->title}}</a></h3>
                                        <p>{{$post->description}} </p>
                                        <ul class="entry-meta">
                                            <li><a href="#"><i class="fas fa-clock"></i>{{$post->preparation_time}} Mins</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>{{$post->user->firstName}}</span></a></li>
                                            <li><a href="#"><i class="fas fa-heart"></i><span>{{$post->follows}}</span> Follows</a></li>
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
                <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">FEATURED RECIPE</h3>
                        </div>
                        <div class="widget-featured-feed">
                            <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3"
                                 data-margin="5" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="700"
                                 data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1"
                                 data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1"
                                 data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1"
                                 data-r-small-nav="true" data-r-small-dots="false" data-r-medium="1"
                                 data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1"
                                 data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="1"
                                 data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                                @foreach($posts as $post)
                                <div class="featured-box-layout1">
                                    <div class="item-img">
                                        <img style="width: 350px; height: 277px;" src='{{asset("storage/postImages/$post->image")}}' alt="Brand" class="img-fluid">
                                    </div>
                                    <div class="item-content">
                                        <span class="ctg-name">{{$post->category->cat_name}}</span>
                                        <h4 class="item-title"><a href="/recipe/single/{{$post->id}}">{{$post->title}}</a></h4>
                                        <p>{{$post->description}}</p>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">SUBSCRIBE &amp; FOLLOW</h3>
                        </div>
                        <div class="widget-follow-us">
                            <ul>
                                <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i>LIKE ME ON</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-twitter"></i>LIKE ME</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i>LIKE ME</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i>LIKE ME</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-instagram"></i>LIKE ME</a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-youtube"></i>Subscribe</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="section-heading heading-dark">
                            <h3 class="item-heading">LATEST RECIPES</h3>
                        </div>
                        <div class="widget-latest">
                            <ul class="block-list">
                                @foreach($posts as $post)
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img style="height: 90px; width: 90px;" src='{{asset("storage/postImages/$post->image")}}' alt="Post"></a>
                                        <div class="count-number" style="font-size: 1.25rem">New</div>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-ctg">{{$post->category->cat_name}}</div>
                                        <h4 class="item-title"><a href="#">{{$post->title}}</a></h4>
                                        <div class="item-post-by"><a href="/recipe/single/{{$post->id}}"><i class="fas fa-user"></i><span>by</span>
                                            {{$post->user->firstName}}</a></div>
                                    </div>
                                </li>
                                    @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Author Area End Here -->

@endsection
