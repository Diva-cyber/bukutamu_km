@extends('kerangka.master')
@section('content')
<section class="section">
    <div class="row" id="table-inverse">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">DATA TAMU SDN 1 SEPANJANG</h4>
                    <a class="btn btn-primary" href="{{ route('datasiswa.create') }}">Tambah Data</a>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    </div>
                    <!-- table with dark -->
                    <div class="table-responsive">
                        <table class="table table-dark mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>KELAS</th>
                                    <th>NISN</th>
                                    <th>ALAMAT</th>
                                    <th>TEMPAT TANGGAL LAHIR</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->kelas }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->alamat }}</td>
                                    <td>{{ $siswa->tempat_tanggal_lahir }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-warning mx-1" href="{{ route('datasiswa.edit', $siswa->id) }}">Update</a>
                                            <form action="{{ route('datasiswa.destroy', $siswa->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
