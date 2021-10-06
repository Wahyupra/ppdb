<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>

<div class="col-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h2 class="card-title"><b>Petunjuk Pendaftaran</b></h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <ol type="1">
          <li class="mb-3">
          Siapkan Berkas Pendaftaran
          <ol type="a">
                <li>Kartu Keluarga <span class="text-danger font-weight-bold">(Scan format PDF).</span></li>
                <li>Akta Kelahiran <span class="text-danger font-weight-bold">(Scan format PDF).</span></li>
                <li>KTP Orang Tua <span class="text-danger font-weight-bold">(Scan format PDF).</span></li>
          </ol>
        </li>
          <li class="mb-3">
          Usia 4-6 tahun
        </li>
        <li class="mb-3">
          Membuat Akun Terlebih Dahulu Di Menu Pendaftaran<a href="<?= base_url('Pendaftaran')?>" target="_blank"> Disini</a>
        </li>
        <li class="mb-3">
          Selesai Mendapatkan Akun Untuk Login, Silahkan Login Terlebih Dahulu<a href="<?= base_url('Auth/loginSiswa')?>" target="_blank"> Disini</a> 
        </li>
        <li class="mb-3">
          Mengisi Formulir Pendaftaran Sesuai Data Yang Benar  
        </li>
        <li class="mb-3">
          Pastikan Pengisian Data Diri Sudah Benar
        </li>
        <li class="mb-3">
          Jika Belum Yakin Dalam Pengisian, Pendaftar Bisa <b>Logout</b> Terlebih Dahalu
        </li>
        <li class="mb-3">
          Jika Sudah Yakin Klik Menu <b>"Apply Pendaftaran"</b> 
          <!-- <span class="text-danger font-weight-bold">(Menunggu Hasil ).</span>  -->
        </li>
        <li class="mb-3">
          Untuk Melihat Hasil Pendaftaran, Cek Sesuai Jam Kerja <b>08:00 - 15.00 WIB</b> 
        </li>
        <li class="mb-3">
          Cek Hasil Pendaftaran, Melalui Login Akun Pendaftar 
        </li>
      </ol>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<?= $this->endSection() ?>