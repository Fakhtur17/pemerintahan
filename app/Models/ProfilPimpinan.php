<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilPimpinan extends Model
{
    protected $table = 'profil_pimpinans';

    protected $fillable = [
        'nama',
        'jabatan',
        'tempat_lahir',
        'tanggal_lahir',
        'nip',
        'pangkat',
        'jenis_kelamin',
        'agama',
        'status_perkawinan',
        'riwayat_pendidikan',
        'riwayat_jabatan',
        'foto',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'tiktok',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
