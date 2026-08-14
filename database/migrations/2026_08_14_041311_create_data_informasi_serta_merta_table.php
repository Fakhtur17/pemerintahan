<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_informasi_serta_merta', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('jenis_informasi_serta_merta_id');

            $table->year('tahun');
            $table->string('nama_skpd');
            $table->date('tanggal_upload');

            $table->enum('tipe_dokumen', ['file', 'link']);

            $table->string('nama_file')->nullable();
            $table->string('file_path')->nullable();
            $table->text('link_url')->nullable();
            $table->text('keterangan')->nullable();

            $table->timestamps();

            // Foreign key dengan nama pendek
            $table->foreign(
                'jenis_informasi_serta_merta_id',
                'fk_data_serta_merta_jenis'
            )
                ->references('id')
                ->on('jenis_informasi_serta_merta')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('data_informasi_serta_merta', function (Blueprint $table) {
            $table->dropForeign('fk_data_serta_merta_jenis');
        });

        Schema::dropIfExists('data_informasi_serta_merta');
    }
};
