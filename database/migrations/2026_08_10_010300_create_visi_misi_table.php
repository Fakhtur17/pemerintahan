<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visi_misi', function (Blueprint $table) {
            $table->id();

            // Jenis data: visi / misi
            $table->enum('jenis', ['visi', 'misi']);

            // Isi visi atau misi
            $table->text('isi');

            // Gambar opsional
            $table->string('gambar')->nullable();

            // Urutan tampilan
            $table->unsignedInteger('urutan')->default(0);

            // Aktif / tidak ditampilkan
            $table->boolean('aktif')->default(true);

            $table->timestamps();

            // Hanya boleh ada 1 visi dan 1 misi
            $table->unique('jenis');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visi_misi');
    }
};