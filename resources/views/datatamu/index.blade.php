@extends('kerangka.master')
@section('content')
<section class="section">
    <div class="row" id="table-inverse">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">DATA TAMU SDN 1 SEPANJANG</h4>
                    <a class="btn btn-primary" href="{{ route('datatamu.create') }}">Tambah Data</a>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        {{-- <h5>Tabel Data Tamu<code
                                class="highlighter-rouge"></code></h5> --}}
                    </div>
                    <!-- table with dark -->
                    <div class="table-responsive">
                        <table class="table table-dark mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>TELEPON</th>
                                    <th>ALAMAT</th>
                                    <th>KEPENTINGAN</th>
                                    <th>TANGGAL BERTAMU</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datatamus as $datatamu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $datatamu->nama }}</td>
                                    <td>{{ $datatamu->telepon }}</td>
                                    <td>{{ $datatamu->alamat }}</td>
                                    <td>{{ $datatamu->kepentingan }}</td>
                                    <td>{{ $datatamu->tanggal_bertamu }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-warning mx-1" href="{{ route('datatamu.edit', $datatamu->id) }}">Update</a>
                                            <form action="{{ route('datatamu.destroy', $datatamu->id) }}"
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
