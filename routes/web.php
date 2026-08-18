<?php

use Illuminate\Support\Facades\Route;

// ================= PUBLIC CONTROLLER =================
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\RegulasiController;

// ================= ADMIN CONTROLLER =================
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Profil\TentangKabupatenController;
use App\Http\Controllers\Admin\Profil\VisiMisiController;
use App\Http\Controllers\Admin\Profil\TupoksiPpidController;
use App\Http\Controllers\Admin\Profil\ProfilPimpinanController;
use App\Http\Controllers\Admin\Profil\TentangPpidController;
use App\Http\Controllers\Admin\Profil\StrukturPpidController;
use App\Http\Controllers\Admin\Profil\LhkpnController;
use App\Http\Controllers\Admin\Profil\AlamatDinasController;
use App\Http\Controllers\Admin\Regulasi\RegulasiController as AdminRegulasiController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiPublikController as AdminInformasiPublikController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala\InformasiBerkalaController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala\JenisInformasiBerkalaController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiBerkala\DataInformasiBerkalaController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta\InformasiSertaMertaController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta\JenisInformasiSertaMertaController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiSertaMerta\DataInformasiSertaMertaController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan\InformasiDikecualikanController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan\JenisInformasiDikecualikanController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiDikecualikan\DataInformasiDikecualikanController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat\InformasiTersediaSetiapSaatController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat\JenisInformasiTersediaSetiapSaatController;
use App\Http\Controllers\Admin\InformasiPublik\InformasiTersediaSetiapSaat\DataInformasiTersediaSetiapSaatController;
use App\Http\Controllers\Admin\Layanan\SopPpidController;
use App\Http\Controllers\Admin\Layanan\AlurPermohonanController;
use App\Http\Controllers\Admin\Layanan\DaftarPermohonanController;
use App\Http\Controllers\Admin\Layanan\FormulirController;
use App\Http\Controllers\Admin\Berita\BeritaController;






/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');





/*
|--------------------------------------------------------------------------
| WEBSITE
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/index-2', [HomeController::class, 'indexTwo'])->name('home2');
Route::get('/index-3', [HomeController::class, 'indexThree'])->name('home3');

Route::get('/one-page', [HomeController::class, 'onePage'])->name('home.onepage');
Route::get('/two-page', [HomeController::class, 'twoPage'])->name('home2.onepage');
Route::get('/three-page', [HomeController::class, 'threePage'])->name('home3.onepage');





/*
|--------------------------------------------------------------------------
| PROFIL WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('profil')->name('profil.')->group(function () {

    Route::get('/', [ProfilController::class, 'index'])->name('index');

    Route::get('/tentang-kabupaten', [ProfilController::class, 'tentangKabupaten'])->name('tentang-kabupaten');

    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('visi-misi');

    Route::get('/tupoksi-ppid', [ProfilController::class, 'tupoksiPpid'])->name('tupoksi-ppid');

    Route::get('/profil-pimpinan', [ProfilController::class, 'profilPimpinan'])->name('profil-pimpinan');

    Route::get('/tentang-ppid', [ProfilController::class, 'tentangPpid'])->name('tentang-ppid');

    Route::get('/struktur-ppid', [ProfilController::class, 'strukturPpid'])->name('struktur-ppid');

    Route::get('/lhkpn', [ProfilController::class, 'lhkpn'])->name('lhkpn');

    Route::get('/alamat-dinas', [ProfilController::class, 'alamatDinas'])->name('alamat-dinas');
});

/*
|--------------------------------------------------------------------------
| REGULASI PPID WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('regulasi')->name('regulasi.')->group(function () {

    Route::get('/', [RegulasiController::class, 'index'])
        ->name('index');

    Route::get('/{id}', [RegulasiController::class, 'show'])
        ->name('show');
});



/*
|--------------------------------------------------------------------------
| LAYANAN WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('layanan')->name('layanan.')->group(function () {

    Route::get('/', [LayananController::class, 'index'])->name('index');

    Route::get('/sop-ppid', [LayananController::class, 'sopPpid'])->name('sop-ppid');

    Route::get('/alur-permohonan', [LayananController::class, 'alurPermohonan'])->name('alur-permohonan');

    Route::get('/daftar-permohonan', [LayananController::class, 'daftarPermohonan'])->name('daftar-permohonan');

    Route::get('/formulir-permohonan', [LayananController::class, 'formulirPermohonan'])->name('formulir-permohonan');
});





/*
|--------------------------------------------------------------------------
| INFORMASI PUBLIK WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('informasi-publik')->name('informasi-publik.')->group(function () {

    Route::get('/', [InformasiPublikController::class, 'index'])->name('index');

    Route::get('/informasi-berkala', [InformasiPublikController::class, 'informasiBerkala'])->name('informasi-berkala');

    Route::get('/informasi-serta-merta', [InformasiPublikController::class, 'informasiSertaMerta'])->name('informasi-serta-merta');

    Route::get('/informasi-dikecualikan', [InformasiPublikController::class, 'informasiDikecualikan'])->name('informasi-dikecualikan');

    Route::get('/informasi-setiap-saat', [InformasiPublikController::class, 'informasiSetiapSaat'])->name('informasi-setiap-saat');
});





/*
|--------------------------------------------------------------------------
| TEMPLATE
|--------------------------------------------------------------------------
*/

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service?}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects-2', [ProjectController::class, 'indexTwo'])->name('projects.index2');
Route::get('/projects/{project?}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/{member?}', [TeamController::class, 'show'])->name('team.show');

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog-standard', [BlogController::class, 'standard'])->name('blog.standard');
Route::get('/blog-left-sidebar', [BlogController::class, 'leftSidebar'])->name('blog.leftSidebar');
Route::get('/blog/{post?}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');





/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');



        /*
    |--------------------------------------------------------------------------
    | USERS
    |--------------------------------------------------------------------------
    */

        Route::resource('users', UserController::class);

        Route::get('/users/role', [UserController::class, 'role'])
            ->name('users.role');



        /*
    |--------------------------------------------------------------------------
    | PROFIL
    |--------------------------------------------------------------------------
    */

        Route::prefix('profil')->name('profil.')->group(function () {
            /*tentang kabupaten*/

            Route::resource('tentang-kabupaten', TentangKabupatenController::class);



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

        Route::prefix('layanan')->name('layanan.')->group(function () {

            Route::resource(
                'sop-ppid',
                SopPpidController::class
            );


            Route::resource(
                'alur-permohonan',
                AlurPermohonanController::class
            );
            Route::get('/daftar-permohonan', [DaftarPermohonanController::class, 'index'])
                ->name('daftar-permohonan');

            Route::get('/formulir', [FormulirController::class, 'index'])
                ->name('formulir');
        });



        /*
    |--------------------------------------------------------------------------
    | INFORMASI PUBLIK
    |--------------------------------------------------------------------------
    */

        /*
|--------------------------------------------------------------------------
| INFORMASI PUBLIK
|--------------------------------------------------------------------------
*/

        Route::prefix('informasi-publik')
            ->name('informasi-publik.')
            ->group(function () {

                /*
        |--------------------------------------------------------------------------
        | INDEX INFORMASI PUBLIK
        |--------------------------------------------------------------------------
        */

                Route::get('/', [
                    InformasiPublikController::class,
                    'index'
                ])->name('index');


                /*
|--------------------------------------------------------------------------
| INFORMASI SERTA MERTA
|--------------------------------------------------------------------------
*/

                Route::prefix('informasi-serta-merta')
                    ->name('informasi-serta-merta.')
                    ->group(function () {

                        /*
        |--------------------------------------------------------------------------
        | Halaman daftar jenis
        |--------------------------------------------------------------------------
        */

                        Route::get(
                            '/',
                            [
                                InformasiSertaMertaController::class,
                                'index'
                            ]
                        )->name('index');


                        /*
        |--------------------------------------------------------------------------
        | CRUD JENIS INFORMASI
        |--------------------------------------------------------------------------
        */

                        Route::get(
                            '/jenis/create',
                            [
                                JenisInformasiSertaMertaController::class,
                                'create'
                            ]
                        )->name('jenis.create');

                        Route::post(
                            '/jenis',
                            [
                                JenisInformasiSertaMertaController::class,
                                'store'
                            ]
                        )->name('jenis.store');

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
        | DATA INFORMASI
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
        | INFORMASI BERKALA
        |--------------------------------------------------------------------------
        */

                Route::prefix('informasi-berkala')
                    ->name('informasi-berkala.')
                    ->group(function () {

                        /*
        |--------------------------------------------------------------------------
        | INDEX INFORMASI BERKALA
        |--------------------------------------------------------------------------
        */

                        Route::get('/', [
                            InformasiBerkalaController::class,
                            'index'
                        ])->name('index');


                        /*
        |--------------------------------------------------------------------------
        | CRUD JENIS INFORMASI
        |--------------------------------------------------------------------------
        */

                        Route::resource(
                            'jenis',
                            JenisInformasiBerkalaController::class
                        );


                        /*
        |--------------------------------------------------------------------------
        | DATA INFORMASI BERDASARKAN JENIS
        |--------------------------------------------------------------------------
        */

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

                                Route::get('/data/{dataInformasiBerkala}', [
                                    DataInformasiBerkalaController::class,
                                    'show'
                                ])->name('data.show');

                                Route::get('/data/{dataInformasiBerkala}/edit', [
                                    DataInformasiBerkalaController::class,
                                    'edit'
                                ])->name('data.edit');

                                Route::put('/data/{dataInformasiBerkala}', [
                                    DataInformasiBerkalaController::class,
                                    'update'
                                ])->name('data.update');

                                Route::delete('/data/{dataInformasiBerkala}', [
                                    DataInformasiBerkalaController::class,
                                    'destroy'
                                ])->name('data.destroy');
                            });
                    });
                /*
|--------------------------------------------------------------------------
| INFORMASI DIKECUALIKAN
|--------------------------------------------------------------------------
*/

                Route::prefix('informasi-dikecualikan')
                    ->name('informasi-dikecualikan.')
                    ->group(function () {

                        /*
        |--------------------------------------------------------------------------
        | HALAMAN DAFTAR JENIS
        |--------------------------------------------------------------------------
        */

                        Route::get(
                            '/',
                            [
                                InformasiDikecualikanController::class,
                                'index'
                            ]
                        )->name('index');


                        /*
        |--------------------------------------------------------------------------
        | CRUD JENIS INFORMASI
        |--------------------------------------------------------------------------
        */

                        Route::get(
                            '/jenis/create',
                            [
                                JenisInformasiDikecualikanController::class,
                                'create'
                            ]
                        )->name('jenis.create');

                        Route::post(
                            '/jenis',
                            [
                                JenisInformasiDikecualikanController::class,
                                'store'
                            ]
                        )->name('jenis.store');

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
        | DATA INFORMASI
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

                        /*
        |--------------------------------------------------------------------------
        | INDEX
        |--------------------------------------------------------------------------
        */

                        Route::get(
                            '/',
                            [
                                InformasiTersediaSetiapSaatController::class,
                                'index'
                            ]
                        )->name('index');


                        /*
        |--------------------------------------------------------------------------
        | CRUD JENIS INFORMASI
        |--------------------------------------------------------------------------
        */

                        Route::get(
                            '/jenis/create',
                            [
                                JenisInformasiTersediaSetiapSaatController::class,
                                'create'
                            ]
                        )->name('jenis.create');

                        Route::post(
                            '/jenis',
                            [
                                JenisInformasiTersediaSetiapSaatController::class,
                                'store'
                            ]
                        )->name('jenis.store');

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
        | DATA INFORMASI
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



        /*
    |--------------------------------------------------------------------------
    | BERITA
    |--------------------------------------------------------------------------
    */

        Route::resource('berita', BeritaController::class);

        Route::get('/berita-kategori', [BeritaController::class, 'kategori'])
            ->name('berita.kategori');
    });
