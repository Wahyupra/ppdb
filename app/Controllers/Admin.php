<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Admin extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->ModelAdmin = new ModelAdmin();
	}

	public function index()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Dashboard',
			'totta' => $this->ModelAdmin->totalTa(),
			'totlampiran' => $this->ModelAdmin->totalLampiran(),
			'totpekerjaan' => $this->ModelAdmin->totalPekerjaan(),
			'totpendidikan' => $this->ModelAdmin->totalPendidikan(),
			'totagama' => $this->ModelAdmin->totalAgama(),
			'totpenghasilan' => $this->ModelAdmin->totalPenghasilan(),
			'totuser' => $this->ModelAdmin->totalUser(),
			'totpendaftaranmasuk' => $this->ModelAdmin->totalPendaftaranMasuk(),
			'totpendaftaranditerima' => $this->ModelAdmin->totalPendaftaranDiterima(),
			'totpendaftaranditolak' => $this->ModelAdmin->totalPendaftaranDitolak(),
			
		];
		return view('admin/v_dashboard', $data);
	}

	public function setting()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Setting',
			'setting' => $this->ModelAdmin->detailSetting(),
		];
		return view('admin/v_setting', $data);
	}

	public function saveSetting()
	{
		$file = $this->request->getFile('logo');
		//jika gambar/logo tidak diganti
		if ($file->getError() == 4) {
			$data = [
				'nama_sekolah' => $this->request->getPost('nama_sekolah'),
				'alamat' => $this->request->getPost('alamat'),
				'kecamatan' => $this->request->getPost('kecamatan'),
				'kabupaten' => $this->request->getPost('kabupaten'),
				'provinsi' => $this->request->getPost('provinsi'),
				'no_telpon' => $this->request->getPost('no_telpon'),
				'email' => $this->request->getPost('email'),
				'web' => $this->request->getPost('web'),
				'deskripsi' => $this->request->getPost('deskripsi'),
			];
			$this->ModelAdmin->saveSetting($data);
		} else {
			//jika gambar/logo diganti
			$setting = $this->ModelAdmin->detailSetting();
			if ($setting['logo'] != "") {
				unlink('./logo/' . $setting['logo']);
			}

			$nama_file = $file->getRandomName();
			$data = [
				'nama_sekolah' => $this->request->getPost('nama_sekolah'),
				'alamat' => $this->request->getPost('alamat'),
				'kecamatan' => $this->request->getPost('kecamatan'),
				'kabupaten' => $this->request->getPost('kabupaten'),
				'provinsi' => $this->request->getPost('provinsi'),
				'no_telpon' => $this->request->getPost('no_telpon'),
				'email' => $this->request->getPost('email'),
				'web' => $this->request->getPost('web'),
				'deskripsi' => $this->request->getPost('deskripsi'),
				'logo' => $nama_file
			];
			$file->move('logo/', $nama_file);
			$this->ModelAdmin->saveSetting($data);
		}
		session()->setFlashdata('pesan', 'Settingan Berhasil Di Ganti !!!');
		return redirect()->to('/admin/setting');
	}

	public function beranda()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Beranda',
			'beranda' => $this->ModelAdmin->detailSetting(),
		];
		return view('admin/v_beranda', $data);
	}

	public function saveBeranda()
	{
		$data = [
			'beranda' => $this->request->getPost('beranda'),
		];
		$this->ModelAdmin->saveSetting($data);
		session()->setFlashdata('pesan', 'Beranda Berhasil Di Update !!!');
		return redirect()->to('/Admin/beranda');
	}
}
