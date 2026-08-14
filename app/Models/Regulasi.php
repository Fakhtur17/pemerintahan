<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regulasi extends Model
{
    protected $table = 'regulasis';

    protected $fillable = [
        'judul',
        'file_pdf',
        'urutan',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
