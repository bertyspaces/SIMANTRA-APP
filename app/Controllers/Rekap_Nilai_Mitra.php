<?php

namespace App\Controllers;

use App\Models\NilaiKegiatanMitraModel;

class Rekap_Nilai_Mitra extends BaseController
{
    public function index()
    {
        $maxValues = [];
        $model = new NilaiKegiatanMitraModel();
        return view('/master/rekap_nilai_mitra');
    }
}
