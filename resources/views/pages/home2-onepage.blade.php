@extends('layouts.app', [
    'headerVariant' => 'home2-onepage',
    'footerVariant' => 'default',
])

@section('title', 'Beranda Two Page | Niotech')
@section('meta_description', 'Beranda Two Page | Niotech')

@section('content')
<!-- Intro Section S T A R T -->
    <section class="intro-section">
        <div class="intro-container-wrapper style2 section-padding pt-0">
            <div class="intro-wrapper style2" data-bg-src="{{ asset('assets/images/bg/introBg2_1.png') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="intro-content">
                                <div class="intro-section-title">
                                    <div class="intro-subtitle wow fadeInUp" data-wow-delay=".4s">
                                        <span>News!</span>Find Your Solution <img src="{{ asset('assets/images/icon/fireIcon.svg') }}"
                                            alt="icon">
                                    </div>
                                    <h1 class="intro-title wow fadeInUp" data-wow-delay=".2s">Effortless Resolutions
                                        Infinite Opportunities.</h1>
                                </div>
                                <div class="btn-wrapper style1 wow fadeInUp" data-wow-delay=".2s">
                                    <a class="theme-btn" href="{{ route('contact.index') }}">Get Started Now
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_141_224)">
                                                <path
                                                    d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_141_224">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a class="theme-btn style3 wow fadeInUp" data-wow-delay=".2s" href="{{ route('about') }}">
                                        Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_141_223)">
                                                <path
                                                    d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_141_223">
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

            <div class="thumb-box">
                <div class="main-thumb">
                    <img class="img-custom-anim-left wow fadeInUp" data-wow-delay=".2s"
                        src="{{ asset('assets/images/intro/introThumb2_1.png') }}" alt="thumb">
                    <div class="thumb1 float-bob-y">
                        <img src="{{ asset('assets/images/intro/introThumb2_2.png') }}" alt="thumb">
                    </div>
                    <div class="thumb2 float-bob-x">
                        <img src="{{ asset('assets/images/intro/introThumb2_3.png') }}" alt="thumb">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section S T A R T -->
    <section class="about-section" id="about">
        <div class="about-container-wrapper style2">
            <div class="container">
                <div class="about-wrapper style2  section-padding fix">
                    <div class="container">
                        <div class="row gy-5 gx-60 d-flex align-items-center">
                            <div class="col-xl-6 order-2 order-xl-1">
                                <div class="about-content">
                                    <div class="section-title">
                                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                            About Us<img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                        </div>
                                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">strong and simple to use
                                            SaaS platform for builders</h2>
                                        <p class="text1 mxw-640 wow fadeInUp" data-wow-delay=".6s">There are many
                                            variations of passages of Lorem Ipsum available, but the majority have
                                            suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use</p>
                                    </div>
                                    <div class="fancy-box style3 mb-20 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/icon/wcuIcon2_1.svg') }}" alt="icon">
                                        </div>
                                        <div class="content">
                                            <h4>Easy Collaboration</h4>
                                            <p class="text">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have</p>
                                        </div>
                                    </div>
                                    <div class="fancy-box style3 wow fadeInUp" data-wow-delay=".4s">
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
                            <div class="col-xl-6 order-1 order-xl-2">
                                <div class="about-thumb">
                                    <img class="img-custom-anim-left wow fadeInUp" data-wow-delay=".4s"
                                        src="{{ asset('assets/images/about/aboutThumb2_1.png') }}" alt="thumb">
                                    <div class="absolute-thumb">
                                        <img src="{{ asset('assets/images/about/aboutThumb2_2.png') }}" alt="thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section S T A R T -->
    <section class="service-section section-padding pb-0 fix" id="services">
        <div class="service-container-wrapper style1">
            <div class="container">
                <div class="service-wrapper style1">
                    <div class="section-title text-center mxw-685 mx-auto mb-60">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                            Our Features <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                        </div>
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">We Provide the Best Quality</h2>
                    </div>
                    <div class="row gy-5">
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style1 wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon-box style1">
                                    <img src="{{ asset('assets/images/icon/serviceIcon1_1.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> Software Features </a></h3>
                                    <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style1 wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon-box style1">
                                    <img src="{{ asset('assets/images/icon/serviceIcon1_2.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> Customization Option </a></h3>
                                    <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style1 active wow fadeInUp" data-wow-delay=".6s">
                                <div class="icon-box style1">
                                    <img src="{{ asset('assets/images/icon/serviceIcon1_3.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> Subscription Plans </a></h3>
                                    <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section S T A R T -->
    <section class="wp-section section-padding fix">
        <div class="container">
            <div class="wp-wrapper style2">
                <div class="shape"> <img src="{{ asset('assets/images/shape/wpShape2_1.png') }}" alt="shape"> </div>
                <div class="row gy-5 gy-md-0 gx-60 d-flex align-items-center">
                    <div class="col-xl-4  order-2 order-xl-1">
                        <div class="wp-content style2">
                            <div class="section-title">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    How It Works <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Work smarter with easy access for
                                    user..</h2>
                            </div>
                            <div class="wp-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                01.Create account
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                                aria-controls="faq2">
                                                02. Install tracking
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3">
                                                03. Track analytics
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="true"
                                                aria-controls="faq4">
                                                04. Integrate
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form,
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8  order-1 order-xl-2">
                        <div class="wp-thumb wow fadeInUp" data-wow-delay=".4s">
                            <div class="main-thumb img-custom-anim-right wow">
                                <img src="{{ asset('assets/images/wp/wpThumb2_1.jpg') }}" alt="thumb">
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

    <!-- Why Choose Us Section S T A R T -->
    <section class="wcu-section section-padding fix">
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
                                <div class="thumb-box float-bob-y wow fadeInUp" data-wow-delay=".4s">
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

    <!-- Pricing Section S T A R T -->
    <section class="pricing-section fix" id="pricing">
        <div class="container">
            <div class="section-title text-center mxw-685 mx-auto">
                <div class="subtitle">
                    Our Pricing <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                </div>
                <h2 class="title">Choose The Plans That Suits You!</h2>
                <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have
                </p>
            </div>
            <div class="pricing-wrapper style1">
                <div class="tab-section d-flex justify-content-center align-items-center">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-monthly-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly"
                                aria-selected="true">Monthly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-yearly-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly"
                                aria-selected="false" tabindex="-1">Yearly</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-monthly" role="tabpanel"
                        aria-labelledby="pills-monthly-tab">
                        <div class="row gy-5">
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Basic Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$14.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style5" href="{{ route('pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Standard Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$14.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style4" href="{{ route('pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Premium Plan Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$14.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style5" href="{{ route('pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                        <div class="row gy-5">
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Basic Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$34.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style5" href="{{ route('pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Standard Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$64.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style4" href="{{ route('pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Premium Plan Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$84.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style5" href="{{ route('pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section S T A R T -->
    <section class="testimonial-section" id="testimonials">
        <div class="testimonial-container-wrapper style2">
            <div class="container">
                <div class="testimonial-wrapper style2 fix">
                    <div class="shape1"><img src="{{ asset('assets/images/shape/testimonialShape2_1.png') }}" alt="shape"></div>
                    <div class="shape2"><img src="{{ asset('assets/images/shape/testimonialShape2_2.png') }}" alt="shape"></div>
                    <div class="container">
                        <div class="section-title-wrapper style1">
                            <div class="row d-flex align-items-center">
                                <div class="col-xl-6">
                                    <div class="section-title">
                                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                            Testimonial <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                        </div>
                                        <h2 class="title wow fadeInUp" data-wow-delay=".4s">What our clients say?</h2>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="slider-arrow-button style2 text-end wow fadeInUp" data-wow-delay=".9s">
                                        <button data-slider-prev="#testimonialSliderTwo"
                                            class="slider-arrow arrowPrev"><i
                                                class="fa-sharp fa-solid fa-chevron-left"></i></button>
                                        <button data-slider-next="#testimonialSliderTwo"
                                            class="slider-arrow arrowNext"><i
                                                class="fa-sharp fa-solid fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-area testimonialSliderTwo">
                            <div class="swiper gt-slider" id="testimonialSliderTwo"
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
                                            <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}"
                                                    alt="icon">
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
                                            <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}"
                                                    alt="icon">
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
                                                    <h5>Wade Jones</h5>
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
                                            <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}"
                                                    alt="icon">
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
                                            <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}"
                                                    alt="icon">
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
                                                    <h5>Warren Jones</h5>
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
                                            <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}"
                                                    alt="icon">
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
                                            <div class="quote-icon"><img src="{{ asset('assets/images/icon/quoteIcon.svg') }}"
                                                    alt="icon">
                                            </div>
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

    <!-- Brand Slider Section S T A R T -->
    <div class="brand-slider-section section-padding fix">
        <div class="brand-slider-container-wrapper style2">
            <div class="container">
                <div class="brand-slider-wrapper style2">
                    <h2 class="single-section-title wow fadeInUp" data-wow-delay=".2s">
                        Millions of clients trust us.
                    </h2>
                    <div class="row">
                        <div class="slider-area brandSliderTwo">
                            <div class="swiper gt-slider" id="brandSliderTwo"
                                data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":3},"1025":{"slidesPerView":4},"1400":{"slidesPerView":5}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="brand-logo">
                                            <img src="{{ asset('assets/images/logo/brandLogo1_1.png') }}" alt="logo">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-logo">
                                            <img src="{{ asset('assets/images/logo/brandLogo1_2.png') }}" alt="logo">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-logo">
                                            <img src="{{ asset('assets/images/logo/brandLogo1_3.png') }}" alt="logo">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-logo">
                                            <img src="{{ asset('assets/images/logo/brandLogo1_4.png') }}" alt="logo">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-logo">
                                            <img src="{{ asset('assets/images/logo/brandLogo1_5.png') }}" alt="logo">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="brand-logo">
                                            <img src="{{ asset('assets/images/logo/brandLogo1_3.png') }}" alt="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section S T A R T -->
    <section class="blog-section section-padding pt-0 fix" id="blog">
        <div class="container">
            <div class="blog-wrapper style1">
                <div class="section-title text-center mxw-685 mx-auto">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                        Our Blog <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Recent Articles And Latest Blog</h2>
                </div>
                <div class="row gy-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style2 wow fadeInLeft" data-wow-delay=".3s">
                            <div class="blog-card-thumb  img-shine">
                                <img src="{{ asset('assets/images/blog/blogThumb2_1.jpg') }}" alt="thumb">
                            </div>
                            <div class="blog-card-body">
                                <div class="tag-cloud">
                                    <div class="meta">
                                        <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="meta">
                                        <span class="icon"><img src="{{ asset('assets/images/icon/tagIcon.svg') }}" alt="icon"></span>
                                        <span class="text">Cybersecurity</span>
                                    </div>
                                </div>
                                <h3 class="blog-title">
                                    <a href="{{ route('blog.show') }}">Tackling the Changes of Retail Industry</a>
                                </h3>
                                <div class="btn-wrapper">
                                    <a href="{{ route('blog.show') }}">Read More <img
                                            src="{{ asset('assets/images/icon/arrowIconDark.svg') }}" alt="icon"></a>
                                </div>
                                <div class="calendar">
                                    <div class="date">20</div>
                                    <div class="month">june</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style2 wow fadeInRight" data-wow-delay=".5s">
                            <div class="blog-card-thumb  img-shine">
                                <img src="{{ asset('assets/images/blog/blogThumb2_2.jpg') }}" alt="thumb">
                            </div>
                            <div class="blog-card-body">
                                <div class="tag-cloud">
                                    <div class="meta">
                                        <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="meta">
                                        <span class="icon"><img src="{{ asset('assets/images/icon/tagIcon.svg') }}" alt="icon"></span>
                                        <span class="text">Tech</span>
                                    </div>
                                </div>
                                <h3 class="blog-title">
                                    <a href="{{ route('blog.show') }}">Revitalising your people in a retail downturn</a>
                                </h3>
                                <div class="btn-wrapper">
                                    <a href="{{ route('blog.show') }}">Read More <img
                                            src="{{ asset('assets/images/icon/arrowIconDark.svg') }}" alt="icon"></a>
                                </div>
                                <div class="calendar">
                                    <div class="date">22</div>
                                    <div class="month">june</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style2 wow fadeInUp" data-wow-delay=".7s">
                            <div class="blog-card-thumb  img-shine">
                                <img src="{{ asset('assets/images/blog/blogThumb2_3.jpg') }}" alt="thumb">
                            </div>
                            <div class="blog-card-body">
                                <div class="tag-cloud">
                                    <div class="meta">
                                        <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="meta">
                                        <span class="icon"><img src="{{ asset('assets/images/icon/tagIcon.svg') }}" alt="icon"></span>
                                        <span class="text">Technology</span>
                                    </div>
                                </div>
                                <h3 class="blog-title">
                                    <a href="{{ route('blog.show') }}">Organisationaly teams are just like families.</a>
                                </h3>
                                <div class="btn-wrapper">
                                    <a href="{{ route('blog.show') }}">Read More <img
                                            src="{{ asset('assets/images/icon/arrowIconDark.svg') }}" alt="icon"></a>
                                </div>
                                <div class="calendar">
                                    <div class="date">10</div>
                                    <div class="month">june</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
