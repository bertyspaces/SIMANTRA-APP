<?php

namespace App\Controllers;

use App\Models\MitraPengolahanModel;

class Mitra_Pengolahan extends BaseController
{
    public function index()
    {

        $model = new MitraPengolahanModel();
        $mitra_pengolahan = $model->where('kategori', 'Mitra Pengolahan')->findAll();
        return view('/master/mitra_pengolahan/index', [
            'mitra_pengolahan' => $mitra_pengolahan
        ]);
    }
    public function tambah()
    {
        session();

        $data = [

            'title' => 'Tambah Mitra',


        ];
        return view('/master/mitra_pengolahan/tambah', $data);
    }
    public function simpan()
    {

        $model = new MitraPengolahanModel();

        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'umur' => $this->request->getVar('umur'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'email' => $this->request->getVar('email'),
            'kategori' => 'Mitra Pengolahan',
        ];

        $model->insert($data);
        session()->setFlashdata('pesan_tambah', 'Data Mitra Pengolahan berhasil ditambah');
        return redirect()->to('mitra_lapangan');
    }
}
