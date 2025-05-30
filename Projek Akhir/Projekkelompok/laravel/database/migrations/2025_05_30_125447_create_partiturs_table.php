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
        Schema::create('partiturs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('pencipta');
            $table->string('file_path')->nullable(); // Path ke PDF partitur
            $table->string('sampul_path')->nullable(); // Path ke gambar sampul
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partiturs');
    }
};