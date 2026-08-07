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

// ================= ADMIN CONTROLLER =================
use App\Http\Controllers\Admin\DashboardController;
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
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('login.authenticate');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');





/*
|--------------------------------------------------------------------------
| WEBSITE
|--------------------------------------------------------------------------
*/

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/index-2',[HomeController::class,'indexTwo'])->name('home2');
Route::get('/index-3',[HomeController::class,'indexThree'])->name('home3');

Route::get('/one-page',[HomeController::class,'onePage'])->name('home.onepage');
Route::get('/two-page',[HomeController::class,'twoPage'])->name('home2.onepage');
Route::get('/three-page',[HomeController::class,'threePage'])->name('home3.onepage');





/*
|--------------------------------------------------------------------------
| PROFIL WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('profil')->name('profil.')->group(function(){

    Route::get('/',[ProfilController::class,'index'])->name('index');

    Route::get('/tentang-kabupaten',[ProfilController::class,'tentangKabupaten'])->name('tentang-kabupaten');

    Route::get('/visi-misi',[ProfilController::class,'visiMisi'])->name('visi-misi');

    Route::get('/tupoksi-ppid',[ProfilController::class,'tupoksiPpid'])->name('tupoksi-ppid');

    Route::get('/profil-pimpinan',[ProfilController::class,'profilPimpinan'])->name('profil-pimpinan');

    Route::get('/tentang-ppid',[ProfilController::class,'tentangPpid'])->name('tentang-ppid');

    Route::get('/struktur-ppid',[ProfilController::class,'strukturPpid'])->name('struktur-ppid');

    Route::get('/lhkpn',[ProfilController::class,'lhkpn'])->name('lhkpn');

    Route::get('/alamat-dinas',[ProfilController::class,'alamatDinas'])->name('alamat-dinas');

});





/*
|--------------------------------------------------------------------------
| LAYANAN WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('layanan')->name('layanan.')->group(function(){

    Route::get('/',[LayananController::class,'index'])->name('index');

    Route::get('/sop-ppid',[LayananController::class,'sopPpid'])->name('sop-ppid');

    Route::get('/alur-permohonan',[LayananController::class,'alurPermohonan'])->name('alur-permohonan');

    Route::get('/daftar-permohonan',[LayananController::class,'daftarPermohonan'])->name('daftar-permohonan');

    Route::get('/formulir-permohonan',[LayananController::class,'formulirPermohonan'])->name('formulir-permohonan');

});





/*
|--------------------------------------------------------------------------
| INFORMASI PUBLIK WEBSITE
|--------------------------------------------------------------------------
*/

Route::prefix('informasi-publik')->name('informasi-publik.')->group(function(){

    Route::get('/',[InformasiPublikController::class,'index'])->name('index');

    Route::get('/informasi-berkala',[InformasiPublikController::class,'informasiBerkala'])->name('informasi-berkala');

    Route::get('/informasi-serta-merta',[InformasiPublikController::class,'informasiSertaMerta'])->name('informasi-serta-merta');

    Route::get('/informasi-dikecualikan',[InformasiPublikController::class,'informasiDikecualikan'])->name('informasi-dikecualikan');

    Route::get('/informasi-setiap-saat',[InformasiPublikController::class,'informasiSetiapSaat'])->name('informasi-setiap-saat');

});





/*
|--------------------------------------------------------------------------
| TEMPLATE
|--------------------------------------------------------------------------
*/

Route::get('/about',[AboutController::class,'index'])->name('about');

Route::get('/services',[ServiceController::class,'index'])->name('services.index');
Route::get('/services/{service?}',[ServiceController::class,'show'])->name('services.show');

Route::get('/projects',[ProjectController::class,'index'])->name('projects.index');
Route::get('/projects-2',[ProjectController::class,'indexTwo'])->name('projects.index2');
Route::get('/projects/{project?}',[ProjectController::class,'show'])->name('projects.show');

Route::get('/team',[TeamController::class,'index'])->name('team.index');
Route::get('/team/{member?}',[TeamController::class,'show'])->name('team.show');

Route::get('/pricing',[PricingController::class,'index'])->name('pricing');

Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog-standard',[BlogController::class,'standard'])->name('blog.standard');
Route::get('/blog-left-sidebar',[BlogController::class,'leftSidebar'])->name('blog.leftSidebar');
Route::get('/blog/{post?}',[BlogController::class,'show'])->name('blog.show');

Route::get('/faq',[FaqController::class,'index'])->name('faq');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');





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
    Route::get('/dashboard',[DashboardController::class,'index'])
        ->name('dashboard');



    /*
    |--------------------------------------------------------------------------
    | USERS
    |--------------------------------------------------------------------------
    */

    Route::resource('users',UserController::class);

    Route::get('/users/role',[UserController::class,'role'])
        ->name('users.role');



    /*
    |--------------------------------------------------------------------------
    | PROFIL
    |--------------------------------------------------------------------------
    */

    Route::prefix('profil')->name('profil.')->group(function(){
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

    Route::get('/regulasi',[RegulasiController::class,'index'])
        ->name('regulasi.index');

    Route::get('/regulasi/peraturan',[RegulasiController::class,'peraturan'])
        ->name('regulasi.peraturan');

    Route::get('/regulasi/sop',[RegulasiController::class,'sop'])
        ->name('regulasi.sop');

    Route::get('/regulasi/dokumen',[RegulasiController::class,'dokumen'])
        ->name('regulasi.dokumen');



    /*
    |--------------------------------------------------------------------------
    | LAYANAN
    |--------------------------------------------------------------------------
    */

    Route::prefix('layanan')->name('layanan.')->group(function(){

        Route::get('/sop-ppid',[AdminLayananController::class,'sopPpid'])->name('sop-ppid');

        Route::get('/alur-permohonan',[AdminLayananController::class,'alurPermohonan'])->name('alur-permohonan');

        Route::get('/daftar-permohonan',[AdminLayananController::class,'daftarPermohonan'])->name('daftar-permohonan');

        Route::get('/formulir',[AdminLayananController::class,'formulir'])->name('formulir');

    });



    /*
    |--------------------------------------------------------------------------
    | INFORMASI PUBLIK
    |--------------------------------------------------------------------------
    */

    Route::prefix('informasi-publik')->name('informasi-publik.')->group(function(){

        Route::get('/berkala',[AdminInformasiPublikController::class,'berkala'])->name('berkala');

        Route::get('/serta-merta',[AdminInformasiPublikController::class,'sertaMerta'])->name('serta-merta');

        Route::get('/dikecualikan',[AdminInformasiPublikController::class,'dikecualikan'])->name('dikecualikan');

        Route::get('/setiap-saat',[AdminInformasiPublikController::class,'setiapSaat'])->name('setiap-saat');

    });



    /*
    |--------------------------------------------------------------------------
    | BERITA
    |--------------------------------------------------------------------------
    */

    Route::resource('berita',BeritaController::class);

    Route::get('/berita-kategori',[BeritaController::class,'kategori'])
        ->name('berita.kategori');

});