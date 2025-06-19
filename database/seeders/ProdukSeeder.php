<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk; // Import model Produk
use Faker\Factory as Faker; // Import Faker

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            Produk::create([
                'nama' => $faker->words(rand(2, 4), true) . ' ' . $faker->randomElement(['Pro', 'Max', 'Plus', 'Lite', 'Standard']),
                'deskripsi' => $faker->paragraph(rand(2, 4)),
                'harga' => $faker->randomFloat(2, 10000, 10000000), // Harga antara 10.000 hingga 10.000.000
                'stok' => $faker->numberBetween(0, 500),
            ]);
        }
    }
}