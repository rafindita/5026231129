@extends('karyawan.layout')

@section('karyawan_content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><strong>Tambah Data Karyawan</strong></h4>
        <a class="btn btn-secondary" href="{{ route('karyawan.index') }}"> Kembali</a>
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

    {{-- Horizontal Form Layout  --}}
    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai:</label>
            <div class="col-sm-10">
                <input type="text" name="kodepegawai" class="form-control" placeholder="Ex: KRY01" maxlength="5" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap:</label>
            <div class="col-sm-10">
                <input type="text" name="namalengkap" class="form-control" placeholder="Nama Lengkap Karyawan" maxlength="50" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi:</label>
            <div class="col-sm-10">
                <input type="text" name="divisi" class="form-control" placeholder="Ex: IT, HRD" maxlength="5" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen:</label>
            <div class="col-sm-10">
                <input type="number" name="departemen" class="form-control" placeholder="Nomor Departemen" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </form>
@endsection