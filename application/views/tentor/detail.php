<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark"><i class="fas fa-user"></i> Detail Tentor</h1>
            <?php if($this->session->flashdata('flash')): ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    Foto Siswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif;?>
            <?php if($this->session->flashdata('flashgagal')): ?>
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    Foto Siswa <strong>GAGAL DIUPLOAD</strong> <?= $this->session->flashdata('flashgagal');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif;?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content Start-->
    <section class="content">
        <!-- isi konten disini ya gan -->
        <div class="container">
            <div class="card md">
                <div class="row no-gutters">
                    <div class="col-md">
                        <?php if($tentor['image']!=null):?>
                            <img src="<?= base_url();?>uploads/foto/<?= $tentor['image'];?>" class="card-img" alt="...">
                        <?php else :?>
                            <img src="<?= base_url();?>assetAdmin/dist/img/avatar5.png" class="card-img" alt="...">
                        <?php endif;?>
                        <button class="btn btn-success btn-block mt-2" data-toggle="modal" data-target="#ModalUploadFotoTentor">
                            <i class="fas fa-upload"></i> Ganti Foto
                        </button>
                        <button class="btn btn-warning btn-block mt-2" data-toggle="modal" data-target="#ModalEditDataTentor">
                            <i class="fas fa-edit"></i> Edit Data
                        </button>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title my-3">Detail Lengkap Tentor</h5>
                        <table class="table mt-2">
                            <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>:</td>
                                <td><?= $tentor['nama'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>:</td>
                                <td><?= $tentor['alamat'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">No. Telepon</th>
                                <td>:</td>
                                <td><?= $tentor['no_tlp'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Bidang Keahlian</th>
                                <td>:</td>
                                <td><?= $tentor['bidang_keahlian'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Sekolah</th>
                                <td>:</td>
                                <td><?= $tentor['sekolah'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jurusan</th>
                                <td>:</td>
                                <td><?= $tentor['jurusan'];?></td>
                            </tr>
                            <tr>
                                <th scope="row">Semester</th>
                                <td>:</td>
                                <td><?= $tentor['semester'];?></td>
                            </tr>
                            </tbody>
                        </table></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content End -->
</div>