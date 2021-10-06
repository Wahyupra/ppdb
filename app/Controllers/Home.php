<?php

namespace App\Controllers;

use App\Models\ModelBaner;
use App\Models\ModelAdmin;

class Home extends BaseController
{
	public function __construct()
	{
		$this->ModelBaner = new ModelBaner();
		$this->ModelAdmin = new ModelAdmin();
	}
	public function index()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Home',
			'baner' => $this->ModelBaner->getAllData(),
			'beranda' => $this->ModelAdmin->detailSetting(),
			'jmlpendaftar' => $this->ModelBaner->jumlahPendaftar(),
			'jmllk' => $this->ModelBaner->jumlahLk(),
			'jmlpr' => $this->ModelBaner->jumlahPr(),
		];
		return view('v_home', $data);
	}

}
