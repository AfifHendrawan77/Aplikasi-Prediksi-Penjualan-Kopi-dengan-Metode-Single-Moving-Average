<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Investor_Model extends Model
{
    protected $table                = 'investor';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_investor', 'nohp_investor', 'alamat_investor'];

 
    public function getUsers()
    {
        return $this->findAll();
    }

    function ambil_data(){
		return $this->db->table('investor');
	}

    public function count_all_investor()
    {
        $builder = $this->db->table('investor');
        $query = $builder->countAllResults();
        return $query;
    }
    
    public function hapus($id)
    {
        return $this->db->table('investor')->delete(['id' => $id]);
    }

    public function edit($id)
    {
        return $this->db->table('investor')->update(['id' => $id]);
    }
 
}