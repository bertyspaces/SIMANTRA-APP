<?php

namespace App\Controllers;

use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\UserModel;
use App\Models\DataMitraModel;
use App\Models\KegiatanModel;

class Kepala_BPS extends BaseController
{
    public function index()
    {
        $modelKegiatan = new  KegiatanModel();
        $modelMitra = new  DataMitraModel();
        $modelUser = new UserModel();
        $counUser = count($modelUser->findAll());
        $counKegiatan = count($modelKegiatan->findAll());
        $counMitra = count($modelMitra->findAll());
        return view('/kepala_bps/index', [
            'countKegiatan' => $counKegiatan,
            'countMitra' => $counMitra,
            'countUser' => $counUser,
        ]);
    }
}
