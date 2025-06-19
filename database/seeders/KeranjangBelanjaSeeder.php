<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KeranjangBelanja; // Import model
use Faker\Factory as Faker; // Import Faker

class KeranjangBelanjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            KeranjangBelanja::create([
                'KodeBarang' => $faker->unique()->numberBetween(1000, 9999),
                'Jumlah' => $faker->numberBetween(1, 10),
                'Harga' => $faker->numberBetween(10000, 500000),
            ]);
        }
    }
}