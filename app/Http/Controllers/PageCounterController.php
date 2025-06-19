<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageCounter; // Import model

class PageCounterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke() // Menggunakan single action controller (__invoke)
    {
        // Temukan record counter (diasumsikan ID selalu 1)
        $counter = PageCounter::find(1);

        if ($counter) {
            // Lakukan operasi Update dengan menambah angkanya 1 terlebih dahulu 
            $counter->increment('Jumlah'); // Increment the 'Jumlah' field by 1

            // Setelah di update, baca valuenya dan tulis di halaman web 
            $jumlahPengunjung = $counter->Jumlah;
        } else {
            // Fallback jika record tidak ditemukan (seharusnya tidak terjadi jika seeder berhasil)
            $jumlahPengunjung = 0;
            // Atau bisa juga membuat record baru jika tidak ada
            // PageCounter::create(['id' => 1, 'Jumlah' => 1]);
            // $jumlahPengunjung = 1;
        }

        // Ganti dengan NRP dan nama kalian 
        $nrpNama = "5026231129 - Rafindita Sumar Ramadhan";

        return view('latihan2.index', compact('jumlahPengunjung', 'nrpNama'));
    }
}