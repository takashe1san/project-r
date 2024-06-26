<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    {{-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> --}}

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->

    <link href="{{ asset('../assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('../assets/css/now-ui-dashboard.css?v=1.5.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{-- <link href="{{ asset('../assets/demo/demo.css') }}" rel="stylesheet" /> --}}
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
            <div class="logo">
                <a href="#" class="simple-text logo-normal text-center">
                    Dashboard
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('category.index') }}">
                            <i class="now-ui-icons files_single-copy-04 "></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="">
                            <i class="now-ui-icons shopping_bag-16"></i>
                            <p>Products</p>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('order.index') }}">
                            <i class="now-ui-icons files_box"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('table.index')}}">
                            <i class="now-ui-icons tech_tablet"></i>
                            <p>Tables</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('image.index')}}">
                            <i class="now-ui-icons tech_tablet"></i>
                            <p>Images</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel" id="main-panel">
            @include('includes.message')

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            </li>
                            <li class="nav-item dropdown">
                                <a href="{{route('logout')}}" class="btn btn-danger">
                                    LOUGOUT
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="panel-header panel-header-sm">

            </div>
            <div class="content pt-5">
                @yield('content')
            </div>
            <footer class="footer">
                <div class=" container-fluid text-center">

                    All rights reserved &copy;

                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('../assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('../assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('../assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('../assets/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('../assets/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('../assets/js/now-ui-dashboard.min.js?v=1.5.0') }}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('../assets/demo/demo.js') }}"></script>
    <script>
        setTimeout(function() {
            $('#myToast').fadeOut();
        }, 5000);
    </script>
    @yield('scripts')
</body>

</html>
