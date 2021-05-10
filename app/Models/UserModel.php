<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
	protected $table = "user";
	public function getUser ($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->db->table('user')->getWhere(['id_user' => $id])->getRow();
        }  
    }
	public function getAll(){
		return $this->db->table('user')
    		->select('*')
    		->get()->getResultArray();
	}
	public function updateUser($data, $id){
    	return $this->db->table('user')->update($data, array('id_user' => $id));
    	 // $query = $this->db->table($this->table)->update($data,  ['id_barang' => $id]);
      //   return $query;
    }
    public function simpanUser($data){
        return $this->db->table('user')->insert($data);
    }
}