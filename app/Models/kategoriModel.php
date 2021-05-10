<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model{
	protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $allowedFields = ['id_kategori','nama_kategori'];

    public function __construct()
    {
    	parent::__construct();
    	$db = \Config\Database::connect();
    	$this->table = $this->db->table('kategori');
    }
    public function getAll()
    {
    	return $this->db->table('kategori')
    		->select('*')
    		->get()->getResultArray();
    }
    public function saveKategori($data){
        return $this->db->table('kategori')->insert($data);
        
    }
}