@extends('layouts.app', [
    'headerVariant' => 'blog',
    'footerVariant' => 'blog',
])

@section('title', 'Blog Left Sidebar | Niotech')
@section('meta_description', 'Blog Left Sidebar | Niotech')

@section('content')
<!-- Breadcumb Section S T A R T -->
    <div class="breadcumb-section fix">
        <div class="breadcumb-container-wrapper" data-bg-src="{{ asset('assets/images/bg/breadcumgBg.png') }}">
            <div class="container">
                <div class="shape1"><img src="{{ asset('assets/images/shape/breadCumbShape1_1.png') }}" alt="shape"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shape/breadCumbShape1_2.png') }}" alt="shape"></div>
                <div class="breadcumb-wrapper">
                    <div class="page-heading">
                        <h1>Blog Left Sidebar</h1>
                        <div class="links">
                            <a href="{{ route('home') }}">Home<span class="slash">/</span></a> Blog Left Sidebar
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Standard Section S T A R T -->
    <section class="news-standard fix section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".2s">
                            <div class="wid-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".4s">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href="{{ route('blog.show') }}">Database Security <span>(08)</span></a></li>
                                    <li><a href="{{ route('blog.show') }}">IT Consultancy <span>(11)</span></a></li>
                                    <li class="active"><a href="{{ route('blog.show') }}">App Development <span>(12)</span></a>
                                    </li>
                                    <li><a href="{{ route('blog.show') }}">UI/UX Design <span>(18)</span></a></li>
                                    <li><a href="{{ route('blog.show') }}">Cyber Security <span>(07)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".6s">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-area">
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/images/blog/blogRecentThumb1_1.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <img src="{{ asset('assets/images/icon/calendarIcon.svg') }}" alt="icon">
                                                18 Dec, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="{{ route('blog.show') }}">
                                                Keep Your Business Safe & <br>
                                                Endure High Availability
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/images/blog/blogRecentThumb1_2.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <img src="{{ asset('assets/images/icon/calendarIcon.svg') }}" alt="icon">
                                                18 Dec, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="{{ route('blog.show') }}">
                                                Tacking the Changes of <br>
                                                Retail Industry
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/images/blog/blogRecentThumb1_3.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <img src="{{ asset('assets/images/icon/calendarIcon.svg') }}" alt="icon">
                                                18 Dec, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="{{ route('blog.show') }}">
                                                What’s the Holding Back <br>
                                                the It Solution
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".9s">
                            <div class="wid-title">
                                <h3>Tags</h3>
                            </div>
                            <div class="news-widget-categories">
                                <div class="tagcloud">
                                    <a href="{{ route('blog.standard') }}">Security</a>
                                    <a href="{{ route('blog.show') }}">Business</a>
                                    <a href="{{ route('blog.show') }}">Digital</a>
                                    <a href="{{ route('blog.show') }}">Technology</a>
                                    <a href="{{ route('blog.show') }}">Change</a>
                                    <a href="{{ route('blog.show') }}">Video</a>
                                    <a href="{{ route('blog.show') }}">UI/UX Desing</a>
                                    <a href="{{ route('blog.show') }}">Startup</a>
                                    <a href="{{ route('blog.show') }}">Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="news-standard-wrapper">
                        <div class="news-standard-items wow fadeInUp" data-wow-delay=".2s">
                            <div class="news-thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb4_1.jpg') }}" alt="img">
                                <div class="post-date">
                                    <h3>
                                        27 <br>
                                        <span>Feb</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-light fa-comments"></i>
                                        3 Comments
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ route('blog.show') }}">Choose The Best IT Service Company in the City.</a>
                                </h3>
                                <p>
                                    Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci
                                    malesuada the sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum
                                    mauris id nunc molestie tincidunt erat gravida. Nullam dui libero, mollis ac quam
                                    et, venenatis.
                                </p>
                                <a href="{{ route('blog.show') }}" class="theme-btn mt-4">
                                    Read More
                                    <i class="fa-sharp fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="news-standard-items wow fadeInUp" data-wow-delay=".4s">
                            <div class="news-thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb4_2.jpg') }}" alt="img">
                                <div class="post-date">
                                    <h3>
                                        19 <br>
                                        <span>Feb</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-light fa-comments"></i>
                                        2 Comments
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ route('blog.show') }}">Keep Your Business Safe Ensure High Availability</a>
                                </h3>
                                <p>
                                    Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci
                                    malesuada the sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum
                                    mauris id nunc molestie tincidunt erat gravida. Nullam dui libero, mollis ac quam
                                    et, venenatis.
                                </p>
                                <a href="{{ route('blog.show') }}" class="theme-btn mt-4">
                                    Read More
                                    <i class="fa-sharp fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="news-standard-items wow fadeInUp" data-wow-delay=".6s">
                            <div class="news-thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb4_3.jpg') }}" alt="img">
                                <div class="post-date">
                                    <h3>
                                        28 <br>
                                        <span>Feb</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-light fa-comments"></i>
                                        0 Comments
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ route('blog.show') }}">Tackling the Changes of Retell Industry</a>
                                </h3>
                                <p>
                                    Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci
                                    malesuada the sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum
                                    mauris id nunc molestie tincidunt erat gravida. Nullam dui libero, mollis ac quam
                                    et, venenatis.
                                </p>
                                <a href="{{ route('blog.show') }}" class="theme-btn mt-4">
                                    Read More
                                    <i class="fa-sharp fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="page-nav-wrap pt-5 text-center wow fadeInUp" data-wow-delay=".8s">
                            <ul>
                                <li><a class="page-numbers" href="#">01</a></li>
                                <li><a class="page-numbers" href="#">02</a></li>
                                <li><a class="page-numbers" href="#">03</a></li>
                                <li><a class="page-numbers" href="#"><i
                                            class="fa-sharp fa-light fa-arrow-right-long"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
