<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * HomeController
 *
 * Menangani seluruh varian halaman beranda (homepage) template Niotech:
 * - Home 1 (index.html)
 * - Home 2 (index2.html)
 * - Home 3 (index3.html)
 * - Versi "one page" dari masing-masing home di atas.
 *
 * Setiap method hanya bertugas mengembalikan view Blade yang sesuai.
 * Varian header/footer yang dipakai sudah didefinisikan di dalam
 * masing-masing view melalui parameter @extends('layouts.app', [...]).
 */
class HomeController extends Controller
{
    /**
     * Tampilkan halaman beranda utama (Home 1).
     * Route: GET / (name: home)
     */
    public function index(): View
    {
        return view('pages.home');
    }

    /**
     * Tampilkan halaman beranda varian 2 (Home 2).
     * Route: GET /index-2 (name: home2)
     */
    public function indexTwo(): View
    {
        return view('pages.home2');
    }

    /**
     * Tampilkan halaman beranda varian 3 (Home 3).
     * Route: GET /index-3 (name: home3)
     */
    public function indexThree(): View
    {
        return view('pages.home3');
    }

    /**
     * Tampilkan halaman beranda Home 1 versi one-page (scroll ke section via anchor).
     * Route: GET /one-page (name: home.onepage)
     */
    public function onePage(): View
    {
        return view('pages.home-onepage');
    }

    /**
     * Tampilkan halaman beranda Home 2 versi one-page.
     * Route: GET /two-page (name: home2.onepage)
     */
    public function twoPage(): View
    {
        return view('pages.home2-onepage');
    }

    /**
     * Tampilkan halaman beranda Home 3 versi one-page.
     * Route: GET /three-page (name: home3.onepage)
     */
    public function threePage(): View
    {
        return view('pages.home3-onepage');
    }
}
