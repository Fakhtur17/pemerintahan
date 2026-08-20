<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Daftar pengaturan kontak
     */
    public function index()
    {
        $contacts = ContactSetting::latest()->get();

        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Form tambah
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Simpan
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
            ->with('success', 'Data kontak berhasil ditambahkan.');
    }

    /**
     * Form edit
     */
    public function edit(ContactSetting $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update
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
            ->with('success', 'Data kontak berhasil diperbarui.');
    }

    /**
     * Hapus
     */
    public function destroy(ContactSetting $contact)
    {
        $contact->delete();

        return redirect()
            ->route('admin.contact.index')
            ->with('success', 'Data kontak berhasil dihapus.');
    }
}
