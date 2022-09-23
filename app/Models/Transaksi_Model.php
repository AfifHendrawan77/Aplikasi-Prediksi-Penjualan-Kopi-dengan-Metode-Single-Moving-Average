<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Transaksi_Model extends Model
{
    protected $table                = 'transaksi';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id_transaksi','kasir', 'barang', 'nama_pembeli', 'tgl_transaksi', 'nama_produk','qty','harga_awal','total_harga','bayar'];

 
    public function getUsers()
    {
        $builder = $this->db->table('transaksi_penjualan');
        $builder->orderby('id','DESC');
        $builder->join('produk', 'produk.id_produk = transaksi_penjualan.id_produk');
        $query = $builder->get();
        return $query->getResult();
    }

    public function cari()
    {
        $builder = $this->db->table('transaksi');
        $builder->where('tgl_transaksi >=', $this->request->getPost('tgl_awal'));
        $builder->where('tgl_transaksi <=', $this->request->getPost('tgl_akhir'));
        $query = $builder->get();
        return $query->getResult();
    }

    public function get()
    {
        $builder = $this->db->table('transaksi');
        $builder->select('*');
        $builder->from('student');
        
        $query = $builder->get();
        return $query->getResult();
    }

    public function save_batch($data)
    {
        $builder = $this->db->table('transaksi');
        $builder->insertBatch($data);
    }

    public function hapus($id)
    {
        return $this->db->table('transaksi')->delete(['id_transaksi' => $id]);
    }
 
}