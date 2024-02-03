@extends('layouts.main')
@section('content')
<a href="/addtranspbb" class="btn btn-primary mb-2"><i class="bi bi-skip-backward">  Kembali</i></a>
<div class="row">
    <div class="container">
        {{-- <h4>
            ID Master PBB "
            <?php  
            ?>
            "
        </h4> --}}
        <div class="card col-md-12 mt-4">
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-3 col-md-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
   Tambah
  </button>
  
  @include('include.modal')
            <div class="row">
                {{-- <form action="/" method="POST" class="" style="" >
                    @csrf
                    <table>
                        <thead>
                            <th>
                                <label for="idmaster" class="form-label">ID Master PBB</label>
                            </th>
                            <th>
                                <label for="kode" class="form-label">Kode Material</label>
                            </th>
                            <th>
                                <label for="qty" class="form-label">Quantity</label>
                            </th>
                            <th>
                                <label for="tujuangudang" class="form-label">Tujuan Gudang</label>
                            </th>
                            <th>
                                <label for="tanggal" class="form-label">Tanggal</label>
                            </th>
                        </thead>
                        <tr>
                            <td>
                                <input type="text" name="idmaster" class="form-control" id="idmaster">
                            </td>
                            <td>
                                <input type="text" name="kode" class="form-control" id="kode">
                            </td>
                            <td>
                                <input type="number" name="qty" class="form-control" id="qty">
                            </td>
                            <td>
                                <input type="text" name="tujuangudang" class="form-control" id="tujuangudang">
                            </td>
                            <td>
                                <input type="date" name="tanggal" class="form-control" id="tanggal">
                            </td>
                        </tr>
                    </table>
                </form> --}}
                {{-- <button type="submit" class="btn btn-success mt-3 mb-3">Selesai</button> --}}
                {{-- Mulai --}}
                <table class="table table-striped table-bordered table-hover">
                    <thead class="">
                        <th>No. Master PBB</th>
                        <th>Kode Material</th>
                        <th>Quantity</th>
                        <th>Tujuan Gudang</th>
                        <th>Tanggal</th>
                    </thead>
                    <tbody style="font-size: 15px">
                        @foreach ($temp_detail_pbb as $data)
                        <tr>
                            <td>{{ $data->id_master_pbb }}</td>
                            <td>{{ $data->id_barang }}</td>
                            <td>{{ $data->qty }}</td>
                            <td>{{ $data->tujuan_gudang }}</td>
                            <td>{{ $data->tanggal }}</td>
                            <td>
                                <button class="btn btn-warning float-end" style="font-size: 12px">Edit</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection