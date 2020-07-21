<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-user-edit"></i> Data Absensi</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content Start -->
    <section class="content">
        <!-- isi konten disini ya gan -->
        <div class="container">
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalTambahAbsensi">Tambah Absensi</button>
            <?php if( $this->session->flashdata('flash')) : ?>
              <div class="alert alert-success alert-dismissible fade show col-md-8" role="alert">
                Jadwal sudah <strong>Berhasil </strong> <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif;?>
            <table class="table table-striped col-md-8">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Tentor</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $angka=1; foreach($tentor as $t): ?>
                    <tr>
                        <td><?=$angka++;?></td>
                        <td><?= $t['nama'] ;?></td>
                        <td><?= $t['alamat'] ;?></td>
                        <td><?= $t['no_tlp'] ;?></td>
                        <td>
                            <a href="<?= base_url();?>c_absensi/detail/<?= $t['id_tentor'];?>" class="btn btn-success">
                            <i class="fas fa-eye"> </i> Detail Absensi</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table> 
        </div>
    </section>
    <!-- Main content End -->
</div>
