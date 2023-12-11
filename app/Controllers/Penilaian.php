<?php

namespace App\Controllers;

use App\Models\KegiatanMitraModel;
use App\Models\KegiatanModel;

class Penilaian extends BaseController
{
    public function index(): string
    {
        $model = new KegiatanModel();
        $kegiatan_mitra = $model->findAll();

        return view('user/penilaian_mitra/index', [
            'kegiatan_mitra' => $kegiatan_mitra]
        );
    }
    public function kegiatan($id)
    {
        $model = new KegiatanMitraModel();


        $lapangan = $model->getKegitanMitra('lapangan', $id);

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);

        return view('user/penilaian_mitra/detail', [
            'lapangan' => $lapangan,
            'pengolahan' => $pengolahan,
            'kegiatan' => $nama_kegiatan
        ]);
    }
}
