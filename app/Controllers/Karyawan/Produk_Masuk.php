<?php

namespace App\Controllers\Karyawan;
use App\Models\Produkmasuk_Model;

class Produk_Masuk extends BaseController
{
    function __construct()
    {
        $this->produk = new Produkmasuk_Model();
    }

    public function index()
    {
        $data = new Produkmasuk_Model();
        $produk = $data->getAll();
        return view('karyawan/produkmasuk', compact('produk'));
    }

    public function tambah()
    {
        
        return view('karyawan/CRUD/Produk Masuk/tambah_produkmasuk');
    }

    public function simpan_produk_masuk()
    {
        $data = new Produkmasuk_Model();
        $data->insert([
            'id_produk' => $this->request->getVar('id_produk'),
            'stok_masuk' => $this->request->getVar('stok_masuk'),
        ]);
       
        session()->setFlashdata('message', 'Selamat! Data Produk Masuk Berhasil ditambahkan');
        return redirect()->to('karyawan/produk_masuk');
    }

    public function excel_produk_masuk()
    {
        $data = new Produkmasuk_Model();
        $produkmasuk = $data->getProduk();
        return view('excel/excel_produkmasuk', compact('produkmasuk'));
    }
}
