  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Masukkan Material</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/create" method="POST" >
            @csrf
                <div class="mb-3">
                <label for="code" class="form-label">Kode Material</label>
                <input type="text" name="tanggal" class="form-control" id="code">
                </div>
                <div class="mb-3">
                <label for="namabarang" class="form-label">Deskripsi</label>
                <td type="text" name="pic" class="form-control " id="namabarang" disable>
                </div>
                <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" name="supplier" class="form-control" id="supplier">
                </div>
                <div class="float-end">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
        </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>