 
<!-- modal Edit Data Siswa start -->
<div class="modal fade" id="ModalEditDataSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url()?>c_siswa/ubah/<?= $siswa['id_siswa'];?>" method="post">
            <div class="form-group">
              <label class="col-form-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $siswa['nama'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat"value="<?= $siswa['alamat'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir"value="<?= $siswa['tgl_lahir'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Kelas</label>
              <input type="text" class="form-control" name="kelas" value="<?= $siswa['kelas'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Nama Orang Tua</label>
              <input type="text" class="form-control" name="nama_ortu"value="<?= $siswa['nama_ortu'];?>" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Telepon Orang Tua</label>
              <input type="text" class="form-control" name="tlp_ortu"value="<?= $siswa['tlp_ortu'];?>" required>
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
<!-- modal Edit Data Siswa end -->