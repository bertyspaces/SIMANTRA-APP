<?php

namespace App\Controllers;

use App\Models\KegiatanModel;
use CodeIgniter\HTTP\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

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
            session()->setFlashdata('pesan_edit', 'Data Kegiatan berhasil diubah');
            return redirect()->to('/kegiatan');
        }
    }
    public function delete($id_kegiatan)
    {
        // Proses penghapusan data kegiatan berdasarkan ID
        $kegiatanModel = new KegiatanModel();
        $kegiatanModel->delete($id_kegiatan);
        session()->setFlashdata('pesan_edit', 'Data Kegiatan berhasil dihapus');
        return redirect()->to('/kegiatan');
    }
    public function cetak()
    {


        // $kegiatan = $model->findAll();

        // return view('/master/kegiatan/cetak', [
        //     'kegiatan' => $kegiatan
        // ]);
        // $data['kegiatan'] = $this->$model('KegiatanModel')->getAllKegiatan();
        // // Buat objek dompdf
        // $dompdf = new Dompdf();
        // // Load view ke dalam dompdf
        // $html = view('cetak', $data);
        // $dompdf->loadhtml($html);
        // $dompdf->setPaper('A4', 'potrrait');
        // // Render PDF
        // $dompdf->render();

        // // Simpan atau kirimkan file PDF ke perangkat pengguna
        // $dompdf->stream('cetak_kegiatan.pdf', ['Attachment' => 0]);

        $kegiatanModel = new \App\Models\KegiatanModel();
        $data['kegiatan'] = $kegiatanModel->getAllKegiatan();

        $dompdf = new \Dompdf\Dompdf();
        $options = new \Dompdf\Options();
        $options->setIsRemoteEnabled(true);

        // Load the HTML content
        // $html = view('/master/kegiatan/cetak', $data);
        // $dompdf->loadHtml($html);


        $dompdf->setOptions($options);
        $dompdf->output();
        $dompdf->loadHtml(view('/master/kegiatan/cetak', $data));
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Output the PDF content
        $dompdf->stream('cetak_kegiatan.pdf', array("attachment" => false));
    }
}
