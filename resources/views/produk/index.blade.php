@extends('produk.layout')

@section('produk_content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><strong>Daftar Produk</strong></h4>
        <a class="btn btn-primary" href="{{ route('produk.create') }}"><i class="fas fa-plus"></i> Tambah Produk Baru</a>
    </div>

    {{-- Form Pencarian --}}
    <form action="{{ route('produk.index') }}" method="GET" class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari Produk..." aria-label="Cari Produk" value="{{ request('search') }}">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">CARI</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th width="180px">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produks as $produk)
                <tr>
                    <td>{{ $produks->firstItem() + $loop->index }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($produk->deskripsi, 50, '...') }}</td> {{-- Batasi deskripsi --}}
                    <td>Rp {{ number_format($produk->harga, 2, ',', '.') }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                            <a class="btn btn-sm btn-success" href="{{ route('produk.edit', $produk->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $produks->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>

@endsection