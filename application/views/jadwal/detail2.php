<div class="content-wrapper">
    <!-- Content Header (Page header)  -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-address-book"></i> Detail Jadwal Tentor</h1>
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
                Nama tentor adalah <strong><?= $tentor['nama'];?></strong>
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

                    </tr>
                </thead>
                <tbody>
                    <?php $angka=1; foreach($jadwal as $jadwal): ?>
                <?php if($tentor['id_tentor'] == $jadwal['id_tentor']):?>
                    <tr>
                        <td><?=$angka++;?></td>
                        <td>
                            <?php if($jadwal['id_tentor']==$tentor['id_tentor']):?>
                                <?= $jadwal['jam'];?>
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Senin' || $jadwal['hari']=='senin'): ?>
                            
                                <?php foreach($siswa as $s):?>
                                    <?php if($jadwal['id_tentor'] == $tentor['id_tentor']):?>
                                        <?php if($jadwal['id_siswa'] == $s['id_siswa']):?>
                                            <h6>(<?= $jadwal['mapel'];?>)</h6>
                                        Siswa : <?= $s['nama']; ?>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Selasa' || $jadwal['hari']=='selasa'): ?>
                            
                            
                                <?php foreach($siswa as $s):?>
                                    <?php if($jadwal['id_tentor'] == $tentor['id_tentor']):?>
                                        <?php if($jadwal['id_siswa'] == $s['id_siswa']):?>
                                        <h6>(<?= $jadwal['mapel'];?>) </h6>
                                        Siswa : <?= $s['nama']; ?>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Rabu' || $jadwal['hari']=='rabu' ): ?>
                            
                           
                                <?php foreach($siswa as $s):?>
                                    <?php if($jadwal['id_tentor'] == $tentor['id_tentor']):?>
                                        <?php if($jadwal['id_siswa'] == $s['id_siswa']):?>
                                        <h6>(<?= $jadwal['mapel'];?>) </h6>
                                        Siswa : <?= $s['nama']; ?>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Kamis' || $jadwal['hari']=='kamis'): ?>
                            
                            
                                <?php foreach($siswa as $s):?>
                                    <?php if($jadwal['id_tentor'] == $tentor['id_tentor']):?>
                                        <?php if($jadwal['id_siswa'] == $s['id_siswa']):?>
                                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                                        Siswa : <?= $s['nama']; ?>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Jumat' || $jadwal['hari']=='jumat'): ?>
                            
                           
                                <?php foreach($siswa as $s):?>
                                    <?php if($jadwal['id_tentor'] == $tentor['id_tentor']):?>
                                        <?php if($jadwal['id_siswa'] == $s['id_siswa']):?>
                                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                                        Siswa : <?= $s['nama']; ?>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Sabtu' || $jadwal['hari']=='sabtu'): ?>
                            
                            
                                <?php foreach($siswa as $s):?>
                                    <?php if($jadwal['id_tentor'] == $tentor['id_tentor']):?>
                                        <?php if($jadwal['id_siswa'] == $s['id_siswa']):?>
                                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                                        Siswa : <?= $s['nama']; ?>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                            
                            <?php endif;?>
                        </td>
                        <td>
                            <?php if($jadwal['hari']=='Minggu' || $jadwal['hari']=='minggu'): ?>
                            
                           
                                <?php foreach($siswa as $s):?>
                                    <?php if($jadwal['id_tentor'] == $tentor['id_tentor']):?>
                                        <?php if($jadwal['id_siswa'] == $s['id_siswa']):?>
                                            <h6>(<?= $jadwal['mapel'];?>) </h6>
                                            Siswa : <?= $s['nama']; ?>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endforeach;?>
                          
                            <?php endif;?>
                        </td>
                    </tr>
                                        <?php endif;?>
                    <?php endforeach;?>
                    <tr class="text-left">
                        <td colspan="10">
                            <a href="<?= base_url();?>c_jadwal/index2" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                        </td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </section>
    <!-- Main content End  -->
</div>