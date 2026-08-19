<?php

namespace App\Http\Controllers;

use App\Models\ContactSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * ContactController
 *
 * Menangani halaman kontak publik dan proses
 * pengiriman form kontak.
 */
class ContactController extends Controller
{
    /**
     * Tampilkan halaman kontak.
     *
     * Route:
     * GET /contact
     * name: contact.index
     */
    public function index(): View
    {
        // Ambil data kontak dari database
        // Data terbaru akan digunakan pada halaman user.
        $contact = ContactSetting::latest()->first();

        return view('pages.contact', compact('contact'));
    }

    /**
     * Proses pengiriman form kontak.
     *
     * Route:
     * POST /contact
     * name: contact.store
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email2' => [
                'required',
                'email',
                'max:255',
            ],

            'message' => [
                'required',
                'string',
                'max:5000',
            ],
        ], [
            'name.required' =>
            'Nama wajib diisi.',

            'email2.required' =>
            'Email wajib diisi.',

            'email2.email' =>
            'Format email tidak valid.',

            'message.required' =>
            'Pesan wajib diisi.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Proses pesan kontak
        |--------------------------------------------------------------------------
        |
        | Untuk sekarang data pesan belum disimpan.
        | Nanti kalau kamu ingin, kita bisa buat:
        |
        | ContactMessage
        | contact_messages
        |
        | sehingga pesan dari masyarakat juga masuk
        | ke halaman admin.
        |
        */

        return redirect()
            ->route('contact.index')
            ->with(
                'success',
                'Terima kasih, pesan Anda berhasil dikirim!'
            );
    }
}
