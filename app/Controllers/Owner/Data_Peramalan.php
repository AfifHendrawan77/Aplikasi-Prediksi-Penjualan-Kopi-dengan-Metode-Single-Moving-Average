<?php

namespace App\Controllers\Owner;
use App\Models\Peramalan_Model;
use App\Models\AturanPeramalan_Model;
use App\Models\MobilModel;
use App\Models\Dataaktual_Model;

class Data_Peramalan extends BaseController
{

    function __construct()
    {
        $this->peramalan = new Peramalan_Model();
    }

    public function index()
    {
        $data = new Peramalan_Model();
        $data = [
            'peramalan' => $data->getAll(),
        ];
        return view('owner/data_peramalan', compact('data'));
    }
    
    public function tambah_peramalan()
    {
        $dataa = new AturanPeramalan_Model();
        $peramalan = $dataa->getUsers();
        return view('owner/CRUD/Peramalan/tambah_peramalan', compact('peramalan'));
    }

    public function simpan_peramalan()
    {

        if(isset($_POST['simpan_peramalan'])){
            $val = $this->validate([
                'terjual' => [
                    'label' => 'Data Terjual',
                    'rules' => 'required|numeric',
                    'errors'=> [
                        'required' => '{field} tidak boleh kosong',
                        'numeric'  => '{field} hanya bisa diisi dengan angka'
                    ]
                ],
            ]);

            if(!$val){
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                return view('owner/CRUD/Peramalan/tambah_peramalan');
            } else {
                $this->peramalan->insert([
                    'nama_barang' => $this->request->getVar('nama_barang'),
                    'bulan' => $this->request->getVar('bulan'),
                    'tahun' => $this->request->getVar('tahun'),
                    'terjual' => $this->request->getVar('terjual')
                ]);
               
                session()->setFlashdata('message', 'Selamat! Data Peramalan Berhasil ditambahkan');
                return redirect()->to('owner/data_peramalan');
            }
        } else {
            return redirect()->to('owner/data_peramalan');
        }
    }

    public function edit_peramalan($id)
    {
       $peramalan = new Peramalan_Model();

       $data = array(
           'data_peramalan' => $peramalan->find($id)
       );

       return view('owner/CRUD/Peramalan/edit_peramalan', $data);
    }

    public function update_peramalan($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        

       //model initialize
       $peramalan = new Peramalan_Model();
       $dataa = new AturanPeramalan_Model();
            
       //insert data into database
       $peramalan->update($id, [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'bulan' => $this->request->getPost('bulan'),
            'tahun' => $this->request->getPost('tahun'),
            'terjual' => $this->request->getPost('terjual'),
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Data Peramalan Berhasil diubah');

       return redirect()->to('owner/data_peramalan');
    }

    public function hapus_peramalan($id)
    {
        $success = $this->peramalan->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Peramalan Berhasil dihapus');
            return redirect()->to('owner/data_peramalan');
        }
    }

    public function hasil_peramalan()
    {
        
        // $periode = $this->request->getVar('periode');
        // $db      = \Config\Database::connect();
        // $x=("SELECT * FROM peramalan ORDER BY id DESC LIMIT 0, $periode");
        // $data['banyak'] = $periode;
        // $data['peramalan'] = $x->result();
        // $dataaa = new Peramalan_Model();
        // $peramalan = $dataaa->getUsers();
        $data = new Peramalan_Model();
        $ambil = $data->getperiode($this->request->getVar('namaperiode'));

        // NILAI MOVING AVERAGE
       $ma0 = $ambil['0']->terjual + $ambil['1']->terjual + $ambil['2']->terjual;
       $sma0 = $ma0/3;
       
       $ma1 = $ambil['1']->terjual + $ambil['2']->terjual + $ambil['3']->terjual;
       $sma1 = $ma1/3;
      
       $ma2 = $ambil['2']->terjual + $ambil['3']->terjual + $ambil['4']->terjual;
       $sma2 = $ma2/3;
      
       $ma3 = $ambil['3']->terjual + $ambil['4']->terjual + $ambil['5']->terjual;
       $sma3 = $ma3/3;
      
       $ma4 = $ambil['4']->terjual + $ambil['5']->terjual + $ambil['6']->terjual;
       $sma4 = $ma4/3;
       
       $error4 =  abs($ambil['3']->terjual - $sma4);
       $error3 =  abs($ambil['2']->terjual - $sma3);
       $error2 =  abs($ambil['1']->terjual - $sma2);
       $error1 =  abs($ambil['0']->terjual - $sma1);

       $mape4 = $error4/$ambil['3']->terjual*100;
       $mape3 = $error3/$ambil['2']->terjual*100;
       $mape2 = $error2/$ambil['1']->terjual*100;
       $mape1 = $error1/$ambil['0']->terjual*100;
       
       $bulan_sekarang = date('F');
       $bulan_selanjutnya = date('F', strtotime($bulan_sekarang . '+1 month'));
      
        $periode = [
            'periode_p' => $data->getperiode($this->request->getVar('namaperiode')),
            'periode_e' => $data->get3periode($this->request->getVar('namaperiode')),
            'hasil' => $ambil['0']->terjual + $ambil['1']->terjual + $ambil['2']->terjual,
            'hasilmape' => $mape1+$mape2+$mape3+$mape4,
            'bulan_selanjutnya' => $bulan_selanjutnya
        ];
        // dd($periode['periode_p']);
        // $jml = $periode['periode_p'];
        
        // dd($periode['hasil']);       
        // $periode = $data->getperiode($this->request->getVar('periode')); 
        return view('owner/hasil_peramalan', compact('periode'));
    }

    public function excel_peramalan()
    {
        $data = new Peramalan_Model();
        $peramalan = $data->getUsers();
        return view('owner/CRUD/Peramalan/excel_peramalan', compact('peramalan'));
    }



    public function edit_aturan_peramalan($id)
    {
       $peramalan = new AturanPeramalan_Model();

       $data = array(
           'aturan' => $peramalan->find($id)
       );

       return view('owner/CRUD/Peramalan/edit_peramalan', $data);
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
}