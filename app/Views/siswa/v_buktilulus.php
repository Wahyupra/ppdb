<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB Online | Bukti Lulus</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dist/css/adminlte.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-sm-12">
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="3"><img src="<?= base_url('logo/' . $setting['logo']) ?>" width="100px"></th>
                                <th></th>
                                <th rowspan="3"></th>
                            </tr>
                            <tr class="text-center">
                                <td>
                                    <h1><?= $setting['nama_sekolah'] ?></h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><?= $setting['alamat'] ?></h5>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.col -->
            </div>

            <!-- Table row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h5><b>Surat Keterangan Penerimaan PPDB</b></h5>
                    </div>
                </div>

                <div class="col-12">
                    <table class="table table-bordered">
                        <tr>
                            <th width="200px">No Pendaftaran</th>
                            <th width="50px">:</th>
                            <th><?= $siswa['no_pendaftaran'] ?></th>
                        </tr>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>:</th>
                            <th><?= $siswa['nama_lengkap'] ?></th>
                        </tr>
                        <tr>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>:</th>
                            <th><?= $siswa['tempat_lahir'] ?>, <?= $siswa['tgl_lahir'] ?></th>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <th>:</th>
                            <th><?= $siswa['nik'] ?></th>
                        </tr>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h1><b>*** SELAMAT ANDA DITERIMA DI TK ABA 36 SEMARANG ***</b></h1>
                        <h1>*** Silahkan Menghubungi Pihak Sekolah ***</h1>
                    </div>
                </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>