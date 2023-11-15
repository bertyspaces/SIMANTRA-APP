<?php

namespace App\Controllers;

use App\Models\DataMitraModel;
use App\Models\MitraLapanganModel;

class Data_Mitra extends BaseController
{
    public function index()
    {

        $model = new DataMitraModel();
        $data_mitra = $model->findAll();
        return view('/master/data_mitra/index', [
            'data_mitra' => $data_mitra
        ]);
    }
    public function tambah()
    {
        session();

        $data = [

            'title' => 'Tambah Mitra',


        ];
        return view('/master/data_mitra/tambah', $data);
    }
    public function simpan()
    {

        $model = new DataMitraModel();

        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'umur' => $this->request->getVar('umur'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'email' => $this->request->getVar('email'),
        ];

        $model->insert($data);
        session()->setFlashdata('pesan_tambah', 'Data Mitra berhasil ditambah');
        return redirect()->to('data_mitra');
    }
}
