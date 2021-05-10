<?php namespace App\Controllers;
 use App\Models\SimasetModel;
class Barang extends BaseController
{
	public function index()
	{
		$model = new SimasetModel;
		$data = array(
			'title' => 'Daftar Barang',
			'validation' => $this->validator,
			'isi' => 'simaset/aset/list_barang',
			'barang' => $model->getAll(),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function list_barang_user(){
		$model = new SimasetModel;
		$data = array(
			'title' => 'Daftar Barang',
			'validation' => $this->validator,
			'isi' => 'simaset/aset/list_barang_user',
			'barang' => $model->getAll(),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function list_barang_masuk(){
		$model = new SimasetModel;
		$data = array(
			'title' => 'Daftar Barang',
			'isi' => 'simaset/aset/laporan_barang_masuk',
			'barang' => $model->getAll(),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function tambah(){
		$model = new SimasetModel;
		$data = array (
 				'title' => 'tambah Barang',
 				'isi'   => 'simaset/aset/tambah_barang',
 				'kategori' => $model->getKategori(),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function simpan(){
			$model = new SimasetModel;
			$data = array(
				'id_barang' => $this->request->getPost('id_barang'),
				'id_kategori' => $this->request->getPost('id_kategori'),
				'nama_barang' => $this->request->getPost('nama_barang'),
				'merk' => $this->request->getPost('merk'),
				'spek' => $this->request->getPost('spek'),
				'harga' => $this->request->getPost('harga'),
			);
			// print_r($data);
			$model->saveBarang($data);
			// $this->session()->setFlashdata('msg','Data berhasil di tambahkan');
			return redirect()->to(base_url('Barang'));
		
	}
	public function edit($id){
		$model = new SimasetModel;
		$data = array (
			'title' => 'Edit Barang',
			'isi'   => 'simaset/aset/edit_barang',
			'barang' => $model->getBarang($id),
			'kategori' => $model->getKategori($id)
		);
		return view('simaset/layout/wrapper', $data);
	}
	public function update($id = null){
		$model = new SimasetModel;
		$id = $this->request->getPost('id_barang');
		$data = array (
			'id_barang' => $this->request->getPost('id_barang'),
			'id_kategori' => $this->request->getPost('id_kategori'),
			'nama_barang' => $this->request->getPost('nama_barang'),
			'merk' => $this->request->getPost('merk'),
			'spek' => $this->request->getPost('spek'),
			'harga' => $this->request->getPost('harga'),
		);
		$model->updateBarang($data, $id);
		// $this->session()->setFlashdata('msg','Data berhasil di update');
		return redirect()->to(base_url('barang'));
	}
	public function delete($id){
		$session = session();
		$model = new SimasetModel;
		$model->deleteBarang($id);
		// $this->session()->setFlashdata('msg','Data berhasil di hapus');
		return redirect()->to(base_url('barang'));
	}
}