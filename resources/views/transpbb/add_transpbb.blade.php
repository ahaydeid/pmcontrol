@extends('layouts.main')
@section('content')
<a href="/transpbb" class="btn btn-primary mb-2"><i class="bi bi-skip-backward">  Kembali</i></a>
<div class="row">
    <div class="container mb-5">
        <div class="card col-md-6">
            <div class="card-body">
                <form action="/create" method="POST" >
                    @csrf
                        <div class="mb-3 col-10">
                        <label for="nopbb" class="form-label">No. PBB</label>
                        <input type="text" name="nopbb" class="form-control" id="nopbb">
                        </div>
                        <div class="mb-3 col-4">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal">
                        </div>
                        <div class="mb-3 col-10">
                        <label for="pic" class="form-label">PIC</label>
                        <input type="text" name="pic" class="form-control" id="pic">
                        </div>
                        <div class="mb-3 col-10">
                        <label for="supplier" class="form-label">Supplier</label>
                        <input type="text" name="supplier" class="form-control" id="supplier">
                        </div>
                        <button type="submit" class="btn btn-success">Lanjut</button>
                        {{-- <a href="/detail" class="btn btn-primary">Tambah Material</a> --}}
                </form>
            </div>
        </div>

    </div>
</div>

@endsection