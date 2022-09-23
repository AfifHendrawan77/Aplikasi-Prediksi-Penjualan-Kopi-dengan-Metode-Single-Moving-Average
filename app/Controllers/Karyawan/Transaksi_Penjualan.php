<?php

namespace App\Controllers\Karyawan;
use App\Models\Transaksi_Model;
use App\Models\Transaksipenjualan_Model;
use App\Models\Produk_Model;

class Transaksi_Penjualan extends BaseController
{
    public function __construct()
    {
        $this->transaksi= new Transaksi_Model();
    }

    public function index()
    {
        $transaksi = new Transaksipenjualan_Model();
        $data['transaksi'] = $transaksi->getUsers();
        return view('karyawan/transaksi_penjualan', $data);
    }

    public function tambah_transaksi($number)
    {
        return view('karyawan/CRUD/Data Transaksi/tambah_transaksi',['total_row'=>$number]);
    }

    public function simpan_transaksi_batch()
    {
        $data = array(
            array(
                'kasir' => $this->request->getPost('kasir1'),
                'nama_pembeli' => $this->request->getPost('nama_pembeli1'),
                'tgl_transaksi' => $this->request->getPost('tgl_transaksi1'),
                'nama_produk' => $this->request->getPost('nama_produk1'),
                'qty' => $this->request->getPost('qty1'),
                'harga_awal' => $this->request->getPost('harga_awal1'),
                'total_harga' => $this->request->getPost('total_harga1'),
                'bayar' => $this->request->getPost('bayar1'),
            ),
            array(
                'kasir' => $this->request->getPost('kasir1'),
                'nama_pembeli' => $this->request->getPost('nama_pembeli1'),
                'tgl_transaksi' => $this->request->getPost('tgl_transaksi1'),
                'nama_produk' => $this->request->getPost('nama_produk2'),
                'qty' => $this->request->getPost('qty2'),
                'harga_awal' => $this->request->getPost('harga_awal2'),
                'total_harga' => $this->request->getPost('total_harga2'),
                'bayar' => $this->request->getPost('bayar1'),
            )
        );

        dd($data);

        // $transaksi = new Transaksi_Model();
        // $query = $transaksi->save_batch($data);
        // session()->setFlashdata('message', 'Selamat! Data Transaksi Berhasil ditambahkan');
        // return redirect()->to('karyawan/transaksi_penjualan');
    }

    public function simpan_transaksi()
    {
        $kasir = $this->request->getPost('kasir');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $id_produk = $this->request->getPost('id_produk');
        $harga_awal = $this->request->getPost('harga_awal');
        $jumlah = $this->request->getPost('jumlah');
        $total_harga = $this->request->getPost('total_harga');
        
        for($i=0; $i<count($id_produk); $i++){
            $data[] = [
                'kasir'       => $kasir,
                'nama_pembeli'=> $nama_pembeli,
                'id_produk' => $id_produk[$i],
                'harga_awal'  => $harga_awal[$i],
                'jumlah'         => $jumlah[$i],
                'total_harga' => $total_harga[$i]
            ];
        }
       
        $transaksi = new Transaksipenjualan_Model();
        $query = $transaksi->save_batch($data);
        session()->setFlashdata('message', 'Selamat! Data Transaksi Berhasil ditambahkan');
        return redirect()->to('karyawan/transaksi_penjualan');
    }

    public function simpan_transaksi1()
    {
        $kasir = $this->request->getPost('kasir');
        $nama_pembeli = $this->request->getPost('nama_pembeli');
        $id_produk = $this->request->getPost('id_produk');
        $harga_awal = $this->request->getPost('harga_awal');
        $jumlah = $this->request->getPost('jumlah');
        $total_harga = $this->request->getPost('total_harga');
        
        for($i=0; $i<count($id_produk); $i++){
            // echo $id_produk[$i]."<br/>";
            // echo $harga_awal[$i]."<br/>";
            // echo $qty[$i]."<br/>";
            // echo $total_harga[$i]."<br/>";
            $data[] = [
                'kasir'       => $kasir,
                'nama_pembeli'=> $nama_pembeli,
                'id_produk' => $id_produk[$i],
                'harga_awal'  => $harga_awal[$i],
                'jumlah'         => $jumlah[$i],
                'total_harga' => $total_harga[$i]
            ];
        }
       
        $transaksi = new Transaksipenjualan_Model();
        $query = $transaksi->save_batch($data);
        session()->setFlashdata('message', 'Selamat! Data Transaksi Berhasil ditambahkan');
        return redirect()->to('karyawan/transaksi_penjualan');
        
    }
    
    public function cetak_transaksi($id)
    {
        $transaksi = new Transaksipenjualan_Model();
        $data['transaksi'] = $transaksi->getTransaksi($id);
        return view('karyawan/cetak_transaksi', $data);
    }


    public function hapus_transaksi($id)
    {
        $transaksi = new Transaksipenjualan_Model();
        $success = $transaksi->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Transaksi Berhasil dihapus');
            return redirect()->to('karyawan/transaksi_penjualan');
        }
    }

    public function excel_transaksi()
    {
        $transaksi = new Transaksipenjualan_Model();
        $data['transaksi'] = $transaksi->getUsers();
        return view('excel/excel_transaksi',$data);
    }

}
