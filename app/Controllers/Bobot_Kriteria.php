<?php

namespace App\Controllers;

use App\Models\BKModel;
use App\Models\RKModel;

class Bobot_Kriteria extends BaseController
{
    public function index()
    {
        $model = new BKModel();
        $bobot_keriteria = $model->findAll();
        return view('/master/bobot_kriteria/index', [
            'bobot_kriteria' => $bobot_keriteria
        ]);
    }
    public function tambah()
    {
        session();

        $data = [

            'title' => 'Tambah Bobot Kriteria',


        ];
        return view('/master/bobot_kriteria/tambah', $data);
    }
    public function simpan()
    {

        $model = new BKModel();
        $modelRating = new RKModel();

        $data = [
            'kode' => $this->request->getVar('kode'),
            'kriteria' => $this->request->getVar('kriteria'),
            'bobot' => $this->request->getVar('bobot'),
        ];
        $model->insert($data);
        // menambahkan rating sesuai dengan bobot yang disimpan
        $dataRating = [
            [
                'kode' => $this->request->getVar('kode'),
                'bobot' => 1,
                'keterangan' => 'Tidak Baik'
            ],
            [
                'kode' => $this->request->getVar('kode'),
                'bobot' => 2,
                'keterangan' => 'Kurang Baik'
            ],
            [
                'kode' => $this->request->getVar('kode'),
                'bobot' => 3,
                'keterangan' => 'Cukup Baik'
            ],
            [
                'kode' => $this->request->getVar('kode'),
                'bobot' => 4,
                'keterangan' => 'Baik'
            ],
            [
                'kode' => $this->request->getVar('kode'),
                'bobot' => 5,
                'keterangan' => 'Sangat Baik'
            ],

        ];
        foreach ($dataRating as $rating) {
            $modelRating->insert($rating);
        }


        session()->setFlashdata('pesan_tambah', 'Data Bobot Kriteria berhasil ditambah');
        return redirect()->to('bobot_kriteria');
    }
}
