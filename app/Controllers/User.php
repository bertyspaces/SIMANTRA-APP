<?php

namespace App\Controllers;

use App\Models\DataMitraModel;
use App\Models\KegiatanMitraModel;
use App\Models\KegiatanModel;
use App\Models\NilaiKegiatanMitraModel;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\UserModel;

class User extends BaseController
{
    public function index()
    {

        $model = new KegiatanModel();
        $kegiatan_mitra = $model->findAll();
        $kegiatanModel = new KegiatanModel();
        $result = $kegiatanModel->select('kegiatan.*, COUNT(kegiatan_mitra.nik) AS jumlah_mitra, GROUP_CONCAT(kegiatan_mitra.nik) AS mitra_ids')
            ->join('kegiatan_mitra', 'kegiatan.id_kegiatan = kegiatan_mitra.id_kegiatan')
            ->groupBy('kegiatan.id_kegiatan')
            ->get()
            ->getResult();

        $modelPenilaian = new KegiatanMitraModel();
        $dinilai = count($modelPenilaian->where('status', 'dinilai')->where('id_user', user()->id)->get()->getResult());
        $belum = count($modelPenilaian->where('status', 'belum dinilai')->where('id_user', user()->id)->get()->getResult());
        return view('user/index', [
            'kegiatan_mitra' => $result,
            'dinilai' => $dinilai,
            'belum' => $belum
        ]);
    }
    public function penilaian_mitra()
    {

        return view('user/penilaian_mitra/index');
    }
}
