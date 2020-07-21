<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-money-bill-wave"></i>Tagihan Ortu</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content Start-->
    <section class="content">
        <!-- isi konten disini ya gan -->
        <div class="container">
            <div class="row">
                <?php foreach($siswa as $s):?>
                    <div class="card ml-3" style="width: 13rem;">
                        <img src="<?= base_url();?>assetAdmin/dist/img/avatar3.png" class="card-img-top" alt="...">
                        <!-- <div class="card-body">
                            <h5 class="card-title">Nama Tentor</h5>
                        </div> -->
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><?= $s['nama'];?></li>
                            <li class="list-group-item">
                                <?php $totalabsen=0;foreach($absensi as $ab):?>
                                    <?php if($ab['id_siswa']==$s['id_siswa']):?>
                                        <?php $totalabsen++;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                                <h5 class="text-success text-bold"><?= rupiah($totalabsen*30000);?></h5>
                            </li>
                        </ul>
                        <div class="card-body text-center">
                            <button class="btn btn-primary">Bayar</button>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
<?php 

function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
    return $hasil_rupiah;
}
?>
    </section>
    <!-- Main content End -->
</div>