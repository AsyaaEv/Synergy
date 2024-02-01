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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_panggilan');
            $table->string('jabatan');
            $table->string('deskripsi');
            $table->string('ttl');
            $table->string('ig');
            $table->string('fb');
            $table->string('kode');
            $table->string('mapel');
            $table->string('nip');
            $table->string('email');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
