<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Transaksipenjualan_Model extends Model
{
    protected $table                = 'transaksi_penjualan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id','id_produk','nama_produk', 'kasir', 'nama_pembeli', 'jumlah','harga_awal','total_harga','created_at'];

 
    public function getUsers()
    {
        $builder = $this->db->table('transaksi_penjualan');
        $builder->orderby('id','DESC');
        $builder->join('produk', 'produk.id_produk = transaksi_penjualan.id_produk');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getTransaksi($id)
    {
        $builder = $this->db->table('transaksi_penjualan');
        $builder->orderby('id','DESC');
        $builder->join('produk', 'produk.id_produk = transaksi_penjualan.id_produk');
        $builder->where('transaksi_penjualan.id', $id);
        $query = $builder->get(1);
        return $query->getResult();
    }

    // public function getperiode($namaperiode)
    public function getperiode($namaperiode)
    {
        $builder = $this->db->table('transaksi_penjualan');
        $builder->orderby('id','DESC');
        $builder->join('produk', 'produk.id_produk = transaksi_penjualan.id_produk');
        $query = $builder->where('nama_produk', $namaperiode);
     
        $query = $builder->get();
        return $query->getResult();
    }

    public function getdate($keywordawal, $keywordakhir, $namaperiode)
    {
        $builder = $this->db->table('transaksi_penjualan');
        $builder->orderby('id','DESC');
        $builder->join('produk', 'produk.id_produk = transaksi_penjualan.id_produk');
        $query = $builder->where('nama_produk', $namaperiode);
        $query = $builder->where('created_at >=', $keywordawal);
        $query = $builder->where('created_at <=', $keywordakhir);
        $query = $builder->get();
        return $query->getResult();
    }

    public function get_penjualan()
    {
        $builder =$this->db->table('transaksi_penjualan');
        $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }

    

    public function save_batch($data)
    {
        $builder = $this->db->table('transaksi_penjualan');
        $builder->insertBatch($data);
    }

    public function hapus($id)
    {
        return $this->db->table('transaksi_penjualan')->delete(['id' => $id]);
    }

    public function edit($id)
    {
        return $this->db->table('transaksi_penjualan')->update(['id' => $id]);
    }
 
}