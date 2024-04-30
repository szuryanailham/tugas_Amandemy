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
        Schema::create('matakuliah_diambil', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('Matkul_id');
            $table->unsignedBigInteger('Mahasiswa_id');
            $table->timestamps();
            $table->foreign('Matkul_id')->references('id')->on('matakuliah')->onDelete('cascade');
            $table->foreign('Mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliah_diambil');
    }
};
