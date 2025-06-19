@extends('welcome') {{-- Ini akan menggunakan welcome.blade.php sebagai layout utama --}}

@section('content')
    <div class="container-fluid">
        <div class="content-panel"> {{-- Gunakan content-panel untuk styling kotak putih --}}
            <h2 class="text-center mb-4">Daftar Tugas Front End</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="task-card">
                        <h3>Tugas 1: Web ITS</h3>
                        <p>Halaman artikel berita dengan styling khusus.</p>
                        <a href="{{ url('/tugas1') }}" class="btn btn-primary">Lihat Tugas</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="task-card">
                        <h3>Tugas 2: CSS Opacity</h3>
                        <p>Contoh penggunaan properti CSS Opacity dan RGBA.</p>
                        <a href="{{ url('/tugas2') }}" class="btn btn-primary">Lihat Tugas</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="task-card">
                        <h3>Tugas 3: Home Page Teknisi</h3>
                        <p>Halaman homepage dengan tampilan daftar alat disewa & menunggu persetujuan (Bootstrap).</p>
                        <a href="{{ url('/tugas3') }}" class="btn btn-primary">Lihat Tugas</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="task-card">
                        <h3>Tugas 4: Linktree Adam Levine</h3>
                        <p>Replika halaman Linktree untuk profil Adam Levine.</p>
                        <a href="{{ url('/tugas4') }}" class="btn btn-primary">Lihat Tugas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Gaya CSS tambahan untuk task-card bisa ditambahkan di sini jika tidak ingin di welcome.blade.php --}}
    <style>
        .task-card {
            background-color: #ffffff;
            border-radius: 1.25rem;
            padding: 1.5rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            height: 100%; /* Memastikan tinggi kartu konsisten dalam row */
        }
        .task-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }
        .task-card h3 {
            color: #6366f1;
            margin-bottom: 15px;
        }
        .task-card .btn {
            width: 100%;
            border-radius: 0.75rem;
            padding: 10px 0;
        }
    </style>
@endsection