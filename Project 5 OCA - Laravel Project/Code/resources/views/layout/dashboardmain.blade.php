<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('public/img/favicon.png')}}">
        <title>Foodacity Admin Dashboard</title>
        <meta name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="This is an example dashboard created using build-in elements and components.">
        <meta name="msapplication-tap-highlight" content="no">
        <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
        <link href="{{asset('admin/main.css')}}" rel="stylesheet">

    </head>

    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="app-header__content">

                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        @if(Auth::guard('admin')->check())
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                class="p-0 btn">

                                                <img width="42" class="rounded-circle"
                                                    src='{{asset("admin/images")}}/{{Auth::guard('admin')->user()->image}}'
                                                    alt="">

                                                {{Auth::guard('admin')->user()->name}}

                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                class="dropdown-menu dropdown-menu-right">
                                                <a href="/admin/logout" style="text-decoration:none"><button
                                                        type="button" tabindex="0"
                                                        class="dropdown-item">logout</button></a>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                    data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>

                                <li class="app-sidebar__heading">Manage</li>
                                @if(Auth::guard('admin')->check() && Auth::guard('admin')->user()->is_super_admin == 1)
                                <li>
                                    <a href="../admin/manageadmin">
                                        <i class="metismenu-icon  pe-7s-user"></i>

                                        Manage Admin
                                    </a>

                                </li>
                                @endif
                                <li>
                                    <a href="../admin/manage_users">
                                        <i class="metismenu-icon  pe-7s-users"></i>

                                        Manage Users

                                    </a>

                                </li>
                                <li>
                                    <a href="../admin/categories">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Manage Categories
                                    </a>
                                </li>

                                <li>
                                    <a href="../admin/manage_posts">
                                        <i class="metismenu-icon  pe-7s-news-paper"></i>
                                        Manage Posts
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--////////////////////////////////////////////////////////////////////////////////-->
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
                    <!--///////////////////////////////////////////-->
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">

                                <div class="col-md-8 mx-auto text-md-center">
                                    <span class="copyright">©<script>
                                            document.write(new Date().getFullYear())
                                        </script>, made with <i class="fa fa-heart heart"></i> by Creative Team food
                                        website
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <script type="text/javascript" src="{{asset('admin/scripts/main.js')}}"></script>
    </body>

</html>
