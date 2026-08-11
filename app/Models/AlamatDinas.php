<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlamatDinas extends Model
{
    protected $table = 'alamat_dinas';

    protected $fillable = [
        'judul',
        'deskripsi',
        'alamat',
        'google_maps_url',
    ];
}
