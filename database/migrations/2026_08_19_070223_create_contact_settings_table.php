<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();

            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();

            $table->text('deskripsi_alamat')->nullable();
            $table->text('deskripsi_email')->nullable();
            $table->text('deskripsi_telepon')->nullable();

            $table->text('maps_embed')->nullable();

            $table->string('form_judul')->nullable();
            $table->text('form_deskripsi')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};
