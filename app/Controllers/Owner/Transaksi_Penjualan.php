<?php

namespace App\Controllers\Owner;
use App\Models\Transaksipenjualan_Model;
use App\Models\Produk_Model;


class Transaksi_Penjualan extends BaseController
{

    public function index()
    {
        $transaksi = new Transaksipenjualan_Model();
        $data['transaksi'] = $transaksi->getUsers();
        return view('owner/transaksi_penjualan', $data);
    }

    public function produk()
    {
        $transaksi = new Transaksipenjualan_Model();
        $data['transaksi'] = $transaksi->getUsers();
        return view('owner/transaksi_penjualan_hasil', $data);
    }

    public function cari()
    {
        $transaksi = new Transaksi_Model();
        $data['transaksi'] = $transaksi->cari();
        return view('owner/transaksi_penjualan', $data);
    }

    public function cariproduk()
    {
        $data = new Transaksipenjualan_Model();
        
        $periode = $data->getperiode($this->request->getVar('namaperiode'));
        return view('owner/transaksi_penjualan_hasil', compact('periode'));
    }
    
    public function search()
    {
        $keywordawal = $this->request->getVar('keywordawal');
        $keywordakhir = $this->request->getVar('keywordakhir');
        $namaperiode = $this->request->getVar('namaperiode');
        $transaksi = new Transaksipenjualan_Model();
        $periode = $transaksi->getdate($keywordawal, $keywordakhir, $namaperiode);
        return view('owner/transaksi_penjualan_hasil', compact('periode'));
    }
    
    public function hapus_transaksi($id)
    {
        $transaksi = new Transaksipenjualan_Model();
        $success = $transaksi->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Transaksi Berhasil dihapus');
            return redirect()->to('owner/transaksi_penjualan');
        }
    }


}
