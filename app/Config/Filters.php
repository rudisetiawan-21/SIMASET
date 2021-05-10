<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'auth'     => \App\Filters\Auth::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'auth' => ['except' => [
				'home','home/*',
				'login','login/*',
				'register','register/*',
				'haspass','haspass/*',
				'/'

			]]
		],
		'after'  => [
			'toolbar',
			//'honeypot'
			'auth' => ['except' => [
				'user','user/*',
				'barang','barang/*',
				'BarangKeluar','BarangKeluar/*',
				'Kategori','Kategori/*',
			]]
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
