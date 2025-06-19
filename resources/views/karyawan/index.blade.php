@extends('karyawan.layout')

@section('karyawan_content')
    <h4 class="mb-4"><strong>Daftar Karyawan</strong></h4>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawans->firstItem() + $loop->index }}</td>
                    <td>{{ $karyawan->kodepegawai }}</td>
                    <td>{{ strtoupper($karyawan->namalengkap) }}</td> {{-- Uppercase for namalengkap  --}}
                    <td>{{ $karyawan->divisi }}</td>
                    <td>{{ strtolower($karyawan->departemen) }}</td> {{-- Lowercase for departemen  --}}
                    <td>
                        <form action="{{ route('karyawan.destroy', $karyawan->kodepegawai) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data karyawan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus Data</button> {{-- "Hapus Data" button  --}}
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data karyawan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center mt-4">
        {{-- "Tambah Data" button below the table  --}}
        <a class="btn btn-primary" href="{{ route('karyawan.create') }}"><i class="fas fa-plus"></i> Tambah Data</a>
        {{-- Pagination --}}
        {{ $karyawans->links('pagination::bootstrap-4') }}
    </div>
@endsection