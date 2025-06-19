@extends('keranjangbelanja.layout')

@section('keranjang_content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><strong>Beli Barang Baru</strong></h4> {{-- "Beli" means add new  --}}
        <a class="btn btn-secondary" href="{{ route('keranjangbelanja.index') }}"> Kembali</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('keranjangbelanja.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="KodeBarang">Kode Barang:</label>
            <input type="text" name="KodeBarang" class="form-control" placeholder="Masukkan Kode Barang" required> {{-- TextField  --}}
        </div>
        <div class="form-group">
            <label for="Jumlah">Jumlah Pembelian:</label>
            <input type="number" name="Jumlah" class="form-control" placeholder="Masukkan Jumlah Barang" required min="1"> {{-- TextField  --}}
        </div>
        <div class="form-group">
            <label for="Harga">Harga per Item:</label>
            <input type="number" name="Harga" class="form-control" placeholder="Masukkan Harga per Item" required min="0"> {{-- TextField  --}}
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah ke Keranjang</button>
    </form>
@endsection