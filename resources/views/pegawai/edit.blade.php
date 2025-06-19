@extends('pegawai.layout')

@section('pegawai_content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><strong>Edit Pegawai</strong></h4>
        <a class="btn btn-secondary" href="{{ route('pegawai.index') }}"> Kembali</a>
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

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Penting untuk operasi Update --}}
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="{{ $pegawai->nama }}" class="form-control" placeholder="Nama Pegawai" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" name="jabatan" value="{{ $pegawai->jabatan }}" class="form-control" placeholder="Jabatan" required>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" name="umur" value="{{ $pegawai->umur }}" class="form-control" placeholder="Umur" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control" style="height:100px" placeholder="Alamat" required>{{ $pegawai->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection