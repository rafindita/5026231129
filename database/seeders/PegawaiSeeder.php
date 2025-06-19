<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            Pegawai::create([
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'umur' => $faker->numberBetween(22, 60),
                'alamat' => $faker->address,
            ]);
        }
    }
}