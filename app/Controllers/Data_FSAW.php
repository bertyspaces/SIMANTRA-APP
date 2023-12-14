<?php

namespace App\Controllers;

use App\Models\KegiatanMitraModel;
use App\Models\KegiatanModel;
use App\Models\NilaiKegiatanMitraModel;

class Data_FSAW extends BaseController
{
    public function index()
    {
        $model = new KegiatanModel();
        $kegiatan_mitra = $model->findAll();
        return view('/master/data_fsaw/index', [
            'nilai_kegiatan_mitra' => $kegiatan_mitra
        ]);
    }

    public function detail($id)
    {
        $model = new KegiatanMitraModel();


        $lapangan = $model->getKegitanMitra('lapangan', $id);

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);
        $model = new NilaiKegiatanMitraModel();
        // mitra lapangan

        $resultMitraLapangan = [];
        $normalisasiMitraLapangan = [];
        $hasilMitraLapangan = [];
        $jumlah = count($model->getNilaiMitra('lapangan', $id)->getResult());
        $total = 0;

        foreach ($model->getNilaiMitra('lapangan', $id)->getResult() as $row) {
            $resultMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $row->bobot,
            ];
            // lapangan : normalisasi
            $normalisasiMitraLapangan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => number_format($row->bobot / $jumlah, 2, '.', ''),
            ];
            // lapangan:hasil fuzzy
            $nilai = number_format(($row->bobot / $jumlah) * $row->bobot_kriteria, 2, '.', '');
            $total += $nilai;
            $hasilMitraLapangan[$row->nama_mitra][] = [             
                    'kode' => $row->kode,
                    'keterangan' => $nilai,
                    'total'=>$total
            ];
        }
        // dd($hasilMitraLapangan);
        // mitra pengolahan
        $resultMitraPengolahan = [];
        $normalisasiMitraPengolahan = [];
        $hasilMitraPengolahan = [];
        $total = 0;
        foreach ($model->getNilaiMitra('pengolahan', $id)->getResult() as $row) {
            $resultMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => $row->bobot,
            ];
             // pengolahan : normalisasi
             $normalisasiMitraPengolahan[$row->nama_mitra][] = [
                'kode' => $row->kode,
                'keterangan' => number_format($row->bobot / $jumlah, 2, '.', ''),
            ];
             // pengolahan:hasil fuzzy
             $nilai = number_format(($row->bobot / $jumlah) * $row->bobot_kriteria, 2, '.', '');
             $total += $nilai;
             $hasilMitraPengolahan[$row->nama_mitra][] = [
                     'kode' => $row->kode,
                     'keterangan' => $nilai,
                     'total'=>$total
             ];
             
        };
        // dd($resultMitraLapangan);

        return view('/master/data_fsaw/detail', [
            'lapangan' => $resultMitraLapangan,
            'pengolahan' => $resultMitraPengolahan,
            'normalisasi_lapangan' => $normalisasiMitraLapangan,
            'hasil_penilaian_lapangan' => $hasilMitraLapangan,
            'normalisasi_pengolahan' => $normalisasiMitraPengolahan,
            'hasil_penilaian_pengolahan' => $hasilMitraPengolahan,
            'kegiatan' => $nama_kegiatan
        ]);
    }
}
