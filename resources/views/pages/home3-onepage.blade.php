@extends('layouts.app', [
    'headerVariant' => 'home3-onepage',
    'footerVariant' => 'default',
])

@section('title', 'Beranda Three Page | Niotech')
@section('meta_description', 'Beranda Three Page | Niotech')

@section('content')
<!-- Hero Section S T A R T -->
    <section class="hero-section hero-3 bg-cover" style="background-image: url('{{ asset('assets/images/hero/hero-bg.jpg') }}');">
        <div class="container-fluid">
            <div class="row g-4 align-items-center">
                <div class="col-xxl-8 col-xl-6">
                    <div class="hero-content">
                        <h6 class="wow fadeInUp">Streaming your Workflow</h6>
                        <h1 class="wow fadeInUp" data-wow-delay=".3s">
                            Organize, Track, and Complete Task <span>Efficiently</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
                        </p>
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
                                href="{{ route('about') }}">Download App <i class="fa-brands fa-android"></i>
                                
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="hero-image">
                        <img src="{{ asset('assets/images/hero/01.png') }}" alt="img">
                        <div class="mobile-image">
                            <img src="{{ asset('assets/images/hero/mobile.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section S T A R T -->
    <section class="about-section-3 fix section-padding" id="about">
        <div class="about-shape">
            <img src="{{ asset('assets/images/about/shape.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="about-wrapper-3">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('assets/images/about/01.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    Our Features <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">We Provide the Best Quality</h2>
                                <p class="wow fadeInUp" data-wow-delay=".6s">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
                                </p>
                            </div>
                            <ul class="wow fadeInUp" data-wow-delay=".3s">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20" fill="none">
                                        <path d="M6.47192 1.19299C7.72371 0.456638 9.27628 0.456638 10.5281 1.19299L15.0281 3.84005C16.2498 4.55873 17 5.87033 17 7.28778V12.7122C17 14.1297 16.2498 15.4413 15.0281 16.16L10.5281 18.807C9.27628 19.5434 7.72372 19.5434 6.47192 18.807L1.97192 16.16C0.750165 15.4413 0 14.1297 0 12.7122V7.28778C0 5.87033 0.750165 4.55873 1.97192 3.84005L6.47192 1.19299Z" fill="#7444FD"/>
                                        <circle cx="8.5" cy="10.5" r="3.5" fill="white"/>
                                      </svg>
                                      <b>User -Friendly Interface :</b> <span> Easy to use, even for beginners</span>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20" fill="none">
                                        <path d="M6.47192 1.19299C7.72371 0.456638 9.27628 0.456638 10.5281 1.19299L15.0281 3.84005C16.2498 4.55873 17 5.87033 17 7.28778V12.7122C17 14.1297 16.2498 15.4413 15.0281 16.16L10.5281 18.807C9.27628 19.5434 7.72372 19.5434 6.47192 18.807L1.97192 16.16C0.750165 15.4413 0 14.1297 0 12.7122V7.28778C0 5.87033 0.750165 4.55873 1.97192 3.84005L6.47192 1.19299Z" fill="#7444FD"/>
                                        <circle cx="8.5" cy="10.5" r="3.5" fill="white"/>
                                      </svg>
                                      <b>Secure & Reliable :</b> <span> Your data safe with us</span>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20" fill="none">
                                        <path d="M6.47192 1.19299C7.72371 0.456638 9.27628 0.456638 10.5281 1.19299L15.0281 3.84005C16.2498 4.55873 17 5.87033 17 7.28778V12.7122C17 14.1297 16.2498 15.4413 15.0281 16.16L10.5281 18.807C9.27628 19.5434 7.72372 19.5434 6.47192 18.807L1.97192 16.16C0.750165 15.4413 0 14.1297 0 12.7122V7.28778C0 5.87033 0.750165 4.55873 1.97192 3.84005L6.47192 1.19299Z" fill="#7444FD"/>
                                        <circle cx="8.5" cy="10.5" r="3.5" fill="white"/>
                                      </svg>
                                      <b>24/7 Support :</b> <span> We’re here to help, anytime</span>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="20" viewBox="0 0 17 20" fill="none">
                                        <path d="M6.47192 1.19299C7.72371 0.456638 9.27628 0.456638 10.5281 1.19299L15.0281 3.84005C16.2498 4.55873 17 5.87033 17 7.28778V12.7122C17 14.1297 16.2498 15.4413 15.0281 16.16L10.5281 18.807C9.27628 19.5434 7.72372 19.5434 6.47192 18.807L1.97192 16.16C0.750165 15.4413 0 14.1297 0 12.7122V7.28778C0 5.87033 0.750165 4.55873 1.97192 3.84005L6.47192 1.19299Z" fill="#7444FD"/>
                                        <circle cx="8.5" cy="10.5" r="3.5" fill="white"/>
                                      </svg>
                                      <b>Sealable for Teams :</b> <span>  Designed to scale with your needs</span>
                                </li>
                            </ul>
                            <a class="theme-btn style2 wow fadeInUp" data-wow-delay=".4s" href="{{ route('about') }}">Learn More <i class="fa-regular fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>

    <!-- Feature Section S T A R T -->
    <section class="feature-section fix section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="feature-box-items">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/01.svg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Create</h3>
                            <p>There are many vriations of passages f Lorem Ipsum but the majority have</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-box-items">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/02.svg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Customize</h3>
                            <p>There are many vriations of passages f Lorem Ipsum but the majority have</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-box-items">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icon/03.svg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Say On Top</h3>
                            <p>There are many vriations of passages f Lorem Ipsum but the majority have</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Provide Section S T A R T -->
    <section class="feature-provide-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center mxw-685 mx-auto mb-60">
                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                    Our Features <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                </div>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">We Provide the Best Quality</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="feature-provide-box-items style-2">
                        <div class="icon">
                           <img src="{{ asset('assets/images/icon/04.svg') }}" alt="img">
                        </div>
                        <div class="item-shape">
                            <img src="{{ asset('assets/images/services/item-shape.png') }}" alt="img">
                        </div>
                        <div class="item-shape-2">
                            <img src="{{ asset('assets/images/services/item-shape-2.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Sales automation</h3>
                            <p>
                                This title is versatile and can adapted to fit the specific tone and branding of your website quality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-provide-box-items">
                        <div class="item-shape">
                            <img src="{{ asset('assets/images/services/item-shape.png') }}" alt="img">
                        </div>
                        <div class="item-shape-2">
                            <img src="{{ asset('assets/images/services/item-shape-2.png') }}" alt="img">
                        </div>
                        <div class="icon">
                           <img src="{{ asset('assets/images/icon/05.svg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Contact management</h3>
                            <p>
                                This title is versatile and can adapted to fit the specific tone and branding of your website quality.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-provide-box-items style-2">
                        <div class="item-shape">
                            <img src="{{ asset('assets/images/services/item-shape.png') }}" alt="img">
                        </div>
                        <div class="item-shape-2">
                            <img src="{{ asset('assets/images/services/item-shape-2.png') }}" alt="img">
                        </div>
                        <div class="icon">
                           <img src="{{ asset('assets/images/icon/06.svg') }}" alt="img">
                        </div>
                        <div class="content">
                            <h3>Task Management</h3>
                            <p>
                                This title is versatile and can adapted to fit the specific tone and branding of your website quality.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section S T A R T -->
    <section class="how-too-work section-padding fix pt-0">
       <div class="container">
            <div class="section-title mb-60">
                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                    How It Works <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                </div>
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Our Working Process</h2>
            </div>
            <div class="how-work-wrapper">
               <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="how-work-content">
                            <p class="text wow fadeInUp">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly
                            </p>
                            <div class="row g-4">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="how-work-number-items">
                                        <div class="number">
                                            01
                                        </div>
                                        <div class="content">
                                            <h3>Research Project</h3>
                                            <p>
                                                There are many varations of passages of Loreum available, but the majority have suffered alteration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="how-work-number-items">
                                        <div class="number">
                                            02
                                        </div>
                                        <div class="content">
                                            <h3>Start Optimize</h3>
                                            <p>
                                                There are many varations of passages of Loreum available, but the majority have suffered alteration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="how-work-number-items">
                                        <div class="number">
                                            03
                                        </div>
                                        <div class="content">
                                            <h3>Find Ideas</h3>
                                            <p>
                                                There are many varations of passages of Loreum available, but the majority have suffered alteration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="how-work-number-items">
                                        <div class="number">
                                            04
                                        </div>
                                        <div class="content">
                                            <h3>Reach Target</h3>
                                            <p>
                                                There are many varations of passages of Loreum available, but the majority have suffered alteration
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <div class="gap-image">
                            <img src="{{ asset('assets/images/gap.png') }}" alt="img">
                        </div>
                    </div>
               </div>
            </div>
       </div>
    </section>

    <!-- Pricing Section S T A R T -->
    <section class="pricing-section-3 section-padding fix" style="background-image: url('{{ asset('assets/images/pricing-bg.jpg') }}');" id="pricing">
        <div class="container">
            <div class="section-title text-center mxw-685 mx-auto">
                <div class="subtitle wow fadeInUp">
                    Our Pricing <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                </div>
                <h2 class="title wow fadeInUp" data-wow-delay=".3s">Choose The Plans That Suits You!</h2>
                <p class="text wow fadeInUp" data-wow-delay=".5s">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
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

    <!-- What We Do Section S T A R T -->
    <section class="what-we-do-section fix section-padding">
        <div class="container mxw-1450">
            <div class="what-we-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="thumb">
                            <img src="{{ asset('assets/images/what-do.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="what-we-content">
                            <div class="section-title">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    What We Do <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">We offer a one-stop shop for all IT solutions.</h2>
                                <p class="wow fadeInUp" data-wow-delay=".6s">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
                                </p>
                            </div>
                            <div class="list-items-area">
                                <div class="list-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 26 30" fill="none">
                                            <path d="M10.7219 1.19299C11.9737 0.456639 13.5263 0.456638 14.7781 1.19299L23.5281 6.34005C24.7498 7.05873 25.5 8.37033 25.5 9.78778V20.2122C25.5 21.6297 24.7498 22.9413 23.5281 23.66L14.7781 28.807C13.5263 29.5434 11.9737 29.5434 10.7219 28.807L1.97192 23.66C0.750167 22.9413 0 21.6297 0 20.2122V9.78778C0 8.37033 0.750165 7.05873 1.97192 6.34005L10.7219 1.19299Z" fill="#7444FD"/>
                                            <circle cx="13" cy="15" r="5" fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h3>Highly Expert Team Members</h3>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
                                        </p>
                                    </div>
                                </div>
                                <div class="list-items wow fadeInUp" data-wow-delay=".5
                                s">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="30" viewBox="0 0 26 30" fill="none">
                                            <path d="M10.7219 1.19299C11.9737 0.456639 13.5263 0.456638 14.7781 1.19299L23.5281 6.34005C24.7498 7.05873 25.5 8.37033 25.5 9.78778V20.2122C25.5 21.6297 24.7498 22.9413 23.5281 23.66L14.7781 28.807C13.5263 29.5434 11.9737 29.5434 10.7219 28.807L1.97192 23.66C0.750167 22.9413 0 21.6297 0 20.2122V9.78778C0 8.37033 0.750165 7.05873 1.97192 6.34005L10.7219 1.19299Z" fill="#7444FD"/>
                                            <circle cx="13" cy="15" r="5" fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="content">
                                        <h3>Highly Expert Team Members</h3>
                                        <p>
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Used Technology Section Start -->
    <section class="used-technology-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title style-4 mxw-670 mx-auto text-center">
                    <h2 class="title">Technologies Behind Our Solutions.</h2> 
            </div>
            <ul class="nav">
                <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                    <a href="#End" data-bs-toggle="tab" class="nav-link">
                        Front End
                    </a>
                </li>
                <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                    <a href="#Back" data-bs-toggle="tab" class="nav-link active">
                        Back End
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="End" class="tab-pane fade">
                    <div class="technology-box-items-wrapper style-4 mt-0">
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/01.png') }}" alt="img">
                            </div>
                            <div class="title">HTML5</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/02.png') }}" alt="img">
                            </div>
                            <div class="title">CSS3</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/03.png') }}" alt="img">
                            </div>
                            <div class="title">Sass</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/04.png') }}" alt="img">
                            </div>
                            <div class="title">JavaScript</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/05.png') }}" alt="img">
                            </div>
                            <div class="title">React</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/06.png') }}" alt="img">
                            </div>
                            <div class="title">TypeScript</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/07.png') }}" alt="img">
                            </div>
                            <div class="title">Next.js</div>
                        </div>
                    </div>
                </div>
                <div id="Back" class="tab-pane fade show active">
                    <div class="technology-box-items-wrapper style-4 mt-0">
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/01.png') }}" alt="img">
                            </div>
                            <div class="title">HTML5</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/02.png') }}" alt="img">
                            </div>
                            <div class="title">CSS3</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/03.png') }}" alt="img">
                            </div>
                            <div class="title">Sass</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/04.png') }}" alt="img">
                            </div>
                            <div class="title">JavaScript</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/05.png') }}" alt="img">
                            </div>
                            <div class="title">React</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/06.png') }}" alt="img">
                            </div>
                            <div class="title">TypeScript</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo"> 
                                <img src="{{ asset('assets/images/tag/07.png') }}" alt="img">
                            </div>
                            <div class="title">Next.js</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section S T A R T -->
    <section class="testimonial-section-3 section-padding fix section-padding bg-cover" id="testimonial" style="background-image: url('{{ asset('assets/images/testimoial/bg.jpg') }}');">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <div class="subtitle wow fadeInUp">
                        Testimonial <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                    </div>
                    <h2 class="title mb-0 wow fadeInUp" data-wow-delay=".3s">Testimonials beloved clients.</h2>
                </div>
                <div class="array-button">
                    <button class="array-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                    <button class="array-next"><i class="fa-regular fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="swiper testimonial-slider-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper-3">
                            <div class="tesimonial-content">
                                <p>
                                    It’s a pleasure working with Bunker. They understood our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms. The team is responsive, quick and always willing help winning partnership.
                                </p>
                                <div class="client-info-area">
                                    <div class="client-content">
                                        <h3>Marvin McKinney</h3>
                                        <span>Senior Director of Marketing</span>
                                    </div>
                                    <div class="testi-logo">
                                        <img src="{{ asset('assets/images/testimoial/logo.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimoial/01.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper-3">
                            <div class="tesimonial-content">
                                <p>
                                    It’s a pleasure working with Bunker. They understood our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms. The team is responsive, quick and always willing help winning partnership.
                                </p>
                                <div class="client-info-area">
                                    <div class="client-content">
                                        <h3>Marvin McKinney</h3>
                                        <span>Senior Director of Marketing</span>
                                    </div>
                                    <div class="testi-logo">
                                        <img src="{{ asset('assets/images/testimoial/logo.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimoial/01.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-wrapper-3">
                            <div class="tesimonial-content">
                                <p>
                                    It’s a pleasure working with Bunker. They understood our new brand positioning guidelines and translated them beautifully and consistently into our on-going marketing comms. The team is responsive, quick and always willing help winning partnership.
                                </p>
                                <div class="client-info-area">
                                    <div class="client-content">
                                        <h3>Marvin McKinney</h3>
                                        <span>Senior Director of Marketing</span>
                                    </div>
                                    <div class="testi-logo">
                                        <img src="{{ asset('assets/images/testimoial/logo.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/testimoial/01.jpg') }}" alt="img">
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
