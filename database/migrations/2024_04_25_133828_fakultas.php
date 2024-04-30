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
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('Fakultas_id');
            $table->enum('Jenjang', ['D3', 'S1', 'S2', 'S3'])->default('S1');
            $table->unsignedBigInteger('Kprodi_id');
            $table->string('Telp_number');
            $table->text('Deskripsi')->nullable();
            $table->timestamps();
            
            $table->foreign('Fakultas_id')->references('id')->on('fakultas')->onDelete('cascade');
            $table->foreign('Kprodi_id')->references('id')->on('prodi')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
