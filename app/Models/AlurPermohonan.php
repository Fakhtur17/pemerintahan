<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlurPermohonan extends Model
{
    protected $table = 'alur_permohonans';

    protected $fillable = [
        'judul',
        'file_pdf',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
