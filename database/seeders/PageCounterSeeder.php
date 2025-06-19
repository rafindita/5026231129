<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageCounter; // Import model

class PageCounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Masukkan record melalui phpmyadmin sebagai berikut: ID=1, Jumlah=0 
        PageCounter::create([
            'id' => 1,
            'Jumlah' => 0,
        ]);
    }
}