@extends('welcome') {{-- Menggunakan welcome.blade.php sebagai layout utama --}}

@section('content')
    <div class="container mt-5">
        <div class="content-panel text-center">
            <h3>5026231129 : Rafindita Sumar Ramadhan</h3>
            <br>
            <p style="font-size: 1.5rem; line-height: 1.8; color: var(--text-dark);">
                {{-- Menggunakan {!! !!} untuk merender HTML dari string $convertedPesan --}}
                {!! $convertedPesan !!}
            </p>
            <br>
            <p style="font-size: 0.9rem; color: #888;">&copy; Rafindita Sumar Ramadhan. 2025</p>
        </div>
    </div>
@endsection