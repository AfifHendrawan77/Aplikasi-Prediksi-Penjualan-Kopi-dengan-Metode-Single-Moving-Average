<?php

namespace App\Controllers\Owner;
use App\Models\Peramalan_Model;
use App\Models\AturanPeramalan_Model;

class Aturan_Peramalan extends BaseController
{

    public function __construct()
    {
        if (session()->get('role') != "owner") {
            echo 'Access denied';
            exit;
        }

    }

    public function index()
    {
        $data = new AturanPeramalan_Model();
        $peramalan = $data->getUsers();
        return view('owner/aturan_peramalan', compact('peramalan'));
    }

    public function tambah_Aturan_Peramalan()
    {
        return view('owner/CRUD/Aturan Peramalan/tambah_aturan');
    }

    public function simpan_aturan()
    {

        if(isset($_POST['simpan_aturan'])){
            $val = $this->validate([
                'nama_barang' => [
                    'label' => 'Nama Barang',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'tahun_peramalan' => [
                    'label' => 'Tahun Peramalan',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]
                        
                ],
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('owner/CRUD/Aturan Peramalan/tambah_aturan');
            } else {
                $data = new AturanPeramalan_Model();
                $data->insert([
                    'nama_barang' => $this->request->getVar('nama_barang'),
                    'tahun_peramalan' => $this->request->getVar('tahun_peramalan')
                ]);
               
                session()->setFlashdata('message', 'Selamat! Data Aturan Berhasil ditambahkan');
                return redirect()->to('owner/Aturan_Peramalan');
            }
        } else {
            return redirect()->to('owner/Aturan_Peramalan');
        }
    }


    public function edit_aturan_peramalan($id)
    {
       $peramalan = new AturanPeramalan_Model();

       $data = array(
           'aturan' => $peramalan->find($id)
       );

       return view('owner/CRUD/Peramalan/edit_aturan', $data);
    }

    public function update_aturan_peramalan($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        

       //model initialize
     
       $dataa = new AturanPeramalan_Model();
            
       //insert data into database
       $dataa->update($id, [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'tahun_peramalan' => $this->request->getPost('tahun_peramalan'),
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Data Peramalan Berhasil diubah');

       return redirect()->to('owner/Aturan_Peramalan');
    }
    

    public function hapus_aturan($id)
    {
        $dataa = new AturanPeramalan_Model();
        $success = $dataa->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Aturan Berhasil dihapus');
            return redirect()->to('owner/Aturan_Peramalan');
        }
    }
}
