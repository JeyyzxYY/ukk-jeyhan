

<!-- Modal -->
<div class="modal fade" id="modalAddTodo" tabindex="-1" aria-labelledby="modalAddTodoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalAddTodoLabel">Tamba Todo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control mb-2" name="taskname" placeholder="Masukan nama todo" required>

                <!-- <select class="form-select mb-2" name="status" required>
                <option selected disabled>Pilih Status</option>
                <option value="selesai">Selesai</option>
                <option value="belum selesai">Belum Selesai</option>
                </select> -->

                <select class="form-select mb-2" name="prioritas" required>
                <option selected disabled>Pilih Prioritas</option>
                <option value="tinggi">Tinggi</option>
                <option value="sedang">Sedang</option>
                <option value="rendah">Rendah</option>
                </select>
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal" class="form-control mb-2" placeholder="Masukkan Tanggal" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="tambahTodo" class="btn btn-success">Tambah Todo</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>