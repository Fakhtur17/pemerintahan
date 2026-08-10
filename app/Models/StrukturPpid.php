<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrukturPpid extends Model
{
    protected $table = 'struktur_ppids';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}