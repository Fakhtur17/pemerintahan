<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * FaqController
 *
 * Menangani halaman FAQ (faq.html).
 */
class FaqController extends Controller
{
    /**
     * Tampilkan halaman FAQ.
     * Route: GET /faq (name: faq)
     */
    public function index(): View
    {
        return view('pages.faq');
    }
}
