<?php

namespace App\Controllers\Owner;
use App\Models\Promosi_Model;

class Data_Promosi extends BaseController
{

    public function index()
    {
        
        $produk = new Promosi_Model();
       if (!$this->validate([]))
       {
           $data['validation'] = $this->validator;
           $data['gambar'] = $produk->getGambar();
           return view('owner/data_promosi', $data);
       }
    }

    public function tambah_promosi()
    {
        return view('owner/CRUD/Data Promosi/tambah_promosi');
    }


    public function simpan_promosi()
    {

        if(isset($_POST['simpan_promosi'])){
            $val = $this->validate([
                'berkas' => [
                    'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                    'errors' => [
                        'uploaded' => 'Harus Ada File yang diupload',
                        'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                        'max_size' => 'Ukuran File Maksimal 2 MB'
                    ]
                ]
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('owner/CRUD/Data Promosi/tambah_promosi');
            }
           
                $berkas = new Promosi_Model();
                $dataBerkas = $this->request->getFile('berkas');
                $fileName = $dataBerkas->getRandomName();
                $berkas->insert([
                    'berkas' => $fileName,
                ]);
                $dataBerkas->move('assets/promosi/', $fileName);
                session()->setFlashdata('message', 'Selamat! Data Promosi Berhasil ditambahkan');
                return redirect()->to('owner/data_promosi');
        } else {    
            return redirect()->to('owner/data_promosi');
        }
    }

    public function edit_promosi($id)
    {
        $berkas = new Promosi_Model();

       $data = array(
           'berkas' => $berkas->find($id)
       );

       return view('owner/CRUD/Data Promosi/edit_promosi', $data);
    }

    public function update_promosi()
    {
        $berkas = new Promosi_Model();
        $uploadberkas = $this->request->getFile('berkas');
        $fileName = $uploadberkas->getRandomName();

        // $berkas = new Promosi_Model();
        // $dataBerkas = $this->request->getFile('berkas');
        // $fileName = $dataBerkas->getRandomName();

        $berkas->update($this->request->getVar('id'), [
            'berkas' => $fileName,
        ]);
        $uploadberkas->move('assets/promosi/', $fileName);
        //flash message
        session()->setFlashdata('message_update', 'Selamat! Data Promosi Berhasil diubah');
        return redirect()->to('owner/data_promosi');
        
    }

    public function hapus_promosi($id)
    {
        $berkas = new Promosi_Model();
        $success = $berkas->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Promosi Berhasil dihapus');
            return redirect()->to('owner/data_promosi');
        }
    }

 
}
