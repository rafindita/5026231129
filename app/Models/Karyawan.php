<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    // Specify the primary key name
    protected $primaryKey = 'kodepegawai'; // 

    // Ensure primary key is not auto-incrementing (since it's CHAR/5)
    public $incrementing = false;

    // Set the primary key type to string
    protected $keyType = 'string';

    protected $fillable = [
        'kodepegawai',
        'namalengkap',
        'divisi',
        'departemen',
    ];
}