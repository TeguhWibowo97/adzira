<!-- modal tambah jadwal start -->
<div class="modal fade" id="ModalTambahJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Jadwal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url()?>c_jadwal/tambah" method="post">
            <div class="form-group">
              <label class="col-form-label">Nama Siswa</label>
              <select name="id_siswa" class="custom-select">
                  <?php foreach($siswa as $s) :?>
                    <option value="<?= $s['id_siswa'];?>"><?= $s['nama'];?></option>
                  <?php endforeach;?>
              </select>
            </div>
            <div class="form-group">
              <label class="col-form-label">Nama Tentor</label>
                <select class="custom-select" name="id_tentor" placeholder="pilih">
                    <?php foreach($tentor as $t) :?>
                        <option value="<?= $t['id_tentor'];?>"><?= $t['nama'] ;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
              <label class="col-form-label">Hari</label>
              <select name="hari" class="custom-select">
                  <?php foreach($hari as $h) :?>
                    <option value="<?= $h;?>"><?= $h;?></option>
                  <?php endforeach;?>
              </select>
            </div>
            <div class="form-group">
              <label class="col-form-label">Jam</label>
              <input type="time" class="form-control" name="jam" placeholder="Contoh. 07:00" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Mapel</label>
              <input type="text" class="form-control" name="mapel" placeholder="Contoh. Matematika" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- modal tambah jadwal end -->