<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-user-edit"></i> Detail Absensi</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content Start -->
    <section class="content">
        <!-- isi konten disini ya gan -->
        <div class="container">
            <div class="alert alert-warning  col-md-8" role="alert">
                Nama tentor adalah <strong> <?= $tentor['nama'];?></strong>
            </div>
            <table class="table table-striped mt-3 col-md-8">
              <thead class="bg-dark">
                <tr>
                  <td>#</td>
                  <td>Nama Siswa</td>
                  <td>Tanggal</td>
                  <td>Hari</td>
                  <td>Jam</td>
                  <td>Mapel</td>
                  <td>Aksi</td>
                </tr>
              </thead>
              <tbody>
                <?php $angka=1;foreach($absensi as $ab):?>
                  <tr>
                    <td><?= $angka++;?></td>
                    <td>
                      <?php foreach($siswa as $s):?>
                        <?php if($ab['id_siswa'] == $s['id_siswa']):?>
                          <?= $s['nama'];?>
                        <?php endif;?>
                      <?php endforeach;?>
                    </td>
                    <td><?= $ab['tanggal'] ;?></td>
                    <td><?= $ab['hari'] ;?></td>
                    <td><?= $ab['jam'] ;?></td>
                    <td><?= $ab['mapel'] ;?></td>
                    <td>
                      <a href="<?= base_url();?>c_absensi/edit/<?= $ab['id_absensi'];?>" class="btn btn-primary btn-sm">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a href="<?= base_url();?>c_absensi/hapus/<?= $ab['id_absensi'];?>" class="btn btn-danger btn-sm mt-1">
                          <i class="fas fa-trash-alt"> </i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
            </table>
        </div>
    </section>
    <!-- Main content End -->
</div>