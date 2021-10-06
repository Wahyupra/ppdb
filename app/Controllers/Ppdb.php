<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPpdb;
use App\Models\ModelAdmin;


class Ppdb extends BaseController
{
    public function __construct()
    {
        $this->ModelPpdb = new ModelPpdb();
        $this->ModelAdmin = new ModelAdmin();
    }

    public function index()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Pendaftaran Masuk',
            'ppdb' => $this->ModelPpdb->getPpdbMasuk(),
        ];
        return view('admin/ppdb/v_masuk', $data);
    }

    public function listDiterima()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Pendaftaran Diterima',
            'ppdb' => $this->ModelPpdb->getPpdbDiterima(),
        ];
        return view('admin/ppdb/v_diterima', $data);
    }

    public function listDitolak()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Pendaftaran Ditolak',
            'ppdb' => $this->ModelPpdb->getPpdbDitolak(),
        ];
        return view('admin/ppdb/v_ditolak', $data);
    }

    public function detailData($id_siswa)
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Detail Data Siswa',
            'siswa' => $this->ModelPpdb->detailData($id_siswa),
            'berkas' => $this->ModelPpdb->lampiran($id_siswa),
        ];
        return view('admin/ppdb/v_detail', $data);
    }

    public function diterima($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'stat_ppdb' => '1'
        ];
        $this->ModelPpdb->editData($data);
        session()->setFlashdata('terima', 'Siswa Telah Diterima !!!');
		return redirect()->to('/Ppdb');
    }

    public function ditolak($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'stat_ppdb' => '2'
        ];
        $this->ModelPpdb->editData($data);
        session()->setFlashdata('ditolak', 'Siswa Telah Ditolak !!!');
		return redirect()->to('/Ppdb');
    }

    public function laporan()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Laporan Kelulusan',
            'ta' => $this->ModelPpdb->getAllDataTa(),
        ];
        return view('admin/ppdb/v_laporan', $data);
    }

    public function cetakLaporan($tahun)
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Laporan Kelulusan',
            'tahun' => $tahun,
            'setting' => $this->ModelAdmin->detailSetting(),
            'siswa' => $this->ModelPpdb->getDataLaporan($tahun),
        ];
        return view('admin/ppdb/v_cetaklaporan', $data);
    }

    public function petunjuk()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Petunjuk',
        ];
        return view('v_petunjuk', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'about',
        ];
        return view('v_about', $data);
    }
}
