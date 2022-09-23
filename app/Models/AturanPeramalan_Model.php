<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class AturanPeramalan_Model extends Model
{
    protected $table                = 'aturan_peramalan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_barang','tahun_peramalan'];

 
    public function getUsers()
    {
        return $this->findAll();
    }

    function ambil_data(){
		return $this->db->table('aturan_peramalan');
	}
    
    public function hapus($id)
    {
        return $this->db->table('aturan_peramalan')->delete(['id' => $id]);
    }

    public function edit($id)
    {
        return $this->db->table('aturan_peramalan')->update(['id' => $id]);
    }
 
}