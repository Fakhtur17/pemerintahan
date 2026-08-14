<?php

namespace App\Models\InformasiPublik\InformasiBerkala;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InformasiBerkala extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Model ini menjadi representasi fitur Informasi Berkala.
    |--------------------------------------------------------------------------
    |
    | Data aktual jenis informasi berada di:
    | jenis_informasi_berkala
    |
    */

    protected $table = 'jenis_informasi_berkala';

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
            DataInformasiBerkala::class,
            'jenis_informasi_berkala_id'
        );
    }
}
