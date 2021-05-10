<?php namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model{
	protected $table = 'trx_pinjam';
    protected $primaryKey = 'id_pinjam';
    protected $allowedFields = ['id_pinjam','id_user','id_barang','keterangan','tgl_pinjam','tgl_kembali','status'];

    public function __construct()
    {
    	parent::__construct();
    	$db = \Config\Database::connect();
    	$this->table = $this->db->table('trx_pinjam');
    }
    public function getAll()
    {
    	return $this->db->table('trx_pinjam')
    		->select('*')
    		->join('user','user.id_user = trx_pinjam.id_user')
            ->join('barang','barang.id_barang = trx_pinjam.id_barang')
    		->get()->getResultArray();
    }
	public function getPinjam ($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->db->table('trx_pinjam')->getWhere(['id_pinjam' => $id])->getRow();
        }  
    }
    public function getUser()
    {
        return $this->db->table('user')
            ->select('*')
            //->join('barang','barang.id_kategori = kategori.id_kategori')
            ->get()->getResultArray();
    }
    public function getBarang()
    {
        return $this->db->table('barang')
            ->select('*')
            //->join('barang','barang.id_kategori = kategori.id_kategori')
            ->get()->getResultArray();
    }
    public function saveBarangKeluar($data){
        return $this->db->table('trx_pinjam')->insert($data);
        
    }
    //  function search_user($nama_user){
    //     $this->db->like('nama_user', $nama , 'both');
    //     $this->db->order_by('nama_user', 'ASC');
    //     $this->db->limit(10);
    //     return $this->db->get('user')->result();
    // }
}