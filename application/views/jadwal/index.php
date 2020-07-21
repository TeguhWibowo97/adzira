
<div class="content-wrapper">
    <!-- Content Header (Page header)  -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-address-book"></i> Jadwal Siswa</h1>
          </div>
        </div><!-- /.row  -->
      </div><!-- /.container-fluid  -->
    </div>
    <!-- /.content-header  -->

    <!-- Main content Start -->
    <section class="content">
        <!-- isi konten disini ya gan  -->
        <div class="container">
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#ModalTambahJadwal">
              <i class="fas fa-plus"></i> Tambah Jadwal
            </button>
            <?php if( $this->session->flashdata('flash')) : ?>
              <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
                Jadwal sudah <strong>Berhasil </strong> <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif;?>
            <table class="table border table-striped col-md-7">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Nama Orang Tua</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $angka=1; foreach($siswa as $siswa): ?>
                    <tr>
                        <td><?=$angka++;?></td>
                        <td><?= $siswa['nama'] ;?></td>
                        <td><?= $siswa['kelas'] ;?></td>
                        <td><?= $siswa['nama_ortu'] ;?></td>
                        <td>
                            <a href="<?= base_url();?>c_jadwal/detail/<?= $siswa['id_siswa'];?>" class="btn btn-success btn-sm"><i class="fas fa-eye"> </i> Lihat Detail Jadwal</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>        
        </div>
    </section>
    <!-- Main content End  -->
</div>
    