<?php

namespace App\Controllers;

use App\Models\DataMitraModel;
use App\Models\KegiatanMitraModel;
use App\Models\KegiatanModel;
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
      
        return view('user/index', [
            'kegiatan_mitra' => $result
        ]);
    }
    public function penilaian_mitra()
    {


        return view('user/penilaian_mitra/index');
    }

    // public function changeGroup()
    // {
    //     $userId = $this->request->getVar('id');
    //     $groupId = $this->request->getVar('group');

    //     $groupModel = new GroupModel();
    //     $groupModel->removeUserFromAllGroups(intval($userId));

    //     $groupModel->addUserToGroup(intval($userId), intval($groupId));

    //     return redirect()->to(base_url('admin/index'));
    // }
}
