<?php

namespace App\Controllers\Owner;
use App\Models\Dataaktual_Model;

class Data_Aktual extends BaseController
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
        $data = new Dataaktual_Model();
        $aktual = $data->getPenjualan();
        return view('owner/data_aktual', compact('aktual'));
    }

    public function tambah_aktual()
    {
        return view('owner/CRUD/Data Aktual/tambah_aktual');
    }

    public function simpan_aktual()
    {

        if(isset($_POST['simpan_aktual'])){
            $val = $this->validate([
                'nama_barang' => [
                    'label' => 'Nama Barang',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                '1' => [
                    'label' => 'Januari',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]
                        
                ],
                '2' => [
                    'label' => 'Februari',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]
                ],
                '3' => [
                    'label' => 'Maret',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]
                ],
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('owner/CRUD/Data Aktual/tambah_aktual');
            } else {
                $data = new Dataaktual_Model();
                $data->insert([
                    'nama_barang' => $this->request->getVar('nama_barang'),
                    1 => $this->request->getVar(1),
                    2 => $this->request->getVar(2),
                    3 => $this->request->getVar(3)
                ]);
               
                session()->setFlashdata('message', 'Selamat! Data Aktual Berhasil ditambahkan');
                return redirect()->to('owner/data_aktual');
            }
        } else {
            return redirect()->to('owner/data_aktual');
        }
    }


    public function excel_aktual()
    {
        $data = new Dataaktual_Model();
        $aktual = $data->getPenjualan();
        return view('excel/excel_aktual', compact('aktual'));
    }

}
