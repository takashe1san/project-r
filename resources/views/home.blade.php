@extends('layouts.weblayout')
@section('title', 'مطاعم الرند واليمامة')
{{-- مطاعم الرند واليمامة
@endsection --}}

@section('content')

    <!-- Start Slider Home -->
    <section class="banner-b" style="background-image: url('{{asset('../assets/image/unnamed.jpg')}}')">
    <div class="container">
        <div class="col-xs-12">
            <div class="text-banner">
                <span>نرحب بكم في</span>
                <h1>مطاعم الرند و اليمامة</h1>
                <p>نحن نعمل على اختيار أفضل اللحوم والمكونات حرصاً على تقديم أشهى المأكولات لعملائنا.</p>
                <a href="about-us.html" class="btn">إقرء المزيد</a>
            </div>
        </div>
    </div>
    <div class="img-banner">
        <div class="img" style="background-image: url({{asset('../assets/image/hero.png')}})">
        <img src="{{asset('../assets/image/image.png')}}" />
    </div>
    </div>
    </section>

    <!-- Start Courses-m -->
    <section class="courses-m">
        <div class="container">
            <div class="col-xs-12">
                <div class="title">
                    <h3> قائمة الطعام</h3>
                </div>
            </div>
            <div class="col-xs-12 padding">
                <div class="col-xs-12">

                    <ul class="nav-tabs wow fadeIn">

                        <li class="active"><a data-toggle="tab" href="#" data-target="#sec1">الدجاج والارز</a></li>


                        <li><a data-toggle="tab" href="#" data-target="#sec2">اللحوم</a></li>


                        <li><a data-toggle="tab" href="#" data-target="#sec3">المشويات</a></li>


                        <li><a data-toggle="tab" href="#" data-target="#sec4">الإيدامات والشعبيات</a></li>


                        <li><a data-toggle="tab" href="#" data-target="#sec5">السلطات والمقبلات</a></li>


                        <li><a data-toggle="tab" href="#" data-target="#sec6">الحلا والكنافة</a></li>


                        <li><a data-toggle="tab" href="#" data-target="#sec7">المشروبات</a></li>


                    </ul>
                </div>
                <div class="col-xs-12 padding">
                    <div class="tab-content">
                        <!-- Start Tab1 -->

                        <div id="sec1" class="tab-pane fade active in ">
                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d8%af%d8%ac%d8%a7%d8%ac-%d8%b9%d9%84%d9%89-%d8%a7%d9%84%d9%81%d8%ad%d9%85/index.html"
                                    class="block-courses">
                                    <div class="img" style="background-image: url(assets/images/chickin-on-coal.jpg)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">

                                            <div class="price-m">
                                                <span>40000 ل.س</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> دجاج على الفحم</h4>
                                                <p>
                                                    دجاج طازج من إنتاج مزارع الوطنية . حبة دجاج على الفحم 44 ريال, 1626 سعرة
                                                    حرارية. نصف دجاج على الفحم... </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-xs-12">
                                <a href="menu_cat/%d8%a7%d9%84%d8%ad%d9%84%d8%a7-%d9%88%d8%a7%d9%84%d9%83%d9%86%d8%a7%d9%81%d8%a9/index.html"
                                    class="btn-more wow fadeInUp">

                                    <span>
                                        <i>المز</i>
                                        يد
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div id="sec7" class="tab-pane fade  ">



                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d8%af%d9%8a%d9%88-%d9%85%d8%a7%d9%88%d9%86%d9%8a%d9%8a%d9%86-%d9%88%d8%b3%d8%b7/index.html"
                                    class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/11/KI96qTSLG9eyCWdUaNcHUd6LfXnP90LsxLnhUIWv.png)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 5 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> ديو ماونيين وسط</h4>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d8%ad%d9%85%d8%b6%d9%8a%d8%a7%d8%aa-%d9%88%d8%b3%d8%b7/index.html"
                                    class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/11/%d8%ad%d9%85%d8%b6%d9%8a%d8%a7%d8%aa-1-%d9%84%d8%aa%d8%b1-700x700-1.jpg)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 5 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> حمضيات وسط</h4>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d8%a8%d9%8a%d8%a8%d8%b3%d9%8a-%d9%88%d8%b3%d8%b7/index.html"
                                    class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/11/1623082811_9759_large_321536.jpg)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 5 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> بيبسي وسط</h4>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d9%85%d9%80%d9%80%d9%80%d8%a7%d8%a1/index.html" class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/10/29385.jpg)"></div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 0.5 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> مـــاء</h4>
                                                <p>
                                                    مـاء ---------------------------------------------- نصف ريال
                                                    مــاء-------------------------------------------------- 1 ريال </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d8%b3%d9%81%d9%86-%d8%a7%d8%a8-%d8%b9%d8%a7%d8%a6%d9%84%d9%8a/index.html"
                                    class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/10/%d8%b3%d9%81%d9%86-%d8%a7%d8%a8-%d8%b9%d8%a7%d8%a6%d9%84%d9%8a.jpg)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 9 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> سفن اب عائلي</h4>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d8%ad%d9%85%d8%b6%d9%8a%d8%a7%d8%aa-%d8%b9%d8%a7%d8%a6%d9%84%d9%8a/index.html"
                                    class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/10/%d8%ad%d9%85%d8%b6%d9%8a%d8%a7%d8%aa-%d8%b9%d8%a7%d8%a6%d9%84%d9%8a.jpg)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 9 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> حمضيات عائلي</h4>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d8%a8%d9%8a%d8%a8%d8%b3%d9%8a-%d8%b9%d8%a7%d8%a6%d9%84%d9%8a/index.html"
                                    class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/10/%d8%a8%d9%8a%d8%a8%d8%b3%d9%8a-%d8%b9%d8%a7%d8%a6%d9%84%d9%8a.jpg)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 9 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> بيبسي عائلي</h4>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d9%85%d9%8a%d8%b1%d9%86%d8%af%d8%a7-%d8%a8%d8%b1%d8%aa%d9%82%d8%a7%d9%84-%d8%b5%d8%ba%d9%8a%d8%b1/index.html"
                                    class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/10/%d9%85%d9%8a%d8%b1%d9%86%d8%af%d8%a7-%d8%a8%d8%b1%d8%aa%d9%82%d8%a7%d9%84.jpg)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 3 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> ميرندا برتقال صغير</h4>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s" data-wow-delay=".3s">
                                <a href="menu/%d9%85%d8%a7%d9%88%d9%86%d8%aa%d9%86-%d8%af%d9%8a%d9%88-%d8%b5%d8%ba%d9%8a%d8%b1/index.html"
                                    class="block-courses">
                                    <div class="img"
                                        style="background-image: url(wp-content/uploads/2021/10/%d8%af%d9%8a%d9%88-%d8%b5%d8%ba%d9%8a%d8%b1.jpg)">
                                    </div>
                                    <div class="details">
                                        <div class="col-md-5 col-xs-12">
                                            <div class="time-m">
                                                <i class="far fa-clock"></i>

                                                <h4>
                                                    <!--    <div class="comingsoon-countdown timer-r" countdown data-date="dec 12 2019 12:00:00"> -->
                                                    <div class="comingsoon-countdown timer-r" countdown
                                                        data-date="2021-09-11 01:04:00">
                                                        <div class="hu"> <i data-hours>0</i> <span> </span> </div>
                                                        <div class="mu"> <i data-minutes>0</i> <span> </span> </div>
                                                        <div class="se"> <i data-seconds>0</i> <span> </span> </div>
                                                    </div>
                                                    <i>
                                                        متبقي </i>
                                                </h4>
                                            </div>
                                            <div class="price-m">
                                                <span> 3 ريال</span>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <div class="name-course">
                                                <h4> ماونتن ديو صغير</h4>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-12">
                                <a href="menu_cat/%d8%a7%d9%84%d9%85%d8%b4%d8%b1%d9%88%d8%a8%d8%a7%d8%aa/index.html"
                                    class="btn-more wow fadeInUp">

                                    <span>
                                        <i>المز</i>
                                        يد
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Courses-m -->
    <!-- Start Gallary-m -->
    <section class="gallary-m">
        <div class="container">
            <div class="col-xs-12">
                <div class="title">
                    <h3>معرض الصور</h3>
                </div>
            </div>
            <div class="col-xs-12 padding">

                <div class="col-md-4 col-xs-12">
                    <a href="assets/images/123.png" data-fancybox="gallery" class="block-gallery">
                        <div class="img" style="background-image: url(assets/images/123.png)"></div>
                    </a>
                </div>

                <div class="col-md-4 col-xs-12">
                    <a href="assets/images/image.png" data-fancybox="gallery" class="block-gallery small wow fadeIn">
                        <div class="img" style="background-image: url(assets/images/image.png)"></div>
                    </a>
                    <a href="assets/images/مقبلات-مشكله.jpg">
                        <div class="img" style="background-image: url(assets/images/مقبلات-مشكله.jpg)"></div>
                    </a>
                </div>
                <div class="col-md-4 col-xs-12">
                    <a href="assets/images/سلطة-خضراء.jpg" data-fancybox="gallery" class="block-gallery">
                        <div class="img" style="background-image: url(assets/images/سلطة-خضراء.jpg)"></div>
                    </a>
                </div>
            </div>

            <div class="col-xs-12">
                <a href="gallery/index.html" class="btn">المزيد</a>
            </div>

        </div>
    </section>
    <!-- End Gallary-m -->

    <!-- Start Client-m -->
    <section class="client-m">
        <div class="container">
            <div class="col-xs-12">
                <div class="title">
                    <h3>اراء العملاء</h3>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="img-client">
                    <img src="{{asset('../assets/image/client.png')}}" />
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="client-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="client-block">
                            <div class="title-client">
                                <div class="icon"><span>"</span></div>
                                <div class="name-client">محمد الشهرى</div>
                            </div>
                            <div class="body-block">
                                <p>
                                    بصراحة طبخ أكثر من رائع وخدمة مميزة . </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-block">
                            <div class="title-client">
                                <div class="icon"><span>"</span></div>
                                <div class="name-client">حسام الدين</div>
                            </div>
                            <div class="body-block">
                                <p>
                                    مطعم رائع ومميز
                                    وكذلك عندهم جودة ممتازة . </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-block">
                            <div class="title-client">
                                <div class="icon"><span>"</span></div>
                                <div class="name-client">ابراهيم عبدالله</div>
                            </div>
                            <div class="body-block">
                                <p>
                                    انا عميل لديهم منذ مدة
                                    واكلهم اكثر من رائع. </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-block">
                            <div class="title-client">
                                <div class="icon"><span>"</span></div>
                                <div class="name-client">ابو محمد السهلي</div>
                            </div>
                            <div class="body-block">
                                <p>
                                    يعطيهم العافيه بصراحة طبخهم ممتاز مرة واسعار معقولة </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Client-m -->



@endsection

@section('scripts')

@endsection
