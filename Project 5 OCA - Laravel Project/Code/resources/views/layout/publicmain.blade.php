<!doctype html>
<html class="no-js" lang="">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Foodacity | Best Recipes!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('public/img/favicon.png')}}">
        <!-- Normalize Css -->
        <link rel="stylesheet" href="{{asset('public/css/normalize.css')}}">
        <!-- Main Css -->
        <link rel="stylesheet" href="{{asset('public/css/main.css')}}">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('public/css/animate.min.css')}}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('public/css/fontawesome-all.min.css')}}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{asset('public/fonts/flaticon.css')}}">
        <!-- Summernote CSS -->
        <link rel="stylesheet" href="{{asset('public/css/summernote.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('public/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/owl.theme.default.min.css')}}">
        <!-- Select 2 CSS -->
        <link rel="stylesheet" href="{{asset('public/css/select2.min.css')}}">
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('public/style.css')}}">
        <!-- Modernizr Js -->
        <script src="{{asset('public/js/modernizr-3.6.0.min.js')}}"></script>
    </head>

    <body>
        <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

        <!-- Add your site or application content here -->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- ScrollUp Start Here -->
        <a href="#wrapper" data-type="section-switch" class="scrollup">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <!-- ScrollUp End Here -->
        <div id="wrapper" class="wrapper">
            <!-- Header Area Start Here -->
            <header class="header-one">
                <div id="header-main-menu" class="header-main-menu header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-3 col-sm-4 col-4 possition-static">
                                <div class="site-logo-mobile">
                                    <a href="/" class="sticky-logo-light"><img
                                            src="{{asset('public/img/logo-light.png')}}" alt="Site Logo"></a>
                                    <a href="/" class="sticky-logo-dark"><img
                                            src="{{asset('public/img/logo-dark.png')}}" alt="Site Logo"></a>
                                </div>
                                <nav class="site-nav">
                                    <ul id="site-menu" class="site-menu">
                                        <li><a href="/">Home</a>
                                        </li>
                                        <li><a href="/categories">Categories</a>
                                        </li>
                                        <li><a href="/about">About Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-4 col-md-9 col-sm-8 col-8 d-flex align-items-center justify-content-end">
                                <div class="nav-action-elements-layout1">
                                    <ul>
                                        <li>
                                            @guest
                                            <button type="button" class="login-btn">
                                                <a class="login-btn" href="/login"> <i
                                                        class="flaticon-profile"></i>Login</a>
                                                <span> | </span>
                                                <a class="login-btn" href="/register"> <i
                                                        class="flaticon-profile"></i>Register</a>
                                                </button>
                                                @endguest



                                                @auth
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->firstName }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>

                                                <a class="dropdown-item" href="/my_account/{{Auth::user()->id}}">
                                                    My Account
                                                </a>
                                            </div>
                                        </li>
                                        @endauth
                                        </li>
                                        <li>
                                            <a href="/submit-recipe" class="fill-btn"><i
                                                    class="flaticon-plus-1"></i>SUBMIT
                                                RECIPE</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mob-menu-open toggle-menu">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="nav-action-elements-layout2">
                                    <ul class="nav-social">
                                        <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#" title="skype"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="#" title="rss"><i class="fas fa-rss"></i></a></li>
                                        <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="site-logo-desktop">
                                    <a href="/" class="main-logo"><img
                                            src="{{asset('public/img/logo-dark.png')}}" alt="Site Logo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            @yield('content')
        <!-- Instagram Start Here -->
            <section class="instagram-feed-wrap">
                <div class="instagram-feed-title"><a href="#"><i class="fab fa-instagram"></i>Follow On Instagram</a></div>
                <ul class="instagram-feed-figure">
                    <li>
                        <a href="single-recipe1.html"><img src='{{asset("public/img/social-figure/social-figure1.jpg")}}' alt="Social"></a>
                    </li>
                    <li>
                        <a href="single-recipe1.html"><img src='{{asset("public/img/social-figure/social-figure2.jpg")}}' alt="Social"></a>
                    </li>
                    <li>
                        <a href="single-recipe1.html"><img src='{{asset("public/img/social-figure/social-figure3.jpg")}}' alt="Social"></a>
                    </li>
                    <li>
                        <a href="single-recipe1.html"><img src='{{asset("public/img/social-figure/social-figure4.jpg")}}' alt="Social"></a>
                    </li>
                    <li>
                        <a href="single-recipe1.html"><img src='{{asset("public/img/social-figure/social-figure5.jpg")}}' alt="Social"></a>
                    </li>
                    <li>
                        <a href="single-recipe1.html"><img src='{{asset("public/img/social-figure/social-figure6.jpg")}}' alt="Social"></a>
                    </li>
                    <li>
                        <a href="single-recipe1.html"><img src='{{asset("public/img/social-figure/social-figure7.jpg")}}' alt="Social"></a>
                    </li>
                    <li>
                        <a href="single-recipe1.html"><img src='{{asset("public/img/social-figure/social-figure8.jpg")}}' alt="Social"></a>
                    </li>
                </ul>
            </section>
            <!-- Instagram End Here -->
            <footer class="ranna-bg-dark">
                <div class="container">
                    <div class="footer-logo">
                        <a href="/"><img src="{{asset('public/img/logo-light.png')}}" class="img-fluid"
                                alt="footer-logo"></a>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">FACEBOOK</a></li>
                            <li><a href="#">TWITTER</a></li>
                            <li><a href="#">INSTAGRAM</a></li>
                            <li><a href="#">PINTEREST</a></li>
                            <li><a href="#">GOOGLEPLUS</a></li>
                            <li><a href="#">YOUTUBE</a></li>
                        </ul>
                    </div>
                    <div class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                    </div>
                </div>
            </footer>
            <!-- Footer Area End Here -->
        </div>
        <div id="search" class="search-wrap">
            <button type="button" class="close">×</button>
            <form class="search-form">
                <input type="search" value="" placeholder="Type here........" />
                <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
            </form>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="title-default-bold mb-none">Login</div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <input class="main-input-box" type="text" placeholder="User Name" name="email" />
                            <input class="main-input-box" type="password" placeholder="Password" name="password" />
                            <div class="inline-box mb-5 mt-4">
                                <div class="checkbox checkbox-primary">
                                    <input id="modal-checkbox" type="checkbox">
                                    <label for="modal-checkbox">Remember Me</label>
                                </div>
                                <label class="lost-password"><a href="#">Lost your password?</a></label>
                            </div>
                            <div class="inline-box mb-5 mt-4">
                                <button class="btn-fill" type="submit" value="Login">Login</button>
                                <a href="#" class="btn-register"><i class="fas fa-user"></i>Register Here!</a>
                            </div>
                        </form>
                        <label>Login connect with your Social Network</label>
                        <div class="login-box-social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End-->
        <!-- Jquery Js -->
        <script src="{{asset('public/js/jquery-3.3.1.min.js')}}"></script>
        <!-- Bootstrap Js -->
        <script src="{{asset('public/js/popper.min.js')}}"></script>
        <!-- Bootstrap Js -->
        <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
        <!-- Plugins Js -->
        <script src="{{asset('public/js/plugins.js')}}"></script>
        <!-- Owl Carousel Js -->
        <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
        <!-- Summernote JS -->
        <script src="{{asset('public/js/summernote.min.js')}}"></script>
        <!-- Select 2 Js -->
        <script src="{{asset('public/js/select2.full.min.js')}}"></script>
        <!-- Smoothscroll Js -->
        <script src="{{asset('public/js/smoothscroll.min.js')}}"></script>
        <!-- Custom Js -->
        <script src="{{asset('public/js/main.js')}}"></script>
    </body>


</html>
