@extends('welcome') {{-- Menggunakan welcome.blade.php sebagai layout utama --}}

@section('content')
    <div class="container mt-5">
        {{-- Pesan Sukses (jika ada) --}}
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        {{-- Area untuk konten spesifik dari halaman CRUD (index, create, edit, show) --}}
        <div class="content-panel"> {{-- Gunakan content-panel dari welcome.blade.php --}}
            @yield('pegawai_content')
        </div>
    </div>
@endsection