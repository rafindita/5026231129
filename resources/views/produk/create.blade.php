@extends('produk.layout')

@section('produk_content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><strong>Tambah Produk Baru</strong></h4>
        <a class="btn btn-secondary" href="{{ route('produk.index') }}"> Kembali</a>
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

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Produk:</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Produk" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" class="form-control" style="height:100px" placeholder="Deskripsi Produk"></textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" step="0.01" name="harga" class="form-control" placeholder="Harga Produk" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" name="stok" class="form-control" placeholder="Jumlah Stok" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection