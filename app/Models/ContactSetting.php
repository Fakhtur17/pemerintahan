<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $table = 'contact_settings';

    protected $fillable = [
        'alamat',
        'email',
        'telepon',
        'deskripsi_alamat',
        'deskripsi_email',
        'deskripsi_telepon',
        'maps_embed',
        'form_judul',
        'form_deskripsi',
    ];
}
