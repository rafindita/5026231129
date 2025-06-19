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
        Schema::create('karyawans', function (Blueprint $table) {
            // Primary Key is kodepegawai, CHAR/5
            $table->char('kodepegawai', 5)->primary(); // 
            $table->string('namalengkap', 50); // 
            $table->char('divisi', 5); // 
            $table->integer('departemen'); // 
            $table->timestamps(); // Keep timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};