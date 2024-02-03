@extends('layouts.main')
@section('content')
<div class="row">
        <a href="/addtranspbb" class="btn btn-primary float-end col-2 mb-2">Tambah</a>
        <table class="table table-striped table-bordered table-hover">
            <thead class="">
                <th>NO. PBB</th>
                <th>TANGGAL</th>
                <th>PIC</th>
                <th>SUPPLIER</th>
                <th>ACTION</th>
            </thead>
            <tbody style="font-size: 15px">
                @foreach ($master_pbb as $data)
                <tr>
                    <td>{{ $data->no_pbb }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->pic }}</td>
                    <td>{{ $data->supplier }}</td>
                    <td>
                    <button class="btn btn-success " style="font-size: 12px">Lihat</button>
                    <button class="btn btn-warning " style="font-size: 12px">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection