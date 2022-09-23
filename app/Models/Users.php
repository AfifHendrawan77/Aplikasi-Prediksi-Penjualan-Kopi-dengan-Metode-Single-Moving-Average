<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Users extends Model
{
    protected $table                = 'users';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id','name','email', 'phone_no','role','password'];

 
    public function getUsers()
    {
        return $this->findAll();
    }

    function ambil_data(){
		return $this->db->table('users');
	}
    
    public function count_all_users()
    {
        $builder = $this->db->table('users');
        $query = $builder->countAllResults();
        return $query;
    }

    public function hapus($id)
    {
        return $this->db->table('users')->delete(['id' => $id]);
    }

    public function edit($id)
    {
        return $this->db->table('users')->update(['id' => $id]);
    }
 
}