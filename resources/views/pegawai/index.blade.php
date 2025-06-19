@extends('pegawai.layout')

@section('pegawai_content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><strong>Daftar Pegawai</strong></h4>
        <a class="btn btn-primary" href="{{ route('pegawai.create') }}"><i class="fas fa-plus"></i> Tambah Pegawai Baru</a>
    </div>

    {{-- Form Pencarian --}}
    <form action="{{ route('pegawai.index') }}" method="GET" class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari Pegawai..." aria-label="Cari Pegawai" value="{{ request('search') }}">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">CARI</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th width="180px">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pegawais as $pegawai)
                <tr>
                    {{-- Untuk nomor urut yang benar saat pagination dan pencarian --}}
                    <td>{{ $pegawais->firstItem() + $loop->index }}</td>
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->jabatan }}</td>
                    <td>{{ $pegawai->umur }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>
                        <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?');">
                            <a class="btn btn-sm btn-success" href="{{ route('pegawai.edit', $pegawai->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data pegawai.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {{ $pegawais->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>

@endsection