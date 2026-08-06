@extends('layouts.app', [
    'headerVariant' => 'blog',
    'footerVariant' => 'blog',
])

@section('title', 'Blog | Niotech')
@section('meta_description', 'Blog | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Blog Grid</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a> Blog Grid
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Grid Section S T A R T -->
    <section class="blog-area section-padding fix">
        <div class="container">
            <div class="blog-card-wrap style1 mb-30">
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".2s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_1.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">Technology</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">Regional Managers time management.</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg> </a>
                        </div>
                        <div class="calendar">
                            <div class="date">20</div>
                            <div class="month">june</div>
                        </div>
                    </div>
                </div>
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".4s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_2.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">Solutions</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">Revitalising your people in a retail downturn</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg>
                            </a>
                        </div>
                        <div class="calendar">
                            <div class="date">28</div>
                            <div class="month">March</div>
                        </div>
                    </div>
                </div>
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".6s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_3.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">UI/UX Design</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">Organisationaly teams are just like families.</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg></a>
                        </div>
                        <div class="calendar">
                            <div class="date">16</div>
                            <div class="month">june</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-card-wrap style1 mb-30">
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".2s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_4.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">Technology</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">Services that printing at you is important</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg>
                            </a>
                        </div>
                        <div class="calendar">
                            <div class="date">30</div>
                            <div class="month">june</div>
                        </div>
                    </div>
                </div>
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".4s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_5.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">Solutions</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">That will help you get 1% better every day</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg>
                            </a>
                        </div>
                        <div class="calendar">
                            <div class="date">24</div>
                            <div class="month">March</div>
                        </div>
                    </div>
                </div>
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".6s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_6.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">UI/UX Design</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">A checklist to improve your daily routine</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg>
                            </a>
                        </div>
                        <div class="calendar">
                            <div class="date">17</div>
                            <div class="month">june</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-card-wrap style1">
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".2s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_7.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">Technology</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">Principles UX that should be aware of winner</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg>
                            </a>
                        </div>
                        <div class="calendar">
                            <div class="date">30</div>
                            <div class="month">june</div>
                        </div>
                    </div>
                </div>
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".4s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_8.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">Solutions</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">Awaited technology final change the world</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg>
                            </a>
                        </div>
                        <div class="calendar">
                            <div class="date">24</div>
                            <div class="month">March</div>
                        </div>
                    </div>
                </div>
                <div class="blog-card style2 wow fadeInUp" data-wow-delay=".6s">
                    <div class="blog-card-thumb style1">
                        <img src="{{ asset('assets/images/blog/blogThumb3_9.jpg') }}" alt="thumb">
                    </div>
                    <div class="blog-card-body">
                        <div class="tag-cloud">
                            <div class="meta">
                                <span class="icon"><img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon"></span>
                                <span class="text">By Admin</span>
                            </div>
                            <div class="meta">
                                <span class="icon"><img src=" assets/images/icon/tagIcon.svg" alt="icon"></span>
                                <span class="text">UI/UX Design</span>
                            </div>
                        </div>
                        <h3 class="blog-title style1">
                            <a href="{{ route('blog.show') }}">Artificial intelligence that will blow your mind</a>
                        </h3>
                        <div class="btn-wrapper">
                            <a href='blog-details.html'>Read More <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="10" viewBox="0 0 16 10" fill="none">
                                    <path
                                        d="M11.6118 0.612305L10.8991 1.32503L14.0706 4.49652H0V5.50447H14.0706L10.8991 8.67592L11.6118 9.38865L16 5.00046L11.6118 0.612305Z"
                                        fill="#565656" />
                                </svg>
                            </a>
                        </div>
                        <div class="calendar">
                            <div class="date">17</div>
                            <div class="month">june</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
