<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TentangPpidBagian extends Model
{
    protected $table = 'tentang_ppid_bagian';

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'urutan',
    ];
}
