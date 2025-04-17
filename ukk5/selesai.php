<!-- modal edit -->
 

<!-- Modal -->
<div class="modal fade" id="modalEditTodo<?= $data['id'] ?>" tabindex="-1" aria-labelledby="modalEditTodoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEditTodoLabel">Edit Todo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control mb-2" value="<?= $data['taskname']?>" name="taskname" placeholder="Masukan nama todo" required>
                <input type="text" name="id" value="<?= $data['id'] ?>" hidden>

                <select class="form-select mb-2" name="status" required>
                <option selected disabled>Pilih Status</option>
                <option <?php if($data['status'] === 'selesai') { ?> selected <?php } ?>  value="selesai">Selesai</option>
                <option <?php if($data['status'] === 'belum selesai') { ?> selected <?php } ?>  value="belum selesai">Belum Selesai</option>
                
                
                </select>

                <select class="form-select mb-2" name="prioritas" required>
                <option selected disabled>Pilih Prioritas</option>
                <option <?php if($data['prioritas'] === 'tinggi') { ?> selected <?php } ?>  value="tinggi">Tinggi</option>
                <option <?php if($data['prioritas'] === 'sedang') { ?> selected <?php } ?>  value="sedang">Sedang</option>
                <option <?php if($data['prioritas'] === 'rendah') { ?> selected <?php } ?>  value="rendah">Rendah</option>
                
                </select>
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="tanggal" class="form-control mb-2" placeholder="Masukkan Tanggal" value="<?= $data['tanggal'] ?>" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="editTodo" class="btn btn-success">Edit Todo</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>