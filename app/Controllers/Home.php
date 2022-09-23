<?php

namespace App\Controllers;
use App\Models\Kategori_Model;
use App\Models\Dataproduk_Model;
use App\Models\Promosi_Model;

class Home extends BaseController
{
    public function index()
    {
        $produk = new Dataproduk_Model();
        $promosi = new Promosi_Model();
        $kategori = new Kategori_Model();
        $data['gambar'] = $produk->getGambar();
        $data['promosi'] = $promosi->getGambar();
        $data['kategori'] = $kategori->getGambar();
        return view('landing_page', $data);

    }

   public function detail_produk($id)
   {
        $produk = new Dataproduk_Model();
        $data['gambar'] = $produk->getGambar();
        $data['gambar'] = $produk->find($id);
        return view('details_produk', $data);
   }

    public function login()
    {
        return view('login');
    }

}
