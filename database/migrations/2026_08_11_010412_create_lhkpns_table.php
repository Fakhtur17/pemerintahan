<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lhkpns', function (Blueprint $table) {
            $table->id();

            $table->year('tahun');

            $table->string('nama_skpd');

            $table->date('tanggal_upload');

            $table->string('jenis_informasi')->default('PDF');

            $table->string('keterangan');

            $table->string('file_pdf');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fhkpns');
    }
};
