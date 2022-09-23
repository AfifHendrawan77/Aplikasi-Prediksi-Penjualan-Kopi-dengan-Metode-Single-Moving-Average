<?php

namespace App\Controllers\Owner;
use App\Models\Produkmasuk_Model;
use App\Models\Produk_Model;
use App\Models\Supplier_Model;

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
        return view('owner/produkmasuk', compact('produk'));
    }

    public function tambah()
    {
        $produk = new Produk_Model();
        $supplier = new Supplier_Model();
        $data = [
            'produk' => $produk->getProduk(),
            'supplier' => $supplier->getUsers(),
        ];
        return view('owner/CRUD/Produk Masuk/tambah_produkmasuk', compact('data'));
    }

    public function simpan_produk_masuk()
    {
        $data = new Produkmasuk_Model();
        $data->insert([
            'id_produk' => $this->request->getVar('id_produk'),
            'id_supplier' => $this->request->getVar('id_supplier'),
            'penerima' => $this->request->getVar('penerima'),
            'stok_masuk' => $this->request->getVar('stok_masuk')
        ]);


        session()->setFlashdata('message', 'Selamat! Data Produk Masuk Berhasil ditambahkan');
        return redirect()->to('owner/produk_masuk');
    }

    public function excel_produk_masuk()
    {
        $data = new Produkmasuk_Model();
        $produkmasuk = $data->getProduk();
        return view('excel/excel_produkmasuk', compact('produkmasuk'));
    }

    public function hapus($id)
    {
        $datauser = new Produkmasuk_Model();
        $success = $datauser->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Produk Masuk Berhasil dihapus');
            return redirect()->to('owner/produk_masuk');
        }
    }
}
