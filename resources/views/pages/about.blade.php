@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Tentang Kami | Niotech')
@section('meta_description', 'Tentang Kami | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>About Us</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a>About Us
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section S T A R T -->
    <section class="about-section section-padding fix">
        <div class="about-container-wrapper style1">
            <div class="container">
                <div class="about-wrapper style1">
                    <div class="row gy-5 gx-60">
                        <div class="col-xl-6">
                            <div class="about-thumb">
                                <div class="bg"></div>
                                <div class="thumbShape1 d-none d-xxl-block cir36"><img
                                        src="{{ asset('assets/images/shape/aboutThumbShape1_1.png') }}" alt="shape"></div>
                                <div class="thumbShape2 d-none d-xxl-block cir36"><img
                                        src="{{ asset('assets/images/shape/aboutThumbShape1_2.png') }}" alt="shape"></div>
                                <div class="thumbShape3 d-none d-xxl-block cir36 float-bob-y"><img
                                        src="{{ asset('assets/images/shape/aboutThumbShape1_3.png') }}" alt="shape"></div>
                                <div class="thumbShape4 d-none d-xxl-block cir36"><img
                                        src="{{ asset('assets/images/shape/aboutThumbShape1_4.png') }}" alt="shape"></div>
                                <div class="main-thumb">
                                    <img src="{{ asset('assets/images/about/aboutThumb1_1.png') }}" alt="thumb">
                                </div>
                                <div class="absolute-thumb float-bob-x">
                                    <img src="{{ asset('assets/images/about/aboutThumb1_2.png') }}" alt="thumb">
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                        About Our App <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                    </div>
                                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Simple Reports & Analytics
                                        Backdown As it</h2>
                                    <p class="section-desc wow fadeInUp" data-wow-delay=".6s">There are many variations
                                        of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are going to use</p>
                                </div>
                                <ul class="checklist style1 wow fadeInUp" data-wow-delay=".2s">
                                    <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon"> With our
                                        Technological and Marketing Solutions.</li>
                                    <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon"> We are trusted all
                                        over the world. </li>
                                    <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon"> Start Your 14 Days
                                        Free Trials Today! </li>
                                </ul>
                                <a class="theme-btn wow fadeInUp" data-wow-delay=".2s" href="{{ route('about') }}">Discover More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <g clip-path="url(#clip0_18_41)">
                                            <path
                                                d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_18_41">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section S T A R T -->
    <section class="wcu-section">
        <div class="wcu-container-wrapper style2">
            <div class="container">
                <div class="wcu-wrapper style2  section-padding fix">
                    <div class="container">
                        <div class="row gy-5 gx-60 d-flex align-items-center">
                            <div class="col-xl-6">
                                <div class="wcu-thumb">
                                    <div class="main-thumb img-custom-anim-right wow fadeInUp" data-wow-delay=".4s">
                                        <img src="{{ asset('assets/images/wcu/wcuThumb2_1.png') }}" alt="thumb">
                                    </div>
                                    <div class="thumb2 float-bob-y"><img src="{{ asset('assets/images/wcu/wcuThumb2_2.png') }}"
                                            alt="thumb"></div>
                                    <div class="thumb3 float-bob-x"><img src="{{ asset('assets/images/wcu/wcuThumb2_3.png') }}"
                                            alt="thumb"></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="wcu-content">
                                    <div class="section-title">
                                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                            Customizations & Analysis <img src="{{ asset('assets/images/icon/fireIcon.svg') }}"
                                                alt="icon">
                                        </div>
                                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">Manage your Team’s Easily
                                            Communication.</h2>
                                        <p class="text1 wow fadeInUp" data-wow-delay=".6s">There are many variations of
                                            passages of Lorem Ipsum available, but the majority have suffered alteration
                                            in some form, by injected humour, or randomised words which don't look even
                                        </p>
                                    </div>
                                    <div class="fancy-box style3 mb-20 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/wcuIcon2_1.svg') }}" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h4>Easy Collaboration</h4>
                                            <p class="text">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have</p>
                                        </div>
                                    </div>
                                    <div class="fancy-box style3 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/wcuIcon2_2.svg') }}" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h4>Innovative Solutions</h4>
                                            <p class="text">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section S T A R T -->
    <section class="work-process-section section-padding fix">
        <div class="work-process-container-wrapper style1">
            <div class="container">
                <div class="section-title text-center mxw-565 mx-auto">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                        How It Work <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Make Your Device Manage Everything For You!</h2>
                </div>
                <div class="work-process-wrapper style1">
                    <div class="shape"><img src="{{ asset('assets/images/shape/workProcessShape1_1.png') }}" alt="shape"></div>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="work-process-box style1 wow fadeInUp" data-wow-delay=".2s">
                                <div class="step">STEP - 01</div>
                                <div class="title">Download App</div>
                                <div class="text">There are many variations of passages of Lorem</div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="work-process-box style1 child2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="step">STEP - 02</div>
                                <div class="title">Create account</div>
                                <div class="text">There are many variations of passages of Lorem</div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="work-process-box style1 wow fadeInUp" data-wow-delay=".6s">
                                <div class="step">STEP - 03</div>
                                <div class="title">Install App, & Enjoy</div>
                                <div class="text">There are many variations of passages of Lorem</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section S T A R T -->
    <section class="wcu-section section-padding pt-0 fix">
        <div class="wcu-container-wrapper style3">
            <div class="container">
                <div class="wcu-wrapper style3">
                    <div class="row gy-5 gx-60">
                        <div class="col-xl-6">
                            <div class="wcu-content">
                                <div class="section-title">
                                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                        Customizations & Analysis <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                    </div>
                                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Manage your Traffic Growth
                                        Easily</h2>
                                    <p class="text1 wow fadeInUp" data-wow-delay=".6s">There are many variations of
                                        passages of Lorem Ipsum available, but the majority have suffered alteration in
                                        some form, by injected humour, or randomised words which don't look even</p>
                                    <p class="text2 wow fadeInUp" data-wow-delay=".8s">There are many variations of
                                        passages of Lorem Ipsum available, but the majority have suffered alteration in
                                        some form,</p>
                                </div>
                                <a class="theme-btn rounded-5 wow fadeInUp" data-wow-delay=".4s" href="{{ route('about') }}">View
                                    All Project
                                    <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 16 16" fill="none">
                                        <g clip-path="url(#clip0_190_64)">
                                            <path
                                                d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_190_64">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <div class="counter-box-wrapper style3">
                                    <div class="counter-box style3 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="counter">
                                            <span class="counter-nubmer">56</span> <span>k+</span>
                                        </div>
                                        <p class="text">Comparers</p>
                                    </div>
                                    <div class="counter-box style3 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="counter">
                                            <span class="counter-nubmer">126</span> <span>k+</span>
                                        </div>
                                        <p class="text">Use People</p>
                                    </div>
                                    <div class="counter-box style3 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="counter">
                                            <span class="counter-nubmer">1.2</span> <span>M+</span>
                                        </div>
                                        <p class="text">Download It</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="wcu-thumb">
                                <div class="main-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".4s">
                                    <img src="{{ asset('assets/images/wcu/wcuThumb3_1.png') }}" alt="thumb">
                                </div>
                                <div class="thumb2">
                                    <img src="{{ asset('assets/images/wcu/wcuThumb3_2.png') }}" alt="thumb">
                                </div>
                                <div class="thumb-box wow fadeInUp" data-wow-delay=".4s">
                                    <h5>Traffic Growth</h5>
                                    <p class="text">Total traffic growth of 45%</p>
                                    <div class="shape-box">
                                        <img src="{{ asset('assets/images/shape/wcuThumbShape3_1.png') }}" alt="shape">
                                        <div class="shape-content">
                                            <h6>Transaction</h6>
                                            <h3>86%</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial Section S T A R T -->
    <section class="testimonial-section section-padding pt-0 fix">
        <div class="container">
            <div class="testimonial-wrapper style3">
                <div class="section-title-wrapper style3">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-6">
                            <div class="section-title">
                                <div class="subtitle">
                                    Testimonial <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title">What our clients say?</h2>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="slider-arrow-button style2 text-end wow fadeInUp" data-wow-delay=".9s">
                                <button data-slider-prev="#testimonialSliderThree" class="slider-arrow arrowPrev"><i
                                        class="fa-sharp fa-solid fa-chevron-left"></i></button>
                                <button data-slider-next="#testimonialSliderThree" class="slider-arrow arrowNext"><i
                                        class="fa-sharp fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-area testimonialSliderThree">
                    <div class="swiper gt-slider" id="testimonialSliderThree"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card style2">
                                    <div class="testimonial-header">
                                        <div class="profile-thumb">
                                            <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_1.jpg') }}"
                                                alt="thumb">
                                        </div>
                                        <div class="content">
                                            <h5>Jacob Jones</h5>
                                            <p class="text">Team Leader</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <ul class="star-wrapper style1">
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                        </ul>
                                        <p class="desc">There are many variations of passages of Lorem Ipsum
                                            available,a but
                                            chiropractor like majority have a suffered alteration in some form,
                                            by injected humour,</p>
                                    </div>
                                    <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style2">
                                    <div class="testimonial-header">
                                        <div class="profile-thumb">
                                            <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_2.jpg') }}"
                                                alt="thumb">
                                        </div>
                                        <div class="content">
                                            <h5>Selim Box</h5>
                                            <p class="text">Team Leader</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <ul class="star-wrapper style1">
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                        </ul>
                                        <p class="desc">There are many variations of passages of Lorem Ipsum
                                            available,a but
                                            chiropractor like majority have a suffered alteration in some form,
                                            by injected humour,</p>
                                    </div>
                                    <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style2">
                                    <div class="testimonial-header">
                                        <div class="profile-thumb">
                                            <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_3.jpg') }}"
                                                alt="thumb">
                                        </div>
                                        <div class="content">
                                            <h5>Masirul Islam</h5>
                                            <p class="text">Team Leader</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <ul class="star-wrapper style1">
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                        </ul>
                                        <p class="desc">There are many variations of passages of Lorem Ipsum
                                            available,a but
                                            chiropractor like majority have a suffered alteration in some form,
                                            by injected humour,</p>
                                    </div>
                                    <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style2">
                                    <div class="testimonial-header">
                                        <div class="profile-thumb">
                                            <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_1.jpg') }}"
                                                alt="thumb">
                                        </div>
                                        <div class="content">
                                            <h5>Jacob Jones</h5>
                                            <p class="text">Team Leader</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <ul class="star-wrapper style1">
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                        </ul>
                                        <p class="desc">There are many variations of passages of Lorem Ipsum
                                            available,a but
                                            chiropractor like majority have a suffered alteration in some form,
                                            by injected humour,</p>
                                    </div>
                                    <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style2">
                                    <div class="testimonial-header">
                                        <div class="profile-thumb">
                                            <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_1.jpg') }}"
                                                alt="thumb">
                                        </div>
                                        <div class="content">
                                            <h5>Jacob Jones</h5>
                                            <p class="text">Team Leader</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <ul class="star-wrapper style1">
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                        </ul>
                                        <p class="desc">There are many variations of passages of Lorem Ipsum
                                            available,a but
                                            chiropractor like majority have a suffered alteration in some form,
                                            by injected humour,</p>
                                    </div>
                                    <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card style2">
                                    <div class="testimonial-header">
                                        <div class="profile-thumb">
                                            <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_1.jpg') }}"
                                                alt="thumb">
                                        </div>
                                        <div class="content">
                                            <h5>Jacob Jones</h5>
                                            <p class="text">Team Leader</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <ul class="star-wrapper style1">
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                            <li><img src="{{ asset('assets/images/icon/starIcon1_1.svg') }}" alt="icon"></li>
                                        </ul>
                                        <p class="desc">There are many variations of passages of Lorem Ipsum
                                            available,a but
                                            chiropractor like majority have a suffered alteration in some form,
                                            by injected humour,</p>
                                    </div>
                                    <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}" alt="icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
