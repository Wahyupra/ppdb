<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPpdb extends Model
{


    public function getPpdbMasuk()
    {
        return $this->db->table('tbl_siswa')
            ->join('tbl_agama', 'tbl_agama.id_agama = tbl_siswa.id_agama', 'left')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = tbl_siswa.id_provinsi', 'left')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = tbl_siswa.id_kabupaten', 'left')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_siswa.id_kecamatan', 'left')
            ->where('stat_ppdb', '0')
            ->where('stat_pendaftaran', '1')
            ->orderBy('id_siswa', 'DESC' )
            ->get()
            ->getResultArray();
    }

    public function getPpdbDiterima()
    {
        return $this->db->table('tbl_siswa')
            ->join('tbl_agama', 'tbl_agama.id_agama = tbl_siswa.id_agama', 'left')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = tbl_siswa.id_provinsi', 'left')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = tbl_siswa.id_kabupaten', 'left')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_siswa.id_kecamatan', 'left')
            ->where('stat_ppdb', '1')
            ->orderBy('id_siswa', 'DESC' )
            ->get()
            ->getResultArray();
    }

    public function getPpdbDitolak()
    {
        return $this->db->table('tbl_siswa')
            ->join('tbl_agama', 'tbl_agama.id_agama = tbl_siswa.id_agama', 'left')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = tbl_siswa.id_provinsi', 'left')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = tbl_siswa.id_kabupaten', 'left')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_siswa.id_kecamatan', 'left')
            ->where('stat_ppdb', '2')
            ->orderBy('id_siswa', 'DESC' )
            ->get()
            ->getResultArray();
    }

    public function detailData($id_siswa)
    {
        return $this->db->table('tbl_siswa')
        ->join('tbl_agama', 'tbl_agama.id_agama = tbl_siswa.id_agama', 'left')
        ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = tbl_siswa.id_provinsi', 'left')
        ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = tbl_siswa.id_kabupaten', 'left')
        ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_siswa.id_kecamatan', 'left')
        ->where('id_siswa', $id_siswa)
        ->get()
        ->getRowArray();
    }

    public function lampiran($id_siswa)
    {
        return $this->db->table('tbl_berkas')
            ->join('tbl_lampiran', 'tbl_lampiran.id_lampiran = tbl_berkas.id_lampiran', 'left')
            ->where('id_siswa', $id_siswa)
            ->get()
            ->getResultArray();
    }
    
    public function editData($data)
    {
        $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->update($data);
    }

    public function getAllDataTa()
    {
        return $this->db->table('tbl_ta')
            ->orderBy('id_ta', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function getDataLaporan($tahun)
    {
        return $this->db->table('tbl_siswa')
        ->join('tbl_agama', 'tbl_agama.id_agama = tbl_siswa.id_agama', 'left')
        ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = tbl_siswa.id_provinsi', 'left')
        ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = tbl_siswa.id_kabupaten', 'left')
        ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_siswa.id_kecamatan', 'left')
        ->where('tbl_siswa.stat_ppdb', '1')
        ->where('tbl_siswa.tahun', $tahun)
        ->orderBy('id_siswa', 'DESC' )
        ->get()
        ->getResultArray();
    }
}
