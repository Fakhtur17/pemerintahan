<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermohonanInformasi extends Model
{
    protected $table = 'permohonan_informasis';

    protected $fillable = [
        'email',
        'nama',
        'nik',
        'alamat',
        'no_hp',
        'informasi_diminta',
        'tujuan',
        'status',
        'catatan',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
