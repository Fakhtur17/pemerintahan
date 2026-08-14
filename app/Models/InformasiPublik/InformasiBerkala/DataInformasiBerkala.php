<?php

namespace App\Models\InformasiPublik\InformasiBerkala;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class DataInformasiBerkala extends Model
{
    protected $table = 'data_informasi_berkala';

    protected $fillable = [
        'jenis_informasi_berkala_id',
        'tahun',
        'nama_skpd',
        'tanggal_upload',
        'tipe_dokumen',
        'nama_file',
        'file_path',
        'link_url',
        'keterangan',
    ];

    protected $casts = [
        'tahun' => 'integer',
        'tanggal_upload' => 'date',
    ];

    public function jenis(): BelongsTo
    {
        return $this->belongsTo(
            JenisInformasiBerkala::class,
            'jenis_informasi_berkala_id'
        );
    }

    public function getDokumenUrlAttribute(): ?string
    {
        if ($this->tipe_dokumen === 'link') {
            return $this->link_url;
        }

        if ($this->file_path) {
            return Storage::disk('public')
                ->url($this->file_path);
        }

        return null;
    }
}
