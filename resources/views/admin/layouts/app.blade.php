<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Admin PPID</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
        }

        .sidebar {
            min-height: 100vh;
            background: #1e2a38;
            width: 250px;
        }

        .sidebar .nav-link {
            color: #c9d1d9;
            padding: .6rem 1rem;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #fff;
            background: #2c3e50;
        }

        .sidebar .nav-link i {
            width: 20px;
        }

        .sidebar-brand {
            color: #fff;
            font-weight: 600;
            padding: 1rem;
            border-bottom: 1px solid #2c3e50;
        }

        .wrapper {
            display: flex;
        }

        .content {
            flex: 1;
            background: #f4f6f9;
            min-height: 100vh;
        }

        .submenu .nav-link {
            padding-left: 2.5rem;
            font-size: .9rem;
        }
    </style>
</head>

<body>

    <div class="wrapper">

        {{-- Sidebar --}}
        <div class="sidebar">
            <div class="sidebar-brand">
                Admin PPID
            </div>

            <ul class="nav flex-column p-2">

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>

                {{-- Profil --}}
                <li class="nav-item">
                    <a href="#profilMenu" data-bs-toggle="collapse"
                        class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('admin.profil.*') ? 'active' : '' }}">
                        <span><i class="bi bi-person-badge"></i> Profil</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu {{ request()->routeIs('admin.profil.*') ? 'show' : '' }}" id="profilMenu">
                        <ul class="nav flex-column">
                            <li><a href="{{ route('admin.profil.tentang-kabupaten.index') }}" class="nav-link">Tentang Kabupaten</a></li>
                            <li><a href="{{ route('admin.profil.visi-misi.index') }}" class="nav-link">Visi &amp; Misi</a></li>
                            <li><a href="{{ route('admin.profil.tupoksi-ppid.index') }}" class="nav-link">Tupoksi PPID</a></li>
                            <li><a href="{{ route('admin.profil.profil-pimpinan.index') }}" class="nav-link">Profil Pimpinan</a></li>
                            <li><a href="{{ route('admin.profil.tentang-ppid.index') }}" class="nav-link">Tentang PPID</a></li>
                            <li><a href="{{ route('admin.profil.struktur-ppid.index') }}" class="nav-link">Struktur PPID</a></li>
                            <li><a href="{{ route('admin.profil.lhkpn.index') }}" class="nav-link">LHKPN Pimpinan</a></li>
                            <li><a href="{{ route('admin.profil.alamat-dinas.index') }}" class="nav-link">Alamat Dinas</a></li>
                        </ul>
                    </div>
                </li>

                {{-- Regulasi --}}
                <li class="nav-item">
                    <a href="{{ route('admin.regulasi.index') }}"
                        class="nav-link {{ request()->routeIs('admin.regulasi.*') ? 'active' : '' }}">
                        <i class="bi bi-journal-text"></i> Regulasi PPID
                    </a>
                </li>

                {{-- Layanan --}}
                <li class="nav-item">
                    <a href="#layananMenu" data-bs-toggle="collapse"
                        class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('admin.layanan.*') ? 'active' : '' }}">
                        <span><i class="bi bi-gear"></i> Layanan</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu {{ request()->routeIs('admin.layanan.*') ? 'show' : '' }}" id="layananMenu">
                        <ul class="nav flex-column">
                            <li><a href="{{ route('admin.layanan.sop-ppid.index') }}" class="nav-link">SOP Aplikasi PPID</a></li>
                            <li><a href="{{ route('admin.layanan.alur-permohonan.index') }}" class="nav-link">Alur Permohonan</a></li>
                            <li><a href="{{ route('admin.layanan.daftar-permohonan') }}" class="nav-link">Daftar Permohonan</a></li>
                            <li><a href="{{ route('admin.layanan.formulir') }}" class="nav-link">Formulir Permohonan</a></li>
                        </ul>
                    </div>
                </li>

                {{-- Informasi Publik --}}
                <li class="nav-item">
                    <a href="#infoPublikMenu" data-bs-toggle="collapse"
                        class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('admin.informasi-publik.*') ? 'active' : '' }}">
                        <span><i class="bi bi-info-circle"></i> Informasi Publik</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <div class="collapse submenu {{ request()->routeIs('admin.informasi-publik.*') ? 'show' : '' }}" id="infoPublikMenu">
                        <ul class="nav flex-column">
                            <li><a href="{{ route('admin.informasi-publik.informasi-berkala.index') }}" class="nav-link">Informasi Berkala</a></li>
                            <li>
                                <a href="{{ route('admin.informasi-publik.informasi-serta-merta.index') }}"
                                    class="nav-link">
                                    Serta Merta
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.informasi-publik.informasi-dikecualikan.index') }}"
                                    class="nav-link">
                                    Dikecualikan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route(
        'admin.informasi-publik.informasi-tersedia-setiap-saat.index'
    ) }}"
                                    class="nav-link">
                                    Setiap Saat
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Berita --}}
                <li class="nav-item">
                    <a href="{{ route('admin.berita.index') }}"
                        class="nav-link {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
                        <i class="bi bi-newspaper"></i> Berita
                    </a>
                </li>
                {{-- Potensi Kecamatan --}}
                <li class="nav-item">
                    <a href="{{ route('admin.potensi-kecamatan.index') }}"
                        class="nav-link {{ request()->routeIs('admin.potensi-kecamatan.*') ? 'active' : '' }}">
                        <i class="bi bi-tree"></i> Potensi Kecamatan
                    </a>
                </li>
                {{-- Kontak --}}
                <li class="nav-item">
                    <a href="{{ route('admin.contact.index') }}"
                        class="nav-link {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}">
                        <i class="bi bi-envelope"></i> Kontak
                    </a>
                </li>

            </ul>
        </div>

        {{-- Content --}}
        <div class="content">
            <nav class="navbar navbar-dark bg-dark px-3">
                <span class="navbar-brand mb-0 h1">@yield('title')</span>

                <form action="{{ route('logout') }}" method="POST" class="mb-0">
                    @csrf
                    <button class="btn btn-danger btn-sm">
                        Logout
                    </button>
                </form>
            </nav>

            <div class="container-fluid mt-4">
                @yield('content')
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')

</body>

</html>