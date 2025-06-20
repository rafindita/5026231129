<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\eas; // Import model Produk
use Faker\Factory as Faker; // Import Faker

class easSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            eas::create([
                'nip' => $faker->unique()->lexify('?????'), // 5 random uppercase letters
                'nama' =>$faker->name,
                'pangkat' =>$faker->jobTitle,
                'gaji' => $faker->numberBetween(5000000, 15000000), // Harga antara 10.000 hingga 10.000.000
            ]);
        }
    }
}