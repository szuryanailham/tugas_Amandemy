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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('prodi_id');
            $table->string('nama');
            $table->date('nik')->unique();
            $table->text('alamat')->nullable();
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->timestamps();
            
            // Kunci asing untuk prodi_id
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
