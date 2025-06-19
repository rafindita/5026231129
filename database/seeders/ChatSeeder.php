<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chat; // Import model

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Masukkan 1 record sesuai soal
        Chat::create([
            'pesan' => ':) pada suatu hari :3 ketika pergi kepasar :P, bertemu penjual :C es cendol ;)',
        ]);
    }
}