<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPekerjaan;

class Pekerjaan extends BaseController
{
	public function __construct()
	{
		$this->ModelPekerjaan = new ModelPekerjaan();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Pekerjaan',
			'pekerjaan' => $this->ModelPekerjaan->getAllData(),
		];
		return view('admin/v_pekerjaan', $data);
	}

	public function insertData()
	{
		$data = [
			'pekerjaan' => $this->request->getPost('pekerjaan'),
		];

		$this->ModelPekerjaan->insertData($data);
		session()->setFlashdata('tambah', 'Data Berhasil Di Tambahkan !!!');
		return redirect()->to('/pekerjaan');
	}

	public function editData($id_pekerjaan)
	{
		$data = [
			'id_pekerjaan' => $id_pekerjaan,
			'pekerjaan' => $this->request->getPost('pekerjaan'),
		];
		$this->ModelPekerjaan->editData($data);
		session()->setFlashdata('edit', 'Data Berhasil Di Edit !!!');
		return redirect()->to('/pekerjaan');
	}

	public function deleteData($id_pekerjaan)
	{
		$data = [
			'id_pekerjaan' => $id_pekerjaan,
		];
		$this->ModelPekerjaan->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil Di Hapus !!!');
		return redirect()->to('/pekerjaan');
	}
}
