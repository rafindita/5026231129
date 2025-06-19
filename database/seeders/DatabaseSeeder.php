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
            PegawaiSeeder::class, // Uncomment if you want to seed Pegawai data
            ProdukSeeder::class,  // Uncomment if you want to seed Produk data
            KeranjangBelanjaSeeder::class, // Uncomment if you want to seed Keranjang Belanja data
            PageCounterSeeder::class, // Uncomment if you want to seed Page Counter data
            KaryawanSeeder::class, // Add this line
        ]);
    }
}