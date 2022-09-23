<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Peramalan_Model extends Model
{
    protected $table                = 'peramalan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id','nama_barang', 'bulan', 'tahun', 'terjual'];

 
    public function getUsers()
    {
        return $this->findAll();
    }

    public function getAll()
    {
        $builder = $this->db->table('peramalan');
        $builder->orderby('id','DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    function ambil_data(){
		return $this->db->table('peramalan');
	}

    public function getperiode($namaperiode)
    {
        $builder = $this->db->table('peramalan');
        $builder->orderBy('id', 'DESC');
        $query = $builder->where('nama_barang', $namaperiode);
        $query = $builder->get(); 
        return $query->getResult();
    }
    public function hasil($query)
    {
        $builder->selectSum('terjual');
        $query = $builder->get();
        return $query->getResult();
    }
    public function get3periode($namaperiode)
    {
        $builder = $this->db->table('peramalan');
        $query = $builder->where('nama_barang', $namaperiode);
        $query = $builder->get(3);
        return $query->getResult();
    }

    public function get3avg($namaperiode)
    {
        $builder = $this->db->table('peramalan');
        $builder->orderBy('id', 'Desc');
        $query = $builder->where('nama_barang', $namaperiode);
        $builder->selectAvg('terjual');
        $query = $builder->get(3);
        //  $query = $builder->get();
        return $query->getResult();
    }

    
    
    public function hapus($id)
    {
        return $this->db->table('peramalan')->delete(['id' => $id]);
    }

    public function edit($id)
    {
        return $this->db->table('peramalan')->update(['id' => $id]);
    }
 
}