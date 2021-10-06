<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function  detailSetting()
    {
        return $this->db->table('tbl_setting')
            ->where('id', '1')
            ->get()->getRowArray();
    }

    public function saveSetting($data)
    {
        $this->db->table('tbl_setting')
            ->where('id', '1')
            ->update($data);
    }

    public function totalTa()
    {
        return $this->db->table('tbl_ta')->countAllResults();
    }

    public function totalLampiran()
    {
        return $this->db->table('tbl_berkas')->countAllResults();
    }

    public function totalPekerjaan()
    {
        return $this->db->table('tbl_pekerjaan')->countAllResults();
    }

    public function totalPendidikan()
    {
        return $this->db->table('tbl_pendidikan')->countAllResults();
    }

    public function totalAgama()
    {
        return $this->db->table('tbl_agama')->countAllResults();
    }

    public function totalPenghasilan()
    {
        return $this->db->table('tbl_penghasilan')->countAllResults();
    }

    public function totalUser()
    {
        return $this->db->table('tbl_user')->countAllResults();
    }

    public function totalPendaftaranMasuk()
    {
        return $this->db->table('tbl_siswa')
        ->where('stat_pendaftaran', '1')
        ->where('stat_ppdb', '0')
        ->countAllResults();
    }

    public function totalPendaftaranDiterima()
    {
        return $this->db->table('tbl_siswa')
        ->where('stat_ppdb', '1')
        ->countAllResults();
    }

    public function totalPendaftaranDitolak()
    {
        return $this->db->table('tbl_siswa')
        ->where('stat_ppdb', '2')
        ->countAllResults();
    }
}
