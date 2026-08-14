<?php

namespace App\Models\InformasiPublik\InformasiSertaMerta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class DataInformasiSertaMerta extends Model
{
    protected $table = 'data_informasi_serta_merta';

    protected $fillable = [
        'jenis_informasi_serta_merta_id',
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
            JenisInformasiSertaMerta::class,
            'jenis_informasi_serta_merta_id'
        );
    }

    public function getDokumenUrlAttribute(): ?string
    {
        if ($this->tipe_dokumen === 'link') {
            return $this->link_url;
        }

        if ($this->file_path) {
            return asset('storage/' . $this->file_path);
        }

        return null;
    }
}
