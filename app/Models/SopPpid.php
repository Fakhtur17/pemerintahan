<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SopPpid extends Model
{
    protected $table = 'sop_ppids';

    protected $fillable = [
        'judul',
        'file_pdf',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
