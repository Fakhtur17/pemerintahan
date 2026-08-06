@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Layanan | Niotech')
@section('meta_description', 'Layanan | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Services</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a>Services
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service Section S T A R T -->
    <section class="service-section-3">
        <div class="container">
            <div class="service-thumb section-padding pb-0 img-custom-anim-left wow fadeInLeft" data-wow-delay=".3s">
                <img src="{{ asset('assets/images/services/servicesThumb1_1.jpg') }}" alt="thumb">
            </div>
        </div>
        <div class="service-container-wrapper style3  section-padding fix">
            <div class="shape1 fix"><img src="{{ asset('assets/images/shape/testimonialShape2_1.png') }}" alt="shape"></div>
            <div class="shape2 fix"><img src="{{ asset('assets/images/shape/testimonialShape2_2.png') }}" alt="shape"></div>
            <div class="container">
                <div class="service-wrapper style3">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Join our team to create the best digital solutions.
                    </h2>
                    <p class="text wow fadeInUp" data-wow-delay=".5s">There are many variations of passages of Lorem
                        Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
                        randomised words which don't look even slightly believable. If you are going to use</p>

                    <a href="{{ route('contact.index') }}"> <span class="theme-btn wow fadeInUp" data-wow-delay=".3s"> Join Our Team
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <g clip-path="url(#clip0_199_944)">
                                    <path
                                        d="M11.6123 3.61183L10.8996 4.32455L14.0711 7.49604H0.000488281V8.50399H14.0711L10.8996 11.6754L11.6123 12.3882L16.0005 7.99998L11.6123 3.61183Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_199_944">
                                        <rect width="16" height="16" fill="white" transform="translate(0.000488281)">
                                        </rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section S T A R T -->
    <section class="service-section section-padding fix">
        <div class="service-container-wrapper style1">
            <div class="container">
                <div class="service-wrapper style1">
                    <div class="row gy-5">
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style3 wow fadeInLeft" data-wow-delay=".3s">
                                <div class="icon-box style3">
                                    <img src="{{ asset('assets/images/icon/serviceIcon3_1.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> Software Features </a></h3>
                                    <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style3 active wow fadeInLeft" data-wow-delay=".4s">
                                <div class="icon-box style3">
                                    <img src="{{ asset('assets/images/icon/serviceIcon3_2.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> Subscription Plans </a></h3>
                                    <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style3 wow fadeInLeft" data-wow-delay=".6s">
                                <div class="icon-box style3">
                                    <img src="{{ asset('assets/images/icon/serviceIcon3_3.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> Customization Option </a></h3>
                                    <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style3 wow fadeInLeft" data-wow-delay=".3s">
                                <div class="icon-box style3">
                                    <img src="{{ asset('assets/images/icon/serviceIcon3_5.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> Choose a App </a></h3>
                                    <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style3 wow fadeInLeft" data-wow-delay=".4s">
                                <div class="icon-box style3">
                                    <img src="{{ asset('assets/images/icon/serviceIcon3_5.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> Clean Modern Code </a></h3>
                                    <p class="text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box style3 wow fadeInLeft" data-wow-delay=".6s">
                                <div class="icon-box style3">
                                    <img src="{{ asset('assets/images/icon/serviceIcon3_6.svg') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('services.show') }}"> User Interactive </a></h3>
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

    <!-- Team Section S T A R T -->
    <section class="team-section-3 section-padding pt-0 fix">
        <div class="container">
            <div class="section-title text-center mxw-685 mx-auto">
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">We Provide the Best Quality</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="team-card style1 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="team-thumb">
                            <img src="{{ asset('assets/images/team/teamThumb1_1.jpg') }}" alt="thumb">
                        </div>
                        <div class="team-card-content">
                            <h3>
                                <a href="{{ route('team.show') }}">Masirul Islam</a>
                            </h3>
                            <p class="designation">co-Founder</p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card style1 wow fadeInLeft" data-wow-delay=".5s">
                        <div class="team-thumb">
                            <img src="{{ asset('assets/images/team/teamThumb1_2.jpg') }}" alt="thumb">
                        </div>
                        <div class="team-card-content">
                            <h3>
                                <a href="{{ route('team.show') }}">Tonya Martin</a>
                            </h3>
                            <p class="designation">co-Founder</p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-card style1 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="team-thumb">
                            <img src="{{ asset('assets/images/team/teamThumb1_3.jpg') }}" alt="thumb">
                        </div>
                        <div class="team-card-content">
                            <h3>
                                <a href="{{ route('team.show') }}">Stephan Bullok</a>
                            </h3>
                            <p class="designation">co-Founder</p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Used Technology Section Start -->
    <section class="used-technology-section section-padding pt-0 fix">
        <div class="container">
            <div class="section-title text-center mb-50 mx-auto">
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Technologies Behind Our Solutions.</h2>
            </div>
            <ul class="nav">
                <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                    <a href="#End" data-bs-toggle="tab" class="nav-link active">
                        Front End
                    </a>
                </li>
                <li class="nav-item wow fadeInUp" data-wow-delay=".5s">
                    <a href="#Back" data-bs-toggle="tab" class="nav-link">
                        Back End
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="End" class="tab-pane fade show active">
                    <div class="technology-box-items-wrapper style-4 mt-0">
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/html.png') }}" alt="logo">
                            </div>
                            <div class="title">HTML5</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/css.png') }}" alt="logo">
                            </div>
                            <div class="title">CSS3</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/sass.png') }}" alt="logo">
                            </div>
                            <div class="title">Sass</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/js.png') }}" alt="logo">
                            </div>
                            <div class="title">JavaScript</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/react.png') }}" alt="logo">
                            </div>
                            <div class="title">React</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/typescript.png') }}" alt="logo">
                            </div>
                            <div class="title">TypeScript</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/nextjs.png') }}" alt="logo">
                            </div>
                            <div class="title">Next.js</div>
                        </div>
                    </div>
                </div>
                <div id="Back" class="tab-pane fade">
                    <div class="technology-box-items-wrapper style-4 mt-0">
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/laravel.png') }}" alt="logo">
                            </div>
                            <div class="title">LARAVEL</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/wordpress.png') }}" alt="logo">
                            </div>
                            <div class="title">WORDPRESS</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/python.png') }}" alt="logo">
                            </div>
                            <div class="title">PYTHON</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/csharf.png') }}" alt="logo">
                            </div>
                            <div class="title">C#</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/nodejs.png') }}" alt="logo">
                            </div>
                            <div class="title">NODE JS</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/mongodb.png') }}" alt="logo">
                            </div>
                            <div class="title">MONGODB</div>
                        </div>
                        <div class="technology-box-items style-4">
                            <div class="logo">
                                <img src="{{ asset('assets/images/icon/nextjs.png') }}" alt="logo">
                            </div>
                            <div class="title">Next.js</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
