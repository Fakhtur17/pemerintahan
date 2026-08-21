<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PermohonanInformasi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PermohonanInformasiController extends Controller
{
    /**
     * INDEX
     * Menampilkan semua permohonan.
     */
    public function index(): View
    {
        $permohonans = PermohonanInformasi::latest()->paginate(10);

        return view(
            'admin.permohonan-informasi.index',
            compact('permohonans')
        );
    }


    /**
     * CREATE
     * Menampilkan form tambah permohonan.
     */
    public function create(): View
    {
        return view(
            'admin.permohonan-informasi.create'
        );
    }


    /**
     * STORE
     * Menyimpan permohonan dari admin.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateData($request);

        PermohonanInformasi::create([
            'email' => $validated['email'],
            'nama' => $validated['nama'],
            'nik' => $validated['nik'],
            'alamat' => $validated['alamat'],
            'no_hp' => $validated['no_hp'],
            'informasi_diminta' => $validated['informasi_diminta'],
            'tujuan' => $validated['tujuan'],
            'status' => $validated['status'] ?? 'baru',
            'catatan' => $validated['catatan'] ?? null,
        ]);

        return redirect()
            ->route('admin.permohonan-informasi.index')
            ->with(
                'success',
                'Permohonan informasi berhasil ditambahkan.'
            );
    }


    /**
     * SHOW
     * Menampilkan detail permohonan.
     */
    public function show(
        PermohonanInformasi $permohonanInformasi
    ): View {

        return view(
            'admin.permohonan-informasi.show',
            compact('permohonanInformasi')
        );
    }


    /**
     * EDIT
     * Menampilkan form edit.
     */
    public function edit(
        PermohonanInformasi $permohonanInformasi
    ): View {

        return view(
            'admin.permohonan-informasi.edit',
            compact('permohonanInformasi')
        );
    }


    /**
     * UPDATE
     * Memperbarui data permohonan.
     */
    public function update(
        Request $request,
        PermohonanInformasi $permohonanInformasi
    ): RedirectResponse {

        $validated = $this->validateData($request);

        $permohonanInformasi->update([
            'email' => $validated['email'],
            'nama' => $validated['nama'],
            'nik' => $validated['nik'],
            'alamat' => $validated['alamat'],
            'no_hp' => $validated['no_hp'],
            'informasi_diminta' => $validated['informasi_diminta'],
            'tujuan' => $validated['tujuan'],
            'status' => $validated['status'],
            'catatan' => $validated['catatan'] ?? null,
        ]);

        return redirect()
            ->route(
                'admin.permohonan-informasi.index'
            )
            ->with(
                'success',
                'Permohonan informasi berhasil diperbarui.'
            );
    }


    /**
     * DESTROY
     * Menghapus permohonan.
     */
    public function destroy(
        PermohonanInformasi $permohonanInformasi
    ): RedirectResponse {

        $permohonanInformasi->delete();

        return redirect()
            ->route(
                'admin.permohonan-informasi.index'
            )
            ->with(
                'success',
                'Permohonan informasi berhasil dihapus.'
            );
    }


    /**
     * VALIDASI
     * Digunakan oleh store dan update.
     */
    private function validateData(Request $request): array
    {
        return $request->validate([
            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'nama' => [
                'required',
                'string',
                'max:255',
            ],

            'nik' => [
                'required',
                'digits:16',
            ],

            'alamat' => [
                'required',
                'string',
            ],

            'no_hp' => [
                'required',
                'string',
                'max:30',
            ],

            'informasi_diminta' => [
                'required',
                'string',
            ],

            'tujuan' => [
                'required',
                'string',
            ],

            'status' => [
                'nullable',
                'in:baru,diproses,selesai,ditolak',
            ],

            'catatan' => [
                'nullable',
                'string',
            ],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',

            'nama.required' => 'Nama wajib diisi.',

            'nik.required' => 'NIK wajib diisi.',
            'nik.digits' => 'NIK harus terdiri dari 16 digit.',

            'alamat.required' => 'Alamat wajib diisi.',

            'no_hp.required' => 'Nomor HP wajib diisi.',

            'informasi_diminta.required' =>
            'Informasi yang diminta wajib diisi.',

            'tujuan.required' =>
            'Tujuan permohonan informasi wajib diisi.',
        ]);
    }
}
