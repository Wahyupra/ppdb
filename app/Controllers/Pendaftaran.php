<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTa;
use App\Models\ModelSiswa;


class Pendaftaran extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->ModelTa = new ModelTa();
		$this->ModelSiswa = new ModelSiswa();
	}

	public function index()
	{

		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Pendaftaran',
			'ta' => $this->ModelTa->statusTa(),

			'validation' => \Config\Services::validation(),
		];
		return view('v_pendaftaran', $data);
	}

	public function simpanPendaftaran()
	{
		if ($this->validate([
			'nik' => [
				'label'  => 'NIK',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]
			],
			'nama_lengkap' => [
				'label'  => 'Nama Lengkap',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]
			],
			'nama_panggilan' => [
				'label'  => 'Nama Panggilan',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]
			],
			'tempat_lahir' => [
				'label'  => 'Tempat Lahir',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]
			],
			'jk' => [
				'label'  => 'Jenis Kelamin',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]
			],
			'tanggal' => [
				'label'  => 'Tanggal',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]
			],
			'bulan' => [
				'label'  => 'Bulan',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]
			],
			'tahun' => [
				'label'  => 'Tahun',
				'rules'  => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]
			],
		])) {
			//jika tidak ada validasi maka simpan data
			$ta = $this->ModelTa->statusTa();
			$tahun = $this->request->getPost('tahun');
			$bulan = $this->request->getPost('bulan');
			$tanggal = $this->request->getPost('tanggal');
			$no_pendaftaran = $this->ModelSiswa->noPendaftaran();
			$data = [
				'no_pendaftaran' => $no_pendaftaran,
				'tahun' => $ta['tahun'],
				'tgl_pendaftaran' => date('Y-m-d'),
				'nik' => $this->request->getPost('nik'),
				'nama_lengkap' => $this->request->getPost('nama_lengkap'),
				'nama_panggilan' => $this->request->getPost('nama_panggilan'),
				'tempat_lahir' => $this->request->getPost('tempat_lahir'),
				'jk' => $this->request->getPost('jk'),
				'tgl_lahir' => $tahun . '-' . $bulan . '-' . $tanggal,
				'password' => $this->request->getPost('nama_panggilan'),

			];
			$this->ModelSiswa->insertData($data);
			session()->setFlashdata('pesan', 'Pendaftaran Behasil, Silahkan Login Untuk Melengkapi Data !!!');
			return redirect()->to('/Pendaftaran');
		} else {
			//jika ada validasi
			$validation =  \Config\Services::validation();
			return redirect()->to('/Pendaftaran')->withInput()->with('validation', $validation);
		}
	}
}
