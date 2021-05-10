<?php namespace App\Models;

use CodeIgniter\Model;

class SimasetModel extends Model{
	protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['id_barang','id_kategori','nama_barang','merk','spek','harga'];
    protected $table_join = 'kategori';

    public function __construct()
    {
    	parent::__construct();
    	$db = \Config\Database::connect();
    	$this->table = $this->db->table('barang');
    }
    public function getAll()
    {
    	return $this->db->table('barang')
    		->select('*')
    		->join('kategori','kategori.id_kategori = barang.id_kategori')
    		->get()->getResultArray();
    }
	public function getBarang ($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->db->table('barang')->getWhere(['id_barang' => $id])->getRow();
        }  
    }
    public function getKategori()
    {
    	return $this->db->table('kategori')
    		->select('*')
    		//->join('barang','barang.id_kategori = kategori.id_kategori')
    		->get()->getResultArray();
    }
    public function saveBarang($data){
    	return $this->db->table('barang')->insert($data);
        
    }
    public function updateBarang($data, $id){
    	return $this->db->table('barang')->update($data, array('id_barang' => $id));
    	 // $query = $this->db->table($this->table)->update($data,  ['id_barang' => $id]);
      //   return $query;
    }
    public function deleteBarang($id){
    	return $this->db->table('barang')->delete(array('id_barang' => $id));
    	// $query = $this->db->table($this->table)->delete(array ('id_barang' => $id));
     //    return $query;
    }
    
    }
