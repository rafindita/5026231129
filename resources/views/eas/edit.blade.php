@extends('eas.layout')

@section('eas_content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4><strong>Edit Karyawan</strong></h4>
        <a class="btn btn-secondary" href="{{ route('eas.index') }}"> Kembali</a>
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

    <form action="{{ route('eas.update', $eas->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Penting untuk operasi Update --}}
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="number" name="nip" value="{{ $eas->nip }}" class="form-control" placeholder="NIP" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Karyawan:</label>
            <input type="text" name="nama" value="{{ $eas->nama }}" class="form-control" placeholder="Nama Karyawan" required>
        </div>
        <div class="form-group">
            <label for="pangkat">Pangkat:</label>
            <textarea name="pangkat" class="form-control" style="height:100px" placeholder="Pangkat">{{ $eas->pangkat }}</textarea>
        </div>
        <div class="form-group">
            <label for="gaji">Gaji:</label>
            <input type="number" step="0.01" name="gaji" value="{{ $eas->gaji }}" class="form-control" placeholder="Gaji" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection