@extends('Client.block.master')

@section('title')
    Sneakers - Thế Giới Giày
@endsection

@section('content')
    <!-- Start of Primary Slider Section -->
    <section class="primary-slider-section mb0 pos-r">
        <div id="primary_slider" class="swiper-container slider-type-1">

            <!-- Slides -->
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-img-wrapper">
                    <div class="slide-inner image-placeholder">
                        <img src="{{ asset('assets/sneakers/assets/images/slider/home-1/slide-1.jpg') }}"
                            class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-content layer-animation-1">
                                        <p class="promo-title"><span>Giới hạn</span>
                                            Ưu đãi giảm giá 20% trong tuần này</p>
                                        <h1 class="main-title"><span>VanhSneakers</span> <span>Giày Thể Thao 2024</span>
                                        </h1>
                                        <p class="subtitle">Thân giày được dệt kim nhẹ thích ứng với hình dạng bàn chân của
                                            bạn để chuyển động linh hoạt và tự nhiên.</p>
                                        <div class="slide-button">
                                            <a class="default-btn" href="shop-grid.html" title="Shop Now">Mua ngay</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->

                <div class="swiper-slide bg-img-wrapper">
                    <div class="slide-inner image-placeholder">
                        <img src="{{ asset('assets/sneakers/assets/images/slider/home-1/slide-2.jpg') }}"
                            class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-content layer-animation-2">
                                        <p class="promo-title"><span>Giới hạn</span> Ưu đãi giảm giá 20% trong tuần này</p>
                                        <h1 class="main-title"><span>VanhSneakers</span> <span>Cập Bến Giày Hot</span></h1>
                                        <p class="subtitle">
                                            Giày chạy bộ nam Nike Air Zoom Pegasus 34 có chất liệu Flymesh được cập nhật,
                                            nhẹ hơn giúp giảm nhiệt tích tụ khi bạn chạy.</p>
                                        <div class="slide-button">
                                            <a class="default-btn" href="shop-grid.html" title="Shop Now">Mua ngay</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->

                <div class="swiper-slide bg-img-wrapper">
                    <div class="slide-inner image-placeholder">
                        <img src="{{ asset('assets/sneakers/assets/images/slider/home-1/slide-3.jpg') }}"
                            class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slide-content white-scheme layer-animation-3">
                                        <p class="promo-title"><span>
                                                Giảm giá nóng</span>
                                            Ưu đãi giảm giá 60% trong tuần này</p>
                                        <h1 class="main-title"><span>
                                                Giảm giá 20% hàng đầu</span> <span>Tháng lịch sử đen tối</span></h1>
                                        <p class="subtitle">Bộ sưu tập phát triển mỗi năm với những câu chuyện nguyên bản và
                                            đặc điểm thiết kế chịu ảnh hưởng từ các nhân viên của Abalia.</p>
                                        <div class="slide-button">
                                            <a class="default-btn secondary" href="shop-grid.html" title="Shop Now">Mua
                                                ngay</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->
            </div> <!-- end of swiper-slide -->

            <!-- Slider Navigation -->
            <div class="swiper-arrow next slide"><i class="fa fa-angle-right"></i></div>
            <div class="swiper-arrow prev slide"><i class="fa fa-angle-left"></i></div>

            <!-- Slider Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- End of Primary Slider Section -->

    <!-- Start of Support Section -->
    <section class="support-section mb0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Miễn phí vận chuyển</h2>
                        <p>Miễn phí vận chuyển cho mọi đơn hàng</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Hoàn tiền</h2>
                        <p>30 ngày đổi trả miễn phí</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Hỗ trợ trực tuyến</h2>
                        <p>Hỗ trợ 24 giờ một ngày</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Ưu đãi &amp; Khuyến mãi</h2>
                        <p>Tiết kiệm giá, giảm giá, phiếu giảm giá</p>
                    </div>
                </div> <!-- end of feaure-box -->
            </div>
        </div>
    </section>
    <!-- End of Support Section -->

    <!-- Start of Banner Section -->
    <div class="banner-section mb-half">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="{{ asset('assets/sneakers/assets/images/banners/banner-1.jpg') }}" alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="{{ asset('assets/sneakers/assets/images/banners/banner-2.jpg') }}" alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="{{ asset('assets/sneakers/assets/images/banners/banner-3.jpg') }}" alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Banner Section -->

    <!-- Start of New Arrivals Section -->
    <section class="new-arrivals-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM MỚI NHẤT</h2>
                        <p class="subtitle">Mọi người có thể tự do chăm sóc bản thân khi tích lũy sự sống dưới chân hồ</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row product-row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="new-products pos-r">
                        <div class="element-carousel anime-element" data-visible-slide="4" data-loop="false"
                            data-space-between="0" data-speed="1000">

                            <!-- Slides -->
                            <div class="swiper-wrapper">
                                @foreach ($sneakers as $sneaker)
                                    <article class="swiper-slide product-layout">
                                        <div class="product-thumb">
                                            <div class="product-inner">
                                                <div class="product-image">
                                                    {{-- <div class="label-product label-sale">-20%</div> --}}
                                                    <div class="label-product label-new">New</div>
                                                    <a href="{{ route('sneakerDetail', $sneaker->slug) }}">
                                                        <img src="{{ explode(',', $sneaker->image)[0] }}"
                                                            alt="Compete Track Tote" title="Compete Track Tote">
                                                    </a>
                                                    <div class="action-links">
                                                        <a class="action-btn btn-cart" href="#"
                                                            title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                        <a class="action-btn btn-wishlist" href="#"
                                                            title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                        <a class="action-btn btn-compare" href="#"
                                                            title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                        <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                            data-bs-target="#product_quick_view" href="#"
                                                            title="Quick View"><i class="pe-7s-search"></i></a>
                                                    </div>
                                                </div> <!-- end of product-image -->

                                                <div class="product-caption">
                                                    <div
                                                        class="product-meta d-flex justify-content-between align-items-center">
                                                        <div class="product-manufacturer">
                                                            <a href="#">{{ $sneaker->category_name }}</a>
                                                        </div>
                                                        <div class="product-ratings">
                                                            <div class="rating-box">
                                                                <ul class="rating d-flex">
                                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                                    <li><i class="ion ion-md-star-outline"></i></li>
                                                                    <li><i class="ion ion-md-star-outline disabled"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="product-name"><a
                                                            href="single-product.html">{{ $sneaker->product_name }}</a>
                                                    </h4>
                                                    <p class="product-price">
                                                        {{-- <span class="price-old">{{ $sneaker->price }}</span> --}}
                                                        <span
                                                            class="price-new">{{ number_format($sneaker->price, 0, ',', '.') }}
                                                            VNĐ</span>
                                                    </p>
                                                </div><!-- end of product-caption -->
                                            </div><!-- end of product-inner -->
                                        </div><!-- end of product-thumb -->
                                    </article> <!-- end of product-layout -->
                                @endforeach
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Slider Navigation -->
                            <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                        </div> <!-- end of element-carousel -->
                    </div> <!-- end of new-products -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of New Arrivals Section -->

    <!-- Start of Promo Banner Section -->
    <section class="promo-banner-section bg-img-wrapper">
        <div class="image-placeholder pos-r">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="banner-with-text">
                            <img src="{{ asset('assets/sneakers/assets/images/backgrounds/bg-banner.jpg') }}"
                                class="visually-hidden" alt="Promo Banner">
                            <div class="promo-text">
                                <h1>Hurry Up!</h1>
                                <h2><span>Hurry Up!</span> Daily Deal Of The Day</h2>
                                <p>Abdul, a young, widowed Muslim man, needed to leave Syria and not be delayed by the
                                    authorities in getting to Europe. The best way to do this, he reasoned, was to acquire
                                    another family as cover, and he found one. It was all a sham, however, just a means to
                                    an end.</p>
                                <a href="#" class="default-btn large">Discover Now</a>
                            </div>
                        </div> <!-- end of promo-banner -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of image-placeholder -->
    </section>
    <!-- End of Promo Banner Section -->

    <!-- Start of Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title">
                        <h2>DANH MỤC CỦA TÔI</h2>
                        <p class="subtitle">Nếu anh ta có một khối lượng lớn, hoặc nếu anh ta mắc một căn bệnh nào đó ở cổ
                            họng, anh ta sẽ không thể làm được điều đó.</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row product-row">
                <div class="col-12 col-sm-12 col-md-12">

                    <!-- Nav Pills -->
                    <ul class="nav nav-pills justify-content-center" id="our_categories" role="tablist">
                        @foreach ($listCategories as $key => $cate)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                    id="nav_shop_{{ $cate->category_id }}" data-bs-toggle="pill"
                                    href="#shop_{{ $cate->category_id }}" role="tab"
                                    aria-controls="shop_{{ $cate->category_id }}"
                                    aria-selected="true">{{ $cate->category_name }}</a>
                            </li>
                        @endforeach
                    </ul> <!-- end of nav -->
                    <!-- Tab Contents -->
                    <div class="tab-content" id="our_categories_contents">
                        @foreach ($listCategories as $key => $cate)
                            <div class="tab-pane {{ $loop->first ? 'show active' : '' }} anime-tab" id="shop_{{ $cate->category_id }}" role="tabpanel" aria-labelledby="nav_shop_{{ $cate->category_id }}">
                                <div class="new-products pos-r">
                                    <div class="element-carousel" data-visible-slide="4" data-loop="false"
                                        data-space-between="0" data-speed="1000">

                                        <!-- Slides -->
                                        <div class="swiper-wrapper">
                                            @foreach ($listProductByCategories[$cate->category_id] as $pro)
                                                <article class="swiper-slide product-layout">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                {{-- <div class="label-product label-sale">-7%</div> --}}
                                                                <div class="label-product label-new">New</div>
                                                                <a href="{{ route('sneakerDetail', $pro->slug) }}">
                                                                    <img src="{{ explode(',', $pro->image)[0] }}"
                                                                        alt="Strive Shoulder Pack"
                                                                        title="Strive Shoulder Pack">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#"
                                                                        title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                                    <a class="action-btn btn-wishlist" href="#"
                                                                        title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                    <a class="action-btn btn-compare" href="#"
                                                                        title="Add to Compare"><i
                                                                            class="pe-7s-refresh-2"></i></a>
                                                                    <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                                        data-bs-target="#product_quick_view" href="#"
                                                                        title="Quick View"><i class="pe-7s-search"></i></a>
                                                                </div>
                                                            </div> <!-- end of product-image -->

                                                            <div class="product-caption">
                                                                <div
                                                                    class="product-meta d-flex justify-content-between align-items-center">
                                                                    <div class="product-manufacturer">
                                                                        <a href="{{ route('sneakerDetail', $pro->slug) }}">{{ $pro->category_name }}</a>
                                                                    </div>
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex">
                                                                                <li><i class="ion ion-md-star-outline"></i>
                                                                                </li>
                                                                                <li><i class="ion ion-md-star-outline"></i>
                                                                                </li>
                                                                                <li><i class="ion ion-md-star-outline"></i>
                                                                                </li>
                                                                                <li><i class="ion ion-md-star-outline"></i>
                                                                                </li>
                                                                                <li><i class="ion ion-md-star-outline"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="{{ route('sneakerDetail', $pro->slug) }}">{{ $pro->product_name }}</a></h4>
                                                                <p class="product-price">
                                                                    {{-- <span class="price-old">$76.40</span> --}}
                                                                    <span class="price-new">{{ number_format($pro->price, 0, ',', '.') }} VNĐ</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </article> <!-- end of product-layout -->
                                            @endforeach
                                            
                                        </div> <!-- end of swiper-wrapper -->

                                        <!-- Slider Navigation -->
                                        <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                        <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                    </div> <!-- end of element-carousel -->
                                </div> <!-- end of new-products -->
                            </div> <!-- end of tab-pane -->
                        @endforeach
                    </div> <!-- end of tab-content -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of Categories Section -->

    <!-- Start of Instagram Section -->
    <section class="instagram-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title type-2 pt-full top-bordered">
                        <h2>Theo dõi chúng tôi trên Instagram</h2>
                        <p class="subtitle">Điều này giúp bạn có thể sớm biết được những sản phẩm mới về shop.</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="instagram-container">
                        <!-- Slides -->
                        <div id="instagram_feed" class="swiper-wrapper image-popup">
                        </div>
                        <!-- end of swiper-wrapper -->
                    </div> <!-- end of instagram-carousel -->
                    <div class="follow-link">
                        <a href="https://www.instagram.com/themeitems/" target="_blank">THEO DÕI INSTAGRAM </a>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of Instagram Section -->
@endsection
