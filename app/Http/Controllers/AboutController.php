<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * AboutController
 *
 * Menangani halaman "Tentang Kami" (about.html).
 */
class AboutController extends Controller
{
    /**
     * Tampilkan halaman About Us.
     * Route: GET /about (name: about)
     */
    public function index(): View
    {
        return view('pages.about');
    }
}
