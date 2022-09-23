<?php

namespace App\Controllers\Owner;
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
        return view('owner/data_supplier', compact('supplier'));
    }


    public function tambah_supplier()
    {
        return view('owner/CRUD/Data Supplier/tambah_supplier');
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
                ]
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('owner/CRUD/Data Supplier/tambah_supplier');
            } else {

                $this->supplier->insert([
                    'nama_supplier' => $this->request->getVar('nama_supplier'),
                    'nohp_supplier' => $this->request->getVar('nohp_supplier'),
                    'alamat_supplier' => $this->request->getVar('alamat_supplier')
                ]);
               
                session()->setFlashdata('message', 'Selamat! Data Supplier Berhasil ditambahkan');
                return redirect()->to('owner/data_supplier');
            }
        } else {
            return redirect()->to('owner/data_supplier');
        }
    }

    public function edit_supplier($id)
    {
       $supplier = new Supplier_Model();

       $data = array(
           'supplier' => $supplier->find($id)
       );

       return view('owner/CRUD/Data Supplier/edit_supplier', $data);
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
                ]
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('owner/CRUD/Data Supplier/tambah_supplier');
            } else {
                //model initialize
       $supplier = new Supplier_Model();
            
       //insert data into database
       $supplier->update($id, [
        'nama_supplier' => $this->request->getVar('nama_supplier'),
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Data Supplier Berhasil diubah');

       return redirect()->to('owner/data_supplier');
            }
        } else {
            return redirect()->to('owner/data_supplier');
        }
        // 
    }


    public function hapus_supplier($id)
    {
        $success = $this->supplier->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Supplier Berhasil dihapus');
            return redirect()->to('owner/data_supplier');
        }
    }

    public function excel_supplier()
    {
        $data = new Supplier_Model();
        $supplier = $data->getUsers();
        return view('excel/excel_supplier', compact('supplier'));
    }
}
