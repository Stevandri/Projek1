<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->text('deskripsi_kegiatan')->nullable();
            $table->dateTime('waktu_mulai'); 
            $table->dateTime('waktu_selesai')->nullable(); 
            $table->string('lokasi')->nullable();
            $table->enum('status', ['akan datang', 'selesai', 'berlangsung', 'dibatalkan'])->default('akan datang');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};