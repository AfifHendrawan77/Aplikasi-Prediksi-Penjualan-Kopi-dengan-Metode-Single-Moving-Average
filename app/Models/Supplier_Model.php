<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Supplier_Model extends Model
{
    protected $table                = 'supplierr';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_supplier', 'nohp_supplier', 'alamat', 'penerima','id_produk','stok_masuk','stok','tanggal','alamat_supplier'];

 
    public function getUsers()
    {
        return $this->findAll();
    }

    public function getAll()
    {
        $builder = $this->db->table('supplierr');
        $builder->join('produk', 'produk.id_produk = supplierr.id_produk');
        $query = $builder->get();
        return $query->getResult();
    }

    function ambil_data(){
		return $this->db->table('supplier');
	}

    public function count_all_supplier()
    {
        $builder = $this->db->table('supplier');
        $query = $builder->countAllResults();
        return $query;
    }
    
    public function hapus($id)
    {
        return $this->db->table('supplierr')->delete(['id_supplier' => $id]);
    }

    public function edit($id)
    {
        return $this->db->table('supplierr')->update(['id_supplier' => $id]);
    }
 
}