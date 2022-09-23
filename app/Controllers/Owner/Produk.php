<?php

namespace App\Controllers\Owner;
use App\Models\Produk_Model;

class Produk extends BaseController
{
    function __construct()
    {
        $this->produk = new Produk_Model();
    }

    public function index()
    {
        $data = new Produk_Model();
        $produk = $data->getProduk();
        return view('owner/produk', compact('produk'));
    }

    public function tambah_produk()
    {
        return view('owner/CRUD/Produk/tambah_produk');
    }

    public function simpan_produk()
    {

        if(isset($_POST['simpan_produk'])){
            $val = $this->validate([
                'nama_produk' => [
                    'label' => 'Nama Produk',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'stok' => [
                    'label' => 'Stok',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]
                        
                ],
                'harga' => [
                    'label' => 'Harga',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]
                        
                ],
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('owner/CRUD/Produk/tambah_produk');
            } else {
                $produk = new Produk_Model();
                $produk->insert([
                    'nama_produk' => $this->request->getVar('nama_produk'),
                    'stok' => $this->request->getVar('stok'),
                    'harga' => $this->request->getVar('harga')
                ]);
               
                session()->setFlashdata('message', 'Selamat! Produk Berhasil ditambahkan');
                return redirect()->to('owner/produk');
            }
        } else {
            return redirect()->to('owner/produk');
        }
    }

    public function excel_produk()
    {
        $produk = new Produk_Model();
        $produk = $produk->getProduk();
        return view('excel/excel_produk', compact('produk'));
    }

    
    public function hapus($id)
    {
        $datauser = new Produk_Model();
        $success = $datauser->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Produk Berhasil dihapus');
            return redirect()->to('owner/produk');
        }
    }
}
