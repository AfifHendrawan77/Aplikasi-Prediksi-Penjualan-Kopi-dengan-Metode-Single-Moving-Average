<?php

namespace App\Controllers\Owner;
use App\Models\Investor_Model;

class Data_Investor extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "owner") {
            echo 'Access denied';
            exit;
        }
        $this->investor = new Investor_Model();
    }

   
    public function index()
    {
        $data = new Investor_Model();
        $investor = $data->getUsers();
        return view('owner/data_investor', compact('investor'));
    }

    public function tambah_investor()
    {
        return view('owner/CRUD/Data Investor/tambah_investor');
    }

    public function simpan_investor()
    {

        if(isset($_POST['simpan_investor'])){
            $val = $this->validate([
                'nama_investor' => [
                    'label' => 'Nama Investor',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'nohp_investor' => [
                    'label' => 'No Hp Investor',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka'
                    ]
                        
                ],
                'alamat_investor' => [
                    'label' => 'Alamat Investor',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('owner/CRUD/Data Investor/tambah_investor');
            } else {
                $this->investor->insert([
                    'nama_investor' => $this->request->getVar('nama_investor'),
                    'nohp_investor' => $this->request->getVar('nohp_investor'),
                    'alamat_investor' => $this->request->getVar('alamat_investor'),
                ]);
               
                session()->setFlashdata('message', 'Selamat! Data Investor Berhasil ditambahkan');
                return redirect()->to('owner/data_investor');
            }
        } else {
            return redirect()->to('owner/data_investor');
        }
    }

    public function edit_investor($id)
    {
       $investor = new Investor_Model();

       $data = array(
           'investor' => $investor->find($id)
       );

       return view('owner/CRUD/Data Investor/edit_investor', $data);
    }

    public function update_investor($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        

       //model initialize
       $investor = new Investor_Model();
            
       //insert data into database
       $investor->update($id, [
            'nama_investor' => $this->request->getPost('nama_investor'),
            'nohp_investor' => $this->request->getPost('nohp_investor'),
            'alamat_investor' => $this->request->getPost('alamat_investor'),
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Data Investor Berhasil diubah');

       return redirect()->to('owner/data_investor');
    }

    public function hapus_investor($id)
    {
        $success = $this->investor->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Investor Berhasil dihapus');
            return redirect()->to('owner/data_investor');
        }
    }

    public function excel_investor()
    {
        $data = new Investor_Model();
        $investor = $data->getUsers();
        return view('excel/excel_investor', compact('investor'));
    }
}
