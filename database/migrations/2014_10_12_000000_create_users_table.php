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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('alamat');
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('gender')->nullable(); // jenis kelamin
            $table->date('tanggal_lahir')->nullable(); // tanggal lahir
            $table->integer('umur')->nullable(); // umur
            $table->rememberToken();
            $table->timestamps();
            $table->string('google_id')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
