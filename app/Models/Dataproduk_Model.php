<?php namespace App\Models;
use CodeIgniter\Model;
 
class Dataproduk_Model extends Model
{
    protected $table = 'data_produk';
    protected $allowedFields= ['id','nama_produk', 'harga', 'gambar','berkas','deskripsi_produk'];
     
    public function getGambar()
    {
        return $this->findAll();  
    }

    public function getUsers()
    {
        return $this->findAll();
    }

    public function count_all_dataproduk()
    {
        $builder = $this->db->table('data_produk');
        $query = $builder->countAllResults();
        return $query;
    }

    public function simpan_gambar($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function detail_brg($id)
	{
		$result = $this->db->where('id',$id)->get('data_produk');
		if ($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}


    public function hapus($id)
    {
        return $this->db->table('data_produk')->delete(['id' => $id]);
    }
 }