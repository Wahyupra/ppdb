<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TK ABA 36 Semarang | Cetak Laporan</title>

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
                <div class="col-sm-1">
                    <img src="<?= base_url('logo/' . $setting['logo']) ?>" width="100px">
                </div>
                <div class="col-10">
                    <h2 class="page-header">
                        <?= $setting['nama_sekolah'] ?>
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        <small class="float-right">Date : <?= date('d-m-Y') ?></small>
                    </h2>
                    <h6><?= $setting['alamat'] ?></h6>
                </div>
                <!-- /.col -->
            </div>

            <!-- Table row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h5><b>Laporan Kelulusan Siswa <?= $tahun ?></b></h5>
                    </div>
                </div>
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No Pendaftaran</th>
                                <th>Nama Lengkap</th>
                                <th>Tempat/Tanggal Lahir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($siswa as $key => $value) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['no_pendaftaran'] ?></td>
                                    <td><?= $value['nama_lengkap'] ?></td>
                                    <td><?= $value['tempat_lahir'] ?>/<?= $value['tgl_lahir'] ?></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

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