<?php

use App\Http\Controllers\CountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\KaryawanController;
//import java.io;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//System.out.println("Hello World");

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return " <h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

// Route untuk halaman utama Laravel (welcome page yang kamu berikan)
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman "All Front End"
Route::get('/frontend', function () {
    return view('frontend.index');
});

// Route untuk setiap tugas front-end individual
Route::get('/tugas1', function () {
    return view('frontend.tugas1');
});

Route::get('/tugas2', function () {
    return view('frontend.tugas2');
});

Route::get('/tugas3', function () {
    return view('frontend.tugas3');
});

Route::get('/tugas4', function () {
    return view('frontend.tugas4');
});

// ROUTE BARU UNTUK PEGAWAI (CRUD)
// Ini akan secara otomatis membuat rute untuk index, create, store, show, edit, update, destroy
Route::resource('pegawai', PegawaiController::class); //

// ROUTE BARU UNTUK PRODUK (CRUD)
Route::resource('produk', ProdukController::class); //

Route::get('frontend', function () {
	return view('frontend');
});

// NEW ROUTE FOR KERANJANG BELANJA (LATIHAN 1)
Route::resource('keranjangbelanja', KeranjangBelanjaController::class);

// NEW ROUTE FOR PAGE COUNTER (LATIHAN 2)
Route::get('/latihan2', PageCounterController::class);

Route::resource('karyawan', KaryawanController::class);

