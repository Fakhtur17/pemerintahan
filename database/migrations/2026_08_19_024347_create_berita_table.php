<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berita', function (Blueprint $table) {

            $table->id();

            // Jenis berita
            $table->string('jenis', 100);

            // Judul berita
            $table->string('judul');

            // URL berita
            $table->string('slug')->unique();

            // Tanggal berita
            $table->date('tanggal');

            // Ringkasan berita
            $table->text('ringkasan')->nullable();

            // Isi lengkap berita
            $table->longText('isi');

            // Gambar utama
            $table->string('gambar')->nullable();

            // Status berita
            $table->enum('status', [
                'draft',
                'terbit'
            ])->default('draft');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
