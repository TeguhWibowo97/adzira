
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-2 text-dark"><i class="fas fa-user"></i> Data Tentor</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content Start-->
    <section class="content">
        <!-- isi konten disini ya gan -->
        <div class="container">
            <!-- <button class="btn btn-primary">Tambah</button> -->
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-plus"></i> Tambah Data</button>
            <?php if($this->session->flashdata('flash')): ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    Data Tentor <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif;?>
            <table class="table table-striped my-3">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor&nbsp;Telepon</th>
                    <th scope="col">Bidang Keahlian</th>
                    <th scope="col">Sekolah</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                     <?php $angka=1; foreach($tentor as $tentor) : ?> 
                    <tr>
                        <th scope="row"><?= $angka++;?></th>
                        <td><?= $tentor['nama'];?></td>
                        <td><?= $tentor['alamat'];?></td>
                        <td><?= $tentor['no_tlp'];?></td>
                        <td><?= $tentor['bidang_keahlian'];?></td>
                        <td><?= $tentor['sekolah'];?></td>
                        <td><?= $tentor['jurusan'];?></td>
                        <td><?= $tentor['semester'];?></td>
                        <td>
                            <a href="<?= base_url();?>c_tentor/detail/<?= $tentor['id_tentor'];?>" class="btn btn-success btn-sm my-1"><i class="fas fa-eye inline"></i> Detail</a>
                            <a href="<?= base_url();?>c_tentor/hapus/<?= $tentor['id_tentor'];?>" class="btn btn-danger btn-sm" onclick="javascript:return confirm('Apakah Anda yakin akan menghapus data ?')">
                                <i class="fas fa-trash-alt"></i> Hapus
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