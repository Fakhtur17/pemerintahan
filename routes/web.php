<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes - Niotech Laravel
|--------------------------------------------------------------------------
|
| Seluruh route di bawah ini adalah hasil konversi dari template HTML
| statis "Niotech - App Landing HTML Template" (21 halaman) menjadi
| Laravel routes + controller + Blade view.
|
*/

// ==================== LOGIN ====================
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ==================== HOME / BERANDA ====================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/index-2', [HomeController::class, 'indexTwo'])->name('home2');
Route::get('/index-3', [HomeController::class, 'indexThree'])->name('home3');
Route::get('/one-page', [HomeController::class, 'onePage'])->name('home.onepage');
Route::get('/two-page', [HomeController::class, 'twoPage'])->name('home2.onepage');
Route::get('/three-page', [HomeController::class, 'threePage'])->name('home3.onepage');

// ==================== PROFIL ====================
Route::prefix('profil')->name('profil.')->group(function () {

    Route::get('/', [ProfilController::class, 'index'])->name('index');

    Route::get('/tentang-kabupaten', [ProfilController::class, 'tentangKabupaten'])
        ->name('tentang-kabupaten');

    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])
        ->name('visi-misi');

    Route::get('/tupoksi-ppid', [ProfilController::class, 'tupoksiPpid'])
        ->name('tupoksi-ppid');

    Route::get('/profil-pimpinan', [ProfilController::class, 'profilPimpinan'])
        ->name('profil-pimpinan');

    Route::get('/tentang-ppid', [ProfilController::class, 'tentangPpid'])
        ->name('tentang-ppid');

    Route::get('/struktur-ppid', [ProfilController::class, 'strukturPpid'])
        ->name('struktur-ppid');

    Route::get('/lhkpn', [ProfilController::class, 'lhkpn'])
        ->name('lhkpn');

    Route::get('/alamat-dinas', [ProfilController::class, 'alamatDinas'])
        ->name('alamat-dinas');
});

// ==================== LAYANAN ====================
Route::prefix('layanan')->name('layanan.')->group(function () {

    Route::get('/', [LayananController::class, 'index'])->name('index');

    Route::get('/sop-ppid', [LayananController::class, 'sopPpid'])
        ->name('sop-ppid');

    Route::get('/alur-permohonan', [LayananController::class, 'alurPermohonan'])
        ->name('alur-permohonan');

    Route::get('/daftar-permohonan', [LayananController::class, 'daftarPermohonan'])
        ->name('daftar-permohonan');

    Route::get('/formulir-permohonan', [LayananController::class, 'formulirPermohonan'])
        ->name('formulir-permohonan');

});

// ==================== INFORMASI PUBLIK ====================
Route::prefix('informasi-publik')->name('informasi-publik.')->group(function () {

    Route::get('/', [InformasiPublikController::class, 'index'])->name('index');

    Route::get('/informasi-berkala', [InformasiPublikController::class, 'informasiBerkala'])
        ->name('informasi-berkala');

    Route::get('/informasi-serta-merta', [InformasiPublikController::class, 'informasiSertaMerta'])
        ->name('informasi-serta-merta');

    Route::get('/informasi-dikecualikan', [InformasiPublikController::class, 'informasiDikecualikan'])
        ->name('informasi-dikecualikan');

    Route::get('/informasi-setiap-saat', [InformasiPublikController::class, 'informasiSetiapSaat'])
        ->name('informasi-setiap-saat');

});

// ==================== ADMIN ====================
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

});

// ==================== ABOUT ====================
Route::get('/about', [AboutController::class, 'index'])->name('about');

// ==================== SERVICES ====================
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service?}', [ServiceController::class, 'show'])->name('services.show');

// ==================== PROJECTS / PORTFOLIO ====================
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects-2', [ProjectController::class, 'indexTwo'])->name('projects.index2');
Route::get('/projects/{project?}', [ProjectController::class, 'show'])->name('projects.show');

// ==================== TEAM ====================
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/team/{member?}', [TeamController::class, 'show'])->name('team.show');

// ==================== PRICING ====================
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

// ==================== BLOG ====================
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog-standard', [BlogController::class, 'standard'])->name('blog.standard');
Route::get('/blog-left-sidebar', [BlogController::class, 'leftSidebar'])->name('blog.leftSidebar');
Route::get('/blog/{post?}', [BlogController::class, 'show'])->name('blog.show');

// ==================== FAQ ====================
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// ==================== CONTACT ====================
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
