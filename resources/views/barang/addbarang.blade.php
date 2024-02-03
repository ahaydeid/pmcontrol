@extends('layouts.main')
@section('content')
<a href="/barang" class="btn btn-primary mb-2">Back</a>
<div class="row">
    <div class="container">
        <div class="card col-md-8">
            <div class="card-body">
                <form action="/create" method="POST" >
                    @csrf
                        <div class="mb-3">
                        <label for="kodeBarang" class="form-label">Kode Material</label>
                        <input type="text" name="kode" class="form-control" id="kodeBarang">
                        </div>
                        <div class="mb-3">
                        <label for="namaBarang" class="form-label">Deskripsi</label>
                        <input type="text" name="nama" class="form-control" id="namaBarang">
                        </div>
                        <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="kategori">
                        </div>
                        <div class="mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" name="satuan" class="form-control" id="satuan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection