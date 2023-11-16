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
    public function edit($kode)
    {
        // Tampilkan formulir untuk mengedit kegiatan berdasarkan ID
        $BKModel = new BKModel();
        $data['bobot_kriteria'] = $BKModel->find($kode);

        return view('master/bobot_kriteria/edit', $data);
    }
    public function update()
    {
        // Proses pembaruan data kegiatan
        if ($this->request->getMethod() === 'post') {
            $bobot_keriteria = new BKModel();

            $data = [
                'kode' => $this->request->getPost('kode'),
                'kriteria' => $this->request->getPost('kriteria'),
            '   bobot' => $this->request->getPost('bobot'),
            ];

            $kode = $this->request->getPost('kode');

            $bobot_keriteria->update($kode, $data);

            return redirect()->to('/bobot_kriteria');
        }
    }
    public function hapus($kode)
    {
        // Proses penghapusan data kegiatan berdasarkan ID
        $BKModel = new BKModel();
        $BKModel->delete($kode);
        return redirect()->to('/bobot_kriteria');
    }
}
