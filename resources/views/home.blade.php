@extends('layouts.weblayout')
@section('title', 'مطاعم الرند واليمامة')


@section('content')
    @php
        if (auth()->check() && request()->exists('table')) {
            auth()->logout();
        }
        if (request()->missing('table')){
            session()->forget('cart');
        }
    @endphp

    <!-- Start Slider Home -->
    <section class="banner-b" style="background-image: url('{{ asset('../assets/image/unnamed.jpg') }}')">
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
            <div class="img" style="background-image: url({{ asset('../assets/image/hero.png') }})">
                <img src="{{ asset('../assets/image/image.png') }}" />
            </div>
        </div>
    </section>

    <!-- Start Courses-m -->
    <section class="courses-m" id="menu">
        <div class="container">
            <div class="col-xs-12">
                <div class="title">
                    <h3> قائمة الطعام</h3>
                </div>
            </div>
            <div class="col-xs-12 padding">
                <div class="col-xs-12">

                    <ul class="nav-tabs wow fadeIn">
                        @php($first = true)
                        @foreach ($categories as $category)
                            <li @if ($first) class="active" @endif><a data-toggle="tab" href="#"
                                    data-target="#sec{{ $category->id }}">{{ $category->name }}</a></li>
                            @php($first = false)
                        @endforeach

                    </ul>

                    <div class="col-xs-12 padding">
                        @php($first = true)
                        <div class="tab-content">
                            @foreach ($categories as $category)
                                <!-- Start Tab1 -->

                                <div id="sec{{ $category->id }}"
                                    class="tab-pane fade @if ($first) active in @endif ">
                                    @php($first = false)
                                    @foreach ($category->products as $product)
                                        <div class="col-md-4 col-xs-12 wow fadeIn" data-wow-duration="1.1s"
                                            data-wow-delay=".3s">
                                            <a class="block-courses" data-toggle="modal"
                                                data-target="#addToCartModal{{ $product->id }}">
                                                <div class="img"
                                                    style="background-image: url({{ asset($product->image) }})"
                                                    loading="lazy">
                                                </div>
                                                <div class="details">
                                                    <div class="col-md-5 col-xs-12">
                                                        @if ($product->hasDiscount())
                                                            <div class="price-m">
                                                                <s class="text-danger">{{ $product->price }}</s>
                                                                <span>{{ $product->discounted_price }} ل.س</span>
                                                            </div>
                                                        @else
                                                            <div class="price-m">
                                                                <span>{{ $product->price }} ل.س</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-7 col-xs-12">
                                                        <div class="name-course">
                                                            <h4>{{ $product->name }}</h4>
                                                            <p>
                                                                {{ $product->discription }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- The Modal -->
                                            <div class="modal" id="addToCartModal{{ $product->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ADD TO CART</h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <form method="POST"
                                                            action="{{ auth()->check() ? route('cart.store', ['product' => $product->id]) : route('cart.add', ['product' => $product->id]) }}">
                                                            @csrf
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <div class="row">

                                                                    Quantity
                                                                    <input type="number" class="form-control"
                                                                        placeholder="Enter quantity" name="quantity"
                                                                        min="0" max="25" value=1>
                                                                </div>
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-info">Add</button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Courses-m -->
    <!-- Start Gallary-m -->
    <section class="gallary-m" id="image-gallary">
        <div class="container">
            <div class="col-xs-12">
                <div class="title">
                    <h3>معرض الصور</h3>
                </div>
            </div>
            <div class="col-xs-12 padding">

                @foreach ($images as $image)
                    <div class="col-md-4 col-xs-12">
                        <img src="{{ $image->image }}" class="img" alt="">
                    </div>
                @endforeach

                {{-- <div class="col-md-4 col-xs-12">
                    <a href="assets/images/image.png" data-fancybox="gallery" class="block-gallery small wow fadeIn">
                        <div class="img" style="background-image: url(assets/images/image.png)"></div>
                    </a>
                    <a href="assets/images/مقبلات-مشكله.jpg">
                        <div class="img" style="background-image: url(assets/images/مقبلات-مشكله.jpg)"></div>
                    </a>
                </div> --}}
                {{-- <div class="col-md-4 col-xs-12">
                    <a href="assets/images/سلطة-خضراء.jpg" data-fancybox="gallery" class="block-gallery">
                        <div class="img" style="background-image: url(assets/images/سلطة-خضراء.jpg)"></div>
                    </a>
                </div> --}}
            </div>
            {{-- 
            <div class="col-xs-12">
                <a href="gallery/index.html" class="btn">المزيد</a>
            </div> --}}

        </div>
    </section>
    <!-- End Gallary-m -->

    <!-- Start Client-m -->
    <section class="client-m" id="feedbacks">
        <div class="container">
            <div class="col-xs-12">
                <div class="title">
                    <h3>اراء العملاء</h3>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="img-client">
                    <img src="{{ asset('assets/image/client.png') }}" />
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="client-slider owl-carousel owl-theme">
                    @foreach ($feedbacks as $feedback)
                        <div class="item">
                            <div class="client-block">
                                <div class="title-client">
                                    <div class="icon"><span>"</span></div>
                                    <div class="name-client">{{$feedback->user->name}}</div>
                                </div>
                                <div class="body-block">
                                    <p> {{$feedback->feedback}} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            @auth
                <div class="col-xs-12">
                    <div class="border p-2 mt-3">
                        <form action="{{ route('feedback.store') }}" method="post">
                            @csrf
                            شاركنا رأيك
                            <textarea name="feedback" class="form-control" cols="10" rows="5"></textarea>
                            <button class="btn btn-secondary" type="submit">إرسال</button>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </section>
    <!-- End Client-m -->



@endsection

@section('scripts')

@endsection
