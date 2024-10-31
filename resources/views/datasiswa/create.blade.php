@extends('kerangka.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title">Tambah Data</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{ route('datasiswa.store') }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nama" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama') }}"
                                        placeholder="">
                                        @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label>Kelas</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="kelas" name="kelas"
                                        class="form-control @error('kelas') is-invalid @enderror"
                                        value="{{ old('kelas') }}"
                                        placeholder="">
                                        @error('kelas')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                        <div class="col-md-4">
                                            <label>NISN</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nisn" name="nisn"
                                            class="form-control @error('nisn') is-invalid @enderror"
                                            value="{{ old('nisn') }}"
                                            placeholder="">
                                            @error('nisn')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                            <div class="col-md-4">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="alamat" name="alamat"
                                                class="form-control @error('alamat') is-invalid @enderror"
                                                value="{{ old('alamat') }}"
                                                placeholder="">
                                                @error('alamat')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label>Tempat, Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="date" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir"
                                                class="form-control @error('tempat_tanggal_lahir') is-invalid @enderror"
                                                value="{{ old('tempat_tanggal_lahir') }}"
                                                placeholder="">
                                                @error('tempat_tanggal_lahir')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
