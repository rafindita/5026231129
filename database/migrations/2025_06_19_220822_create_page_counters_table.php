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
        Schema::create('page_counters', function (Blueprint $table) {
            $table->id(); // ID (PrimaryKey) (AutoIncrement)
            $table->integer('Jumlah')->default(0); // Jumlah (INTEGER)
            // Tidak boleh menambah field lain sesuai soal
            // Tidak ada timestamps() karena tidak diminta di soal
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_counters');
    }
};