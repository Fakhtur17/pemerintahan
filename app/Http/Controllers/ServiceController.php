<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * ServiceController
 *
 * Menangani daftar layanan (services.html) dan detail layanan
 * (service-details.html).
 */
class ServiceController extends Controller
{
    /**
     * Tampilkan daftar semua layanan.
     * Route: GET /services (name: services.index)
     */
    public function index(): View
    {
        return view('pages.services');
    }

    /**
     * Tampilkan detail satu layanan.
     * Route: GET /services/{service?} (name: services.show)
     *
     * Parameter $service bersifat opsional karena konten pada template
     * asli bersifat statis. Ketika data layanan sudah tersedia dari
     * database, cukup ganti parameter ini dengan Route Model Binding,
     * misalnya: public function show(Service $service): View
     */
    public function show(?string $service = null): View
    {
        return view('pages.service-details', [
            'serviceSlug' => $service,
        ]);
    }
}
