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
        Schema::create('potensi_kecamatan', function (Blueprint $table) {

            $table->id();

            $table->string('judul');

            $table->string('slug')->unique();

            $table->string('jenis', 50);

            $table->string('gambar')->nullable();

            $table->string('lokasi')->nullable();

            $table->longText('deskripsi')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index('jenis');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensi_kecamatan');
    }
};
