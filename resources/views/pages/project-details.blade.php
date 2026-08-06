@extends('layouts.app', [
    'headerVariant' => 'inner',
    'footerVariant' => 'default',
])

@section('title', 'Detail Proyek | Niotech')
@section('meta_description', 'Detail Proyek | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Project Details</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a>Project Details
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Section S T A R T -->
    <section class="project-details-section section-padding fix">
        <div class="project-details-container-wrapper">
            <div class="container">
                <div class="project-details-wapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-thumb">
                                <img src="{{ asset('assets/images/project/projecDetailstThumb1_1.jpg') }}" alt="thumb">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="fancy-box style4">
                                <div class="content">
                                    <h5>Sectors</h5>
                                    <p class="text">Roads & Highway</p>
                                </div>
                                <div class="icon-box style2">
                                    <img src="{{ asset('assets/images/icon/projectDetailsIcon1_1.svg') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="fancy-box style4">
                                <div class="content">
                                    <h5>Sectors</h5>
                                    <p class="text">Roads & Highway</p>
                                </div>
                                <div class="icon-box style2">
                                    <img src="{{ asset('assets/images/icon/projectDetailsIcon1_2.svg') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="fancy-box style4">
                                <div class="content">
                                    <h5>Sectors</h5>
                                    <p class="text">Roads & Highway</p>
                                </div>
                                <div class="icon-box style2">
                                    <img src="{{ asset('assets/images/icon/projectDetailsIcon1_3.svg') }}" alt="icon">
                                </div>
                            </div>
                        </div>
                        <div class="single-desc">
                            <div class="row gy-5">
                                <div class="col-12">
                                    <h3 class="single-desc-title">
                                        Project Description
                                    </h3>
                                    <p class="text1">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary.
                                    </p>

                                    <p class="text2">
                                        ere are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="testimonial-wrap">
                            <div class="row gy-5">
                                <div class="col-xl-12">
                                    <div class="testimonial-card">
                                        <div class="tesimonial-content">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="53" height="38"
                                                    viewBox="0 0 53 38" fill="none">
                                                    <path
                                                        d="M52.5 23.4375C52.5 31.207 46.207 37.5 38.4375 37.5H37.5C35.4258 37.5 33.75 35.8242 33.75 33.75C33.75 31.6758 35.4258 30 37.5 30H38.4375C42.0586 30 45 27.0586 45 23.4375V22.5H37.5C33.3633 22.5 30 19.1367 30 15V7.5C30 3.36328 33.3633 0 37.5 0H45C49.1367 0 52.5 3.36328 52.5 7.5V11.25V15V23.4375ZM22.5 23.4375C22.5 31.207 16.207 37.5 8.4375 37.5H7.5C5.42578 37.5 3.75 35.8242 3.75 33.75C3.75 31.6758 5.42578 30 7.5 30H8.4375C12.0586 30 15 27.0586 15 23.4375V22.5H7.5C3.36328 22.5 0 19.1367 0 15V7.5C0 3.36328 3.36328 0 7.5 0H15C19.1367 0 22.5 3.36328 22.5 7.5V11.25V15V23.4375Z"
                                                        fill="#7444FD" />
                                                </svg>
                                            </div>
                                            <p class="text3">
                                                And the day came when the risk to remain tight in a bud was more painful
                                                than the risk it took to blossom.
                                            </p>
                                        </div>
                                        <div class="testimonial-author">
                                            – BILLI REUSS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-desc2">
                            <div class="row gy-5">
                                <div class="col-12">
                                    <h3 class="single-desc-title">
                                        The Result
                                    </h3>
                                    <p class="text1">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary.
                                    </p>

                                    <p class="text2">
                                        ere are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words
                                        which don't look even slightly believable. If you are going to use a passage of
                                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                        middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                        predefined chunks as necessary.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="slider-area projectSliderThree">
                            <div class="swiper gt-slider" id="projectSliderThree"
                                data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_1.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_2.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_3.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_4.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_1.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_3.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_1.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_2.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_3.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_4.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_1.jpg') }}" alt="thumb">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-thumb">
                                            <img src="{{ asset('assets/images/project/projectThumb3_3.jpg') }}" alt="thumb">
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
@endsection
