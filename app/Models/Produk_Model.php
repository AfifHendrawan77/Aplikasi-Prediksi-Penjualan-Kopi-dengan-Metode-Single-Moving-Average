<?php namespace App\Models;
use CodeIgniter\Model;
 
class Produk_Model extends Model
{
    protected $table = 'produk';
    protected $primaryKey= 'id_produk';
    protected $allowedFields= ['id_produk','nama_produk','stok','harga'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
     
    public function getProduk()
    {
        return $this->findAll();  
    }

    public function count_all_produk()
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
        return $this->db->table('produk')->delete(['id_produk' => $id]);
    }

    public function edit($id)
    {
        return $this->db->table('produk')->update(['id_produk' => $id]);
    }
 }