<?php

namespace App\Controllers;

use App\Models\KegiatanMitraModel;
use App\Models\KegiatanModel;
use App\Models\NilaiKegiatanMitraModel;

class Data_FSAW extends BaseController
{
    public function index()
    {
        //menampilkan kegiatan 
        $model = new KegiatanModel();
        $kegiatan_mitra = $model->findAll();
        return view('/master/data_fsaw/index', [
            'nilai_kegiatan_mitra' => $kegiatan_mitra
        ]);
    }

    public function detail($id)
    {
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
            // rumus fuzzy
            $nilai = ($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria;

            // Jika id_kegiatan_mitra belum ada dalam array $sumValues, inisialisasi dengan nilai
            if (!isset($sumValues[$namaMitra])) {
                $sumValues[$namaMitra] = $nilai;
            } else {
                // Jika sudah ada, akumulasikan nilai
                $sumValues[$namaMitra] += $nilai;
            }
            //mengurutkan data nilai dari yang terbesar ke terkecil
            uasort($sumValues, function ($a, $b) {
                return $b - $a;
            });
            $rankingLapangan = $sumValues;

            //menampilkan data nilai mitra
            $resultMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $row->bobot,
                'penilai'=>$row->username
            ];

            // lapangan : normalisasi
            $nilai_Teringgi = $maxValues[$row->kode];
            $normalisasiMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => number_format($row->bobot / $nilai_Teringgi['bobot'], 2, '.', ''),
                'penilai'=>$row->username
            ];

            // lapangan:hasil fuzzy
            $nilai = number_format(($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria, 2, '.', '');
            $hasilMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $nilai,
                'total' => $sumValues[$row->nama_mitra],
                'penilai'=>$row->username
            ];
        }

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
                'penilai'=>$row->username
            ];
            // pengolahan : normalisasi
            $nilai_Teringgi = $maxValues[$row->kode];
            $normalisasiMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => number_format($row->bobot / $nilai_Teringgi['bobot'], 2, '.', ''),
                'penilai'=>$row->username
            ];
            // pengolahan:hasil fuzzy
            $nilai = number_format(($row->bobot / $nilai_Teringgi['bobot']) * $row->bobot_kriteria, 2, '.', '');
            $total += $nilai;
            $hasilMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $nilai,
                'total' => $total,
                'penilai'=>$row->username
            ];
        };

        return view('/master/data_fsaw/detail', [
            'lapangan' => $resultMitraLapangan,
            'pengolahan' => $resultMitraPengolahan,
            'normalisasi_lapangan' => $normalisasiMitraLapangan,
            'hasil_penilaian_lapangan' => $hasilMitraLapangan,
            'normalisasi_pengolahan' => $normalisasiMitraPengolahan,
            'hasil_penilaian_pengolahan' => $hasilMitraPengolahan,
            'kegiatan' => $nama_kegiatan,
            'ranking_lapangan' => $rankingLapangan,
            'ranking_pengolahan' => $rankingPengolahan

        ]);
    }
}
