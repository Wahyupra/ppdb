<?= $this->extend('template/template-backend-admin') ?>
<?= $this->section('content') ?>

<div class="col-sm-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title"><b>Formulir Pendaftaran Peserta Didik</b></h3>
            <div class="card-tools">
                <a href="<?= base_url('Ppdb') ?>"  class="btn btn-sm btn-flat btn-primary"><i class="fas fa-forward"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-align-justify"></i> <b>Pendaftaran</b></h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> Nama Lengkap</strong>
                                    <p class="text-muted"><?= $siswa['nama_lengkap'] ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-table"></i> No. Pendaftaran</strong>
                                    <p class="text-muted"><?= $siswa['no_pendaftaran'] ?></p>
                                </div>
                                <div class="col-sm-3">
                                    <strong><i class="fas fa-calendar"></i> Tanggal Pendaftaran</strong>
                                    <p class="text-muted"><?= $siswa['tgl_pendaftaran'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-sm-3">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> <i class="fas fa-image"></i> <b>Foto</b></h3>
                            <div class="card-tools">
                                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#foto"><i class="fas fa-pencil-alt text-info"></i></button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="text-center">
                                <?php if ($siswa['foto'] == null) { ?>
                                    <img src="<?= base_url('foto/blank.jpg') ?>" width="180px" height="240px">
                                <?php } else { ?>
                                    <img src="<?= base_url('foto/' . $siswa['foto']) ?>" width="180px" height="240px">
                                <?php } ?>
                                <br>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-sm-9">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-graduation-cap"></i><b> Identitas Peserta Didik</b></h3>
                            <div class="card-tools">
                                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#siswa"><i class="fas fa-pencil-alt text-info"></i></button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i> Nama Lengkap</strong>
                                    <?= ($siswa['nama_lengkap'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nama_lengkap'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Tempat Lahir</strong>
                                    <?= ($siswa['tempat_lahir'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['tempat_lahir'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>NIK</strong>
                                    <?= ($siswa['nik'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nik'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i> Agama</strong>
                                    <?= ($siswa['agama'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['agama'] . '</p>' ?>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i>Nama Panggilan</strong>
                                    <?= ($siswa['nama_panggilan'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nama_panggilan'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Tanggal Lahir</strong>
                                    <?= ($siswa['tgl_lahir'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['tgl_lahir'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Jenis Kelamin</strong>
                                    <?php if ($siswa['jk'] == 'P') {
                                        $jk = 'Perempuan';
                                    } elseif ($siswa['jk'] == 'L') {
                                        $jk = 'Laki-Laki';
                                    } ?>
                                    <?= ($siswa['jk'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $jk . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>No. Telepon</strong>
                                    <?= ($siswa['no_telpon'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['no_telpon'] . '</p>' ?>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i>Tinggi Badan </strong>
                                    <?= ($siswa['tinggi'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['tinggi'] . ' cm</p>' ?>
                                    <strong><i class="fas fa-table"></i>Berat Badan</strong>
                                    <?= ($siswa['berat'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['berat'] . ' kg</p>' ?>
                                    <strong><i class="fas fa-table"></i>Jumlah Saudara</strong>
                                    <?= ($siswa['jml_saudara'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['jml_saudara'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Anak Ke</strong>
                                    <?= ($siswa['anak_ke'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['anak_ke'] . '</p>' ?>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-male"></i><b> Data Ayah Kandung</b></h3>
                            <div class="card-tools">
                                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#ayah"><i class="fas fa-pencil-alt text-info"></i></button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i>NIK Ayah</strong>
                                    <?= ($siswa['nik_ayah'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nik_ayah'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Nama Ayah</strong>
                                    <?= ($siswa['nama_ayah'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nama_ayah'] . '</p>' ?>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i>Pekerjaan</strong>
                                    <?= ($siswa['pekerjaan_ayah'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['pekerjaan_ayah'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Pendidikan</strong>
                                    <?= ($siswa['pendidikan_ayah'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['pendidikan_ayah'] . '</p>' ?>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i>Penghasilan Perbulan</strong>
                                    <?= ($siswa['penghasilan_ayah'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['penghasilan_ayah'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>No. Telepon Ayah</strong>
                                    <?= ($siswa['no_telpon_ayah'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['no_telpon_ayah'] . '</p>' ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-female"></i><b> Data Ibu Kandung</b></h3>
                            <div class="card-tools">
                                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#ibu"><i class="fas fa-pencil-alt text-info"></i></button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i>NIK Ibu</strong>
                                    <?= ($siswa['nik_ibu'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nik_ibu'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Nama Ibu</strong>
                                    <?= ($siswa['nama_ibu'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nama_ibu'] . '</p>' ?>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i>Pekerjaan</strong>
                                    <?= ($siswa['pekerjaan_ibu'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['pekerjaan_ibu'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Pendidikan</strong>
                                    <?= ($siswa['pendidikan_ibu'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['pendidikan_ibu'] . '</p>' ?>
                                </div>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-table"></i>Penghasilan Perbulan</strong>
                                    <?= ($siswa['penghasilan_ibu'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['penghasilan_ibu'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>No. Telepon Ibu</strong>
                                    <?= ($siswa['no_telpon_ibu'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['no_telpon_ibu'] . '</p>' ?>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-home"></i><b> Alamat Lengkap</b></h3>
                            <div class="card-tools">
                                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#alamat"><i class="fas fa-pencil-alt text-info"></i></button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <strong><i class="fas fa-table"></i>Alamat</strong>
                                    <?= ($siswa['alamat'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['alamat'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Provinsi</strong>
                                    <?= ($siswa['nama_provinsi'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nama_provinsi'] . '</p>' ?>
                                </div>
                                <div class="col-sm-6">
                                    <strong><i class="fas fa-table"></i>Kabupaten/Kota</strong>
                                    <?= ($siswa['nama_kabupaten'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nama_kabupaten'] . '</p>' ?>
                                    <strong><i class="fas fa-table"></i>Kecamatan</strong>
                                    <?= ($siswa['nama_kecamatan'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nama_kecamatan'] . '</p>' ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-file"></i><b> Berkas Pendukung / Berkas Lampiran</b></h3>
                            <div class="card-tools">
                                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#berkas"><i class="fas fa-plus text-info"></i>Add File</button>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Jenis File</th>
                                    <th>Keteranagan</th>
                                    <th>File</th>
                                    <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                        <th width="50px">Action</th>
                                    <?php } ?>
                                </tr>
                                <?php $no = 1;
                                foreach ($berkas as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['lampiran'] ?></td>
                                        <td><?= $value['ket'] ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('berkas/' . $value['berkas']) ?>"><i class="fa fa-file-pdf fa-2x text-danger"></i></a>
                                        </td>
                                        <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                            <td class="text-center">
                                                <a href="<?= base_url('Siswa/deleteBerkas/' . $value['id_berkas']) ?>" class="btn btn-xs btn-flat btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                    <div class="col-sm-12">
                        <button class="btn btn-success btn-flat btn-block" data-toggle="modal" data-target="#apply"><i class="fas fa-check"></i>Apply Pendaftaran</button>
                    </div>
                <?php } ?>



            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<?= $this->endSection() ?>