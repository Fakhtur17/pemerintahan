@extends('layouts.app', [
    'headerVariant' => 'home1-onepage',
    'footerVariant' => 'default',
])

@section('title', 'Beranda One Page | Niotech')
@section('meta_description', 'Beranda One Page | Niotech')

@section('content')
<!-- Intro Section S T A R T -->
    <section class="intro-section">
        <div class="intro-container-wrapper style1">
            <div class="container">
                <div class="intro-wrapper style1 fix">
                    <div class="shape1"><img src="{{ asset('assets/images/shape/introShape1_1.png') }}" alt="shape"></div>
                    <div class="shape2"><img src="{{ asset('assets/images/shape/introShape1_2.png') }}" alt="shape"></div>
                    <div class="shape3 d-none d-xxl-block cir36"><img src="{{ asset('assets/images/shape/introShape1_3.png') }}"
                            alt="shape"></div>
                    <div class="shape4 d-none d-xxl-block cir36"><img src="{{ asset('assets/images/shape/introShape1_4.png') }}"
                            alt="shape"></div>
                    <div class="shape5 d-none d-xxl-block cir36"><img src="{{ asset('assets/images/shape/introShape1_5.png') }}"
                            alt="shape"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 order-2 order-xl-1">
                                <div class="intro-content">
                                    <div class="intro-section-title">
                                        <div class="intro-subtitle">
                                            <span>News!</span>Find Your Solution <img
                                                src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                        </div>
                                        <h1 class="intro-title wow fadeInUp" data-wow-delay=".2s">We Develop Websites,
                                            Applications, and Brands.</h1>
                                        <p class="intro-desc wow fadeInUp" data-wow-delay=".4s">There are many
                                            variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly
                                            believable. If you are going to use a passage of Lorem Ipsum,</p>
                                    </div>
                                    <div class="btn-wrapper style1 wow fadeInUp" data-wow-delay=".6s">
                                        <a class="theme-btn" href="{{ route('contact.index') }}">Get Started Now
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_11_22)">
                                                    <path
                                                        d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_11_22">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </a>
                                        <a class="theme-btn style2 wow fadeInUp" data-wow-delay=".2s"
                                            href="{{ route('about') }}">Learn More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_11_27)">
                                                    <path
                                                        d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                        fill="#282C32" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_11_27">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="fancy-box-wrapper style1">
                                        <div class="fancy-box style1 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="item">
                                                <img src="{{ asset('assets/images/intro/introProfileThumb1_1.png') }}" alt="thumb">
                                            </div>
                                            <div class="item">
                                                <h6>2,291</h6>
                                                <p>Happy Customers</p>
                                            </div>
                                        </div>
                                        <div class="fancy-box style5 wow fadeInUp" data-wow-delay=".4s">
                                            <h6>4.8/5</h6>
                                            <div class="rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="77" height="13"
                                                    viewBox="0 0 77 13" fill="none">
                                                    <g clip-path="url(#clip0_20_34)">
                                                        <path
                                                            d="M12.3738 4.23335L8.62048 3.8926L7.13714 0.419814C7.02762 0.164672 6.77843 0 6.50107 0C6.22371 0 5.97442 0.164672 5.8656 0.419814L4.38226 3.8926L0.62834 4.23335C0.353159 4.25875 0.120139 4.44515 0.0340334 4.70793C-0.0515761 4.9712 0.0274862 5.25997 0.235608 5.4425L3.07282 7.93034L2.23627 11.6148C2.17506 11.8857 2.28022 12.1659 2.505 12.3284C2.62583 12.4162 2.76778 12.46 2.91023 12.46C3.03265 12.46 3.15516 12.4275 3.26458 12.362L6.50107 10.4268L9.73697 12.362C9.97436 12.5038 10.2728 12.4909 10.4971 12.3284C10.7219 12.1659 10.8271 11.8857 10.7659 11.6148L9.92932 7.93034L12.7665 5.4425C12.9746 5.25997 13.0537 4.9718 12.9681 4.70793C12.8825 4.44465 12.649 4.25825 12.3738 4.23335Z"
                                                            fill="#ECC132" />
                                                        <path
                                                            d="M28.3758 4.23335L24.6224 3.8926L23.1391 0.419814C23.0296 0.164672 22.7804 0 22.503 0C22.2257 0 21.9764 0.164672 21.8676 0.419814L20.3842 3.8926L16.6303 4.23335C16.3551 4.25875 16.1221 4.44515 16.036 4.70793C15.9504 4.9712 16.0294 5.25997 16.2376 5.4425L19.0748 7.93034L18.2382 11.6148C18.177 11.8857 18.2822 12.1659 18.507 12.3284C18.6278 12.4162 18.7697 12.46 18.9122 12.46C19.0346 12.46 19.1571 12.4275 19.2665 12.362L22.503 10.4268L25.7389 12.362C25.9763 12.5038 26.2748 12.4909 26.4991 12.3284C26.7239 12.1659 26.829 11.8857 26.7678 11.6148L25.9313 7.93034L28.7685 5.4425C28.9765 5.25997 29.0557 4.9718 28.9701 4.70793C28.8845 4.44465 28.6509 4.25825 28.3758 4.23335Z"
                                                            fill="#ECC132" />
                                                        <path
                                                            d="M44.3777 4.23335L40.6244 3.8926L39.141 0.419814C39.0315 0.164672 38.7823 0 38.505 0C38.2276 0 37.9783 0.164672 37.8695 0.419814L36.3862 3.8926L32.6322 4.23335C32.3571 4.25875 32.124 4.44515 32.0379 4.70793C31.9523 4.9712 32.0314 5.25997 32.2395 5.4425L35.0767 7.93034L34.2402 11.6148C34.179 11.8857 34.2841 12.1659 34.5089 12.3284C34.6297 12.4162 34.7717 12.46 34.9141 12.46C35.0366 12.46 35.1591 12.4275 35.2685 12.362L38.505 10.4268L41.7409 12.362C41.9783 12.5038 42.2768 12.4909 42.501 12.3284C42.7258 12.1659 42.831 11.8857 42.7698 11.6148L41.9332 7.93034L44.7704 5.4425C44.9785 5.25997 45.0576 4.9718 44.972 4.70793C44.8864 4.44465 44.6529 4.25825 44.3777 4.23335Z"
                                                            fill="#ECC132" />
                                                        <path
                                                            d="M60.3797 4.23335L56.6263 3.8926L55.143 0.419814C55.0335 0.164672 54.7843 0 54.5069 0C54.2296 0 53.9803 0.164672 53.8715 0.419814L52.3881 3.8926L48.6342 4.23335C48.359 4.25875 48.126 4.44515 48.0399 4.70793C47.9543 4.9712 48.0333 5.25997 48.2415 5.4425L51.0787 7.93034L50.2421 11.6148C50.1809 11.8857 50.2861 12.1659 50.5109 12.3284C50.6317 12.4162 50.7736 12.46 50.9161 12.46C51.0385 12.46 51.161 12.4275 51.2704 12.362L54.5069 10.4268L57.7428 12.362C57.9802 12.5038 58.2787 12.4909 58.503 12.3284C58.7278 12.1659 58.8329 11.8857 58.7717 11.6148L57.9352 7.93034L60.7724 5.4425C60.9804 5.25997 61.0596 4.9718 60.974 4.70793C60.8884 4.44465 60.6548 4.25825 60.3797 4.23335Z"
                                                            fill="#ECC132" />
                                                        <path opacity="0.3"
                                                            d="M76.3816 4.23335L72.6283 3.8926L71.145 0.419814C71.0354 0.164672 70.7862 0 70.5089 0C70.2315 0 69.9822 0.164672 69.8734 0.419814L68.3901 3.8926L64.6362 4.23335C64.361 4.25875 64.128 4.44515 64.0418 4.70793C63.9562 4.9712 64.0353 5.25997 64.2434 5.4425L67.0806 7.93034L66.2441 11.6148C66.1829 11.8857 66.288 12.1659 66.5128 12.3284C66.6336 12.4162 66.7756 12.46 66.918 12.46C67.0405 12.46 67.163 12.4275 67.2724 12.362L70.5089 10.4268L73.7448 12.362C73.9822 12.5038 74.2807 12.4909 74.505 12.3284C74.7297 12.1659 74.8349 11.8857 74.7737 11.6148L73.9371 7.93034L76.7743 5.4425C76.9824 5.25997 77.0615 4.9718 76.9759 4.70793C76.8903 4.44465 76.6568 4.25825 76.3816 4.23335Z"
                                                            fill="#565656" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_20_34">
                                                            <rect width="77.0099" height="12.46" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Rating
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 order-1 order-xl-2">
                                <div class="intro-thumb">
                                    <div class="thumbShape1"><img src="{{ asset('assets/images/shape/introThumbShape1_1.png') }}"
                                            alt="thumbShape"></div>
                                    <div class="thumbShape2"><img src="{{ asset('assets/images/shape/introThumbShape1_2.png') }}"
                                            alt="thumbShape"></div>
                                    <img class="main-thumb img-custom-anim-right wow fadeInUp" data-wow-delay=".4s"
                                        src="{{ asset('assets/images/intro/introThumb1_1.png') }}" alt="thumb">
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
        <div class="brand-slider-container-wrapper style1">
            <div class="container">
                <div class="brand-slider-wrapper style1">
                    <h2 class="single-section-title wow fadeInUp" data-wow-delay=".2s">
                        Millions of clients trust us.
                    </h2>
                    <div class="row">
                        <div class="slider-area brandSliderOne">
                            <div class="swiper gt-slider" id="brandSliderOne"
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

    <!-- About Us Section S T A R T -->
    <section class="about-section fix" id="about">
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

    <!-- Advantage Section S T A R T -->
    <section class="advantage-section fix">
        <div class="advantage-container-wrapper style1">
            <div class="container">
                <div class="advantage-wrapper style1 section-padding">
                    <div class="container">
                        <div class="row gy-5 d-flex align-items-center">
                            <div class="col-xl-6 order-2 order-xl-1">
                                <div class="advantage-content">
                                    <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                        <div class="subtitle">
                                            App Advantage <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                        </div>
                                        <h2 class="title">Get Benefit By Using Trending Apps</h2>
                                        <p class="section-desc">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even slightly</p>
                                    </div>
                                    <div class="checklist-wrapper style1 wow fadeInUp" data-wow-delay=".4s">
                                        <ul class="checklist style1">
                                            <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon"> Friendly
                                                Design</li>
                                            <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon">SEO Optimized
                                            </li>
                                        </ul>
                                        <ul class="checklist style1">
                                            <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon"> Cloud
                                                Storage </li>
                                            <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon"> Strong
                                                Security </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn wow fadeInUp" data-wow-delay=".6s" href="{{ route('about') }}"> Download
                                        App
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_43_54)">
                                                <path
                                                    d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_43_54">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 order-1 order-xl-2">
                                <div class="advantage-thumb">
                                    <div class="thumb1 img-custom-anim-top wow fadeInDown" data-wow-delay=".8s"
                                        data-tilt data-tilt-max="10"><img
                                            src="{{ asset('assets/images/advantage/advantageThumb1_1.png') }}" alt="thumb"></div>
                                    <div class="thumb2 img-custom-anim-right wow fadeInRight" data-wow-delay=".4s"
                                        data-tilt data-tilt-max="15"><img
                                            src="{{ asset('assets/images/advantage/advantageThumb1_2.png') }}" alt="thumb"></div>
                                    <div class="shape1"><img src="{{ asset('assets/images/shape/advanceThumbShape1_1.png') }}"
                                            alt="shape"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wcu Section S T A R T -->
    <section class="wcu-section section-padding fix">
        <div class="wcu-container-wrapper style1">
            <div class="container">
                <div class="section-title text-center mxw-685 mx-auto wow fadeInUp" data-wow-delay=".2s">
                    <div class="subtitle">
                        Why using our app<img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                    </div>
                    <h2 class="title">Our app is great for individuals, startups and enterprises</h2>
                </div>
                <div class="wcu-wrapper style1">
                    <div class="row gy-5 d-flex justify-content-center">
                        <div class="col-xl-4 d-flex justify-content-center">
                            <div class="wcu-content">
                                <div class="fancy-box style2">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_1.svg') }}" alt="icon"></div>
                                    <div class="content wow fadeInUp" data-wow-delay=".2s">
                                        <h4>High usability</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_2.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Action Reminder</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_3.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Merge Files</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex justify-content-center">
                            <div class="wcu-thumb wow fadeInUp" data-wow-delay=".2s">
                                <div class="main-thumb wow bounceInUp" data-wow-delay=".6s"><img
                                        src="{{ asset('assets/images/wcu/wcuThumb1_1.png') }}" alt="thumb"></div>
                                <div class="shape"><img src="{{ asset('assets/images/shape/wcuThumbShape1_1.png') }}" alt="shape">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex justify-content-center justify-content-xl-end">
                            <div class="wcu-content">
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_4.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Free Live Chat</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_5.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Social Share</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_6.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Custom Shortcuts</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section S T A R T -->
    <div class="counter-section fix">
        <div class="counter-container-wrapper style1">
            <div class="container">
                <div class="counter-wrapper style1 section-padding"
                    data-bg-src="{{ asset('assets/images/shape/counterShape1_1.png') }}">
                    <div class="shape"></div>
                    <div class="container">
                        <div class="row gy-5">
                            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="counter">
                                        <span class="counter-number">56</span> <span class="plus">+</span>
                                    </div>
                                    <p class="text">Customers visit app every months</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="counter">
                                        <span class="counter-number">32</span> <span class="plus">+</span>
                                    </div>
                                    <p class="text">Total downloaded of our app</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="counter">
                                        <span class="counter-number">156</span> <span class="plus">k</span>
                                    </div>
                                    <p class="text">Total Members of App Users</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="counter">
                                        <span class="counter-number">42</span> <span class="plus">+</span>
                                    </div>
                                    <p class="text">Satisfaction rate from our customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Faq Section S T A R T -->
    <section class="faq-section section-padding fix">
        <div class="container">
            <div class="faq-wrapper style1">
                <div class="row gy-5 gy-xl-0 gx-60 d-flex align-items-start">
                    <div class="col-xl-6">
                        <div class="faq-content style1">
                            <div class="section-title">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    FAQs <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Frequently Ask Questions</h2>
                                <p class="section-desc wow fadeInUp" data-wow-delay=".6s">There are many variations of
                                    passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly</p>
                            </div>
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                Looking for a solution to boost productivity?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                                aria-controls="faq2">
                                                Need an easy way to manage your projects?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Seeking a user-friendly solution for your team?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-thumb">
                            <img class="main-thumb  wow fadeInUp" data-wow-delay=".2s"
                                src="{{ asset('assets/images/faq/faqThumb1_2.png') }}" alt="thumb">
                            <div class="absolute-thumb float-bob-x">
                                <img src="{{ asset('assets/images/faq/faqThumb1_1.png') }}" alt="thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section S T A R T -->
    <section class="testimonial-section">
        <div class="testimonial-container-wrapper style1">
            <div class="container">
                <div class="testimonial-wrapper style1 section-padding fix">
                    <div class="shape1"><img src="{{ asset('assets/images/shape/testimonialShape1_1.png') }}" alt="shape"></div>
                    <div class="shape2"><img src="{{ asset('assets/images/shape/testimonialShape1_2.png') }}" alt="shape"></div>
                    <div class="container">
                        <div class="section-title text-center mxw-685 mx-auto">
                            <div class="subtitle">
                                Testimonial <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                            </div>
                            <h2 class="title">What our clients say?</h2>
                        </div>
                        <div class="slider-area testimonialSliderOne">
                            <div class="swiper gt-slider" id="testimonialSliderOne"
                                data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
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
                                                    alt="icon"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_2.jpg') }}"
                                                        alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h5>Masirul Jones</h5>
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
                                                    alt="icon"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_3.jpg') }}"
                                                        alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h5>Adam Jones</h5>
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
                                                    alt="icon"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_1.jpg') }}"
                                                        alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h5>Wade Warren</h5>
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
                                                    alt="icon"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_2.jpg') }}"
                                                        alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h5>Masirul Jones</h5>
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
                                                    alt="icon"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="profile-thumb">
                                                    <img src="{{ asset('assets/images/testimoial/testimonialProfileThumb1_3.jpg') }}"
                                                        alt="thumb">
                                                </div>
                                                <div class="content">
                                                    <h5>Adam Jones</h5>
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
                                                    alt="icon"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section S T A R T -->
    <section class="feature-section section-padding fix" id="features">
        <div class="container">
            <div class="feature-wrapper style1">
                <div class="row gy-5 gx-134">
                    <div class="col-xl-6 order-2 order-xl-1">
                        <div class="feature-content">
                            <div class="section-title">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    Our Features <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Our features will help to improve
                                    business</h2>
                                <p class="section-desc wow fadeInUp" data-wow-delay=".6s">There are many variations of
                                    passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly</p>
                            </div>
                            <a class="theme-btn wow fadeInUp" data-wow-delay=".2s" href="{{ route('contact.index') }}">Start
                                Collaborator <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_91_29)">
                                        <path
                                            d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_91_29">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 order-1 order-xl-2">
                        <div class="feature-box-wrapper">
                            <div class="feature-box style1 child1">
                                <div class="feature-box-header wow fadeInUp" data-wow-delay=".2s">
                                    <div class="content">
                                        <h5>Software development</h5>
                                        <p class="text">UX Research</p>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35"
                                            viewBox="0 0 34 35" fill="none">
                                            <circle cx="17" cy="17.5" r="16" stroke="#F1F1F1" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="feature-box-footer wow fadeInUp" data-wow-delay=".4s">
                                    <div class="content">
                                        <span class="day">Today</span>
                                        <span class="time">07:02 AM</span>
                                    </div>
                                    <div class="shape"><img src="{{ asset('assets/images/shape/featureProfileShape1_1.png') }}"
                                            alt="shape"></div>
                                </div>
                            </div>
                            <div class="feature-box style1 child2">
                                <div class="feature-box-header wow fadeInUp" data-wow-delay=".6s">
                                    <div class="content">
                                        <h5>Design data & analytics</h5>
                                        <p class="text">UX Research</p>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35"
                                            viewBox="0 0 34 35" fill="none">
                                            <circle cx="17" cy="17.5" r="16" stroke="#F1F1F1" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="feature-box-footer wow fadeInUp" data-wow-delay=".6s">
                                    <div class="content">
                                        <span class="day">Today</span>
                                        <span class="time">07:02 AM</span>
                                    </div>
                                    <div class="shape"><img src="{{ asset('assets/images/shape/featureProfileShape1_1.png') }}"
                                            alt="shape"></div>
                                </div>
                            </div>
                            <div class="feature-box style1 wow fadeInUp" data-wow-delay=".6s">
                                <div class="feature-box-header">
                                    <div class="content">
                                        <h5>Dedicated Support</h5>
                                        <p class="text">UX Research</p>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35"
                                            viewBox="0 0 34 35" fill="none">
                                            <circle cx="17" cy="17.5" r="16" stroke="#F1F1F1" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="feature-box-footer">
                                    <div class="content">
                                        <span class="day">Today</span>
                                        <span class="time">07:02 AM</span>
                                    </div>
                                    <div class="shape"><img src="{{ asset('assets/images/shape/featureProfileShape1_1.png') }}"
                                            alt="shape"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing Section S T A R T -->
    <section class="pricing-section section-padding pt-0 fix" id="pricing">
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
                                            <span class="price">$19.99</span> <span class="text"> / Per Month</span>
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
                                            <span class="price">$24.99</span> <span class="text"> / Per Month</span>
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

    <!-- Cta Section S T A R T -->
    <section class="cta-section" id="app">
        <div class="cta-container-wrapper style1">
            <div class="container">
                <div class="cta-wrapper style1  section-padding fix">
                    <div class="shape1 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_1.png') }}" alt="shape">
                    </div>
                    <div class="shape2 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_2.png') }}" alt="shape">
                    </div>
                    <div class="shape3 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_3.png') }}" alt="shape">
                    </div>
                    <div class="shape4 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_4.png') }}" alt="shape">
                    </div>
                    <div class="container">
                        <div class="row gy-5">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="cta-content">
                                    <div class="section-title">
                                        <div class="subtitle text-white bg2 wow fadeInUp" data-wow-delay=".2s">
                                            Our App <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                        </div>
                                        <h2 class="title text-white wow fadeInUp" data-wow-delay=".4s">Download our app
                                            and start your free trail to get
                                            started today!</h2>
                                        <p class="section-desc text-white mxw-651 wow fadeInUp" data-wow-delay=".6s">
                                            There are many variations of passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form, by injected humour, or randomised</p>
                                    </div>
                                    <a class="playstore" href="https://play.google.com/store"><img
                                            src="{{ asset('assets/images/cta/ctaplayStore1_1.png') }}" alt="img"></a>
                                    <a href="https://www.apple.com/store"><img
                                            src="{{ asset('assets/images/cta/ctaAppleStore1_1.png') }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="col-xl-4 order-1 order-xl-2">
                                <div class="cta-thumb wow fadeInUp" data-wow-delay=".2s">
                                    <img src="{{ asset('assets/images/cta/ctaThumb1_1.png') }}" alt="thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section S T A R T -->
    <section class="blog-section section-padding fix" id="blog">
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
                        <div class="blog-card style1 wow fadeInUp" data-wow-delay=".2s">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="thumb">
                            </div>
                            <div class="body">
                                <div class="tag-meta">
                                    <img src="{{ asset('assets/images/icon/FolderIcon.svg') }}" alt="icon">
                                    Workplace
                                </div>
                                <h3><a href="{{ route('blog.show') }}">Services that printing at you is important</a></h3>
                                <div class="blog-meta">
                                    <div class="item child1">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">Sep 30, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style1 wow fadeInUp" data-wow-delay=".4s">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb1_2.jpg') }}" alt="thumb">
                            </div>
                            <div class="body">
                                <div class="tag-meta">
                                    <img src="{{ asset('assets/images/icon/FolderIcon.svg') }}" alt="icon">
                                    Coding
                                </div>
                                <h3><a href="{{ route('blog.show') }}">A checklist to improve your daily routine</a></h3>
                                <div class="blog-meta">
                                    <div class="item child1">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">Sep 30, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style1 wow fadeInUp" data-wow-delay=".6s">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="thumb">
                            </div>
                            <div class="body">
                                <div class="tag-meta">
                                    <img src="{{ asset('assets/images/icon/FolderIcon.svg') }}" alt="icon">
                                    Technology
                                </div>
                                <h3><a href="{{ route('blog.show') }}">That will help you get 1% better every day</a></h3>
                                <div class="blog-meta">
                                    <div class="item child1">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">Sep 30, 2024</span>
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
