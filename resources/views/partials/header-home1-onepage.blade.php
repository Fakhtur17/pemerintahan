<!-- Header Section Start -->
    <header class="header-section-1">
        <div id="header-sticky" class="header-1">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="{{ route('home') }}" class="header-logo">
                                    <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-middle">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="#">
                                                    Home
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu has-homemenu">
                                                    <li>
                                                        <div class="homemenu-items">
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="{{ asset('assets/images/header/home-1.png') }}"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn" href="{{ route('home') }}">
                                                                            Multi Page
                                                                        </a>
                                                                        <a class="theme-btn" href="{{ route('home.onepage') }}">
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 01
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('assets/images/header/home-2.png') }}"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn" href="{{ route('home2') }}">
                                                                            Multi Page
                                                                        </a>
                                                                        <a class="theme-btn" href="{{ route('home2.onepage') }}">
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 02
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="{{ asset('assets/images/header/home-3.png') }}"
                                                                        alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn" href="{{ route('home3') }}">
                                                                            Multi Page
                                                                        </a>
                                                                        <a class="theme-btn" href="{{ route('home3.onepage') }}">
                                                                            One Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 03
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown active d-xl-none">
                                                <a href="{{ route('home') }}" class="border-none">
                                                    Home
                                                    <i class="fa-regular fa-plus"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('home') }}">Home 01</a></li>
                                                    <li><a href="{{ route('home2') }}">Home 02</a></li>
                                                    <li><a href="{{ route('home3') }}">Home 03</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#about">About Us</a>
                                            </li>
                                            <li>
                                                <a href="#features"> Features </a>
                                            </li>
                                            <li>
                                                <a href="#pricing"> Pricing </a>
                                            </li>
                                            <li>
                                                <a href="#blog"> Blog </a>
                                            </li>
                                            <li>
                                                <a href="#app">Our App</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>

                            <div class="header-button ms-4">
                                <a href="{{ route('contact.index') }}" class="theme-btn">
                                    <span>
                                        Get Started
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="header__hamburger d-block d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
