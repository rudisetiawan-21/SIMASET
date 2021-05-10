<?php namespace App\Controllers;
 use App\Models\BarangKeluarModel;
 class BarangKeluar extends BaseController
{
	public function index()
	{
		$model = new BarangKeluarModel;
		$data = array(
			'title' => 'Daftar Pinjam',
			'isi' => 'simaset/aset/laporan_barang_keluar',
			'pinjam' => $model->getAll(),
		);
		// var_dump($data); die;
		return view ('simaset/layout/wrapper', $data);
	}
	public function laporan_admin()
	{
		$model = new BarangKeluarModel;
		$data = array(
			'title' => 'Daftar Pinjam',
			'isi' => 'simaset/aset/laporan_barang_keluar_user',
			'pinjam' => $model->getAll(),
		);
		// var_dump($data); die;
		return view ('simaset/layout/wrapper', $data);
	}
	public function tambah(){
		$model = new BarangKeluarModel;
		$data = array (
 				'title' => 'tambah Barang',
 				'isi'   => 'simaset/aset/add_barang_keluar',
 				'user' => $model->getUser(),
 				'barang' => $model->getBarang(),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function simpan(){
			$model = new BarangKeluarModel;
			$data = array(
				'id_pinjam' => $this->request->getPost('id_pinjam'),
				'id_user' => $this->request->getPost('id_user'),
				'id_barang' => $this->request->getPost('id_barang'),
				'keterangan' => $this->request->getPost('keterangan'),
				'tgl_pinjam' => $this->request->getPost('tgl_pinjam'),
 			);
 			// var_dump($data); die;
			$model->saveBarangKeluar($data);
			// $this->session()->setFlashdata('msg','Data berhasil di tambahkan');
			return redirect()->to(base_url('BarangKeluar'));
		
	}
	 // function get_autocomplete(){
  //       if (isset($_GET['term'])) {
  //           $result = $this->BarangKeluarModel->search_user($_GET['term']);
  //           if (count($result) > 0) {
  //           foreach ($result as $row)
  //               $arr_result[] = $row->nama_user;
  //               echo json_encode($arr_result);
  //           }
  //       }
  //   }
}