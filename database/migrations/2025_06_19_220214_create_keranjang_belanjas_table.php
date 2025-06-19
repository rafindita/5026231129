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
        Schema::create('keranjang_belanjas', function (Blueprint $table) {
            $table->id(); // ID (AutoIncrement) (PRIMARY KEY)
            $table->integer('KodeBarang'); // INTEGER
            $table->integer('Jumlah'); // INTEGER
            $table->integer('Harga'); // INTEGER
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang_belanjas');
    }
};