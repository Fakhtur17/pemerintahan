<?php

namespace App\Models\InformasiPublik\InformasiTersediaSetiapSaat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisInformasiTersediaSetiapSaat extends Model
{
    protected $table =
    'jenis_informasi_tersedia_setiap_saat';

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
            DataInformasiTersediaSetiapSaat::class,
            'jenis_informasi_tersedia_setiap_saat_id'
        );
    }
}
