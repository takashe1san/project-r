<!DOCTYPE html>
<html class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="الرند واليمامه">
    <meta name="keywords" content="مطاعم الرند واليمامة ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.png') }}">
    {{-- <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700,800,900&amp;display=swap"
        rel="stylesheet"> --}}
    {{-- <link href="{{ asset('../assets/style/homelayout.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ asset('../assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../assets/css/mobile.css') }}" rel="stylesheet" type="text/css" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="generator" content="WordPress 6.3.2" />

</head>

<body data-rsssl=1>
    @include('includes.message')
    <!-- Start Loader -->
    <!-- <div class="loader">
        <div class="img-load"></div>
    </div> -->
    <!-- End Loader -->
    <header class="head-top">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-8">
                <div class="icons">
                    @auth
                        <span><a href="{{ route('logout') }}"><i class="fa fa-sign-out-alt"
                                    aria-hidden="true"></i></a></span>
                        {{-- <span><a href="your-order.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></span> --}}
                    @else
                        <span><a href="{{ route('login') }}"><i class="fa fa-sign-in-alt" aria-hidden="true"></i></a></span>
                    @endauth
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-4">
                <div class="qtranxs_widget_end"></div>
                <div class="social-media-top">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/ry">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ry">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ry">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section class="banner-n">
        <div class="logo-respnsive">
            <a href="index.html">
                <img src="{{ asset('../assets/image/logo (2).png') }}" />
            </a>
        </div>
        <div class="widthFull">
            <!-- Start Nav -->
            <nav class="navbar navbar-inverse moved">
                <div class="container">
                    <div class="navbar-header">

                        <a class="navbar-brand" href="index.html"><img
                                src="{{ asset('../assets/image/logo (2).png') }}" /></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li id="menu-item-276"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-276">
                                <a href="#" aria-current="page">الرئيسية</a>
                            </li>
                            {{-- <li id="menu-item-118"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118">
                                <a href="#">من نحن</a></li> --}}
                            <li id="menu-item-124"
                                class="menu-item menu-item-type-post_type_archive menu-item-object-menu menu-item-124">
                                <a href="#menu">قائمة الطعام</a>
                            </li>
                            {{-- <li id="menu-item-119"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119">
                                <a href="branches.html">فروعنا</a>
                            </li> --}}
                            <li id="menu-item-121"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121">
                                <a href="#image-gallary">معرض الصور</a>
                            </li>
                            <li id="menu-item-121"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121">
                                <a href="#feedbacks">آراء العملاء</a>
                            </li>
                            {{-- <li id="menu-item-120"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120">
                                <a href="contact.html">اتصل بنا</a>
                            </li> --}}
                        </ul>
                        <div class="navbar-left two">
                            <div class="btn-more-menu">
                                <button class="btn-menu open-sidebar"><i class="fa fa-th"></i></button>
                            </div>
                        </div>
                        <div class="navbar-left">
                            @if (auth()->check() || session()->has('cart'))
                                <div class="Lang-b">
                                    <a href="" class="btn btn-warning" style="padding: 0 41px"
                                        data-toggle="modal" data-target="#cartModal">السلة</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (auth()->check() || session()->has('cart'))
                        <!-- The Modal -->
                        <div class="modal" id="cartModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">السلة</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>المنتج</th>
                                                        <th>الكمية</th>
                                                        <th>المجموع</th>
                                                        <th>عمليات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (auth()->check())
                                                        @foreach (auth()->user()->cart as $cartItem)
                                                            <tr>
                                                                <td>{{ $cartItem->product->name }}</td>
                                                                <td>{{ $cartItem->quantity }}</td>
                                                                <td>{{ $cartItem->total_price }}</td>
                                                                <td><a href="{{ route('cart.destroy', ['cartItem' => $cartItem->id]) }}"
                                                                        class="" style="padding: 0 20px"><i
                                                                            class='fa fa-trash'></i></a></td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        @foreach (session()->get('cart') as $cartItem)
                                                            <tr>
                                                                <td>{{ $cartItem['product']->name }}</td>
                                                                <td>{{ $cartItem['quantity'] }}</td>
                                                                <td>{{ $cartItem['total_price'] }}</td>
                                                                <td><a href="{{ route('cart.remove', ['id' => $cartItem['product']->id]) }}"
                                                                        class="" style="padding: 0 20px"><i
                                                                            class='fa fa-trash'></i></a></td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        {{-- <form action="{{route('order.store')}}" method="post">
                                            @csrf --}}
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">إغلاق</button>
                                        @if (auth()->check())
                                            <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#orderModal">أطلب</button>
                                        @else
                                            <a href="{{ route('order.add', ['table' => request()->get('table')]) }}" class="btn btn-success">أطلب</a>
                                        @endif
                                        {{-- </form> --}}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal" id="orderModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">تقديم طلب</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <form action="{{ route('order.store') }}" method="post">
                                        @csrf
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Address" required>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">إغلاق</button>
                                            <button type="submit" class="btn btn-success">ارسل</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- Satrt Responsive -->
                    <div class="responsive">
                        @auth
                            <div class="col-xs-6">
                                <a href="order/index.html" class="btn btn-warning" style="padding: 0 41px"
                                    data-toggle="modal" data-target="#cartModal">السلة</a>
                            </div>


                        @endauth
                        <div class="col-xs-6">
                            <div class="navbar-left">
                                <div class="btn-more-menu">
                                    <button class="btn-menu open-sidebar"><i class="fa fa-th"></i></button>
                                </div>
                                <div class="searchForm">
                                    <button class="btnSearch"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </nav>
            <!-- End -->

            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Lines -->
                <div class="container-line">
                    <div class="container-line-center">
                        <div class="line-item one"></div>
                        <div class="line-item two"></div>
                        <div class="line-item three"></div>
                        <div class="line-item four"></div>
                    </div>
                </div>
                <!-- End Lines -->
                <!-- Start Close -->
                <div class="col-xs-12">
                    <div class="close-sidbar">
                        <span class="circel-h"></span>
                        <span class="close-sidebar"></span>
                        <span>إغلاق</span>
                    </div>
                </div>
                <!-- End -->
                <div class="container">

                    <!-- Start Logo -->
                    <div class="col-xs-12">
                        <div class="logo-sidebar">
                            <div class="logo-h">
                                <a href="index.html">
                                    <div class="img-l">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Start Content Sidebar -->
                    <div class="col-md-3 col-xs-12">
                        <div class="side-nav">
                            <ul>
                                <li class="current-menu-item">
                                    <a href="#">الرئيسية</a>
                                </li>
                                {{-- <li>
                                    <a href="about-us.html">من نحن</a>
                                </li> --}}
                                <li>
                                    <a href="#menu">قائمة الطعام</a>
                                </li>
                                {{-- <li>
                                    <a href="branch/index.html">فروعنا</a>
                                </li> --}}
                                <li>
                                    <a href="#image-gallary">معرض الصور</a>

                                </li>
                                <li>
                                    <a href="#feedbacks">آراء العملاء</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-1 col-xs-12"></div>

                    <div class="col-md-4 col-xs-12">
                        <div class="follow-us">
                            <!-- Start Title -->
                            <div class="title-follow">
                                <span>تواصل معنا</span>
                            </div>
                            <!-- End -->
                            <!-- Start Follow -->
                            <div class="follow-contact">
                                <ul>
                                    <li>
                                        <span>
                                            Info@rand-yamama.com </span>
                                    </li>

                                </ul>
                            </div>
                            <!-- End -->
                            <!-- Start Social -->
                            <div class="social-sidbar">
                                <ul>

                                    <li>
                                        <a href="https://www.facebook.com/rand">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="https://twitter.com/rand">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>


                                    <li>
                                        <a href="https://www.instagram.com/rand">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- End -->
                            <!-- Start Title -->
                            {{-- <div class="title-follow">
                                <span>موقعنا</span>
                            </div> --}}
                            <!-- End -->
                            <!-- Start Map-sidebar -->
                            {{-- <div class="map-sidebar">
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d926499.5318243024!2d46.490958279802825!3d24.89324685088861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2YXYt9i52YUg2LDZiNmCINin2YTYr9mK2LHYqQ!5e0!3m2!1sar!2ssa!4v1580156543576!5m2!1sar!2ssa" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                             -->
                            </div> --}}
                            <!-- End -->

                        </div>
                    </div>

                    {{-- <div class="col-md-4 col-xs-12">
                        <!-- Start Title -->
                        <div class="title-follow">
                            <span>تواصل معنا</span>
                        </div>
                        <!-- End -->
                        <!-- Start Contact-form -->
                        <div class="form-contact">
                            <p>تواصل معنا الان</p>
                            <div role="form" class="wpcf7" id="wpcf7-f144-o1" lang="ar" dir="rtl">
                                <div class="screen-reader-response"></div>
                                <form action="https://thouqaldeera.com/#wpcf7-f144-o1" method="post"
                                    class="wpcf7-form" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="144" />
                                        <input type="hidden" name="_wpcf7_version" value="5.1.6" />
                                        <input type="hidden" name="_wpcf7_locale" value="ar" />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f144-o1" />
                                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    </div>
                                    <div class="form-group">
                                        <label>الاسم الاول</label><br />
                                        <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                name="your-name" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="الاسم الاول" /></span>
                                    </div>
                                    <div class="form-group">
                                        <label>اسم العائلة</label><br />
                                        <span class="wpcf7-form-control-wrap text-661"><input type="text"
                                                name="text-661" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="اسم العائلة" /></span>
                                    </div>
                                    <div class="form-group">
                                        <label>البريد الالكتروني</label><br />
                                        <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                                name="your-email" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="البريد الالكتروني" /></span>
                                    </div>
                                    <div class="form-group">
                                        <label>رقم الجوال</label></p>
                                        <p> <span class="wpcf7-form-control-wrap text-662"><input type="text"
                                                    name="text-662" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="رقم الجوال" /></span>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn-more"><br />
                                            <span>إرسال</span><br />
                                        </button>
                                    </div>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                        <!-- End -->

                    </div> --}}
                    <!-- End -->
                </div>


                <div class="qtranxs_widget_end"></div>
            </div>






            <div class="content">

                @yield('content')

            </div>


            <!-- Start Footer -->
            <footer>
                <!-- Start Footer-top -->
                <div class="footer-top">
                    <div class="container">
                        <div class="footer-in">
                            <div class="top-ff">
                                <div class="col-xs-12 padding">
                                    <div class="news-letter">
                                        <div class="col-md-4 col-xs-12">
                                            <div class="title-letter">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12"></div>
                                        <div class="col-md-4 col-xs-12 wow fadeInLeft">
                                            <!--<form action="">
<i class="fa fa-envelope"></i>
<input type="email" placeholder="البريد الإلكتروني" />
<button><i class="fa fa-paper-plane"></i></button>
</form> -->
                                        </div>
                                        <div class="content-footer-t">
                                            <!-- Start Col -->
                                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s"
                                                data-wow-delay=".3s">
                                                <h3> من نحن</h3>
                                                <a href="en/index.html" class="logo-f">
                                                    <img src="{{ asset('../assets/image/logo (2).png') }}" />
                                                </a>
                                                <p>
                                                    تعتبر مطاعم الرند واليمامة أفضل المطاعم والتي تقوم بتقديم مختلف
                                                    الأكلات ؛و الاهتمام بالجودة والسعر العادل هو ما تمتاز به، بالاضافة
                                                    الى اختيار أفضل اللحوم والمكونات التي تهدف من خلاله لتحقيق رضي
                                                    العميل . </p>
                                            </div>
                                            <!-- End Col -->
                                            <div class="col-md-1 col-xs-12"></div>
                                            <!-- Start Col -->
                                            <div class="col-md-7 col-xs-12 wow fadeIn" data-wow-duration="1.1s"
                                                data-wow-delay=".3s">
                                                <h3> الرند واليمامه</h3>
                                                <ul class="links">
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-276">
                                                        <a href="index.html" aria-current="page">الرئيسية</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118">
                                                        <a href="about/index.html">من نحن</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type_archive menu-item-object-menu menu-item-124">
                                                        <a href="menu/index.html">قائمة الطعام</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119">
                                                        <a href="branch/index.html">فروعنا</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121">
                                                        <a href="gallery/index.html">معرض الصور</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120">
                                                        <a href="contact/index.html">اتصل بنا</a>
                                                    </li>
                                                </ul>
                                                <ul class="social-f">


                                                    <li>
                                                        <a href="https://www.facebook.com/rand">
                                                            <i class="fab fa-facebook"></i>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a href="https://twitter.com/rand">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a href="https://www.instagram.com/rand">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>



                                                </ul>
                                            </div>
                                            <!-- End Col -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Footer-top -->

                            <!-- Start Footer-bottom -->
                            <div class="footer-bottom">
                                <div class="container">
                                    <div class="col-md-6 col-xs-12 padding">
                                        <p>
                                            © جميع الحقوق محفوظة لـ<a href="#"> الرندواليمامة</a> </p>
                                    </div>

                                </div>
                            </div>
                            <!-- End Footer-bottom -->
            </footer>
            <!-- End Footer -->

            </footer>
            <!-- End Footer -->




            <!-- Start Form Search -->
            <div class="site-search">
                <div class="site-search-inner">
                    <div class="widget woocommerce widget_product_search">
                        <form role="search" method="get" class="woocommerce-product-search"
                            action="https://rand.com/">
                            <label class="screen-reader-text" for="woocommerce-product-search-field-1">أبحث </label>
                            <input type="search" id="woocommerce-product-search-field-1" class="search-field"
                                placeholder="أبحث..." name="s">
                        </form>
                    </div>
                </div>
            </div>
            <!-- End -->

            <script src="{{ asset('../assets/js/jquery-1.11.0.min.js') }}"></script>
            <script src="{{ asset('../assets/js/bootstrap.js') }}"></script>
            <script src="{{ asset('../assets/js/owl.carousel.js') }}"></script>
            <script src="{{ asset('../assets/js/wow.min.js') }}"></script>
            <script src="{{ asset('../assets/js/responsiveCarousel.min.js') }}"></script>
            <script src="{{ asset('../assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
            <script src="{{ asset('../assets/js/jquery.counterup.min.js') }}"></script>
            <script src="{{ asset('../assets/js/waypoints.min.js') }}"></script>
            <script src="{{ asset('../assets/js/jquery.fancybox.min.js') }}"></script>
            <script src="{{ asset('../assets/js/countdown.js') }}"></script>
            <script src="{{ asset('../assets/js/java.js') }}"></script>
            <script>
                $(window).on("load", function() {
                    $(".sidess-s").addClass("animation");
                    $(".widthFull").addClass("widthMina");
                });
                $("#qtranslate-chooser li a").unwrap();
                $("#qtranslate-chooser").contents().unwrap();
                $(".qtranxs_text span").contents().unwrap();
                $(".qtranxs_text").addClass("lang");
                $(".qtranxs_text").append('<i class="fa fa-globe-americas"></i>');
                const productList = [{
                        id: 101,
                        product: "ماوس Logitech",
                        unitprice: 45.0
                    },
                    {
                        id: 102,
                        product: "لوحة مفاتيح Logitech",
                        unitprice: 50.0
                    },
                    {
                        id: 103,
                        product: "ماوس HP",
                        unitprice: 35.0
                    }
                ];
                setTimeout(function() {
                    $('#myToast').fadeOut();
                }, 5000);
            </script>
            @yield('scripts')



</body>

</html>
