<?php

namespace App\Controllers;

use App\Models\BKModel;
use App\Models\KegiatanMitraModel;
use App\Models\KegiatanModel;
use App\Models\NilaiKegiatanMitraModel;
use App\Models\RKModel;

class Nilai_Kegiatan_Mitra extends BaseController
{
    public function index()
    {
        $model = new KegiatanModel();
        $kegiatan_mitra = $model->findAll();


        return view('/master/nilai_kegiatan_mitra/index', [
            'nilai_kegiatan_mitra' => $kegiatan_mitra
        ]);
    }
    public function detail($id)
    {
        // $model = new KegiatanMitraModel();


        // $lapangan = $model->getKegitanMitra('lapangan', $id);

        // $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        // $model = new KegiatanModel();
        // $nama_kegiatan = $model->find($id); 
        // $model = new NilaiKegiatanMitraModel();
        // $resultMitraLapangan = [];
        // foreach ($model->getNilaiMitra('lapangan',$id)->getResult() as $row) {
        //     $resultMitraLapangan[
        //         $row->nama_mitra
        //         ][] = [

        //         'kriteria' => $row->kriteria,
        //         'keterangan' => $row->keterangan,

        //     ];
        // }
        // $resultMitraPengolahan = [];
        // foreach ($model->getNilaiMitra('pengolahan',$id)->getResult() as $row) {
        //     $resultMitraPengolahan[
        //         $row->nama_mitra
        //         ][] = [

        //         'kriteria' => $row->kriteria,
        //         'keterangan' => $row->keterangan,

        //     ];
        // }


        // dd($resultArray);
        //memilih kegiatan
        $model = new KegiatanMitraModel();


        $lapangan = $model->getKegitanMitra('lapangan', $id);

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);
        $model = new NilaiKegiatanMitraModel();
        // data MITRA LAPANGAN per kegiatan 
        $resultMitraLapangan = [];
        $normalisasiMitraLapangan = [];
        $hasilMitraLapangan = [];

        $total = 0;
        $maxValues = [];
        $sumValues = [];
        $rankingLapangan = [];
        // menentukan nilai teertinggii per kolom LAPANGAN:NILAI TERTINGGI
        foreach ($model->getNilaiMitra('lapangan', $id)->getResultArray() as $data) {
            $kode = $data['kode'];
            $nilai = $data['bobot'];

            // Jika kode belum ada dalam array $maxValues atau nilai lebih tinggi, update nilai tertinggi
            if (!isset($maxValues[$kode]) || $nilai > $maxValues[$kode]['bobot']) {
                $maxValues[$kode] = ['kode' => $kode, 'bobot' => $nilai];
            }
        }

        foreach ($model->getNilaiMitra('lapangan', $id)->getResult() as $row) {
            // menentukan ranking nilai mitra lapangan
            $namaMitra = $row->nama_mitra;
            $nilai_Teringgi = $maxValues[$row->kode];
            $nilai = ($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria;

            // Jika id_kegiatan_mitra belum ada dalam array $sumValues, inisialisasi dengan nilai
            if (!isset($sumValues[$namaMitra])) {
                $sumValues[$namaMitra] = $nilai;
            } else {
                // Jika sudah ada, akumulasikan nilai
                $sumValues[$namaMitra] += $nilai;
            }
            uasort($sumValues, function ($a, $b) {
                return $b - $a;
            });
            $rankingLapangan = $sumValues;

            //menampilkan data nilai mitra
            $resultMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $row->bobot,
            ];


            // lapangan : normalisasi
            $nilai_Teringgi = $maxValues[$row->kode];
            $normalisasiMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => number_format($row->bobot / $nilai_Teringgi['bobot'], 2, '.', ''),
            ];

            // lapangan:hasil fuzzy
            $nilai = number_format(($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria, 2, '.', '');
            $hasilMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $nilai,
                'total' => $sumValues[$row->nama_mitra]
            ];
        }
        //---------------------------------------------
        // mitra pengolahan
        $resultMitraPengolahan = [];
        $normalisasiMitraPengolahan = [];
        $hasilMitraPengolahan = [];
        $total = 0;
        // PENGOLAHAN:NIALI TERTINGGI
        $maxValues = [];
        foreach ($model->getNilaiMitra('pengolahan', $id)->getResultArray() as $data) {
            $kode = $data['kode'];
            $nilai = $data['bobot'];
            // Jika kode belum ada dalam array $maxValues atau nilai lebih tinggi, update nilai tertinggi
            if (!isset($maxValues[$kode]) || $nilai > $maxValues[$kode]['bobot']) {
                $maxValues[$kode] = ['kode' => $kode, 'bobot' => $nilai];
            }
        }
        // ranking
        $sumPengolahan = [];
        foreach ($model->getNilaiMitra('pengolahan', $id)->getResultArray() as $data) {
            $namaMitra = $data['nama_mitra'];
            $nilai_Teringgi = $maxValues[$data['kode']];
            $nilai = ($data['bobot'] / $nilai_Teringgi['bobot']) * $data['bobot_kriteria'];

            // Jika id_kegiatan_mitra belum ada dalam array $sumValues, inisialisasi dengan nilai
            if (!isset($sumPengolahan[$namaMitra])) {
                $sumPengolahan[$namaMitra] = $nilai;
            } else {
                // Jika sudah ada, akumulasikan nilai
                $sumPengolahan[$namaMitra] += $nilai;
            }
        }
        uasort($sumPengolahan, function ($a, $b) {
            return $b - $a;
        });
        $rankingPengolahan = $sumPengolahan;
        foreach ($model->getNilaiMitra('pengolahan', $id)->getResult() as $row) {
            $resultMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $row->bobot,
            ];
            // pengolahan : normalisasi
            $nilai_Teringgi = $maxValues[$row->kode];
            $normalisasiMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => number_format($row->bobot / $nilai_Teringgi['bobot'], 2, '.', ''),
            ];
            // pengolahan:hasil fuzzy
            $nilai = number_format(($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria, 2, '.', '');
            $total += $nilai;
            $hasilMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $nilai,
                'total' => $total
            ];
        };

        return view('/master/nilai_kegiatan_mitra/detail', [
            'hasil_penilaian_lapangan' => $hasilMitraLapangan,
            'ranking_lapangan' => $rankingLapangan,
            'ranking_pengolahan' => $rankingPengolahan,
            'hasil_penilaian_pengolahan' => $hasilMitraPengolahan,
            'kegiatan' => $nama_kegiatan
        ]);
    }
    public function cetak_nilai_mitra_lapangan($id)
    {
        $model = new KegiatanMitraModel();


        $lapangan = $model->getKegitanMitra('lapangan', $id);

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);
        $model = new NilaiKegiatanMitraModel();
        // data MITRA LAPANGAN per kegiatan 
        $resultMitraLapangan = [];
        $normalisasiMitraLapangan = [];
        $hasilMitraLapangan = [];

        $total = 0;
        $maxValues = [];
        $sumValues = [];
        $rankingLapangan = [];
        // menentukan nilai teertinggii per kolom LAPANGAN:NILAI TERTINGGI
        foreach ($model->getNilaiMitra('lapangan', $id)->getResultArray() as $data) {
            $kode = $data['kode'];
            $nilai = $data['bobot'];

            // Jika kode belum ada dalam array $maxValues atau nilai lebih tinggi, update nilai tertinggi
            if (!isset($maxValues[$kode]) || $nilai > $maxValues[$kode]['bobot']) {
                $maxValues[$kode] = ['kode' => $kode, 'bobot' => $nilai];
            }
        }

        foreach ($model->getNilaiMitra('lapangan', $id)->getResult() as $row) {
            // menentukan ranking nilai mitra lapangan
            $namaMitra = $row->nama_mitra;
            $nilai_Teringgi = $maxValues[$row->kode];
            $nilai = ($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria;

            // Jika id_kegiatan_mitra belum ada dalam array $sumValues, inisialisasi dengan nilai
            if (!isset($sumValues[$namaMitra])) {
                $sumValues[$namaMitra] = $nilai;
            } else {
                // Jika sudah ada, akumulasikan nilai
                $sumValues[$namaMitra] += $nilai;
            }
            uasort($sumValues, function ($a, $b) {
                return $b - $a;
            });
            $rankingLapangan = $sumValues;

            // lapangan:hasil fuzzy
            $nilai = number_format(($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria, 2, '.', '');
            $hasilMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $nilai,
                'total' => $sumValues[$row->nama_mitra]
            ];
        }


        $nilaikegiatanmitraModel = new \App\Models\NilaiKegiatanMitraModel();
        $data['hasil_penilaian_lapangan'] = $hasilMitraLapangan;

        $data = [
            'hasil_penilaian_lapangan' => $hasilMitraLapangan,
            'kegiatan' => $nama_kegiatan
        ];

        $dompdf = new \Dompdf\Dompdf();
        $options = new \Dompdf\Options();
        $options->setIsRemoteEnabled(true);


        // $dompdf->output();
        $dompdf->loadHtml(view('/master/nilai_kegiatan_mitra/cetak_nilai_mitra_lapangan', $data));
        $dompdf->setPaper('A4', 'portrait');
        // Render PDF
        $dompdf->render();
        // Output the PDF content
        $dompdf->stream('Laporan Nilai Mitra Lapangan.pdf', array("Attachment" => false));
    }

    public function cetak_nilai_mitra_pengolahan($id)
    {
        $model = new KegiatanMitraModel();

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);
        $model = new NilaiKegiatanMitraModel();
        // data MITRA LAPANGAN per kegiatan 
        $resultMitraLapangan = [];
        $normalisasiMitraLapangan = [];
        $hasilMitraLapangan = [];

        $total = 0;
        $maxValues = [];
        $sumValues = [];
        $rankingLapangan = [];
        // menentukan nilai teertinggii per kolom LAPANGAN:NILAI TERTINGGI
        foreach ($model->getNilaiMitra('pengolahan', $id)->getResultArray() as $data) {
            $kode = $data['kode'];
            $nilai = $data['bobot'];

            // Jika kode belum ada dalam array $maxValues atau nilai lebih tinggi, update nilai tertinggi
            if (!isset($maxValues[$kode]) || $nilai > $maxValues[$kode]['bobot']) {
                $maxValues[$kode] = ['kode' => $kode, 'bobot' => $nilai];
            }
        }

        foreach ($model->getNilaiMitra('pengolahan', $id)->getResult() as $row) {
            // menentukan ranking nilai mitra lapangan
            $namaMitra = $row->nama_mitra;
            $nilai_Teringgi = $maxValues[$row->kode];
            $nilai = ($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria;

            // Jika id_kegiatan_mitra belum ada dalam array $sumValues, inisialisasi dengan nilai
            if (!isset($sumValues[$namaMitra])) {
                $sumValues[$namaMitra] = $nilai;
            } else {
                // Jika sudah ada, akumulasikan nilai
                $sumValues[$namaMitra] += $nilai;
            }
            uasort($sumValues, function ($a, $b) {
                return $b - $a;
            });
            $rankingLapangan = $sumValues;

            // lapangan:hasil fuzzy
            $nilai = number_format(($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria, 2, '.', '');
            $hasilMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $nilai,
                'total' => $sumValues[$row->nama_mitra]
            ];
        }


        $nilaikegiatanmitraModel = new \App\Models\NilaiKegiatanMitraModel();


        $data = [
            'hasil_penilaian_pengolahan' => $hasilMitraPengolahan,
            'kegiatan' => $nama_kegiatan
        ];

        $dompdf = new \Dompdf\Dompdf();
        $options = new \Dompdf\Options();
        $options->setIsRemoteEnabled(true);


        // $dompdf->output();
        $dompdf->loadHtml(view('/master/nilai_kegiatan_mitra/cetak_nilai_mitra_pengolahan', $data));
        $dompdf->setPaper('A4', 'portrait');
        // Render PDF
        $dompdf->render();
        // Output the PDF content
        $dompdf->stream('Laporan Nilai Mitra Pengolahan.pdf', array("Attachment" => false));
    }

    public function cetak_rangking_lapangan($id)
    {
        $model = new KegiatanMitraModel();

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);
        $model = new NilaiKegiatanMitraModel();
        // data MITRA LAPANGAN per kegiatan 
        $resultMitraLapangan = [];
        $normalisasiMitraLapangan = [];
        $hasilMitraLapangan = [];
        $total = 0;
        $maxValues = [];
        $sumValues = [];
        $rankingLapangan = [];
        // menentukan nilai teertinggii per kolom LAPANGAN:NILAI TERTINGGI
        foreach ($model->getNilaiMitra('lapangan', $id)->getResultArray() as $data) {
            $kode = $data['kode'];
            $nilai = $data['bobot'];

            // Jika kode belum ada dalam array $maxValues atau nilai lebih tinggi, update nilai tertinggi
            if (!isset($maxValues[$kode]) || $nilai > $maxValues[$kode]['bobot']) {
                $maxValues[$kode] = ['kode' => $kode, 'bobot' => $nilai];
            }
        }

        foreach ($model->getNilaiMitra('lapangan', $id)->getResult() as $row) {
            // menentukan ranking nilai mitra lapangan
            $namaMitra = $row->nama_mitra;
            $nilai_Teringgi = $maxValues[$row->kode];
            $nilai = ($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria;

            // Jika id_kegiatan_mitra belum ada dalam array $sumValues, inisialisasi dengan nilai
            if (!isset($sumValues[$namaMitra])) {
                $sumValues[$namaMitra] = $nilai;
            } else {
                // Jika sudah ada, akumulasikan nilai
                $sumValues[$namaMitra] += $nilai;
            }
            uasort($sumValues, function ($a, $b) {
                return $b - $a;
            });
            $rankingLapangan = $sumValues;


            // lapangan:hasil fuzzy
            $nilai = number_format(($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria, 2, '.', '');
            $hasilMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $nilai,
                'total' => $sumValues[$row->nama_mitra]
            ];
        }


        // // $nilaikegiatanmitraModel = new \App\Models\NilaiKegiatanMitraModel();
        // $data['ranking_lapangan'] = $rankingLapangan;
        $data = [
            'ranking_lapangan' => $rankingLapangan,
            'kegiatan' => $nama_kegiatan
        ];

        $dompdf = new \Dompdf\Dompdf();
        $options = new \Dompdf\Options();
        $options->setIsRemoteEnabled(true);



        // $dompdf->output();
        $dompdf->loadHtml(view('/master/nilai_kegiatan_mitra/cetak_rangking_lapangan', $data));
        $dompdf->setPaper('A4', 'portrait');
        // Render PDF
        $dompdf->render();
        // Output the PDF content


        return $dompdf->stream('Laporan Rangking Kinerja Mitra Lapangan.pdf', array("Attachment" => 0));
    }

    public function cetak_rangking_pengolahan($id)
    {
        $model = new KegiatanMitraModel();

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);
        $model = new NilaiKegiatanMitraModel();
        // data MITRA LAPANGAN per kegiatan 
        $resultMitraLapangan = [];
        $normalisasiMitraLapangan = [];
        $hasilMitraLapangan = [];
        $total = 0;
        $maxValues = [];
        $sumValues = [];
        $rankingPengolahan = [];
        // menentukan nilai teertinggii per kolom LAPANGAN:NILAI TERTINGGI
        foreach ($model->getNilaiMitra('pengolahan', $id)->getResultArray() as $data) {
            $kode = $data['kode'];
            $nilai = $data['bobot'];

            // Jika kode belum ada dalam array $maxValues atau nilai lebih tinggi, update nilai tertinggi
            if (!isset($maxValues[$kode]) || $nilai > $maxValues[$kode]['bobot']) {
                $maxValues[$kode] = ['kode' => $kode, 'bobot' => $nilai];
            }
        }

        foreach ($model->getNilaiMitra('pengolahan', $id)->getResult() as $row) {
            // menentukan ranking nilai mitra lapangan
            $namaMitra = $row->nama_mitra;
            $nilai_Teringgi = $maxValues[$row->kode];
            $nilai = ($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria;

            // Jika id_kegiatan_mitra belum ada dalam array $sumValues, inisialisasi dengan nilai
            if (!isset($sumValues[$namaMitra])) {
                $sumValues[$namaMitra] = $nilai;
            } else {
                // Jika sudah ada, akumulasikan nilai
                $sumValues[$namaMitra] += $nilai;
            }
            uasort($sumValues, function ($a, $b) {
                return $b - $a;
            });
            $rankingPengolahan = $sumValues;

            // lapangan:hasil fuzzy
            $nilai = number_format(($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria, 2, '.', '');
            $hasilMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $nilai,
                'total' => $sumValues[$row->nama_mitra]
            ];
        }


        // // $nilaikegiatanmitraModel = new \App\Models\NilaiKegiatanMitraModel();
        // $data['ranking_lapangan'] = $rankingLapangan;
        $data = [
            'ranking_pengolahan' => $rankingPengolahan,
            'kegiatan' => $nama_kegiatan
        ];

        $dompdf = new \Dompdf\Dompdf();
        $options = new \Dompdf\Options();
        $options->setIsRemoteEnabled(true);



        // $dompdf->output();
        $dompdf->loadHtml(view('/master/nilai_kegiatan_mitra/cetak_rangking_pengolahan', $data));
        $dompdf->setPaper('A4', 'portrait');
        // Render PDF
        $dompdf->render();
        // Output the PDF content


        return $dompdf->stream('Laporan Ranking Kinerja Mitra Pengolahan.pdf', array("Attachment" => 0));
    }
}
