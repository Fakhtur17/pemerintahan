<?php

namespace App\Models\Berita;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'jenis',
        'judul',
        'slug',
        'tanggal',
        'ringkasan',
        'isi',
        'gambar',
        'status',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    /**
     * Daftar jenis berita.
     */
    public static function jenisBerita(): array
    {
        return [
            'Pemerintahan',
            'Pelayanan Kecamatan',
            'Kegiatan Kecamatan',
            'Pembangunan',
            'Kemasyarakatan',
            'Ketenteraman dan Ketertiban',
            'Pengumuman',
            'Prestasi',
        ];
    }

    /**
     * Membuat slug unik.
     */
    public static function generateSlug(
        string $judul,
        ?int $ignoreId = null
    ): string {

        $slug = Str::slug($judul);

        $originalSlug = $slug;

        $counter = 1;

        while (
            static::where('slug', $slug)
            ->when(
                $ignoreId,
                fn($query) =>
                $query->where('id', '!=', $ignoreId)
            )
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
