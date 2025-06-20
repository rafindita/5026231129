<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Pastikan seeder lain yang kamu butuhkan juga ada di sini
            PegawaiSeeder::class,
            ProdukSeeder::class,
            KeranjangBelanjaSeeder::class,
            PageCounterSeeder::class,
            KaryawanSeeder::class,
            ChatSeeder::class, 
            easSeeder::class, 
            // Tambahkan baris ini
        ]);
    }
}