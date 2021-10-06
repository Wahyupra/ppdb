<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJurusan;

class Jurusan extends BaseController
{
	public function __construct()
	{
		$this->ModelJurusan = new ModelJurusan();
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Jurusan',
			'jurusan' => $this->ModelJurusan->getAllData(),
		];
		return view('admin/v_jurusan', $data);
	}

	public function insertData()
	{
		$data = [
			'jurusan' => $this->request->getPost('jurusan'),
		];

		$this->ModelJurusan->insertData($data);
		session()->setFlashdata('tambah', 'Data Berhasil Di Tambahkan !!!');
		return redirect()->to('/jurusan');
	}

	public function editData($id_jurusan)
	{
		$data = [
			'id_jurusan' => $id_jurusan,
			'jurusan' => $this->request->getPost('jurusan'),
		];
		$this->ModelJurusan->editData($data);
		session()->setFlashdata('edit', 'Data Berhasil Di Edit !!!');
		return redirect()->to('/jurusan');
	}

	public function deleteData($id_jurusan)
	{
		$data = [
			'id_jurusan' => $id_jurusan,
		];
		$this->ModelJurusan->deleteData($data);
		session()->setFlashdata('delete', 'Data Berhasil Di Hapus !!!');
		return redirect()->to('/jurusan');
	}
}
