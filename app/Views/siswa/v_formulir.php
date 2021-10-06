<?= $this->extend('template/template-frontend') ?>
<?= $this->section('content') ?>

<?php if ($siswa['stat_ppdb'] == '0') { ?>
    <div class="col-sm-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title"><b>Formulir Pendaftaran Peserta Didik</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                    <div class="alert alert-warning alert-dismissible">
                        <h5><i class="icon fas fa-exclamation-triangle"></i><b> Pemberitahuan!</b></h5>
                        <b>Lengkapi Terlebih Dahulu Biodata Anda Sebelum Melakukan Apply Pendaftaran !!!</b>
                        <div><i><span class="text-danger">( Jika Belum Yakin Dengan Pengisian, Maka Bisa <b>Logout</b> Terlebih Dahulu ).</span></i></div>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-info alert-dismissible">
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Pendafataran Sudah Dikirim !!!</h5>
                        Silahkan Menunggu Hasil Pengumuman !!
                    </div>
                <?php } ?>


                <?php


                session()->getFlashdata('errors');
                if (session()->get('pesan')) {
                    echo '<div class="alert alert-success">';
                    echo session()->get('pesan');
                    echo '</div>';
                } ?>
                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php } ?>

                <?php
                if (session()->get('data')) {
                    echo '<div class="alert alert-danger">';
                    echo session()->get('data');
                    echo '</div>';
                }
                 ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-align-justify"></i> <b>Pendaftaran</b></h3>
                                <div class="card-tools">
                                    <?php if ($siswa['stat_pendaftaran'] == 0) { ?>
                                        <button type="button" class="btn btn btn-info btn-flat btn-block" data-toggle="modal" data-target="#editpendaftaran"><i class="fas fa-pencil-alt"></i> Edit</button>
                                    <?php } ?>
                                </div>
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
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-calendar"></i> NIK</strong>
                                        <p class="text-muted"><?= $siswa['nik'] ?></p>
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
                                        <button type="button" class="btn btn btn-info btn-flat btn-block" data-toggle="modal" data-target="#foto"><i class="fas fa-pencil-alt"></i> Edit</button>
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
                                    <p class="text_danger"><?= $validation->hasError('foto') ? $validation->getError('foto') : '' ?></p>
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
                                        <button type="button" class="btn btn btn-info btn-flat btn-block" data-toggle="modal" data-target="#siswa"><i class="fas fa-pencil-alt"></i> Edit</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> Nama Lengkap</strong>
                                        <?= ($siswa['nama_lengkap'] == null) ? '<p class="text-danger">Wajib Diisi</p>' : '<p>' . $siswa['nama_lengkap'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Tempat Lahir</strong>
                                        <?= ($siswa['tempat_lahir'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['tempat_lahir'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> NIK</strong>
                                        <?= ($siswa['nik'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nik'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Agama</strong>
                                        <?= ($siswa['agama'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['agama'] . '</p>' ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> Nama Panggilan</strong>
                                        <?= ($siswa['nama_panggilan'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nama_panggilan'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Tanggal Lahir</strong>
                                        <?= ($siswa['tgl_lahir'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['tgl_lahir'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Jenis Kelamin</strong>
                                        <?php if ($siswa['jk'] == 'P') {
                                            $jk = 'Perempuan';
                                        } elseif ($siswa['jk'] == 'L') {
                                            $jk = 'Laki-Laki';
                                        } ?>
                                        <?= ($siswa['jk'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $jk . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Anak Ke</strong>
                                        <?= ($siswa['anak_ke'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['anak_ke'] . '</p>' ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> Tinggi Badan </strong>
                                        <?= ($siswa['tinggi'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['tinggi'] . ' cm</p>' ?>
                                        <strong><i class="fas fa-table"></i> Berat Badan</strong>
                                        <?= ($siswa['berat'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['berat'] . ' kg</p>' ?>
                                        <strong><i class="fas fa-table"></i> Jumlah Saudara</strong>
                                        <?= ($siswa['jml_saudara'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['jml_saudara'] . '</p>' ?>

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
                                        <button type="button" class="btn btn btn-info btn-flat btn-block" data-toggle="modal" data-target="#ayah"><i class="fas fa-pencil-alt"></i> Edit</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> NIK Ayah</strong>
                                        <!-- <?php if ($siswa['nik_ayah'] == 'kosong') { ?>
                                            <input class="form-control" name="nik_ayah" value="" required>
                                        <?php } else { ?>
                                            <input class="form-control" name="nik_ayah" value="<?= $siswa['nik_ayah'] ?>" required>
                                        <?php } ?> -->
                                        <?= ($siswa['nik_ayah'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nik_ayah'] . '</p>' ?>

                                        <strong><i class="fas fa-table"></i> Nama Ayah</strong>
                                        <?= ($siswa['nama_ayah'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nama_ayah'] . '</p>' ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> Pekerjaan</strong>
                                        <?= ($siswa['pekerjaan_ayah'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['pekerjaan_ayah'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Pendidikan</strong>
                                        <?= ($siswa['pendidikan_ayah'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['pendidikan_ayah'] . '</p>' ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> Penghasilan Perbulan</strong>
                                        <?= ($siswa['penghasilan_ayah'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['penghasilan_ayah'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> No. Telepon Ayah</strong>
                                        <?= ($siswa['no_telpon_ayah'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['no_telpon_ayah'] . '</p>' ?>
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
                                        <button type="button" class="btn btn btn-info btn-flat btn-block" data-toggle="modal" data-target="#ibu"><i class="fas fa-pencil-alt"></i> Edit</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> NIK Ibu</strong>
                                        <?= ($siswa['nik_ibu'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nik_ibu'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Nama Ibu</strong>
                                        <?= ($siswa['nama_ibu'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nama_ibu'] . '</p>' ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> Pekerjaan</strong>
                                        <?= ($siswa['pekerjaan_ibu'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['pekerjaan_ibu'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Pendidikan</strong>
                                        <?= ($siswa['pendidikan_ibu'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['pendidikan_ibu'] . '</p>' ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-table"></i> Penghasilan Perbulan</strong>
                                        <?= ($siswa['penghasilan_ibu'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['penghasilan_ibu'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i>No. Telepon Ibu</strong>
                                        <?= ($siswa['no_telpon_ibu'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['no_telpon_ibu'] . '</p>' ?>
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
                                        <button type="button" class="btn btn btn-info btn-flat btn-block" data-toggle="modal" data-target="#alamat"><i class="fas fa-pencil-alt"></i> Edit</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <strong><i class="fas fa-table"></i> Alamat</strong>
                                        <?= ($siswa['alamat'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['alamat'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Provinsi</strong>
                                        <?= ($siswa['nama_provinsi'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nama_provinsi'] . '</p>' ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <strong><i class="fas fa-table"></i> Kabupaten/Kota</strong>
                                        <?= ($siswa['nama_kabupaten'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nama_kabupaten'] . '</p>' ?>
                                        <strong><i class="fas fa-table"></i> Kecamatan</strong>
                                        <?= ($siswa['nama_kecamatan'] == null) ? '<p class="text-danger">Silahkan Diisi</p>' : '<p>' . $siswa['nama_kecamatan'] . '</p>' ?>
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
                                        <button type="button" class="btn btn btn-info btn-flat btn-block" data-toggle="modal" data-target="#berkas"><i class="fas fa-plus"></i> Add File</button>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>#</th>
                                        <th>Jenis File</th>
                                        <th>Keterangan</th>
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
<?php } elseif ($siswa['stat_ppdb'] == '1') { ?>

    <div class="col-sm-12">
        <div class="alert alert-primary alert-dismissible">
            <h5><i class="icon fas fa-check"></i> **SELAMAT ANDA DITERIMA**</h5>
            Silahkan Cetak Bukti kelulusan <a href="<?= base_url('Siswa/bukti_lulus') ?>" target="_blank"> Disini</a>
        </div>
    </div>

<?php } else { ?>
    <div class="col-sm-12">
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-times"></i> **MAAF ANDA BELUM LULUS**</h5>
            Tetap Semangat Ya, Dicoba Lagi Lain Waktu !!!
        </div>
    </div>
<?php } ?>

<!-- Modal Apply -->
<div class="modal fade" id="apply">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Apakah Anda Sudah Yakin ?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>Data Pendafataran Yang Sudah Dikirim Tidak Dapat Diganti Lagi, Pastikan Data Yang Anda Kirim Sudah Benar</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                <a href="<?= base_url('Siswa/apply/' . $siswa['id_siswa']) ?>" type="submit" class="btn btn-primary btn-sm">Kirim</a>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Pendafataran -->
<div class="modal fade" id="editpendaftaran">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pendaftaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('siswa/updatePendaftaran/' . $siswa['id_siswa']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="nama_lengkap" class="form-control" value="<?= $siswa['nama_lengkap'] ?>">

                </div>
                <div class="form-group">
                    <label>No Pendafataran</label>
                    <input class="form-control" value="<?= $siswa['no_pendaftaran'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Pendafataran</label>
                    <input class="form-control" value="<?= $siswa['tgl_pendaftaran'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input class="form-control" value="<?= $siswa['nik'] ?>" readonly>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Foto -->
<div class="modal fade" id="foto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Foto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('siswa/updateFoto/' . $siswa['id_siswa']) ?>
            <div class="modal-body">
                <p class="text-danger">Max Foto 1024 KB</p>
                <div class="form-group">
                    <label>Ganti Foto</label>
                    <input type="file" id="preview_gambar" class="form-control" name="foto" accept="image/*">
                </div>
                <div class="form-group">
                    <label>Preview Foto</label> <br>
                    <?php if ($siswa['foto'] == null) { ?>
                        <img src="<?= base_url('foto/blank.jpg') ?>" width="140px" height="160px" id="gambar_load">
                    <?php } else { ?>
                        <img src="<?= base_url('foto/' . $siswa['foto']) ?>" width="140px" height="160px" id="gambar_load">
                    <?php } ?>

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Pendaftaran -->
<div class="modal fade" id="siswa">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Identitas Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('siswa/updateIdentitasSiswa/' . $siswa['id_siswa']) ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input class="form-control" name="nama_lengkap" value="<?= $siswa['nama_lengkap'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input class="form-control" name="tempat_lahir" value="<?= $siswa['tempat_lahir'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input class="form-control" name="nik" value="<?= $siswa['nik'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select name="id_agama" class="form-control">
                                <option value="">--Pilih Agama--</option>
                                <?php foreach ($agama as $key => $value) { ?>
                                    <option value="<?= $value['id_agama'] ?>" <?= $siswa['id_agama'] == $value['id_agama'] ? 'selected' : '' ?>><?= $value['agama'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Nama Panggilan</label>
                            <input class="form-control" name="nama_panggilan" value="<?= $siswa['nama_panggilan'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label><br>
                            <div class="input-group mb-3">
                                <input type="date" name="tgl_lahir" class="form-control" value="<?= $siswa['tgl_lahir'] ?>" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                            <!-- <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="tgl_lahir" value="<?= $siswa['tgl_lahir'] ?>" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div> -->

                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="L" <?= $siswa['tgl_lahir'] == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                                <option value="P" <?= $siswa['tgl_lahir'] == 'L' ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Anak Ke</label>
                            <input class="form-control" name="anak_ke" value="<?= $siswa['anak_ke'] ?>" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Tinggi (cm)</label>
                            <input class="form-control" name="tinggi" value="<?= $siswa['tinggi'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Berat (kg)</label>
                            <input class="form-control" name="berat" value="<?= $siswa['berat'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Saudara</label>
                            <input class="form-control" name="jml_saudara" value="<?= $siswa['jml_saudara'] ?>" required>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Ayah -->
<div class="modal fade" id="ayah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Ayah Kandung</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('siswa/updateDataAyah/' . $siswa['id_siswa']) ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIK Ayah</label>
                            <input class="form-control" name="nik_ayah" value="<?= $siswa['nik_ayah'] ?>" required>
                            <!-- Ubah -->
                            <!-- <?php if ($siswa['nik_ayah'] == 'kosong') { ?>
                                <input class="form-control" name="nik_ayah" value="" required>
                            <?php } else { ?>
                                <input class="form-control" name="nik_ayah" value="<?= $siswa['nik_ayah'] ?>" required>
                            <?php } ?> -->
                        </div>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input class="form-control" name="nama_ayah" value="<?= $siswa['nama_ayah'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Ayah</label>
                            <select name="pendidikan_ayah" class="form-control">
                                <option value="">--Pilih Pendidikan--</option>
                                <?php foreach ($pendidikan as $key => $value) { ?>
                                    <option value="<?= $value['pendidikan'] ?>" <?= $siswa['pendidikan_ayah'] == $value['pendidikan'] ? 'selected' : '' ?>><?= $value['pendidikan'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pekerjaan Ayah</label>
                            <select name="pekerjaan_ayah" class="form-control">
                                <option value="">--Pilih Pekerjaan--</option>
                                <?php foreach ($pekerjaan as $key => $value) { ?>
                                    <option value="<?= $value['pekerjaan'] ?>" <?= $siswa['pekerjaan_ayah'] == $value['pekerjaan'] ? 'selected' : '' ?>><?= $value['pekerjaan'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Penghasilan Ayah</label>
                            <select name="penghasilan_ayah" class="form-control">
                                <option value="">--Pilih Penghasilan--</option>
                                <?php foreach ($penghasilan as $key => $value) { ?>
                                    <option value="<?= $value['penghasilan'] ?>" <?= $siswa['penghasilan_ayah'] == $value['penghasilan'] ? 'selected' : '' ?>><?= $value['penghasilan'] ?></option>
                                <?php } ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>No Telpon Ayah</label>
                            <input class="form-control" name="no_telpon_ayah" value="<?= $siswa['no_telpon_ayah'] ?>" required>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Ibu -->
<div class="modal fade" id="ibu">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Ibu Kandung</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('siswa/updateDataIbu/' . $siswa['id_siswa']) ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>NIK Ibu</label>
                            <input class="form-control" name="nik_ibu" value="<?= $siswa['nik_ibu'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input class="form-control" name="nama_ibu" value="<?= $siswa['nama_ibu'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Ibu</label>
                            <select name="pendidikan_ibu" class="form-control">
                                <option value="">--Pilih Pendidikan--</option>
                                <?php foreach ($pendidikan as $key => $value) { ?>
                                    <option value="<?= $value['pendidikan'] ?>" <?= $siswa['pendidikan_ibu'] == $value['pendidikan'] ? 'selected' : '' ?>><?= $value['pendidikan'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pekerjaan Ibu</label>
                            <select name="pekerjaan_ibu" class="form-control">
                                <option value="">--Pilih Pekerjaan--</option>
                                <?php foreach ($pekerjaan as $key => $value) { ?>
                                    <option value="<?= $value['pekerjaan'] ?>" <?= $siswa['pekerjaan_ibu'] == $value['pekerjaan'] ? 'selected' : '' ?>><?= $value['pekerjaan'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Penghasilan Ibu</label>
                            <select name="penghasilan_ibu" class="form-control">
                                <option value="">--Pilih Penghasilan--</option>
                                <?php foreach ($penghasilan as $key => $value) { ?>
                                    <option value="<?= $value['penghasilan'] ?>" <?= $siswa['penghasilan_ibu'] == $value['penghasilan'] ? 'selected' : '' ?>><?= $value['penghasilan'] ?></option>
                                <?php } ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>No Telpon Ibu</label>
                            <input class="form-control" name="no_telpon_ibu" value="<?= $siswa['no_telpon_ibu'] ?>" required>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Data Alamat -->
<div class="modal fade" id="alamat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Alamat Lengkap</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('siswa/updateDataAlamat/' . $siswa['id_siswa']) ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" name="alamat" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select name="id_provinsi" id="provinsi" class="form-control">
                                <option value="">--Pilih Provinsi--</option>
                                <?php foreach ($provinsi as $key => $value) { ?>
                                    <option value="<?= $value['id_provinsi'] ?>"> <?= $value['nama_provinsi'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten/Kota</label>
                            <select name="id_kabupaten" id="kabupaten" class="form-control">
                                <option value="">--Pilih Kabupaten/Kota--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select name="id_kecamatan" id="kecamatan" class="form-control">
                                <option value="">--Pilih Kecamatan--</option>
                            </select>
                        </div>

                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Berkas -->
<div class="modal fade" id="berkas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Berkas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('siswa/addBerkas/' . $siswa['id_siswa']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Lampiran</label>
                    <select name="id_lampiran" class="form-control">
                        <option value="">--Pilih Lampiran--</option>
                        <?php foreach ($lampiran as $key => $value) { ?>
                            <option value="<?= $value['id_lampiran'] ?>"><?= $value['lampiran'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input name="ket" class="form-control" placeholder="Keterangan" required>
                    </input>
                </div>
                <div class="form-group">
                    <label>Berkas (Format File Wajib .PDF)</label>
                    <input type="file" class="form-control" name="berkas" accept=".pdf" required>
                    </input>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    window.setTimeout(function() {
        $("").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>

<!-- jQuery -->
<script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#provinsi").change(function() {
            var id_provinsi = $("#provinsi").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Wilayah/dataKabupaten') ?>/' + id_provinsi,
                success: function(html) {
                    $("#kabupaten").html(html);
                }
            });
        });
    });

    $(document).ready(function() {
        $("#kabupaten").change(function() {
            var id_kabupaten = $("#kabupaten").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Wilayah/dataKecamatan') ?>/' + id_kabupaten,
                success: function(html) {
                    $("#kecamatan").html(html);
                }
            });
        });
    });
</script>

<?= $this->endSection() ?>