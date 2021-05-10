<?php namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{

	protected $table = 'user';
	protected $allowedFields = ['nama_user','username','password','nama_dinas','level'];
	// public function __construct()
 //    {
 //    	parent::__construct();
 //    	$db = \Config\Database::connect();
 //    	$this->table = $this->db->table('user');
 //    }
}