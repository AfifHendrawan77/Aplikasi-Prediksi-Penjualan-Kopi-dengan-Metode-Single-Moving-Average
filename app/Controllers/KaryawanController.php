<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\Transaksipenjualan_Model;
use App\Models\Users;
use App\Models\Supplier_Model;
use App\Models\Kategori_Model;
use App\Models\Promosi_Model;
use App\Models\DataProduk_Model;
use App\Models\Investor_Model;
use App\Models\Dataaktual_Model;

class KaryawanController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "karyawan") {
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
            'transaksi'     => $transaksi->get_penjualan(),
            'total_users' => $data->count_all_users(),
            'total_supplier' => $supplier->count_all_supplier(),
            'total_kategori' => $kategori->count_all_kategori(),
            'total_promosi' => $promosi->count_all_promosi(),
            'total_dataproduk' => $dataproduk->count_all_dataproduk(),
            'total_investor' => $investor->count_all_investor(),
        ];
        return view("karyawan/dashboard",compact('data'));
    }

    public function profil_setting()
    {
        return view("karyawan/profil_setting");
    }

}