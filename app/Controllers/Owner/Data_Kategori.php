<?php

namespace App\Controllers\Owner;

use App\Models\Kategori_Model;

class Data_Kategori extends BaseController
{

    public function index()
    {
        
        $produk = new Kategori_Model();
        $data['gambar'] = $produk->getGambar();
        return view('owner/data_kategori',$data);
    }

    public function tambah_kategori()
    {
        return view('owner/CRUD/Data Kategori/tambah_kategori');
    }

    public function simpan_kategori()
    {

        if(isset($_POST['simpan_kategori'])){
            $val = $this->validate([
                'nama_kategori' => [
                    'label' => 'Nama Kategori',
                    'rules' => 'required',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
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

                return view('owner/CRUD/Data Kategori/tambah_kategori');
            }
                $berkas = new Kategori_Model();
                $dataBerkas = $this->request->getFile('berkas');
                $fileName = $dataBerkas->getRandomName();
                $berkas->insert([
                    'berkas' => $fileName,
                    'nama_kategori' => $this->request->getPost('nama_kategori')
                ]);
                $dataBerkas->move('assets/kategori/', $fileName);
                session()->setFlashdata('message', 'Selamat! Data Kategori Berhasil ditambahkan');
                return redirect()->to('owner/data_kategori');
        } else {    
            return redirect()->to('owner/data_kategori');
        }
    }

    public function edit_kategori($id)
    {
       $berkas = new Kategori_Model();
       $data = array(
           'berkas' => $berkas->find($id)
       );

       return view('owner/CRUD/Data Kategori/edit_kategori', $data);
    }

    public function update_kategori()
    {
        $berkas = new Kategori_Model();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();

        //insert data into database
        $berkas->update($this->request->getVar('id'), [
            'berkas' => $fileName,
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ]);
        $dataBerkas->move('assets/kategori/', $fileName);
        //flash message
        session()->setFlashdata('message_update', 'Selamat! Data Kategori Berhasil diubah');

        return redirect()->to('owner/data_kategori');
    }

    public function hapus_kategori($id)
    {
        $berkas = new Kategori_Model();
        $success = $berkas->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Kategori Berhasil dihapus');
            return redirect()->to('owner/data_kategori');
        }
    }
}
