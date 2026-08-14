<?php

namespace App\Models\InformasiPublik\InformasiSertaMerta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InformasiSertaMerta extends Model
{
    protected $table = 'jenis_informasi_serta_merta';

    protected $fillable = [
        'nama_jenis',
        'deskripsi',
        'aktif',
        'urutan',
    ];

    protected $casts = [
        'aktif' => 'boolean',
        'urutan' => 'integer',
    ];

    public function data(): HasMany
    {
        return $this->hasMany(
            DataInformasiSertaMerta::class,
            'jenis_informasi_serta_merta_id'
        );
    }
}
