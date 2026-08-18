<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'data_informasi_tersedia_setiap_saat',
            function (Blueprint $table) {

                $table->id();

                $table->unsignedBigInteger(
                    'jenis_informasi_tersedia_setiap_saat_id'
                );

                $table->year('tahun');

                $table->string('nama_skpd');

                $table->date('tanggal_upload');

                $table->enum('tipe_dokumen', [
                    'file',
                    'link',
                ]);

                $table->string('nama_file')
                    ->nullable();

                $table->string('file_path')
                    ->nullable();

                $table->text('link_url')
                    ->nullable();

                $table->text('keterangan')
                    ->nullable();

                $table->timestamps();


                /*
                |--------------------------------------------------------------------------
                | FOREIGN KEY
                |--------------------------------------------------------------------------
                */

                $table->foreign(
                    'jenis_informasi_tersedia_setiap_saat_id',
                    'data_tersedia_saat_jenis_fk'
                )
                    ->references('id')
                    ->on(
                        'jenis_informasi_tersedia_setiap_saat'
                    )
                    ->cascadeOnDelete();


                /*
                |--------------------------------------------------------------------------
                | INDEX
                |--------------------------------------------------------------------------
                */

                $table->index('tahun');

                $table->index('nama_skpd');

                $table->index('tanggal_upload');
            }
        );
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'data_informasi_tersedia_setiap_saat'
        );
    }
};
