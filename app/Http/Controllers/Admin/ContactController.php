<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Menampilkan daftar contact
     */
    public function index()
    {
        $contacts = ContactSetting::latest()->get();

        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Form tambah contact
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Menyimpan contact
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'alamat' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|string|max:50',

            'deskripsi_alamat' => 'nullable|string',
            'deskripsi_email' => 'nullable|string',
            'deskripsi_telepon' => 'nullable|string',

            'maps_embed' => 'nullable|string',

            'form_judul' => 'nullable|string|max:255',
            'form_deskripsi' => 'nullable|string',
        ]);

        ContactSetting::create($validated);

        return redirect()
            ->route('admin.contact.index')
            ->with('success', 'Contact berhasil ditambahkan.');
    }

    /**
     * Form edit contact
     */
    public function edit(ContactSetting $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update contact
     */
    public function update(Request $request, ContactSetting $contact)
    {
        $validated = $request->validate([
            'alamat' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|string|max:50',

            'deskripsi_alamat' => 'nullable|string',
            'deskripsi_email' => 'nullable|string',
            'deskripsi_telepon' => 'nullable|string',

            'maps_embed' => 'nullable|string',

            'form_judul' => 'nullable|string|max:255',
            'form_deskripsi' => 'nullable|string',
        ]);

        $contact->update($validated);

        return redirect()
            ->route('admin.contact.index')
            ->with('success', 'Contact berhasil diperbarui.');
    }

    /**
     * Hapus contact
     */
    public function destroy(ContactSetting $contact)
    {
        $contact->delete();

        return redirect()
            ->route('admin.contact.index')
            ->with('success', 'Contact berhasil dihapus.');
    }
}
