<!-- Header Section Start -->
<header class="header-section-1">
    <div id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="{{ route('home') }}" class="header-logo">
                                <img src="{{ asset('assets/images/logo/kec.png') }}" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="{{ route('home') }}">
                                                Home
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="{{ route('profil.index') }}">
                                                Profil
                                                <i class="fas fa-angle-down"></i>
                                            </a>

                                            <ul class="submenu">
                                                <li><a href="{{ route('profil.tentang-kabupaten') }}">Tentang Kecamatan Brebes</a></li>
                                                <li><a href="{{ route('profil.visi-misi') }}">Visi dan Misi Kecamatan Brebes</a></li>
                                                <li><a href="{{ route('profil.tupoksi-ppid') }}">Tupoksi Kecamatan Pelaksana</a></li>
                                                <li><a href="{{ route('profil.profil-pimpinan') }}">Profil Pimpinan Kecamatan Brebes</a></li>
                                                <li><a href="{{ route('profil.tentang-ppid') }}">Tentang Kecamatan Brebes</a></li>
                                                <li><a href="{{ route('profil.struktur-ppid') }}">Struktur Kecamatan Brebes</a></li>
                                                <li><a href="{{ route('profil.lhkpn') }}">LHKPN Pimpinan Kecamatan Brebes </a></li>
                                                <li><a href="{{ route('profil.alamat-dinas') }}">Alamat Lengkap Dinas</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('regulasi.index') }}">
                                                Regulasi Kecamatan
                                            </a>
                                        </li>
                                        {{-- =====================================================
    PPID
====================================================== --}}
                                        <li class="has-dropdown">
                                            <a href="#0">
                                                PPID
                                                <i class="fas fa-angle-down"></i>
                                            </a>

                                            <ul class="submenu">

                                                {{-- =================================================
            SK PPID PELAKSANA
        ================================================== --}}
                                                <li>
                                                    <a href="{{ route('ppid.show') }}">
                                                        SK PPID Pelaksana
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('struktur') }}">
                                                        Struktur
                                                    </a>
                                                </li>


                                                {{-- =================================================
            LAYANAN PPID
        ================================================== --}}
                                                <li class="has-dropdown">
                                                    <a href="#0">
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
                                                            <a href="{{ route('layanan.formulir-permohonan') }}">
                                                                Formulir Permohonan Informasi Publik
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>


                                                {{-- =================================================
            INFORMASI PUBLIK
        ================================================== --}}
                                                <li class="has-dropdown">
                                                    <a href="#0">
                                                        Informasi Publik
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>

                                                    <ul class="submenu">

                                                        <li>
                                                            <a href="{{ route('informasi-publik.informasi-berkala.index') }}">
                                                                Informasi Publik Yang Wajib Disediakan dan
                                                                Diumumkan Secara Berkala
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('informasi-publik.informasi-serta-merta.index') }}">
                                                                Informasi Yang Wajib Diumumkan Secara Serta Merta
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('informasi-publik.informasi-dikecualikan.index') }}">
                                                                Informasi Yang Dikecualikan
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{ route('informasi-publik.informasi-tersedia-setiap-saat.index') }}">
                                                                Informasi Wajib Tersedia Setiap Saat
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('berita.index') }}">
                                                Berita
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('potensi-kecamatan.index') }}">
                                                Potensi Kecamatan
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('contact.index') }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    {{-- LOGIN BUTTON --}}
                    <div class="header-button">
                        <div class="btn-wrapper">

                            <a href="{{ route('login') }}">

                                <span class="theme-btn">

                                    <i class="fas fa-sign-in-alt me-2"></i>
                                    Login

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none">

                                        <path
                                            d="M11.6123 3.61183L10.8996 4.32455L14.0711 7.49604H0.000488281V8.50399H14.0711L10.8996 11.6754L11.6123 12.3882L16.0005 7.99998L11.6123 3.61183Z"
                                            fill="white" />

                                    </svg>

                                </span>

                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>