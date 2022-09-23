<?php namespace App\Models;
use CodeIgniter\Model;
 
class Promosi_Model extends Model
{
    protected $table = 'promosi';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields= ['id','judul','deskripsi','berkas'];
     
    public function getGambar()
    {
        return $this->findAll();  
    }

    public function getUsers()
    {
        return $this->findAll();
    }

    public function count_all_promosi()
    {
        $builder = $this->db->table('promosi');
        $query = $builder->countAllResults();
        return $query;
    }

    public function simpan_gambar($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function edit($id)
    {
        return $this->db->table('promosi')->update(['id' => $id]);
    }

    public function hapus($id)
    {
        return $this->db->table('promosi')->delete(['id' => $id]);
    }
 }