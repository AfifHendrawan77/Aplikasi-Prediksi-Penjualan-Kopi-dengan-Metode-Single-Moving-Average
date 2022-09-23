<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\Users;
use App\Models\Supplier_Model;
use App\Models\Kategori_Model;
use App\Models\Promosi_Model;
use App\Models\DataProduk_Model;
use App\Models\Investor_Model;
use App\Models\Dataaktual_Model;
use App\Models\Transaksipenjualan_Model;


class OwnerController extends BaseController
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
        $data = new Users();
        $supplier = new Supplier_Model();
        $kategori = new Kategori_Model();
        $promosi = new Promosi_Model();
        $dataproduk = new DataProduk_Model();
        $investor = new Investor_Model();
        $transaksi = new Transaksipenjualan_Model();
        $data = [
            'user' => $data->getUsers(),
            'total_users' => $data->count_all_users(),
            'total_supplier' => $supplier->count_all_supplier(),
            'total_kategori' => $kategori->count_all_kategori(),
            'total_promosi' => $promosi->count_all_promosi(),
            'total_dataproduk' => $dataproduk->count_all_dataproduk(),
            'total_investor' => $investor->count_all_investor(),
            'transaksi'     => $transaksi->get_penjualan(),
        ];
        return view("owner/dashboard", compact('data'));
    }

    public function data_users()
    {
        $data = new UserModel();
        $users = $data->getUsers();
        return view("owner/data_users", compact('users'));
    }

    public function profil_setting()
    {
        return view("owner/profil_setting");
    }

    public function update_users_akun($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        

       //model initialize
       $datauser = new Users();
       $data['user'] = $datauser->getUsers();
            
       //insert data into database
       $datauser->update($id,[
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone_no' => $this->request->getPost('phone_no'),
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Data User Berhasil diubah');

       return redirect()->to('owner/data_users',$data);
    }

    public function tambah_users()
    {
        return view("CRUD/tambah_users");
    }

    

}