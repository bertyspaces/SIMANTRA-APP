<?php

namespace App\Controllers;

use App\Models\BKModel;

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

        $data = [
            'kode' => $this->request->getVar('kode'),
            'kriteria' => $this->request->getVar('kriteria'),
            'bobot' => $this->request->getVar('bobot'),
        ];

        $model->insert($data);
        session()->setFlashdata('pesan_tambah', 'Data Bobot Kriteria berhasil ditambah');
        return redirect()->to('bobot_kriteria');
    }
}
