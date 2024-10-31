@extends('kerangka.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title">Update Data</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" method="post" action="{{ route('datatamu.update', $datatamu->id) }}">
                            @csrf
                            @method('PATCH')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nama" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama') ?? $datatamu->nama }}"
                                        placeholder="">
                                        @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label>Telepon</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="tel" id="telepon" name="telepon"
                                        class="form-control @error('telepon') is-invalid @enderror"
                                        value="{{ old('telepon') ?? $datatamu->telepon }}"
                                        pattern="[0-9]*"
                                        placeholder="">
                                        @error('telepon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="alamat" name="alamat"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        value="{{ old('alamat') ?? $datatamu->alamat }}"
                                        placeholder="">
                                        @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kepentingan</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="kepentingan" name="kepentingan"
                                        class="form-control @error('kepentingan') is-invalid @enderror"
                                        value="{{ old('kepentingan') ?? $datatamu->kepentingan }}"
                                        placeholder="">
                                        @error('kepentingan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tanggal Bertamu</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" id="tanggal_bertamu" name="tanggal_bertamu"
                                        class="form-control @error('tanggal_bertamu') is-invalid @enderror"
                                        value="{{ old('tanggal_bertamu') ?? $datatamu->tanggal_bertamu }}"
                                        placeholder="">
                                        @error('tanggal_bertamu')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
