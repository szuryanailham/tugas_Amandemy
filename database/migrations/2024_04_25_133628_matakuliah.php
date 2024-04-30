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
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('Dosen_id');
            $table->string('Nama');
            $table->dateTime('waktu');
            $table->timestamps();
            
            // Kunci asing untuk Dosen_id
            $table->foreign('Dosen_id')->references('id')->on('dosen')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
    }
};
