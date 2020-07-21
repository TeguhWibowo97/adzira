
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 By <a href="#">Admin</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url();?>assetAdmin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url();?>assetAdmin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url();?>assetAdmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url();?>assetAdmin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url();?>assetAdmin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url();?>assetAdmin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url();?>assetAdmin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url();?>assetAdmin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url();?>assetAdmin/plugins/moment/moment.min.js"></script>
<script src="<?= base_url();?>assetAdmin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url();?>assetAdmin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url();?>assetAdmin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url();?>assetAdmin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>assetAdmin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url();?>assetAdmin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>assetAdmin/dist/js/demo.js"></script>



</body>
</html>

<!-- modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Siswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url()?>c_siswa/tambah" method="post">
            <div class="form-group">
              <label class="col-form-label">Nama</label>
              <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Kelas</label>
              <input type="text" class="form-control" name="kelas"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Nama Orang Tua</label>
              <input type="text" class="form-control" name="nama_ortu"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Telepon Orang Tua</label>
              <input type="text" class="form-control" name="tlp_ortu"required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- modal end -->

<!-- modal start -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Tentor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url()?>c_tentor/tambah" method="post">
            <div class="form-group">
              <label class="col-form-label">Nama</label>
              <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Nomor Telepon</label>
              <input type="text" class="form-control" name="no_tlp"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Bidang Keahlian</label>
              <input type="text" class="form-control" name="bidang_keahlian"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Universitas</label>
              <input type="text" class="form-control" name="sekolah"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Jurusan</label>
              <input type="text" class="form-control" name="jurusan"required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Semester</label>
              <input type="text" class="form-control" name="semester"required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- modal end -->

