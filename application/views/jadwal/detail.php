<div class="content-wrapper">
    <!-- Content Header (Page header)  -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-address-book"></i> Detail Jadwal Siswa</h1>
          </div>
        </div><!-- /.row  -->
      </div><!-- /.container-fluid  -->
    </div>
    <!-- /.content-header  -->

    <!-- Main content Start -->
    <section class="content">
        <!-- isi konten disini ya gan  -->
        <div class="container">
            <div class="alert alert-warning" role="alert">
                Nama siswa adalah <strong><?= $siswa['nama'];?></strong>
            </div>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jam</th>
                    <th scope="col">Senin</th>
                    <th scope="col">Selasa</th>
                    <th scope="col">Rabu</th>
                    <th scope="col">Kamis</th>
                    <th scope="col">Jumat</th>
                    <th scope="col">Sabtu</th>
                    <th scope="col">Minggu</th>
                    <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $angka=1; foreach($jadwal as $jadwal): ?>
                    <tr>
                        <td><?=$angka++;?></td>
                        <td><?= $jadwal['jam'] ;?></td>
                        <td>
                            <?php if($jadwal['hari']=='Senin' || $jadwal['hari']=='senin'): ?>
                            <h6>(<?= $jadwal['mapel'];?>)</h6>
                            <h6 scope="row">
                                <?php foreach($tentor as $t):?>
                                    <?php if($t['id_tentor'] == $jadwal['id_tentor']):?>
                                        Tentor : <?= $t['nama']; ?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </h6>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Selasa' || $jadwal['hari']=='selasa'): ?>
                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                            <h6>
                                <?php foreach($tentor as $t):?>
                                    <?php if($t['id_tentor'] == $jadwal['id_tentor']):?>
                                        Tentor : <?= $t['nama']; ?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </h6>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Rabu' || $jadwal['hari']=='rabu' ): ?>
                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                            <h6>
                                <?php foreach($tentor as $t):?>
                                    <?php if($t['id_tentor'] == $jadwal['id_tentor']):?>
                                        Tentor : <?= $t['nama']; ?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </h6>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Kamis' || $jadwal['hari']=='kamis'): ?>
                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                            <h6>
                                <?php foreach($tentor as $t):?>
                                    <?php if($t['id_tentor'] == $jadwal['id_tentor']):?>
                                        Tentor : <?= $t['nama']; ?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </h6>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Jumat' || $jadwal['hari']=='jumat'): ?>
                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                            <h6>
                                <?php foreach($tentor as $t):?>
                                    <?php if($t['id_tentor'] == $jadwal['id_tentor']):?>
                                        Tentor : <?= $t['nama']; ?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </h6>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Sabtu' || $jadwal['hari']=='sabtu'): ?>
                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                            <h6>
                                <?php foreach($tentor as $t):?>
                                    <?php if($t['id_tentor'] == $jadwal['id_tentor']):?>
                                        Tentor : <?= $t['nama']; ?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </h6>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Minggu' || $jadwal['hari']=='minggu'): ?>
                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                            <h6>
                                <?php foreach($tentor as $t):?>
                                    <?php if($t['id_tentor'] == $jadwal['id_tentor']):?>
                                        Tentor : <?= $t['nama']; ?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </h6>
                            <?php endif;?>
                        </td>
                        <td>
                            <a href="<?= base_url();?>c_jadwal/edit/<?= $jadwal['id_jadwal'];?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"> Edit</i></a>
                            <a href="<?= base_url();?>c_jadwal/hapus/<?= $jadwal['id_jadwal'];?>" class="btn btn-danger btn-sm my-1" onclick="return confirm('yakin');">
                                <i class="fas fa-trash-alt"> Hapus</i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    <tr class="text-left">
                        <td colspan="10">
                            <a href="<?= base_url();?>c_jadwal" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                        </td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </section>
    <!-- Main content End  -->
</div>