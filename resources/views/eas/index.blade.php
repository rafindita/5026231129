@extends('eas.layout')

@section('eas_content')
    <h4 class="mb-4"><strong>Daftar Karyawan</strong></h4>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama Karyawan</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($eas as $eas)
                <tr>
                    <td>{{ $eas->nip }}</td>
                    <td>{{ strtoupper($eas->nama) }}</td> {{-- Uppercase for namalengkap  --}}
                    <td>{{ $eas->pangkat }}</td>
                    <td>Rp {{ number_format($eas->gaji, 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('eas.destroy', $eas->nip) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data karyawan ini?');">
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
        <a class="btn btn-primary" href="{{ route('eas.create') }}"><i class="fas fa-plus"></i> Tambah Data</a>
@endsection