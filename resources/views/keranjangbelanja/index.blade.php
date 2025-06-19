@extends('keranjangbelanja.layout')

@section('keranjang_content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><strong>Keranjang Belanja</strong></h4>
        {{-- "Beli" button to go to the create form  --}}
        <a class="btn btn-primary" href="{{ route('keranjangbelanja.create') }}"><i class="fas fa-plus"></i> Beli</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th width="120px">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($keranjangBelanjas as $item)
                <tr>
                    <td>{{ $keranjangBelanjas->firstItem() + $loop->index }}</td>
                    <td>{{ $item->id }}</td> {{-- As requested for Kode Pembelian --}}
                    <td>{{ $item->KodeBarang }}</td>
                    <td>{{ $item->Jumlah }}</td>
                    <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td> {{-- Thousands separator  --}}
                    <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td> {{-- Total with thousands separator  --}}
                    <td>
                        <form action="{{ route('keranjangbelanja.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin membatalkan item ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Batal</button> {{-- "Batal" button  --}}
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada item di keranjang belanja.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $keranjangBelanjas->links('pagination::bootstrap-4') }}
    </div>

@endsection