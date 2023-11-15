<?php

namespace App\Controllers;

use App\Models\MitraLapanganModel;

class Mitra_Lapangan extends BaseController
{
    public function index()
    {

        $model = new MitraLapanganModel();
        $mitra_lapangan = $model->where('kategori', 'mitra lapangan')->findAll();
        return view('/master/mitra_lapangan/index', [
            'mitra_lapangan' => $mitra_lapangan
        ]);
    }
    public function tambah()
    {
        session();

        $data = [

            'title' => 'Tambah Mitra',


        ];
        return view('/master/mitra_lapangan/tambah', $data);
    }
    public function simpan()
    {

        $model = new MitraLapanganModel();

        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'umur' => $this->request->getVar('umur'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'email' => $this->request->getVar('email'),
            'kategori' => 'mitra lapangan',
        ];

        $model->insert($data);
        session()->setFlashdata('pesan_tambah', 'Data Mitra Lapangan berhasil ditambah');
        return redirect()->to('mitra_lapangan');
    }
}
