<div class="content-wrapper">
    <!-- Content Header (Page header)  -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-book-reader"> </i> Edit Jadwal Siswa</h1>
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
                <?php foreach($siswa as $s):?> 
                    <?php if($jadwal['id_siswa'] == $s['id_siswa']) :?> 
                        Nama siswa adalah <strong><?= $s['nama'];?> </strong>
                    <?php endif;?>             
                <?php endforeach;?>
            </div>
            <div class="card">
                <div class="card-header bg-dark text-center">
                    Form Edit Jadwal Siswa
                </div>
            <form action="<?= base_url();?>c_jadwal/ubah/<?= $jadwal['id_jadwal'];?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label class="col-form-label">Nama Siswa</label>
                        <select name="id_siswa" class="custom-select">
                            <?php foreach($siswa as $s):?>
                                <?php if($jadwal['id_siswa'] == $s['id_siswa']) :?>
                                    <option value="<?= $s['id_siswa'];?>" selected><?= $s['nama'];?></option>
                                <?php else :?>
                                    <option value="<?= $s['id_siswa'];?>"><?= $s['nama'];?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama Tentor</label>
                        <select name="id_tentor" class="custom-select">
                            <?php foreach($tentor as $t):?>
                                <?php if($jadwal['id_tentor']== $t['id_tentor']) :?>
                                    <option value="<?= $t['id_tentor'];?>" selected><?= $t['nama'];?></option>
                                <?php else :?>
                                    <option value="<?= $t['id_tentor'];?>"><?= $t['nama'];?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Hari</label>
                        <select name="hari" class="custom-select">
                            <?php foreach($hari as $h):?>
                                <?php if($jadwal['hari'] == $h) :?>
                                    <option value="<?= $h;?>" selected><?= $h;?></option>
                                <?php else :?>
                                    <option value="<?= $h;?>"><?= $h;?></option>
                                <?php endif;?>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama Mapel</label>
                        <input type="text" class="form-control" value="<?= $jadwal['mapel'];?>" name="mapel">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Jam</label>
                        <input type="time" class="form-control" value="<?= $jadwal['jam'];?>" name="jam">
                    </div>
                    <div class="form-group float-right mt-5">
                        <a href="<?= base_url();?>c_jadwal/detail/<?= $jadwal['id_siswa'];?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-warning">Ubah</button>
                    </div>
                </div>
            </form>
            </div>   
        </div>
    </section>
    <!-- Main content End  -->
</div>