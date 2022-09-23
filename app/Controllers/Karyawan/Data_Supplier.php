<?php

namespace App\Controllers\Karyawan;
use App\Models\Supplier_Model;

class Data_Supplier extends BaseController
{
    function __construct()
    {
        $this->supplier = new Supplier_Model();
    }

    public function index()
    {
        $data = new Supplier_Model();
        $supplier = $data->getUsers();
        return view('karyawan/data_supplier', compact('supplier'));
    }


    public function tambah_supplier()
    {
        return view('karyawan/CRUD/Data Supplier/tambah_supplier');
    }


    public function simpan_supplier()
    {

        if(isset($_POST['simpan_supplier'])){
            $val = $this->validate([
                'nama_supplier' => [
                    'label' => 'Nama Supplier',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'nohp_supplier' => [
                    'label' => 'No Hp Supplier',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]
                        
                ],
                'alamat_supplier' => [
                    'label' => 'Alamat Supplier',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'deskripsi_supplier' => [
                    'label' => 'Deskripsi Supplier',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('karyawan/CRUD/Data Supplier/tambah_supplier');
            } else {

                $this->supplier->insert([
                    'nama_supplier' => $this->request->getVar('nama_supplier'),
                    'id_produk' => $this->request->getVar('id_produk'),
                    'nohp_supplier' => $this->request->getVar('nohp_supplier'),
                    'alamat_supplier' => $this->request->getVar('alamat_supplier'),
                    'deskripsi_supplier' => $this->request->getVar('deskripsi_supplier'),
                    'stok' => $this->request->getVar('stok')
                ]);
               
                session()->setFlashdata('message', 'Selamat! Data Supplier Berhasil ditambahkan');
                return redirect()->to('karyawan/data_supplier');
            }
        } else {
            return redirect()->to('karyawan/data_supplier');
        }
    }

    public function edit_supplier($id)
    {
       $supplier = new Supplier_Model();

       $data = array(
           'supplier' => $supplier->find($id)
       );

       return view('karyawan/CRUD/Data Supplier/edit_supplier', $data);
    }


    public function update_supplier($id)
    {
        //load helper form and URL
        helper(['form', 'url']);

        // 
        if(isset($_POST['update_supplier'])){
            $val = $this->validate([
                'nama_supplier' => [
                    'label' => 'Nama Supplier',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'nohp_supplier' => [
                    'label' => 'No Hp Supplier',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]
                        
                ],
                'alamat_supplier' => [
                    'label' => 'Alamat Supplier',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'deskripsi_supplier' => [
                    'label' => 'Deskripsi Supplier',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('karyawan/CRUD/Data Supplier/tambah_supplier');
            } else {
                //model initialize
       $supplier = new Supplier_Model();
            
       //insert data into database
       $supplier->update($id, [
        'nama_supplier' => $this->request->getVar('nama_supplier'),
        'id_produk' => $this->request->getVar('id_produk'),
        'nohp_supplier' => $this->request->getVar('nohp_supplier'),
        'alamat_supplier' => $this->request->getVar('alamat_supplier'),
        'deskripsi_supplier' => $this->request->getVar('deskripsi_supplier'),
        'stok' => $this->request->getVar('stok')
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Data Supplier Berhasil diubah');

       return redirect()->to('karyawan/data_supplier');
            }
        } else {
            return redirect()->to('karyawan/data_supplier');
        }
        // 
        

       
    }


    public function hapus_supplier($id)
    {
        $success = $this->supplier->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Supplier Berhasil dihapus');
            return redirect()->to('karyawan/data_supplier');
        }
    }

    public function excel_supplier()
    {
        $data = new Supplier_Model();
        $supplier = $data->getUsers();
        return view('excel/excel_supplier', compact('supplier'));
    }
}
