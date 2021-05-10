<?php namespace App\Controllers;
use App\Models\KategoriModel;
class Kategori extends BaseController
{
	public function index()
	{
		$model = new KategoriModel;
		$data = array(
			'title' => 'Daftar Kategori',
			'isi' => 'simaset/aset/list_kategori',
			'kategori' => $model->getAll(),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function tambah(){
		$model = new KategoriModel;
		$data = array (
 				'title' => 'tambah kategori',
 				'isi'   => 'simaset/aset/add_kategori',
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function simpan(){
			$model = new KategoriModel;
			$data = array(
				'id_kategori' => $this->request->getPost('id_kategori'),
				'nama_kategori' => $this->request->getPost('nama_kategori'),
			);
			// print_r($data);
			$model->saveKategori($data);
			// $this->session()->setFlashdata('msg','Data berhasil di tambahkan');
			return redirect()->to(base_url('Barang/tambah'));
		
	}
}