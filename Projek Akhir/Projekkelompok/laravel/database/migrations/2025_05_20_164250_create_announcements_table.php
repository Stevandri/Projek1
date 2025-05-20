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
        Schema::create('announcements', function (Blueprint $table) { // Nama tabel: announcements (plural)
            $table->id();
            $table->string('subject'); // Sebelumnya 'subjek'
            $table->text('content');   // Sebelumnya 'konten'
            $table->string('sender')->nullable(); // Sebelumnya 'pengirim'
            $table->date('publish_date'); // Sebelumnya 'tanggal_publish'
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};