<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * ProjectController
 *
 * Menangani halaman portofolio/proyek:
 * - project1.html  -> galeri proyek varian 1
 * - project2.html  -> galeri proyek varian 2
 * - project-details.html -> detail satu proyek
 */
class ProjectController extends Controller
{
    /**
     * Tampilkan galeri proyek (varian 1).
     * Route: GET /projects (name: projects.index)
     */
    public function index(): View
    {
        return view('pages.projects');
    }

    /**
     * Tampilkan galeri proyek (varian 2).
     * Route: GET /projects-2 (name: projects.index2)
     */
    public function indexTwo(): View
    {
        return view('pages.projects2');
    }

    /**
     * Tampilkan detail satu proyek.
     * Route: GET /projects/{project?} (name: projects.show)
     */
    public function show(?string $project = null): View
    {
        return view('pages.project-details', [
            'projectSlug' => $project,
        ]);
    }
}
