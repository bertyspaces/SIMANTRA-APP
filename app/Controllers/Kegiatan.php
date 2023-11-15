<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use CodeIgniter\HTTP\Request;

class Kegiatan extends BaseController
{

    public function index()
    {
        
        $model = new KegiatanModel();
        $kegiatan = $model->findAll();
        return view('/master/kegiatan/index', [
            'kegiatan' => $kegiatan
        ]);
    }
    public function tambah()
    {
        session();

        $data = [

            'title' => 'Tambah Kegiatan',


        ];
        return view('/master/kegiatan/tambah', $data);
    }
    public function simpan()
    {

        $model = new KegiatanModel();

        $data = [
            'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
            'divisi' => $this->request->getVar('divisi'),
            'periode' => $this->request->getVar('periode'),
        ];

        $model->insert($data);
        session()->setFlashdata('pesan_tambah', 'Data Kegiatan berhasil ditambah');
        return redirect()->to('kegiatan');
    }

    public function edit($id_kegiatan)
    {
        // Tampilkan formulir untuk mengedit kegiatan berdasarkan ID
        $KegiatanModel = new KegiatanModel();
        $data['kegiatan'] = $KegiatanModel->find($id_kegiatan);

        return view('master/kegiatan/edit', $data);
    }
    public function update()
    {
        // Proses pembaruan data kegiatan
        if ($this->request->getMethod() === 'post') {
            $kegiatan = new KegiatanModel();

            $data = [
                'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
                'divisi' => $this->request->getPost('divisi'),
                'periode' => $this->request->getPost('periode'),
            ];

            $id_kegiatan = $this->request->getPost('id_kegiatan');

            $kegiatan->update($id_kegiatan, $data);

            return redirect()->to('/kegiatan');
        }
    }
    public function delete($id_kegiatan)
    {
        // Proses penghapusan data kegiatan berdasarkan ID
        $kegiatanModel = new KegiatanModel();
        $kegiatanModel->delete($id_kegiatan);
        return redirect()->to('/kegiatan');
    }
}
