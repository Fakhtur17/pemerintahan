<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_informasi_berkala', function (Blueprint $table) {

            $table->id();

            $table->foreignId('jenis_informasi_berkala_id')
                ->constrained('jenis_informasi_berkala')
                ->cascadeOnDelete();

            $table->year('tahun');

            $table->string('nama_skpd');

            $table->date('tanggal_upload');

            $table->enum('tipe_dokumen', [
                'file',
                'link',
            ]);

            $table->string('nama_file')->nullable();

            $table->string('file_path')->nullable();

            $table->text('link_url')->nullable();

            $table->text('keterangan')->nullable();

            $table->timestamps();

            $table->index('tahun');
            $table->index('nama_skpd');
            $table->index('tanggal_upload');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_informasi_berkala');
    }
};
