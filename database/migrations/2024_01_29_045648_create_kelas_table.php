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
    Schema::create('kelas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('angkatan');
        $table->string('cover');
        $table->string('wali');
        $table->foreign('wali')->references('nama')->on('walis')->onDelete('cascade'); 
        $table->string('prestasi');
        $table->string('memories');
        $table->string('slogan');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
