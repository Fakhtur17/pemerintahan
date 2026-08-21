<?php

namespace App\Http\Controllers;

use App\Models\PermohonanInformasi;
use Illuminate\Http\Request;

class FormPermohonanInformasiController extends Controller
{
    public function index()
    {
        return view('pages.form-permohonan-informasi.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
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

        PermohonanInformasi::create([
            'email' => $validated['email'],
            'nama' => $validated['nama'],
            'nik' => $validated['nik'],
            'alamat' => $validated['alamat'],
            'no_hp' => $validated['no_hp'],
            'informasi_diminta' => $validated['informasi_diminta'],
            'tujuan' => $validated['tujuan'],
            'status' => 'baru',
        ]);

        return redirect()
            ->route('form-permohonan-informasi')
            ->with(
                'success',
                'Permohonan informasi berhasil dikirim.'
            );
    }
}
