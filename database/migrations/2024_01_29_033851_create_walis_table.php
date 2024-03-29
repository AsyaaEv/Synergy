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
    Schema::create('walis', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap')->unique();
        $table->string('nama_panggilan');
        $table->string('foto');
        $table->string('kode');
        $table->string('mapel');
        $table->string('guru');
        $table->string('nip');
        $table->string('ttl');
        $table->string('ig');
        $table->string('fb');
        $table->string('walikelas');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('walis');
    }
};
