<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
	public function login_user($email, $password)
	{
		return $this->db->table('tbl_user')->where(
			[
				'email' => $email,
				'password' => $password
			]
		)->get()->getRowArray();
	}

	public function login_siswa($nik, $password)
	{
		return $this->db->table('tbl_siswa')->where(
			[
				'nik' => $nik,
				'password' => $password
			]
		)->get()->getRowArray();
	}
}
