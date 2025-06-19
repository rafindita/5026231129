@extends('welcome') {{-- Menggunakan welcome.blade.php sebagai layout utama --}}

@section('content')
    <div class="container mt-5">
        <div class="content-panel text-center">
            <h3>{{ $nrpNama }}</h3> {{-- Ganti dengan NRP dan nama kalian  --}}
            <br>
            <div style="font-size: 2.5rem; font-weight: bold; color: #6366f1;">
                Anda Pengunjung ke: {{ $jumlahPengunjung }}
            </div>
            <p class="mt-3 text-muted">
                Angka Jumlah Pengunjung akan bertambah 1 setiap kali halaman ini dipanggil/di-refresh.
            </p>
        </div>
    </div>
@endsection