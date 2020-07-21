
<!-- modal Edit Data Tentor start -->
<div class="modal fade" id="ModalEditDataTentor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data Tentor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url()?>c_tentor/ubah/<?= $tentor['id_tentor'];?>" method="post">
            <div class="form-group">
              <label class="col-form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $tentor['nama'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat"value="<?= $tentor['alamat'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Nomor Telepon</label>
              <input type="text" class="form-control" name="no_tlp"value="<?= $tentor['no_tlp'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Bidang Keahlian</label>
              <input type="text" class="form-control" name="bidang_keahlian" value="<?= $tentor['bidang_keahlian'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Sekolah</label>
              <input type="text" class="form-control" name="sekolah"value="<?= $tentor['sekolah'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Jurusan</label>
              <input type="text" class="form-control" name="jurusan"value="<?= $tentor['jurusan'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Semester</label>
              <input type="text" class="form-control" name="semester"value="<?= $tentor['semester'];?>" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Ubah</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- modal Edit Data Tentor end -->