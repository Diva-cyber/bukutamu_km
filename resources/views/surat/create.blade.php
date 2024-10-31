@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Surat Keterangan</h2>
    <form action="{{ route('surat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kelakuan Baik</label>
            <textarea name="kelakuan_baik" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Prestasi</label>
            <textarea name="prestasi" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
