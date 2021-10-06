<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>

<div class="col-sm-8">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php $no_a = 1;
      foreach ($baner as $key => $value) {
        $a = $no_a;
      ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $no_a++ ?>" class="<?= ($no_a == 1) ? 'active' : '' ?>"></li>
      <?php } ?>
    </ol>
    <div class="carousel-inner">
      <?php $no_b = 1;
      foreach ($baner as $key => $value) {
        echo $b = $no_b; ?>
        <div class="carousel-item <?= ($b == 1) ? 'active' : '' ?> ">
          <img class="d-block w-100" height="420px" src="<?= base_url('assets/' . $value['baner']) ?>" alt="<?= $no_b++ ?>">
        </div>
      <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-custom-icon" aria-hidden="true">
        <i class="fas fa-chevron-left"></i>
      </span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-custom-icon" aria-hidden="true">
        <i class="fas fa-chevron-right"></i>
      </span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="col-sm-4">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title"><b>Estimasi Pendaftaran Tahun <?= date('Y') ?></b></h3>
    </div>
    <div class="card-body">
      <div class="col-md-12 col-sm-12 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="fas fa-graduation-cap"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Pendaftar</span>
            <span class="info-box-number"><?= $jmlpendaftar ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-12 col-sm-12 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Laki-Laki</span>
            <span class="info-box-number"><?= $jmllk ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-12 col-sm-12 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Perempuan</span>
            <span class="info-box-number"><?= $jmlpr ?></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <div class="col-md-12 col-sm-12 col-12">
          <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-info btn-flat btn-block"><i class=" fas fa-file-alt"></i>Mendaftar</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title"><b>Beranda</b></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <?= $beranda['beranda'] ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<?= $this->endSection() ?>