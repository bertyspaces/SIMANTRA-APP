<?php

namespace App\Controllers;

use App\Models\NilaiKegiatanMitraModel;

class Rekap_Nilai_Mitra extends BaseController
{
    public function index()
    {
        $maxValues = [];
        $model = new NilaiKegiatanMitraModel();
        // dd($model->getNilaiMitra()->getResultArray());
        // foreach ($model->getNilaiMitra()->getResultArray() as $data) {
        //     $namaMitra = $data['nama_mitra'];
        //     $nilai_Teringgi = $maxValues[$data['kode']];
        //     $nilai = ($data['bobot'] / $nilai_Teringgi['bobot']) * $data['bobot_kriteria'];

        //     // Jika id_kegiatan_mitra belum ada dalam array $sumValues, inisialisasi dengan nilai
        //     if (!isset($sumValues[$namaMitra])) {
        //         $sumValues[$namaMitra] = $nilai;
        //     } else {
        //         // Jika sudah ada, akumulasikan nilai
        //         $sumValues[$namaMitra] += $nilai;
        //     }
        // }
      

        return view('/master/rekap_nilai_mitra');
    }
}
