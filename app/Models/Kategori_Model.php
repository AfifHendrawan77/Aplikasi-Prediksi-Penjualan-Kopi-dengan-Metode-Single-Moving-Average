<?php namespace App\Models;
use CodeIgniter\Model;
 
class Kategori_Model extends Model
{
    protected $table = 'kategori';
    protected $allowedFields= ['id','nama_kategori','berkas'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
     
    public function getGambar()
    {
        return $this->findAll();  
    }

    public function count_all_kategori()
    {
        $builder = $this->db->table('kategori');
        $query = $builder->countAllResults();
        return $query;
    }

    public function simpan_gambar($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function hapus($id)
    {
        return $this->db->table('kategori')->delete(['id' => $id]);
    }
 }