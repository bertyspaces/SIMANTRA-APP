<?php

namespace App\Controllers;

use App\Models\DataMitraModel;


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
    public function edit($nik)
    {
        // Tampilkan formulir untuk mengedit kegiatan berdasarkan ID
        $DataMitraModel = new DataMitraModel();
        $data['data_mitra'] = $DataMitraModel->find($nik);

        return view('master/data_mitra/edit', $data);
    }
    public function update()
    {
        // Proses pembaruan data kegiatan
        if ($this->request->getMethod() === 'post') {
            $data_mitra = new DataMitraModel();

            $data = [
                'nik' => $this->request->getPost('nik'),
                'nama_mitra' => $this->request->getPost('nama_mitra'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'umur' => $this->request->getPost('umur'),
                'pendidikan' => $this->request->getPost('pendidikan'),
                'email' => $this->request->getPost('email'),
            ];


            $nik = $this->request->getPost('nik');

            $data_mitra->update($nik, $data);
            session()->setFlashdata('pesan_edit', 'Data Mitra berhasil diubah');
            return redirect()->to('/data_mitra');
        }
    }
    public function hapus($nik)
    {
        // Proses penghapusan data kegiatan berdasarkan ID
        $DataMitraModel = new DataMitraModel();
        $DataMitraModel->delete($nik);
        session()->setFlashdata('pesan_hapus', 'Data Mitra berhasil dihapus');
        return redirect()->to('/data_mitra');
    }

    public function tampil_upload()
    {
        return view('master/data_mitra/upload');
    }

    public function upload()
    {
        $file = $this->request->getFile('excel_file');
        if ($file->isValid() && $file->getExtension() == 'xlsx') {
            // Menggunakan library PhpSpreadsheet untuk membaca file Excel
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file->getPathname());
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            // Menggunakan DataMitraModel untuk menyimpan data ke database
            $dataMitraModel = new DataMitraModel();
            foreach ($sheetData as $row) {
                $data = [
                    'nik' => $row['A'], // Kolom A
                    'nama_mitra' => $row['B'], // Kolom B
                    'jenis_kelamin' => $row['C'], // Kolom C
                    'tanggal_lahir' => $row['D'], // Kolom D
                    'umur' => $row['E'], // Kolom E
                    'pendidikan' => $row['F'], // Kolom F
                    'email' => $row['G'], // Kolom G
                ];
                $dataMitraModel->insert($data);
            }
            return "File uploaded and data saved successfully!";
        } else {
            return "Invalid file. Please upload a valid Excel file (xlsx).";
        }
    }
}
