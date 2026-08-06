<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * PricingController
 *
 * Menangani halaman daftar harga/paket (pricing.html).
 */
class PricingController extends Controller
{
    /**
     * Tampilkan halaman pricing/paket harga.
     * Route: GET /pricing (name: pricing)
     */
    public function index(): View
    {
        return view('pages.pricing');
    }
}
