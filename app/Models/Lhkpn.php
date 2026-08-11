<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lhkpn extends Model
{
    protected $table = 'lhkpns';

    protected $fillable = [
        'tahun',
        'nama_skpd',
        'tanggal_upload',
        'jenis_informasi',
        'keterangan',
        'file_pdf',
    ];

    protected $casts = [
        'tanggal_upload' => 'date',
    ];
}
