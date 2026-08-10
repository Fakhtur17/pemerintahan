<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class VisiMisiController extends Controller
{
    /**
     * Menampilkan daftar Visi & Misi
     */
    public function index()
    {
        $data = VisiMisi::orderBy('urutan')
            ->orderBy('jenis')
            ->get();

        return view('admin.profil.visi-misi.index', compact('data'));
    }

    /**
     * Form tambah
     */
    public function create()
    {
        return view('admin.profil.visi-misi.create');
    }

    /**
     * Simpan data
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis' => [
                'required',
                Rule::in(['visi', 'misi']),
                'unique:visi_misi,jenis',
            ],

            'isi' => [
                'required',
                'string',
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'urutan' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'aktif' => [
                'nullable',
                'boolean',
            ],
        ], [
            'jenis.required' => 'Jenis wajib dipilih.',
            'jenis.unique' => 'Data Visi atau Misi untuk jenis tersebut sudah tersedia.',

            'isi.required' => 'Isi wajib diisi.',

            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Gambar harus berformat JPG, JPEG, PNG, atau WEBP.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',

            'urutan.integer' => 'Urutan harus berupa angka.',
            'urutan.min' => 'Urutan tidak boleh kurang dari 0.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload gambar
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request
                ->file('gambar')
                ->store('visi-misi', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Default value
        |--------------------------------------------------------------------------
        */

        $validated['urutan'] = $validated['urutan'] ?? 0;

        $validated['aktif'] = $request->has('aktif');

        /*
        |--------------------------------------------------------------------------
        | Simpan
        |--------------------------------------------------------------------------
        */

        VisiMisi::create($validated);

        return redirect()
            ->route('admin.profil.visi-misi.index')
            ->with('success', 'Data Visi & Misi berhasil ditambahkan.');
    }

    /**
     * Form edit
     */
    public function edit($id)
    {
        $data = VisiMisi::findOrFail($id);

        return view(
            'admin.profil.visi-misi.edit',
            compact('data')
        );
    }

    /**
     * Update data
     */
    public function update(Request $request, $id)
    {
        $data = VisiMisi::findOrFail($id);

        $validated = $request->validate([
            'jenis' => [
                'required',
                Rule::in(['visi', 'misi']),
                Rule::unique('visi_misi', 'jenis')->ignore($data->id),
            ],

            'isi' => [
                'required',
                'string',
            ],

            'gambar' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'urutan' => [
                'nullable',
                'integer',
                'min:0',
            ],

            'aktif' => [
                'nullable',
                'boolean',
            ],
        ], [
            'jenis.required' => 'Jenis wajib dipilih.',
            'jenis.unique' => 'Data Visi atau Misi untuk jenis tersebut sudah tersedia.',

            'isi.required' => 'Isi wajib diisi.',

            'gambar.image' => 'File harus berupa gambar.',
            'gambar.mimes' => 'Gambar harus berformat JPG, JPEG, PNG, atau WEBP.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.',

            'urutan.integer' => 'Urutan harus berupa angka.',
            'urutan.min' => 'Urutan tidak boleh kurang dari 0.',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload gambar baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $data->gambar &&
                Storage::disk('public')->exists($data->gambar)
            ) {
                Storage::disk('public')->delete($data->gambar);
            }

            // Simpan gambar baru
            $validated['gambar'] = $request
                ->file('gambar')
                ->store('visi-misi', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Default value
        |--------------------------------------------------------------------------
        */

        $validated['urutan'] = $validated['urutan'] ?? 0;

        $validated['aktif'] = $request->has('aktif');

        /*
        |--------------------------------------------------------------------------
        | Update
        |--------------------------------------------------------------------------
        */

        $data->update($validated);

        return redirect()
            ->route('admin.profil.visi-misi.index')
            ->with('success', 'Data Visi & Misi berhasil diperbarui.');
    }

    /**
     * Hapus data
     */
    public function destroy($id)
    {
        $data = VisiMisi::findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | Hapus gambar
        |--------------------------------------------------------------------------
        */

        if (
            $data->gambar &&
            Storage::disk('public')->exists($data->gambar)
        ) {
            Storage::disk('public')->delete($data->gambar);
        }

        /*
        |--------------------------------------------------------------------------
        | Hapus database
        |--------------------------------------------------------------------------
        */

        $data->delete();

        return redirect()
            ->route('admin.profil.visi-misi.index')
            ->with('success', 'Data Visi & Misi berhasil dihapus.');
    }
}