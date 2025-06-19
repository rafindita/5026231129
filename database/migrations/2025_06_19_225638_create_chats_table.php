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
        Schema::create('chats', function (Blueprint $table) {
            $table->id(); // ID (PrimaryKey) (AutoNumber)
            $table->string('pesan', 200); // VARCHAR (200)
            // Soal tidak menyebutkan timestamps, tapi Laravel secara default menambahkannya.
            // Jika ingin STRICT sesuai soal, tambahkan: public $timestamps = false; di model Chat.php
            // Namun, biarkan default Laravel agar tidak perlu mengubah di model jika tidak diminta.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};