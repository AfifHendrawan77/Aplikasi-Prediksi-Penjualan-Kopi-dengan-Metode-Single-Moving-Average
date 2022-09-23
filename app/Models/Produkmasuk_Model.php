<?php namespace App\Models;
use CodeIgniter\Model;
 
class Produkmasuk_Model extends Model
{
    protected $table = 'produk_masuk';
    protected $primaryKey= 'id_masuk';
    protected $allowedFields= ['id_masuk','id_produk','id_supplier','nama_produk','nama_supplier','stok_masuk','nohp_supplier','alamat_supplier','no_hp','penerima','alamat','created_at'];

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

    public function getAll()
    {
        $builder = $this->db->table('produk_masuk');
        $builder->join('produk', 'produk.id_produk = produk_masuk.id_produk');
        $builder->join('supplierr', 'supplierr.id_supplier = produk_masuk.id_supplier');
        $query = $builder->get();
        return $query->getResult();
    }

    public function hapus($id)
    {
        return $this->db->table('produk_masuk')->delete(['id_masuk' => $id]);
    }
 }