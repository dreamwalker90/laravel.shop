<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Rocker - Bootstrap4  Admin Dashboard Template</title>
    <!--favicon-->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="/assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="/assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="/assets/css/app-style.css" rel="stylesheet"/>
    <link href="/assets/css/style.css" rel="stylesheet"/>
</head>
<body>
<div id="app">

    <main>
        <!-- Start wrapper-->


            <div id="wrapper">

                <!--Start sidebar-wrapper-->
                <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
                    <div class="brand-logo">
                        <img src="/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                        <h5 class="logo-text">menu</h5>
                    </div>
                    <ul class="sidebar-menu do-nicescrol">
                        <li class="sidebar-header">MAIN NAVIGATION</li>
                        <li>
                            <a href="index.html" class="waves-effect">
                                <span>Home</span> <i class="icon-home"></i><i class="fa fa-angle-left pull-left"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{route('products.index')}}"> products List</a></li>
                            </ul>
                        </li>

                        <li>
                                @can('Delete_Products','editing_Products')
                            <a href="index.html" class="waves-effect">
                                <span>Admin</span> <i class="icon-wrench"></i><i class="fa fa-angle-left pull-left"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li><a href="{{route('user.index')}}"> User List</a></li>
                                <li><a href="{{route('products.create')}}"> creating new product</a></li>
                                <li><a href="{{route('products.index')}}"> products List</a></li>
                                <li><a href="{{route('role.create')}}">create new role</a></li>
                                <li><a href="{{route('role.index')}}"> roles List</a></li>
                                <li><a href="{{route('permission.index')}}">permissions list</a></li>
                                <li><a href="{{route('permission.create')}}"> create new permission</a></li>
                            </ul>
                            @endcan
                        </li>
                    </ul>

                </div>
                <!--End sidebar-wrapper-->

                <!--Start topbar header-->
                <header class="topbar-nav">

                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                   href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item">

                                        </li>

                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                               role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right"
                                                 aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>

                </header>
                <!--End topbar header-->

                <div class="content-wrapper">

                    <!--Start Dashboard Content-->

                @yield('content')

                <!--End Dashboard Content-->
                    <!--start overlay-->
                    <div class="overlay toggle-menu">

                    </div>
                    <!--end overlay-->

                    <!-- End container-fluid-->

                </div><!--End content-wrapper-->
                <!--Start Back To Top Button-->
                <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
                <!--End Back To Top Button-->

                <!--Start footer-->
                <footer class="footer">
                    <div class="container">
                        <div class="text-center">
                            Copyright © 2020 Rocker Admin
                        </div>
                    </div>
                </footer>
                <!--End footer-->

            </div><!--End wrapper-->

        <!-- Bootstrap core JavaScript-->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>

        <!-- simplebar js -->
        <script src="/assets/plugins/simplebar/js/simplebar.js"></script>
        <!-- waves effect js -->
        <script src="/assets/js/waves.js"></script>
        <!-- sidebar-menu js -->
        <script src="/assets/js/sidebar-menu.js"></script>
        <!-- Custom scripts -->
        <script src="/assets/js/app-script.js"></script>

        <!-- Vector map JavaScript -->
        <script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- Chart js -->
        <script src="/assets/plugins/Chart.js/Chart.min.js"></script>
        <script src="/assets/plugins/Chart.js/Chart.extension.js"></script>
        <!-- Index js -->
        <script src="/assets/js/index.js"></script>

    </main>
</div>
</body>
</html>
