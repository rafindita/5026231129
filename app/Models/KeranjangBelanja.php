<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangBelanja extends Model
{
    use HasFactory;

    // Optional: If you strictly want the table name 'keranjangbelanja' (singular, no underscore)
    // protected $table = 'keranjangbelanja';

    protected $fillable = [
        'KodeBarang',
        'Jumlah',
        'Harga',
    ];
}