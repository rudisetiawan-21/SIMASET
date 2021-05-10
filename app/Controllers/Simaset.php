<?php namespace App\Controllers;

class Simaset extends BaseController
{
	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'isi'	=> 'simaset/aset/index'
		);
		return view ('simaset/layout/wrapper', $data);
	}
}