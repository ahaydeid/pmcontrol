@extends('layouts.main')
@section('content')
<div class="row">
        <a href="/creategudang" class="btn btn-primary float-end mb-2" >Tambah</a>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>Nama Gudang</th>
                    <th>Kode Gudang</th>
                </thead>
                <tbody>
                    @foreach ($gudang as $data)
                    <tr>
                        <td>{{ $data->nama_gudang }}</td>
                        <td>{{ $data->kode_gudang }}</td>
                    </tr>
                    @endforeach
                </tbody>
    
            </table>
    </div>
@endsection