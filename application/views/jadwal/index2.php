
<div class="content-wrapper">
    <!-- Content Header (Page header)  -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-address-book"></i> Jadwal Tentor</h1>
          </div>
        </div><!-- /.row  -->
      </div><!-- /.container-fluid  -->
    </div>
    <!-- /.content-header  -->

    <!-- Main content Start -->
    <section class="content">
        <!-- isi konten disini ya gan  -->
        <div class="container">
            <?php if( $this->session->flashdata('flash')) : ?>
              <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
                Jadwal sudah <strong>Berhasil </strong> <?= $this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <?php endif;?>
            <table class="table border table-striped col-md-8">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $angka=1; foreach($tentor as $tentor): ?>
                    <tr>
                        <td><?=$angka++;?></td>
                        <td><?= $tentor['nama'] ;?></td>
                        <td><?= $tentor['bidang_keahlian'] ;?></td>
                        <td><?= $tentor['sekolah'] ;?></td>
                        <td>
                            <a href="<?= base_url();?>c_jadwal/detail2/<?= $tentor['id_tentor'];?>" class="btn btn-success btn-sm"><i class="fas fa-eye"> </i> Lihat Detail Jadwal</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>        
        </div>
    </section>
    <!-- Main content End  -->
</div>
    