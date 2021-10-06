<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{
	public function __construct()
	{
		$this->ModelAuth = new ModelAuth();
		helper('form');
	}

	public function index()
	{
	}

	public function login()
	{
		echo view('v_login-user');
	}

	public function cek_login_user()
	{
		if ($this->validate([
			'email' => [
				'label' => 'E-Mail',
				'rules' => 'required|valid_email',
				'errors' => [
					'required' => '{field} Wajib Diisi !!',
					'valid_email' => 'Harus Format Email !!!'
				]
			],
			'password' => [
				'label' => 'Password',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!',
				],
			]
		])) {
			//valid
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			$cek_login = $this->ModelAuth->login_user($email, $password);
			if ($cek_login) {
				session()->set('nama_user', $cek_login['nama_user']);
				session()->set('email', $cek_login['email']);
				session()->set('foto', $cek_login['foto']);
				session()->set('level', 'admin');
				return redirect()->to(base_url('admin'));
			} else {
				session()->setFlashdata('pesan', 'Email Atau Password Salah !!!');
				return redirect()->to(base_url('auth/login'));
			}
		} else {
			//tidak valid
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('auth/login'));
		}
	}

	public function logout()
	{
		session()->remove('nama_user');
		session()->remove('email');
		session()->remove('foto');
		session()->remove('level');
		session()->setFlashdata('pesan', 'Logout Success');
		return redirect()->to(base_url('auth/login'));
	}

	//login siswa
	public function loginSiswa()
	{
		$data = [
			'title' => 'PPDB Online',
			'subtitle' => 'Login Siswa',
			'validation' => \Config\Services::validation(),
		];
		return view('v_login-siswa', $data);
	}

	public function cek_login_siswa()
	{
		if ($this->validate([
			'nik' => [
				'label' => 'NIK',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!',
				]
			],
			'password' => [
				'label' => 'Password',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!',
				],
			]
		])) {
			//valid
			$nik = $this->request->getPost('nik');
			$password = $this->request->getPost('password');
			$cek_login = $this->ModelAuth->login_siswa($nik, $password);
			if ($cek_login) {
				session()->set('id_siswa', $cek_login['id_siswa']);
				session()->set('nik', $cek_login['nik']);
				session()->set('nama_lengkap', $cek_login['nama_lengkap']);
				session()->set('level', 'siswa');
				return redirect()->to('/Siswa');
			} else {
				session()->setFlashdata('pesan', 'NIK Atau Password Salah !!!');
				return redirect()->to('/Auth/loginSiswa');
			}
		} else {
			//tidak valid
			$validation =  \Config\Services::validation();
			return redirect()->to('/Auth/loginSiswa')->withInput()->with('validation', $validation);
		}
	}

	public function logout_siswa()
	{
		session()->remove('nik');
		session()->remove('nama_lengkap');
		session()->remove('level');
		session()->setFlashdata('pesan', 'Logout Success');
		return redirect()->to('/Auth/loginSiswa');
	}
}
