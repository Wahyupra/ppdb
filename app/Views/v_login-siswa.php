<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>

<div class="col-sm-5">
    <div class="text-center">
        <img class="img-fluid pad" src="<?= base_url('logo/login.png') ?>" width="350px">
    </div>
</div>

<div class="col-sm-7">
    <?php echo form_open('Auth/cek_login_siswa') ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title m-0">Login Siswa</h3>
        </div>
        <div class="card-body">
            <?php
            session()->getFlashdata('errors');
            if (session()->getFlashdata('pesan')) {
                echo '  <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5><i class="icon fas fa-times"></i>';
                echo session()->getFlashdata('pesan');
                echo '</h5></div>';
            } ?>

            <div class="form-group">
                <p class="text-danger">*) Silahkan Melakukan Pendaftaran Sebelum Login !!!</p>
                <p class="text-danger">*) Gunakan <b>Nama Panggilan</b> sebagai <b>Password !!!</b></p>
            </div>
            <div class="form-group">
                <label>NIK <span class="text-danger">( Calon SISWA ).</span></label>
                <input name="nik" value="<?= old('nik') ?>" class="form-control" placeholder="NIK">
                <p class="text-danger"><?= $validation->hasError('nik') ? $validation->getError('nik') : '' ?></p>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?= old('password') ?>" class="form-control" placeholder="Password">
                <p class="text-danger"><?= $validation->hasError('password') ? $validation->getError('password') : '' ?></p>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-info btn-flat btn-block">Login</button>
                    </div>
                    <div class="col-sm-6">
                        <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-success btn-flat btn-block">Mendaftar</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php echo form_close() ?>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
<?= $this->endSection() ?>