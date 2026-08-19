<?php

namespace App\Models\Potensi;

use Illuminate\Database\Eloquent\Model;

class PotensiKecamatan extends Model
{
    protected $table = 'potensi_kecamatan';

    protected $fillable = [
        'judul',
        'slug',
        'jenis',
        'gambar',
        'lokasi',
        'deskripsi',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * URL gambar
     */
    public function getGambarUrlAttribute()
    {
        if (!$this->gambar) {
            return null;
        }

        return asset(
            'storage/' . $this->gambar
        );
    }

    /**
     * Jenis potensi
     */
    public static function jenisOptions(): array
    {
        return [
            'perikanan' => 'Perikanan',
            'pertanian' => 'Pertanian',
            'umkm' => 'UMKM',
            'pariwisata' => 'Pariwisata',
            'industri' => 'Industri',
            'peternakan' => 'Peternakan',
        ];
    }

    /**
     * Label jenis potensi
     */
    public function getJenisLabelAttribute(): string
    {
        return self::jenisOptions()[$this->jenis]
            ?? ucfirst($this->jenis);
    }
}
