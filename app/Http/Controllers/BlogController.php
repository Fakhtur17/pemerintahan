<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * BlogController
 *
 * Menangani seluruh halaman blog:
 * - blog.html               -> daftar blog (grid, header/footer varian "blog")
 * - blog-standard.html      -> daftar blog (layout standard)
 * - blog-left-sidebar.html  -> daftar blog dengan sidebar kiri
 * - blog-details.html       -> detail satu artikel blog
 */
class BlogController extends Controller
{
    /**
     * Tampilkan daftar blog (tampilan utama).
     * Route: GET /blog (name: blog.index)
     */
    public function index(): View
    {
        return view('pages.blog');
    }

    /**
     * Tampilkan daftar blog (layout standard).
     * Route: GET /blog-standard (name: blog.standard)
     */
    public function standard(): View
    {
        return view('pages.blog-standard');
    }

    /**
     * Tampilkan daftar blog dengan sidebar kiri.
     * Route: GET /blog-left-sidebar (name: blog.leftSidebar)
     */
    public function leftSidebar(): View
    {
        return view('pages.blog-left-sidebar');
    }

    /**
     * Tampilkan detail satu artikel blog.
     * Route: GET /blog/{post?} (name: blog.show)
     */
    public function show(?string $post = null): View
    {
        return view('pages.blog-details', [
            'postSlug' => $post,
        ]);
    }
}
