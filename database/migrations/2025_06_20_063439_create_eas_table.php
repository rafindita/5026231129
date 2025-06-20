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
        Schema::create('eas', function (Blueprint $table) {
            $table->char('nip', 5)->primary(); // 
            $table->string('nama', 50); // 
            $table->char('pangkat', 30); // 
            $table->integer('gaji'); // 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};