@extends('layouts.main')
@section('content')
<div class="row">
    <div class="container">
        <a href="/gudang" class="btn btn-primary">Back</a>
        <div class="card col-md-8">
            <div class="card-body">
                <form action="/addgudang" method="POST" >
                    @csrf
                        <div class="mb-3">
                        <label for="kodeGudang" class="form-label">Nama Gudang</label>
                        <input type="text" name="namagudang" class="form-control" id="kodeGudang">
                        </div>
                        <div class="mb-3">
                        <label for="namaGudang" class="form-label">Kode Gudang</label>
                        <input type="text" name="kodegudang" class="form-control" id="namaGudang">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection