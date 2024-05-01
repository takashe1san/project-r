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
    <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('../assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../assets/css/mobile.css') }}" rel="stylesheet" type="text/css" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <meta name="generator" content="WordPress 6.3.2" />
    <style type="text/css">
        .qtranxs_flag_ar {
            background-image: url(wp-content/plugins/qtranslate-xt-master/flags/arle.png);
            background-repeat: no-repeat;
        }

        .qtranxs_flag_en {
            background-image: url(wp-content/plugins/qtranslate-xt-master/flags/gb.png);
            background-repeat: no-repeat;
        }
    </style>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body data-rsssl=1>
    <!-- Start Loader -->
    <!-- <div class="loader">
        <div class="img-load"></div>
    </div> -->
    <!-- End Loader -->
    <header class="head-top">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-8">
                <div class="icons">
                    {{-- <span><a href="{{ route('web.login') }}"><i class="fa fa-user" aria-hidden="true"></i></a></span> --}}
                    <span><a href="your-order.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></span>
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
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-276">
                                <a href="" aria-current="page">الرئيسية</a>
                            </li>
                            <li id="menu-item-118"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118">
                                {{-- <a href="{{ route('web.about.index') }}">من نحن</a></li> --}}
                            <li id="menu-item-124"
                                class="menu-item menu-item-type-post_type_archive menu-item-object-menu menu-item-124">
                                <a href="menu-all.html">قائمة الطعام</a>
                            </li>
                            <li id="menu-item-119"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119">
                                <a href="branches.html">فروعنا</a>
                            </li>
                            <li id="menu-item-121"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121">
                                <a href="photo-galary.html">معرض الصور</a>
                            </li>
                            <li id="menu-item-120"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120">
                                <a href="contact.html">اتصل بنا</a>
                            </li>
                        </ul>
                        <div class="navbar-left two">
                            <div class="btn-more-menu">
                                <button class="btn-menu open-sidebar"><i class="fa fa-th"></i></button>
                            </div>
                        </div>
                        <div class="navbar-left">
                            <div class="Lang-b">
                                <a href="order/index.html" class="btn">أحجز طلبك</a>
                            </div>
                        </div>
                    </div>
                    <!-- Satrt Responsive -->
                    <div class="responsive">
                        <div class="col-xs-6">
                            <a href="order/index.html" class="btn">أحجز طلبك</a>
                        </div>
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
                                    <a href="index.html">الرئيسية</a>
                                </li>
                                <li>
                                    <a href="about-us.html">من نحن</a>
                                </li>
                                <li>
                                    <a href="menu/index.html">قائمة الطعام</a>
                                </li>
                                <li>
                                    <a href="branch/index.html">فروعنا</a>
                                </li>
                                <li>
                                    <a href="gallery/index.html">معرض الصور</a>

                                </li>
                                <li>
                                    <a href="contact/index.html">اتصل بنا</a>
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
                                            Info@.com </span>
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
                            <div class="title-follow">
                                <span>موقعنا</span>
                            </div>
                            <!-- End -->
                            <!-- Start Map-sidebar -->
                            <div class="map-sidebar">
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d926499.5318243024!2d46.490958279802825!3d24.89324685088861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2YXYt9i52YUg2LDZiNmCINin2YTYr9mK2LHYqQ!5e0!3m2!1sar!2ssa!4v1580156543576!5m2!1sar!2ssa" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                             -->
                            </div>
                            <!-- End -->

                        </div>
                    </div>

                    <div class="col-md-4 col-xs-12">
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

                    </div>
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
                                                        <a href="index.html" aria-current="page">الرئيسية</a></li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118">
                                                        <a href="about/index.html">من نحن</a></li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type_archive menu-item-object-menu menu-item-124">
                                                        <a href="menu/index.html">قائمة الطعام</a></li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119">
                                                        <a href="branch/index.html">فروعنا</a></li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121">
                                                        <a href="gallery/index.html">معرض الصور</a></li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120">
                                                        <a href="contact/index.html">اتصل بنا</a></li>
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
            </script>
            @yield('scripts')



</body>

</html>
