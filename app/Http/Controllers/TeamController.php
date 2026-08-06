<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * TeamController
 *
 * Menangani halaman daftar tim (team.html) dan detail anggota tim
 * (team-details.html).
 */
class TeamController extends Controller
{
    /**
     * Tampilkan daftar anggota tim.
     * Route: GET /team (name: team.index)
     */
    public function index(): View
    {
        return view('pages.team');
    }

    /**
     * Tampilkan detail satu anggota tim.
     * Route: GET /team/{member?} (name: team.show)
     */
    public function show(?string $member = null): View
    {
        return view('pages.team-details', [
            'memberSlug' => $member,
        ]);
    }
}
