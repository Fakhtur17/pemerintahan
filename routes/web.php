<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| PUBLIC CONTROLLERS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\FormPermohonanInformasiController;
/*
|--------------------------------------------------------------------------
| PUBLIC - INFORMASI PUBLIK
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\InformasiPublik\InformasiPublikController
as PublicInformasiPublikController;

use App\Http\Controllers\InformasiPublik\InformasiBerkalaController
as PublicInformasiBerkalaController;

use App\Http\Controllers\InformasiPublik\InformasiSertaMertaController
as PublicInformasiSertaMertaController;

use App\Http\Controllers\InformasiPublik\InformasiTersediaSetiapSaatController
as PublicInformasiTersediaSetiapSaatController;

use App\Http\Controllers\InformasiPublik\InformasiDikecualikanController
as PublicInformasiDikecualikanController;

use App\Http\Controllers\Potensi\PotensiKecamatanController as PublicPotensiKecamatanController;
/*
|--------------------------------------------------------------------------
| ADMIN CONTROLLERS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;


/*
|--------------------------------------------------------------------------
| ADMIN - PROFIL
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\Profil\TentangKabupatenController;
use App\Http\Controllers\Admin\Profil\VisiMisiController;
use App\Http\Controllers\Admin\Profil\TupoksiPpidController;
use App\Http\Controllers\Admin\Profil\ProfilPimpinanController;
use App\Http\Controllers\Admin\Profil\TentangPpidController;
use App\Http\Controllers\Admin\Profil\StrukturPpidController;
use App\Http\Controllers\Admin\Profil\LhkpnController;
use App\Http\Controllers\Admin\Profil\AlamatDinasController;


/*
|--------------------------------------------------------------------------
| ADMIN - REGULASI
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\Regulasi\RegulasiController
as AdminRegulasiController;


/*
|--------------------------------------------------------------------------
| ADMIN - INFORMASI PUBLIK
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\InformasiPublik\InformasiPublikController
as AdminInformasiPublikController;


/*
|--------------------------------------------------------------------------
| ADMIN - INFORMASI BERKALA
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala\InformasiBerkalaController
as AdminInformasiBerkalaController;

use App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala\JenisInformasiBerkalaController;

use App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala\DataInformasiBerkalaController;


/*
|--------------------------------------------------------------------------
| ADMIN - INFORMASI SERTA MERTA
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta\InformasiSertaMertaController
as AdminInformasiSertaMertaController;

use App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta\JenisInformasiSertaMertaController;

use App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta\DataInformasiSertaMertaController;


/*
|--------------------------------------------------------------------------
| ADMIN - INFORMASI DIKECUALIKAN
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan\InformasiDikecualikanController
as AdminInformasiDikecualikanController;

use App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan\JenisInformasiDikecualikanController;

use App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan\DataInformasiDikecualikanController;


/*
|--------------------------------------------------------------------------
| ADMIN - INFORMASI TERSEDIA SETIAP SAAT
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat\InformasiTersediaSetiapSaatController
as AdminInformasiTersediaSetiapSaatController;

use App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat\JenisInformasiTersediaSetiapSaatController;

use App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat\DataInformasiTersediaSetiapSaatController;


/*
|--------------------------------------------------------------------------
| ADMIN - LAYANAN
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\Layanan\SopPpidController;
use App\Http\Controllers\Admin\Layanan\AlurPermohonanController;
use App\Http\Controllers\Admin\Layanan\DaftarPermohonanController;
use App\Http\Controllers\Admin\Layanan\FormulirController;


/*
|--------------------------------------------------------------------------
| ADMIN - BERITA
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\Berita\BeritaController
as AdminBeritaController;

/*
|--------------------------------------------------------------------------
| ADMIN - POTENSI
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\Potensi\PotensiKecamatanController;

use App\Http\Controllers\Admin\ContactController as AdminContactController;

use App\Http\Controllers\Admin\PpidController as AdminPpidController;

use App\Http\Controllers\PpidController;

use App\Http\Controllers\Admin\StrukturController as AdminStrukturController;

use App\Http\Controllers\Admin\PermohonanInformasiController;
/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [
    LoginController::class,
    'index'
])->name('login');

Route::post('/login', [
    LoginController::class,
    'authenticate'
])->name('login.authenticate');

Route::post('/logout', [
    LoginController::class,
    'logout'
])->name('logout');


/*
|--------------------------------------------------------------------------
| WEBSITE
|--------------------------------------------------------------------------
*/

Route::get('/', [
    HomeController::class,
    'index'
])->name('home');

Route::get('/index-2', [
    HomeController::class,
    'indexTwo'
])->name('home2');

Route::get('/index-3', [
    HomeController::class,
    'indexThree'
])->name('home3');

Route::get('/one-page', [
    HomeController::class,
    'onePage'
])->name('home.onepage');

Route::get('/two-page', [
    HomeController::class,
    'twoPage'
])->name('home2.onepage');

Route::get('/three-page', [
    HomeController::class,
    'threePage'
])->name('home3.onepage');


/*
|--------------------------------------------------------------------------
| PROFIL WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('profil')
    ->name('profil.')
    ->group(function () {

        Route::get('/', [
            ProfilController::class,
            'index'
        ])->name('index');

        Route::get('/tentang-kabupaten', [
            ProfilController::class,
            'tentangKabupaten'
        ])->name('tentang-kabupaten');

        Route::get('/visi-misi', [
            ProfilController::class,
            'visiMisi'
        ])->name('visi-misi');

        Route::get('/tupoksi-ppid', [
            ProfilController::class,
            'tupoksiPpid'
        ])->name('tupoksi-ppid');

        Route::get('/profil-pimpinan', [
            ProfilController::class,
            'profilPimpinan'
        ])->name('profil-pimpinan');

        Route::get('/tentang-ppid', [
            ProfilController::class,
            'tentangPpid'
        ])->name('tentang-ppid');

        Route::get('/struktur-ppid', [
            ProfilController::class,
            'strukturPpid'
        ])->name('struktur-ppid');

        Route::get('/lhkpn', [
            ProfilController::class,
            'lhkpn'
        ])->name('lhkpn');

        Route::get('/alamat-dinas', [
            ProfilController::class,
            'alamatDinas'
        ])->name('alamat-dinas');
    });


/*
|--------------------------------------------------------------------------
| REGULASI WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('regulasi')
    ->name('regulasi.')
    ->group(function () {

        Route::get('/', [
            RegulasiController::class,
            'index'
        ])->name('index');

        Route::get('/{id}', [
            RegulasiController::class,
            'show'
        ])->name('show');
    });


/*
|--------------------------------------------------------------------------
| LAYANAN WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('layanan')
    ->name('layanan.')
    ->group(function () {

        Route::get('/', [
            LayananController::class,
            'index'
        ])->name('index');

        Route::get('/sop-ppid', [
            LayananController::class,
            'sopPpid'
        ])->name('sop-ppid');

        Route::get('/alur-permohonan', [
            LayananController::class,
            'alurPermohonan'
        ])->name('alur-permohonan');

        Route::get('/daftar-permohonan', [
            LayananController::class,
            'daftarPermohonan'
        ])->name('daftar-permohonan');

        Route::get('/formulir-permohonan', [
            LayananController::class,
            'formulirPermohonan'
        ])->name('formulir-permohonan');
    });


/*
|--------------------------------------------------------------------------
| INFORMASI PUBLIK - PUBLIC
|--------------------------------------------------------------------------
*/

Route::prefix('informasi-publik')
    ->name('informasi-publik.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | INDEX
        |--------------------------------------------------------------------------
        */

        Route::get('/', [
            PublicInformasiPublikController::class,
            'index'
        ])->name('index');


        /*
        |--------------------------------------------------------------------------
        | INFORMASI BERKALA
        |--------------------------------------------------------------------------
        */

        Route::get('/informasi-berkala', [
            PublicInformasiBerkalaController::class,
            'index'
        ])->name('informasi-berkala.index');

        Route::get(
            '/informasi-berkala/{jenisInformasiBerkala}/data',
            [
                PublicInformasiBerkalaController::class,
                'data'
            ]
        )->name('informasi-berkala.data');


        /*
        |--------------------------------------------------------------------------
        | INFORMASI SERTA MERTA
        |--------------------------------------------------------------------------
        */

        Route::get('/informasi-serta-merta', [
            PublicInformasiSertaMertaController::class,
            'index'
        ])->name('informasi-serta-merta.index');

        Route::get(
            '/informasi-serta-merta/{jenisInformasiSertaMerta}/data',
            [
                PublicInformasiSertaMertaController::class,
                'data'
            ]
        )->name('informasi-serta-merta.data');


        /*
        |--------------------------------------------------------------------------
        | INFORMASI DIKECUALIKAN
        |--------------------------------------------------------------------------
        */

        Route::get('/informasi-dikecualikan', [
            PublicInformasiDikecualikanController::class,
            'index'
        ])->name('informasi-dikecualikan.index');

        Route::get(
            '/informasi-dikecualikan/{jenisInformasiDikecualikan}/data',
            [
                PublicInformasiDikecualikanController::class,
                'data'
            ]
        )->name('informasi-dikecualikan.data');


        /*
        |--------------------------------------------------------------------------
        | INFORMASI TERSEDIA SETIAP SAAT
        |--------------------------------------------------------------------------
        */

        Route::get('/informasi-tersedia-setiap-saat', [
            PublicInformasiTersediaSetiapSaatController::class,
            'index'
        ])->name('informasi-tersedia-setiap-saat.index');

        Route::get(
            '/informasi-tersedia-setiap-saat/{jenisInformasiTersediaSetiapSaat}/data',
            [
                PublicInformasiTersediaSetiapSaatController::class,
                'data'
            ]
        )->name('informasi-tersedia-setiap-saat.data');
    });

/*
|--------------------------------------------------------------------------
| Berita
|--------------------------------------------------------------------------
*/


Route::prefix('berita')
    ->name('berita.')
    ->group(function () {

        Route::get('/', [
            BeritaController::class,
            'index'
        ])->name('index');

        Route::get('/{berita}', [
            BeritaController::class,
            'show'
        ])->name('show');
    });

/*
|--------------------------------------------------------------------------
| POTENSI KECAMATAN - PUBLIC
|--------------------------------------------------------------------------
*/

Route::prefix('potensi-kecamatan')
    ->name('potensi-kecamatan.')
    ->group(function () {

        Route::get('/', [
            PublicPotensiKecamatanController::class,
            'index'
        ])->name('index');

        Route::get('/{potensiKecamatan}', [
            PublicPotensiKecamatanController::class,
            'show'
        ])->name('show');
    });

Route::get('/kontak', [ContactController::class, 'index'])
    ->name('contact.index');

Route::post('/kontak', [ContactController::class, 'store'])
    ->name('contact.store');


Route::get('/ppid', [PpidController::class, 'show'])->name('ppid.show');

Route::get('/struktur', [StrukturController::class, 'index'])
    ->name('struktur');

Route::get(
    '/form-permohonan-informasi',
    [FormPermohonanInformasiController::class, 'index']
)->name('form-permohonan-informasi');

Route::post(
    '/form-permohonan-informasi',
    [FormPermohonanInformasiController::class, 'store']
)->name('form-permohonan-informasi.store');
/*
|--------------------------------------------------------------------------
| TEMPLATE
|--------------------------------------------------------------------------
*/

Route::get('/about', [
    AboutController::class,
    'index'
])->name('about');

Route::post('/contact', [
    ContactController::class,
    'store'
])->name('contact.store');


/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | DASHBOARD
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [
            DashboardController::class,
            'index'
        ])->name('dashboard');


        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */

        Route::resource(
            'users',
            UserController::class
        );

        Route::get('/users/role', [
            UserController::class,
            'role'
        ])->name('users.role');


        /*
        |--------------------------------------------------------------------------
        | PROFIL
        |--------------------------------------------------------------------------
        */

        Route::prefix('profil')
            ->name('profil.')
            ->group(function () {

                Route::resource(
                    'tentang-kabupaten',
                    TentangKabupatenController::class
                );

                Route::resource(
                    'visi-misi',
                    VisiMisiController::class
                );

                Route::resource(
                    'tupoksi-ppid',
                    TupoksiPpidController::class
                );

                Route::resource(
                    'profil-pimpinan',
                    ProfilPimpinanController::class
                );

                Route::resource(
                    'tentang-ppid',
                    TentangPpidController::class
                );

                Route::resource(
                    'struktur-ppid',
                    StrukturPpidController::class
                );

                Route::resource(
                    'lhkpn',
                    LhkpnController::class
                );

                Route::resource(
                    'alamat-dinas',
                    AlamatDinasController::class
                );
            });


        /*
        |--------------------------------------------------------------------------
        | REGULASI
        |--------------------------------------------------------------------------
        */

        Route::resource(
            'regulasi',
            AdminRegulasiController::class
        );


        /*
        |--------------------------------------------------------------------------
        | LAYANAN
        |--------------------------------------------------------------------------
        */

        Route::prefix('layanan')
            ->name('layanan.')
            ->group(function () {

                Route::resource(
                    'sop-ppid',
                    SopPpidController::class
                );

                Route::resource(
                    'alur-permohonan',
                    AlurPermohonanController::class
                );

                Route::get('/daftar-permohonan', [
                    DaftarPermohonanController::class,
                    'index'
                ])->name('daftar-permohonan');

                Route::get('/formulir', [
                    FormulirController::class,
                    'index'
                ])->name('formulir');
            });


        /*
        |--------------------------------------------------------------------------
        | INFORMASI PUBLIK - ADMIN
        |--------------------------------------------------------------------------
        */

        Route::prefix('informasi-publik')
            ->name('informasi-publik.')
            ->group(function () {

                /*
                |--------------------------------------------------------------------------
                | INDEX
                |--------------------------------------------------------------------------
                */

                Route::get('/', [
                    AdminInformasiPublikController::class,
                    'index'
                ])->name('index');


                /*
                |--------------------------------------------------------------------------
                | INFORMASI BERKALA
                |--------------------------------------------------------------------------
                */

                Route::prefix('informasi-berkala')
                    ->name('informasi-berkala.')
                    ->group(function () {

                        Route::get('/', [
                            AdminInformasiBerkalaController::class,
                            'index'
                        ])->name('index');

                        Route::resource(
                            'jenis',
                            JenisInformasiBerkalaController::class
                        );

                        Route::prefix('{jenisInformasiBerkala}')
                            ->group(function () {

                                Route::get('/data', [
                                    DataInformasiBerkalaController::class,
                                    'index'
                                ])->name('data.index');

                                Route::get('/data/create', [
                                    DataInformasiBerkalaController::class,
                                    'create'
                                ])->name('data.create');

                                Route::post('/data', [
                                    DataInformasiBerkalaController::class,
                                    'store'
                                ])->name('data.store');

                                Route::get(
                                    '/data/{dataInformasiBerkala}',
                                    [
                                        DataInformasiBerkalaController::class,
                                        'show'
                                    ]
                                )->name('data.show');

                                Route::get(
                                    '/data/{dataInformasiBerkala}/edit',
                                    [
                                        DataInformasiBerkalaController::class,
                                        'edit'
                                    ]
                                )->name('data.edit');

                                Route::put(
                                    '/data/{dataInformasiBerkala}',
                                    [
                                        DataInformasiBerkalaController::class,
                                        'update'
                                    ]
                                )->name('data.update');

                                Route::delete(
                                    '/data/{dataInformasiBerkala}',
                                    [
                                        DataInformasiBerkalaController::class,
                                        'destroy'
                                    ]
                                )->name('data.destroy');
                            });
                    });


                /*
                |--------------------------------------------------------------------------
                | INFORMASI SERTA MERTA
                |--------------------------------------------------------------------------
                */

                Route::prefix('informasi-serta-merta')
                    ->name('informasi-serta-merta.')
                    ->group(function () {

                        Route::get('/', [
                            AdminInformasiSertaMertaController::class,
                            'index'
                        ])->name('index');


                        /*
                        |--------------------------------------------------------------------------
                        | CRUD JENIS
                        |--------------------------------------------------------------------------
                        */

                        Route::get('/jenis/create', [
                            JenisInformasiSertaMertaController::class,
                            'create'
                        ])->name('jenis.create');

                        Route::post('/jenis', [
                            JenisInformasiSertaMertaController::class,
                            'store'
                        ])->name('jenis.store');

                        Route::get(
                            '/jenis/{jenisInformasiSertaMerta}',
                            [
                                JenisInformasiSertaMertaController::class,
                                'show'
                            ]
                        )->name('jenis.show');

                        Route::get(
                            '/jenis/{jenisInformasiSertaMerta}/edit',
                            [
                                JenisInformasiSertaMertaController::class,
                                'edit'
                            ]
                        )->name('jenis.edit');

                        Route::put(
                            '/jenis/{jenisInformasiSertaMerta}',
                            [
                                JenisInformasiSertaMertaController::class,
                                'update'
                            ]
                        )->name('jenis.update');

                        Route::delete(
                            '/jenis/{jenisInformasiSertaMerta}',
                            [
                                JenisInformasiSertaMertaController::class,
                                'destroy'
                            ]
                        )->name('jenis.destroy');


                        /*
                        |--------------------------------------------------------------------------
                        | DATA
                        |--------------------------------------------------------------------------
                        */

                        Route::get(
                            '/jenis/{jenisInformasiSertaMerta}/data',
                            [
                                DataInformasiSertaMertaController::class,
                                'index'
                            ]
                        )->name('data.index');

                        Route::get(
                            '/jenis/{jenisInformasiSertaMerta}/data/create',
                            [
                                DataInformasiSertaMertaController::class,
                                'create'
                            ]
                        )->name('data.create');

                        Route::post(
                            '/jenis/{jenisInformasiSertaMerta}/data',
                            [
                                DataInformasiSertaMertaController::class,
                                'store'
                            ]
                        )->name('data.store');

                        Route::get(
                            '/jenis/{jenisInformasiSertaMerta}/data/{dataInformasiSertaMerta}',
                            [
                                DataInformasiSertaMertaController::class,
                                'show'
                            ]
                        )->name('data.show');

                        Route::get(
                            '/jenis/{jenisInformasiSertaMerta}/data/{dataInformasiSertaMerta}/edit',
                            [
                                DataInformasiSertaMertaController::class,
                                'edit'
                            ]
                        )->name('data.edit');

                        Route::put(
                            '/jenis/{jenisInformasiSertaMerta}/data/{dataInformasiSertaMerta}',
                            [
                                DataInformasiSertaMertaController::class,
                                'update'
                            ]
                        )->name('data.update');

                        Route::delete(
                            '/jenis/{jenisInformasiSertaMerta}/data/{dataInformasiSertaMerta}',
                            [
                                DataInformasiSertaMertaController::class,
                                'destroy'
                            ]
                        )->name('data.destroy');
                    });


                /*
                |--------------------------------------------------------------------------
                | INFORMASI DIKECUALIKAN
                |--------------------------------------------------------------------------
                */

                Route::prefix('informasi-dikecualikan')
                    ->name('informasi-dikecualikan.')
                    ->group(function () {

                        Route::get('/', [
                            AdminInformasiDikecualikanController::class,
                            'index'
                        ])->name('index');


                        Route::get('/jenis/create', [
                            JenisInformasiDikecualikanController::class,
                            'create'
                        ])->name('jenis.create');

                        Route::post('/jenis', [
                            JenisInformasiDikecualikanController::class,
                            'store'
                        ])->name('jenis.store');

                        Route::get(
                            '/jenis/{jenisInformasiDikecualikan}',
                            [
                                JenisInformasiDikecualikanController::class,
                                'show'
                            ]
                        )->name('jenis.show');

                        Route::get(
                            '/jenis/{jenisInformasiDikecualikan}/edit',
                            [
                                JenisInformasiDikecualikanController::class,
                                'edit'
                            ]
                        )->name('jenis.edit');

                        Route::put(
                            '/jenis/{jenisInformasiDikecualikan}',
                            [
                                JenisInformasiDikecualikanController::class,
                                'update'
                            ]
                        )->name('jenis.update');

                        Route::delete(
                            '/jenis/{jenisInformasiDikecualikan}',
                            [
                                JenisInformasiDikecualikanController::class,
                                'destroy'
                            ]
                        )->name('jenis.destroy');


                        /*
                        |--------------------------------------------------------------------------
                        | DATA
                        |--------------------------------------------------------------------------
                        */

                        Route::get(
                            '/jenis/{jenisInformasiDikecualikan}/data',
                            [
                                DataInformasiDikecualikanController::class,
                                'index'
                            ]
                        )->name('data.index');

                        Route::get(
                            '/jenis/{jenisInformasiDikecualikan}/data/create',
                            [
                                DataInformasiDikecualikanController::class,
                                'create'
                            ]
                        )->name('data.create');

                        Route::post(
                            '/jenis/{jenisInformasiDikecualikan}/data',
                            [
                                DataInformasiDikecualikanController::class,
                                'store'
                            ]
                        )->name('data.store');

                        Route::get(
                            '/jenis/{jenisInformasiDikecualikan}/data/{dataInformasiDikecualikan}',
                            [
                                DataInformasiDikecualikanController::class,
                                'show'
                            ]
                        )->name('data.show');

                        Route::get(
                            '/jenis/{jenisInformasiDikecualikan}/data/{dataInformasiDikecualikan}/edit',
                            [
                                DataInformasiDikecualikanController::class,
                                'edit'
                            ]
                        )->name('data.edit');

                        Route::put(
                            '/jenis/{jenisInformasiDikecualikan}/data/{dataInformasiDikecualikan}',
                            [
                                DataInformasiDikecualikanController::class,
                                'update'
                            ]
                        )->name('data.update');

                        Route::delete(
                            '/jenis/{jenisInformasiDikecualikan}/data/{dataInformasiDikecualikan}',
                            [
                                DataInformasiDikecualikanController::class,
                                'destroy'
                            ]
                        )->name('data.destroy');
                    });


                /*
                |--------------------------------------------------------------------------
                | INFORMASI TERSEDIA SETIAP SAAT
                |--------------------------------------------------------------------------
                */

                Route::prefix('informasi-tersedia-setiap-saat')
                    ->name('informasi-tersedia-setiap-saat.')
                    ->group(function () {

                        Route::get('/', [
                            AdminInformasiTersediaSetiapSaatController::class,
                            'index'
                        ])->name('index');


                        /*
                        |--------------------------------------------------------------------------
                        | CRUD JENIS
                        |--------------------------------------------------------------------------
                        */

                        Route::get('/jenis/create', [
                            JenisInformasiTersediaSetiapSaatController::class,
                            'create'
                        ])->name('jenis.create');

                        Route::post('/jenis', [
                            JenisInformasiTersediaSetiapSaatController::class,
                            'store'
                        ])->name('jenis.store');

                        Route::get(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}',
                            [
                                JenisInformasiTersediaSetiapSaatController::class,
                                'show'
                            ]
                        )->name('jenis.show');

                        Route::get(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}/edit',
                            [
                                JenisInformasiTersediaSetiapSaatController::class,
                                'edit'
                            ]
                        )->name('jenis.edit');

                        Route::put(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}',
                            [
                                JenisInformasiTersediaSetiapSaatController::class,
                                'update'
                            ]
                        )->name('jenis.update');

                        Route::delete(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}',
                            [
                                JenisInformasiTersediaSetiapSaatController::class,
                                'destroy'
                            ]
                        )->name('jenis.destroy');


                        /*
                        |--------------------------------------------------------------------------
                        | DATA
                        |--------------------------------------------------------------------------
                        */

                        Route::get(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}/data',
                            [
                                DataInformasiTersediaSetiapSaatController::class,
                                'index'
                            ]
                        )->name('data.index');

                        Route::get(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}/data/create',
                            [
                                DataInformasiTersediaSetiapSaatController::class,
                                'create'
                            ]
                        )->name('data.create');

                        Route::post(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}/data',
                            [
                                DataInformasiTersediaSetiapSaatController::class,
                                'store'
                            ]
                        )->name('data.store');

                        Route::get(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}/data/{dataInformasiTersediaSetiapSaat}',
                            [
                                DataInformasiTersediaSetiapSaatController::class,
                                'show'
                            ]
                        )->name('data.show');

                        Route::get(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}/data/{dataInformasiTersediaSetiapSaat}/edit',
                            [
                                DataInformasiTersediaSetiapSaatController::class,
                                'edit'
                            ]
                        )->name('data.edit');

                        Route::put(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}/data/{dataInformasiTersediaSetiapSaat}',
                            [
                                DataInformasiTersediaSetiapSaatController::class,
                                'update'
                            ]
                        )->name('data.update');

                        Route::delete(
                            '/jenis/{jenisInformasiTersediaSetiapSaat}/data/{dataInformasiTersediaSetiapSaat}',
                            [
                                DataInformasiTersediaSetiapSaatController::class,
                                'destroy'
                            ]
                        )->name('data.destroy');
                    });
            });

        Route::resource(
            'berita',
            AdminBeritaController::class
        )->parameters([
            'berita' => 'berita',
        ]);

        /*
|--------------------------------------------------------------------------
| POTENSI
|--------------------------------------------------------------------------
*/

        /*
|--------------------------------------------------------------------------
| POTENSI KECAMATAN
|--------------------------------------------------------------------------
*/

        Route::prefix('potensi-kecamatan')
            ->name('potensi-kecamatan.')
            ->group(function () {

                Route::get('/', [
                    PotensiKecamatanController::class,
                    'index'
                ])->name('index');

                Route::get('/create', [
                    PotensiKecamatanController::class,
                    'create'
                ])->name('create');

                Route::post('/', [
                    PotensiKecamatanController::class,
                    'store'
                ])->name('store');

                Route::get('/{potensiKecamatan}/edit', [
                    PotensiKecamatanController::class,
                    'edit'
                ])->name('edit');

                Route::put('/{potensiKecamatan}', [
                    PotensiKecamatanController::class,
                    'update'
                ])->name('update');

                Route::delete('/{potensiKecamatan}', [
                    PotensiKecamatanController::class,
                    'destroy'
                ])->name('destroy');
            });





        Route::resource(
            'contact',
            AdminContactController::class
        );

        Route::resource(
            'ppid',
            AdminPpidController::class
        )->except(['show']);

        Route::resource('struktur', AdminStrukturController::class);

        Route::get(
            '/permohonan-informasi',
            [PermohonanInformasiController::class, 'index']
        )->name('permohonan-informasi.index');


        Route::get(
            '/permohonan-informasi/create',
            [PermohonanInformasiController::class, 'create']
        )->name('permohonan-informasi.create');


        Route::post(
            '/permohonan-informasi',
            [PermohonanInformasiController::class, 'store']
        )->name('permohonan-informasi.store');


        Route::get(
            '/permohonan-informasi/{permohonanInformasi}',
            [PermohonanInformasiController::class, 'show']
        )->name('permohonan-informasi.show');


        Route::get(
            '/permohonan-informasi/{permohonanInformasi}/edit',
            [PermohonanInformasiController::class, 'edit']
        )->name('permohonan-informasi.edit');


        Route::put(
            '/permohonan-informasi/{permohonanInformasi}',
            [PermohonanInformasiController::class, 'update']
        )->name('permohonan-informasi.update');


        Route::delete(
            '/permohonan-informasi/{permohonanInformasi}',
            [PermohonanInformasiController::class, 'destroy']
        )->name('permohonan-informasi.destroy');
    });
