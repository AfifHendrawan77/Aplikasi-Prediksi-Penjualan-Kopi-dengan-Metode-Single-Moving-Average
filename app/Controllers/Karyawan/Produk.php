<?php

namespace App\Controllers\Karyawan;
use App\Models\Produk_Model;

class Produk extends BaseController
{

    public function index()
    {
        $data = new Produk_Model();
        $produk = $data->getProduk();
        return view('karyawan/produk', compact('produk'));
    }

    public function tambah_produk()
    {
        return view('karyawan/CRUD/Produk/tambah_produk');
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

                return view('karyawan/CRUD/Produk/tambah_produk');
            } else {
                $produk = new Produk_Model();
                $produk->insert([
                    'nama_produk' => $this->request->getVar('nama_produk'),
                    'stok' => $this->request->getVar('stok'),
                    'harga' => $this->request->getVar('harga')
                ]);
               
                session()->setFlashdata('message', 'Selamat! Produk Berhasil ditambahkan');
                return redirect()->to('karyawan/produk');
            }
        } else {
            return redirect()->to('karyawan/produk');
        }
    }

    public function edit_produk($id)
    {
        $produk = new Produk_Model();

       $data = array(
           'produk' => $produk->find($id)
       );

       return view('karyawan/CRUD/Produk/edit_produk', $data);
    }

    public function update_produk($id)
    {
        //load helper form and URL
        helper(['form', 'url']);

        // 
        if(isset($_POST['update_produk'])){
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

                return view('karyawan/CRUD/Data Supplier/edit_supplier');
            } else {
                //model initialize
            $produk = new Produk_Model();
            
       //insert data into database
            $produk->update($id, [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'stok' => $this->request->getPost('stok'),
            'harga' => $this->request->getPost('harga'),
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Produk Berhasil diubah');

       return redirect()->to('karyawan/produk');
            }
        } else {
            return redirect()->to('karyawan/produk');
        }
        // 
        
    }

    public function hapus_produk($id)
    {
        $produk = new Produk_Model();
        $success = $produk->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Produk Berhasil dihapus');
            return redirect()->to('karyawan/produk');
        }
    }

    public function excel_produk()
    {
        $produk = new Produk_Model();
        $produk = $produk->getProduk();
        return view('excel/excel_produk', compact('produk'));
    }

}
