
<!-- modal Edit Data Siswa start -->
<div class="modal fade" id="ModalUploadFotoTentor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Upload Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url()?>c_tentor/upload/<?= $tentor['id_tentor'];?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-form-label">Pilih Foto</label>
              <input type="file" class="form-control" name="image" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">
            <i class="fas fa-upload"> Upload</i>
          </button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- modal Edit Data Siswa end -->