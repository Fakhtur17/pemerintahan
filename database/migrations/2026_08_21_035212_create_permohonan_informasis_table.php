<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permohonan_informasis', function (Blueprint $table) {
            $table->id();

            // Data Pemohon
            $table->string('email');
            $table->string('nama');
            $table->string('nik', 16);
            $table->text('alamat');
            $table->string('no_hp', 30);

            // Data Permohonan
            $table->text('informasi_diminta');
            $table->text('tujuan');

            // Proses
            $table->enum('status', [
                'baru',
                'diproses',
                'selesai',
                'ditolak'
            ])->default('baru');

            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permohonan_informasis');
    }
};
