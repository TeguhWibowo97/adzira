
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-home"></i>&nbsp;Dasbord</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jumlahsiswa;?></h3>
                <h5 class="text-bold">Total Siswa</h5>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
            </div>

            <div class="small-box">
              <div class="inner">
                  <?php $angka=1; foreach($siswa as $siswa) : ?> 
                    <a href="<?=base_url();?>c_siswa/detail/<?= $siswa['id_siswa'];?>" class="btn btn-info" style="margin: 6px;">
                      <?= $angka++.".";?>&nbsp;&nbsp;<?= $siswa['nama'];?>
                    </a>                        
                  <?php endforeach;?>     
                      </div>
              </div>

          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jumlahtentor;?></h3>
                <h5 class="text-bold">Total Tentor</h5>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
            </div>
            <div class="small-box">
              <div class="inner">
                  <?php $angka=1; foreach($tentor as $tentor) : ?> 
                    <a href="<?=base_url();?>c_tentor/detail/<?= $tentor['id_tentor'];?>" class="btn btn-success" style="margin: 6px;">
                      <?= $angka++.".";?>&nbsp;&nbsp;<?= $tentor['nama'];?>
                    </a>
                  <?php endforeach;?>     
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<!-- template untuk konten nya gan

<div class="content-wrapper">
    <!-- Content Header (Page header) 
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
          </div>
        </div><!-- /.row 
      </div><!-- /.container-fluid 
    </div>
    <!-- /.content-header 

    <!-- Main content Start
    <section class="content">
        <!-- isi konten disini ya gan 
        <h1>Selamat Datang Gan</h1>
    </section>
    <!-- Main content End 
</div>
-->