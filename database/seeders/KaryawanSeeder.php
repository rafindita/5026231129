<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan; // Import model
use Faker\Factory as Faker; // Import Faker

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            Karyawan::create([
                'kodepegawai' => strtoupper($faker->unique()->lexify('?????')), // 5 random uppercase letters
                'namalengkap' => $faker->name,
                'divisi' => strtoupper($faker->randomElement(['HRD', 'IT', 'MKT', 'FIN', 'OPS'])), // Example divisions
                'departemen' => $faker->numberBetween(100, 999), // Example department numbers
            ]);
        }
    }
}