<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TupoksiPpid extends Model
{
    protected $table = 'tupoksi_ppids';

    protected $fillable = [
        'judul',
        'file_pdf',
    ];
}