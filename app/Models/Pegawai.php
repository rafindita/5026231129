<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    // Nama tabel akan otomatis 'pegawais' karena modelnya 'Pegawai'.
    // Jika nama tabel berbeda, bisa didefinisikan: protected $table = 'nama_tabel_lain';

    protected $fillable = [
        'nama',
        'jabatan',
        'umur',
        'alamat',
    ];
}