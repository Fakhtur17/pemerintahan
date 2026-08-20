<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\ContactSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Halaman kontak publik
     */
    public function index(): View
    {
        $contact = ContactSetting::latest()->first();

        return view('pages.contact', compact('contact'));
    }

    /**
     * Kirim pesan dari masyarakat
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
            'name.required' => 'Nama wajib diisi.',

            'email2.required' => 'Email wajib diisi.',

            'email2.email' => 'Format email tidak valid.',

            'message.required' => 'Pesan wajib diisi.',
        ]);

        ContactMessage::create([
            'nama' => $validated['name'],
            'email' => $validated['email2'],
            'pesan' => $validated['message'],
        ]);

        return redirect()
            ->route('contact.index')
            ->with(
                'success',
                'Terima kasih, pesan Anda berhasil dikirim.'
            );
    }
}
