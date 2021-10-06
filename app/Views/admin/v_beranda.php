<?= $this->extend('template/template-backend-admin') ?>
<?= $this->section('content') ?>

<div class="col-sm-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><b>Beranda</b></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '  <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h5><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h5></div>';
                }
                ?>
            </div>

            <?php echo form_open('Admin/saveBeranda') ?>
            <textarea id="summernote" name="beranda">
                    <?= $beranda['beranda'] ?>
                </textarea>
        </div>
        <div class="form-grup">
            <button class="btn btn-primary btn-flat"><i class="fas fa-save"></i>Simpan</button>
        </div>
        <?php echo form_open() ?>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>

<?= $this->endSection() ?>