<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppid extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'file_pdf',
        'aktif',
    ];

    protected $casts = [
        'aktif' => 'boolean',
    ];

    /**
     * URL file PDF
     */
    public function getFileUrlAttribute(): ?string
    {
        if (!$this->file_pdf) {
            return null;
        }

        return asset('storage/' . $this->file_pdf);
    }
}
