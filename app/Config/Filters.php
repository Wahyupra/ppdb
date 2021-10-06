<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'filteruser' => \App\Filters\FilterUser::class,
		'filtersiswa' => \App\Filters\FilterSiswa::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			'filteruser' => ['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'ppdb', 'ppdb/*',
				'pendaftaran', 'pendaftaran/*',
				'wilayah', 'wilayah/*',
			]],
			'filtersiswa' => ['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'ppdb', 'ppdb/*',
				'pendaftaran', 'pendaftaran/*',
				'wilayah', 'wilayah/*',

			]]

		],
		'after'  => [
			'filteruser' => ['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'ppdb', 'ppdb/*',
				'pendaftaran', 'pendaftaran/*',
				'admin', 'admin/*',
				'pekerjaan', 'pekerjaan/*',
				'pendidikan', 'pendidikan/*',
				'agama', 'agama/*',
				'user', 'user/*',
				'penghasilan', 'penghasilan/*',
				'ta', 'ta/*',
				'jurusan', 'jurusan/*',
				'Baner', 'Baner/*',
				'lampiran', 'lampiran/*',
				'wilayah', 'wilayah/*',
				'ppdb', 'ppdb/*',

			]],
			'filtersiswa' => ['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'ppdb', 'ppdb/*',
				'pendaftaran', 'pendaftaran/*',
				'siswa', 'siswa/*',
				'wilayah', 'wilayah/*',

			]],
			'toolbar',
			// 'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [];
}
