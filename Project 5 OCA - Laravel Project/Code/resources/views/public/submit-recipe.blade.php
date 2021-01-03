@extends('layout.publicmain')

@section('content')
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="{{asset('public/img/figure/inner-page-banner1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Submit a Recipe</h1>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>Recipe Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->

        <!-- Submit Recipe Area Start Here -->
        <section class="submit-recipe-page-wrap padding-top-74 padding-bottom-50">
            <div class="container">
                <div class="row gutters-60">
                    <div class="col-lg-8">
                        <form action="/create_post" method="post" class="submit-recipe-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Recipe Title</label>
                                <input type="text" placeholder="Recipe Title" class="form-control" name="title">
                            </div>
                            @error('title')
                           <div>
                            <p style="color: red;font-size:1.5rem">{{$message}}</p>
                            </div>
                           @enderror

                            <div class="form-group">
                                <label for="cat_id">Choose Category</label>
                                <select class="select2" name="cat_id" id="cat_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea placeholder="Describe the Recipe" class="textarea form-control" name="description" id="form-message"
                                    rows="7" cols="20"></textarea>
                            </div>
                            @error('description')
                           <div>
                            <p style="color: red;font-size:1.5rem">{{$message}}</p>
                            </div>
                           @enderror
                            <div class="form-group">
                                <label for="recipe">Recipe</label>
                                <textarea placeholder="Enter the Recipe" class="textarea form-control form-control" name="recipe" id="form-message"
                                          rows="7" cols="20"></textarea>
                            </div>
                            @error('recipe')
                           <div>
                            <p style="color: red; font-size:1.5rem;">{{$message}}</p>
                            </div>
                           @enderror
                            <div class="additional-input-wrap">
                                <label>Upload your photos</label>
                                <div class="form-group">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            @error('image')
                           <div>
                            <p style="color: red;font-size:1.5rem">{{$message}}</p>
                            </div>
                           @enderror
                            <div class="additional-input-wrap">
                                <h3>Additional Informations:</h3>
                                <div class="row gutters-5">
                                    <div class="col-lg-6">
                                        <label for="preparation">Preparation Time:</label>
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="far fa-clock"></i>
                                            <input type="time" placeholder="Preparation Time: 00.00.00" class="form-control"
                                                name="preparation">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="cooking">Cooking Time:</label>
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-utensils"></i>
                                            <input type="time" placeholder="Cooking Time: 00.00.00" class="form-control"
                                                name="cooking">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="serving">Serving People:</label>
                                        <div class="form-group additional-input-box icon-left">
                                            <i class="fas fa-users"></i>
                                            <input type="number" placeholder="Serving People: 00" class="form-control"
                                                name="serving">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn-submit">SUBMIT RECIPE</button>
                        </form>
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">FEATURED ARTICLE</h3>
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
                                    <div class="featured-box-layout1">
                                        <div class="item-img">
                                            <img src="{{asset('public/img/product/product17.jpg')}}" alt="Brand" class="img-fluid">
                                        </div>
                                        <div class="item-content">
                                            <span class="ctg-name">BREAKFAST</span>
                                            <h4 class="item-title"><a href="single-recipe1.html">Baked Garlic Prawn</a></h4>
                                            <p>Definitiones noel ei verear intelle
                                                gatpri civibus consequat area
                                                refund efficiantue.</p>
                                        </div>
                                    </div>
                                    <div class="featured-box-layout1">
                                        <div class="item-img">
                                            <img src="{{asset('public/img/product/product18.jpg')}}" alt="Brand" class="img-fluid">
                                        </div>
                                        <div class="item-content">
                                            <span class="ctg-name">DINNER</span>
                                            <h4 class="item-title"><a href="single-recipe1.html">Baked Garlic Prawn</a></h4>
                                            <p>Definitiones noel ei verear intelle
                                                gatpri civibus consequat area
                                                refund efficiantue.</p>
                                        </div>
                                    </div>
                                    <div class="featured-box-layout1">
                                        <div class="item-img">
                                            <img src="{{asset('public/img/product/product19.jpg')}}" alt="Brand" class="img-fluid">
                                        </div>
                                        <div class="item-content">
                                            <span class="ctg-name">SALAD</span>
                                            <h4 class="item-title"><a href="single-recipe1.html">Baked Garlic Prawn</a></h4>
                                            <p>Definitiones noel ei verear intelle
                                                gatpri civibus consequat area
                                                refund efficiantue.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">LATEST RECIPES</h3>
                            </div>
                            <div class="widget-latest">
                                <ul class="block-list">
                                    <li class="single-item">
                                        <div class="item-img">
                                            <a href="#"><img src="{{asset('public/img/product/latest1.jpg')}}" alt="Post"></a>
                                            <div class="count-number">1</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">DESERT</div>
                                            <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                    Mozzarella Oelette</a></h4>
                                            <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                    John Martin</a></div>
                                        </div>
                                    </li>
                                    <li class="single-item">
                                        <div class="item-img">
                                            <a href="#"><img src="{{asset('public/img/product/latest2.jpg')}}" alt="Post"></a>
                                            <div class="count-number">2</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">DESERT</div>
                                            <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                    Mozzarella Oelette</a></h4>
                                            <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                    John Martin</a></div>
                                        </div>
                                    </li>
                                    <li class="single-item">
                                        <div class="item-img">
                                            <a href="#"><img src="{{asset('public/img/product/latest3.jpg')}}" alt="Post"></a>
                                            <div class="count-number">3</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">DESERT</div>
                                            <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                    Mozzarella Oelette</a></h4>
                                            <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                    John Martin</a></div>
                                        </div>
                                    </li>
                                    <li class="single-item">
                                        <div class="item-img">
                                            <a href="#"><img src="{{asset('public/img/product/latest4.jpg')}}" alt="Post"></a>
                                            <div class="count-number">4</div>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-ctg">DESERT</div>
                                            <h4 class="item-title"><a href="#">Salami Oven Roasted are
                                                    Mozzarella Oelette</a></h4>
                                            <div class="item-post-by"><a href="single-blog.html"><i class="fas fa-user"></i><span>by</span>
                                                    John Martin</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">INSTAGRAM</h3>
                            </div>
                            <div class="widget-instagram">
                                <ul>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure9.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure10.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure11.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure12.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure13.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure14.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure15.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure16.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-box">
                                            <img src="{{asset('public/img/social-figure/social-figure17.jpg')}}" alt="Social Figure" class="img-fluid">
                                            <a href="#" class="item-icon"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Submit Recipe Area End Here -->
        @endsection
