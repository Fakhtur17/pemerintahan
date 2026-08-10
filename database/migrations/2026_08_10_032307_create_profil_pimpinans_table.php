<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profil_pimpinans', function (Blueprint $table) {
            $table->id();

            // Data utama
            $table->string('nama');
            $table->string('jabatan');

            // Biodata
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nip')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('status_perkawinan')->nullable();

            // Pendidikan & jabatan
            $table->text('riwayat_pendidikan')->nullable();
            $table->text('riwayat_jabatan')->nullable();

            // Foto
            $table->string('foto')->nullable();

            // Media sosial
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profil_pimpinans');
    }
};
