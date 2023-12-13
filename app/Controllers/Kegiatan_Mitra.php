<?php

namespace App\Controllers;

use App\Models\DataMitraModel;
use App\Models\KegiatanMitraModel;
use App\Models\KegiatanModel;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\UserModel;

class Kegiatan_Mitra extends BaseController
{
    public function index()
    {
        $model = new KegiatanModel();
        $kegiatan_mitra = $model->findAll();

        return view('/master/kegiatan_mitra/index', [
            'kegiatan_mitra' => $kegiatan_mitra
        ]);
    }
    public function detail($id)
    {
        $model = new KegiatanMitraModel();


        $lapangan = $model->getKegitanMitra('lapangan', $id);

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);

        return view('/master/kegiatan_mitra/detail', [
            'lapangan' => $lapangan,
            'pengolahan' => $pengolahan,
            'kegiatan' => $nama_kegiatan
        ]);
    }
    public function simpan($id)
    {

        $model = new KegiatanMitraModel();
        $mitra = new DataMitraModel();
        $validMitra = $mitra->find($this->request->getVar('nik'));
        $mitraTerdaftar = $model->where('nik', $this->request->getVar('nik'))->where('id_kegiatan', $id)->first();
        if ($validMitra) {
            if ($mitraTerdaftar) {
                session()->setFlashdata('pesan_error', 'Mitra sudah terdaftar dikegiatan ini');
                return redirect()->to('kegiatan_mitra/detail/' . $id);
            } else {
                $data = [
                    'nik' => $this->request->getVar('nik'),
                    'kategori' => $this->request->getVar('kategori'),
                    'id_kegiatan' => $id,
                    'id_user'=>$this->request->getVar('pj'),
                ];
                //    dd($data);
                $model->insert($data);
                session()->setFlashdata('pesan_tambah', 'Data Mitra berhasil ditambah');
                return redirect()->to('kegiatan_mitra/detail/' . $id);
            }
        }
        session()->setFlashdata('pesan_error', ' Mitra belum Terdaftar');
        return redirect()->back();
    }
    public function hapus($id_kegiatan_mitra,$id_kegiatan)
    {
        
        $DataMitraModel = new KegiatanMitraModel();
        $DataMitraModel->delete($id_kegiatan_mitra);
        return redirect()->to('/kegiatan_mitra/detail/'.$id_kegiatan);
    }
    public function cariMitra($nik){
        $model = new DataMitraModel();
        $data = $model->where('nik',$nik)->get()->getRow(); 
        return $this->response->setJSON($data);
    }
    public function cariUser($groupId){
        $model = new GroupModel();
        $data=$model->getUsersForGroup($groupId);
        return $this->response->setJSON($data);
    }
}
