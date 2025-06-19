<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCounter extends Model
{
    use HasFactory;

    public $timestamps = false; // Nonaktifkan timestamps karena tidak ada created_at/updated_at di tabel ini 

    protected $fillable = [
        'Jumlah',
    ];

    // Opsional: Jika nama tabel persis 'pagecounter' (tanpa 's')
    // protected $table = 'pagecounter';
}