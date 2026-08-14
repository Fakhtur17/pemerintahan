<?php

namespace App\Models\InformasiPublik\InformasiDikecualikan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisInformasiDikecualikan extends Model
{
    protected $table = 'jenis_informasi_dikecualikan';

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
            DataInformasiDikecualikan::class,
            'jenis_informasi_dikecualikan_id'
        );
    }
}
