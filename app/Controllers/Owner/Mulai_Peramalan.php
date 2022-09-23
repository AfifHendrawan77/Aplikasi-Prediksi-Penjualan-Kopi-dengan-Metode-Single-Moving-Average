<?php

namespace App\Controllers\Owner;
use App\Models\Peramalan_Model;
use App\Models\AturanPeramalan_Model;
use App\Models\MobilModel;
use App\Models\Dataaktual_Model;

class Mulai_Peramalan extends BaseController
{

    function __construct()
    {
        $this->peramalan = new Peramalan_Model();
    }

    public function index()
    {
        return view('owner/mulai_peramalan');
    }
    
    
}
