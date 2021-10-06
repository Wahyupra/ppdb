<?= $this->extend('template/template-backend-admin') ?>
<?= $this->section('content') ?>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?= $totta ?></h3>

            <p>Tahun Ajaran</p>
        </div>
        <div class="icon">
            <i class="fas fa-calendar"></i>
        </div>
        <a href="<?= base_url('ta') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-primary">
        <div class="inner">
            <h3><?= $totlampiran ?></h3>

            <p>Lampiran</p>
        </div>
        <div class="icon">
            <i class="fas fa-file"></i>
        </div>
        <a href="<?= base_url('lampiran') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3><?= $totpekerjaan ?></h3>

            <p>Pekerjaan</p>
        </div>
        <div class="icon">
            <i class="fas fa-suitcase"></i>
        </div>
        <a href="<?= base_url('pekerjaan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3><?= $totpendidikan ?></h3>

            <p>Pendidikan</p>
        </div>
        <div class="icon">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <a href="<?= base_url('pendidikan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-purple">
        <div class="inner">
            <h3><?= $totagama ?></h3>

            <p>Agama</p>
        </div>
        <div class="icon">
            <i class="fas fa-book"></i>
        </div>
        <a href="<?= base_url('agama') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3><?= $totpenghasilan ?></h3>

            <p>Penghasilan</p>
        </div>
        <div class="icon">
            <i class="fas fa-money-bill-wave"></i>
        </div>
        <a href="<?= base_url('penghasilan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-teal">
        <div class="inner">
            <h3><?= $totuser ?></h3>

            <p>User</p>
        </div>
        <div class="icon">
            <i class="fas fa-user"></i>
        </div>
        <a href="<?= base_url('user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-orange">
        <div class="inner">
            <h3><?= $totpendaftaranmasuk ?></h3>

            <p>Pendaftaran Masuk</p>
        </div>
        <div class="icon">
            <i class="fas fa-download text-primary"></i>
        </div>
        <a href="<?= base_url('ppdb') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-light">
        <div class="inner">
            <h3><?= $totpendaftaranditerima ?></h3>

            <p>Pendafataran Diterima</p>
        </div>
        <div class="icon">
            <i class="fas fa-check text-success"></i>
        </div>
        <a href="<?= base_url('ppdb/listDiterima') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-3 col-3">
    <!-- small box -->
    <div class="small-box bg-secondary">
        <div class="inner">
            <h3><?= $totpendaftaranditolak ?></h3>

            <p>Pendaftaran Ditolak</p>
        </div>
        <div class="icon">
            <i class="fas fa-times text text-danger"></i>
        </div>
        <a href="<?= base_url('ppdb/listDitolak') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>


<?= $this->endSection() ?>