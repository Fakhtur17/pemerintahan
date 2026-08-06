<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * ContactController
 *
 * Menangani halaman kontak (contact.html) beserta proses pengiriman
 * form kontak. Form asli mengirim ke "contact.php" dengan field:
 * name, email2 (email), message.
 */
class ContactController extends Controller
{
    /**
     * Tampilkan halaman kontak.
     * Route: GET /contact (name: contact.index)
     */
    public function index(): View
    {
        return view('pages.contact');
    }

    /**
     * Proses pengiriman form kontak.
     * Route: POST /contact (name: contact.store)
     *
     * Nama field disesuaikan dengan atribut "name" pada form asli
     * (name, email2, message) supaya Blade tidak perlu diubah lagi.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'email2'  => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ], [
            'name.required'    => 'Nama wajib diisi.',
            'email2.required'  => 'Email wajib diisi.',
            'email2.email'     => 'Format email tidak valid.',
            'message.required' => 'Pesan wajib diisi.',
        ]);

        // TODO: kirim email / simpan ke database sesuai kebutuhan, contoh:
        // Mail::to(config('mail.from.address'))->send(new ContactMessageMail($validated));

        return redirect()
            ->route('contact.index')
            ->with('success', 'Terima kasih, pesan Anda berhasil dikirim!');
    }
}
