@extends('layouts.main')
@section('content')
    <div class="row">
        <a href="/addbarang" class="btn btn-primary float-end mb-2">Tambah</a>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Kode Material</th>
                <th>Deskripsi</th>
                <th>Kategori</th>
                <th>Satuan</th>
            </thead>
            <tbody>
                @foreach ($barang as $data)
                <tr>
                    <td>{{ $data->code }}</td>
                    <td>{{ $data->nama_barang }}</td>
                    <td>{{ $data->kategori }}</td>
                    <td>{{ $data->satuan }}</td>
                    <td>
                        <button class="btn btn-warning float-end" style="font-size: 12px">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection