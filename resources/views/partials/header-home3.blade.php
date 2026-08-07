<!-- Header Section Start -->
    <header class="header-section-3 top-0">
        <div id="header-sticky" class="header-3">
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

                        <div class="header-right d-flex justify-content-end align-items-center">
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
                                            <li class="has-dropdown">
                                                <a href="{{ route('profil.index') }}">
                                                    Profil
                                                    <i class="fas fa-angle-down"></i>
                                                </a>

                                                <ul class="submenu">
                                                    <li><a href="{{ route('profil.tentang-kabupaten') }}">Tentang Kabupaten Brebes</a></li>
                                                    <li><a href="{{ route('profil.visi-misi') }}">Visi dan Misi Kabupaten Brebes</a></li>
                                                    <li><a href="{{ route('profil.tupoksi-ppid') }}">Tupoksi PPID dan PPID Pelaksana</a></li>
                                                    <li><a href="{{ route('profil.profil-pimpinan') }}">Profil Pimpinan Badan Publik</a></li>
                                                    <li><a href="{{ route('profil.tentang-ppid') }}">Tentang PPID</a></li>
                                                    <li><a href="{{ route('profil.struktur-ppid') }}">Struktur PPID</a></li>
                                                    <li><a href="{{ route('profil.lhkpn') }}">LHKPN Pimpinan Badan Publik</a></li>
                                                    <li><a href="{{ route('profil.alamat-dinas') }}">Alamat Lengkap Dinas</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('services.index') }}">
                                                    Regulasi PPID
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ route('layanan.index') }}">
                                                    Layanan
                                                    <i class="fas fa-angle-down"></i>
                                                </a>

                                                <ul class="submenu">
                                                    <li>
                                                        <a href="{{ route('layanan.sop-ppid') }}">
                                                            SOP Aplikasi PPID
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('layanan.alur-permohonan') }}">
                                                            Alur Permohonan Informasi PPID
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('layanan.daftar-permohonan') }}">
                                                            Daftar Permohonan Informasi Publik
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('layanan.formulir-permohonan') }}">
                                                            Formulir Permohonan Informasi Publik
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ route('informasi-publik.index') }}">
                                                    Informasi Publik
                                                    <i class="fas fa-angle-down"></i>
                                                </a>

                                                <ul class="submenu">
                                                    <li>
                                                        <a href="{{ route('informasi-publik.informasi-berkala') }}">
                                                            Informasi Publik Yang Wajib Disediakan dan Diumumkan Secara Berkala
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('informasi-publik.informasi-serta-merta') }}">
                                                            Informasi Yang Wajib Diumumkan Secara Serta Merta
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('informasi-publik.informasi-dikecualikan') }}">
                                                            Informasi Yang Dikecualikan
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('informasi-publik.informasi-setiap-saat') }}">
                                                            Informasi Wajib Tersedia Setiap Saat
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('pricing') }}">
                                                    Berita
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('login') }}">
                                                    Login
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact.index') }}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                            <div class="header-button">
                                <div class="btn-wrapper">
                                    <a href="{{ route('contact.index') }}"> <span class="theme-btn"> Get Started
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_199_939)">
                                                    <path
                                                        d="M11.6123 3.61183L10.8996 4.32455L14.0711 7.49604H0.000488281V8.50399H14.0711L10.8996 11.6754L11.6123 12.3882L16.0005 7.99998L11.6123 3.61183Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_199_939">
                                                        <rect width="16" height="16" fill="white"
                                                            transform="translate(0.000488281)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
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
