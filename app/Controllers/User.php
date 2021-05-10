<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controllers;

class User extends BaseController
{
	public function index()
	{
		$model = new UserModel();
		$data  = array (
				'title'    => 'Data User',
				'isi'  => 'simaset/aset/index',
				'user'  => $model->getUser(),
			);
		return view ('simaset/layout/wrapper', $data);
	}
	public function list_user_admin(){
		$model = new UserModel;
		$data = array(
			'title' => 'Daftar User',
			'isi' => 'simaset/user/list_user_admin',
			'barang' => $model->getAll(),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function tampilProfil(){
		$model = new UserModel();
		$id = session()->get('id_user');
		$data = array(
			'title' => "Profil User",
			'isi' => 'simaset/user/tampilprofil',
			'profil' => $model->getUser($id),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function editProfil($id){
		$model = new UserModel();
		$id = session()->get('id_user');
		$data = array(
			'title' => "Edit Profil",
			'isi' => 'simaset/user/editprofil',
			'profil' => $model->getUser($id),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function update($id = null){
		// $file = $this->request->getFile('poto');
		// $file->move(ROOTPATH.'public/poto');
		$model = new UserModel;
		$id = session()->get('id_user');
		$data = array (
			'id_user' => $this->request->getPost('id_user'),
			'nama_user' => $this->request->getPost('nama_user'),
			'username' => $this->request->getPost('username'),
			'nama_dinas' => $this->request->getPost('nama_dinas'),
			'level' => $this->request->getPost('level'),
			// 'poto' => $file->getName(),
		);
		// var_dump($data); die;
		$model->updateUser($data, $id);
		// $this->session()->setFlashdata('msg','Data berhasil di update');
		return redirect()->to(base_url('user/tampilProfil'));
	}
	public function tambahUser(){
		$model = new UserModel;
		$data = array (
 				'title' => 'tambah User',
 				'isi'   => 'simaset/user/tambahUser',
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function listUser(){
		$model = new UserModel;
		$data = array(
			'title' => 'Daftar User',
			'isi' => 'simaset/user/list_user',
			'barang' => $model->getAll(),
		);
		return view ('simaset/layout/wrapper', $data);
	}
	public function simpanUser(){
		$model = new UserModel;
		// $file = $this->request->getFile('poto');
		// // $name = $file->getName();
		// $file->move(ROOTPATH.'public/poto');
		$data = array (
			'id_user' => $this->request->getPost('id_user'),
			'nama_user' => $this->request->getPost('nama_user'),
			'username' => $this->request->getPost('username'),
			'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
			'nama_dinas' => $this->request->getPost('nama_dinas'),
			'level' => $this->request->getPost('level'),
			// 'poto' => $file->getName(),
		);
		
		$model->simpanUser($data);
		// $this->session()->setFlashdata('msg','Data berhasil di update');
		return redirect()->to(base_url('user/listUser'));
	}
	 public function ajaxSearch()
    {
        // helper(['form', 'url']);

        $data = [];

        $db      = \Config\Database::connect();
        $builder = $db->table('user');   

        $query = $builder->like('nama_user', $this->request->getVar('q'))
                    ->select('id_user, nama_user as text')
                    ->limit(10)->get();
        $data = $query->getResult();
        
		echo json_encode($data);
    }
}