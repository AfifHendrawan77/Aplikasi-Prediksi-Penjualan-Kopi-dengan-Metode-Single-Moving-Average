<?php

namespace App\Controllers\Karyawan;
use App\Models\Dataproduk_Model;

class Data_Produk extends BaseController
{
    public function index()
    {
       $produk = new Dataproduk_Model();
       if (!$this->validate([]))
       {
           $data['validation'] = $this->validator;
           $data['gambar'] = $produk->getGambar();
           return view('karyawan/data_produk', $data);
       }
    }

    public function tambah_produk()
    {
        return view('karyawan/CRUD/Data Produk/tambah_produk');
    }

    public function simpan_prodk() {
        $model = new Dataproduk_Model();
        if ($this->request->getMethod() !== 'simpan_produk') {
            return redirect()->to('karyawan/Data_Produk/tambah_produk');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
            
            return $this->index();
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/images/');
        $data = array(
            'nama_produk'  => $this->request->getPost('nama_produk'),
            'harga'  => $this->request->getPost('harga'),
            'gambar' => $upload->getName(),
        );
        $model->simpan_gambar($data);
        return redirect()->to('./karyawan/Data_Produk/tambah_produk')->with('berhasil', 'Data Berhasil di Simpan');
        }
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
                'harga' => [
                    'label' => 'Harga',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka',
                    ]   
                ],
                'deskripsi_produk' => [
                    'label' => 'Deskripsi',
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

                return view('karyawan/CRUD/Data Produk/tambah_produk');
            }
                $berkas = new Dataproduk_Model();
                $dataBerkas = $this->request->getFile('berkas');
                $fileName = $dataBerkas->getRandomName();
                $berkas->insert([
                    'berkas' => $fileName,
                    'nama_produk' => $this->request->getPost('nama_produk'),
                    'harga' => $this->request->getPost('harga'),
                    'deskripsi_produk' => $this->request->getPost('deskripsi_produk')
                ]);
                $dataBerkas->move('assets/images/', $fileName);
                session()->setFlashdata('message', 'Selamat! Data Produk Berhasil ditambahkan');
                return redirect()->to('karyawan/data_produk');
        } else {
            return redirect()->to('karyawan/data_produk');
        }
    }

    public function hapus_produk($id)
    {
        $berkas = new Dataproduk_Model();
        $success = $berkas->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Produk Berhasil dihapus');
            return redirect()->to('karyawan/data_produk');
        }
    }

    
    public function edit_produk($id)
    {
        $produk = new Dataproduk_Model();

       $data = array(
           'produk' => $produk->find($id)
       );

       return view('karyawan/CRUD/Data Produk/edit_produk', $data);
    }

    public function update_produk()
    {
       
        $berkas = new Dataproduk_Model();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();

        //insert data into database
        $berkas->update($this->request->getVar('id'), [
            'berkas' => $fileName,
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi_produk' => $this->request->getPost('deskripsi_produk'),
        ]);
        $dataBerkas->move('assets/images/', $fileName);
        //flash message
        session()->setFlashdata('message_update', 'Selamat! Data Kategori Berhasil diubah');

        return redirect()->to('karyawan/data_produk');
    }

}
