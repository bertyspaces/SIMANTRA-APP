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
            'nilai_kegiatan_mitra' => $kegiatan_mitra]);
    }
    public function detail($id)
    {
        $model = new KegiatanMitraModel();


        $lapangan = $model->getKegitanMitra('lapangan', $id);

        $pengolahan = $model->getKegitanMitra('pengolahan', $id);
        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id); 
        $model = new NilaiKegiatanMitraModel();
       
        // $dataMitra = $model->select('nilai_kegiatan_mitra.* , rating_kriteria.*,kegiatan_mitra.*,kegiatan.nama_kegiatan,mitra.nama_mitra,bobot_kriteria.kriteria')->join('rating_kriteria', 'rating_kriteria.id_rating_kriteria = nilai_kegiatan_mitra.id_rating_kriteria')
        // ->join('kegiatan_mitra','kegiatan_mitra.id_kegiatan_mitra=nilai_kegiatan_mitra.id_kegiatan_mitra')
        // ->join('kegiatan','kegiatan.id_kegiatan=kegiatan_mitra.id_kegiatan')
        // ->join('mitra','mitra.nik=kegiatan_mitra.nik')
        // ->join('bobot_kriteria', 'bobot_kriteria.kode = rating_kriteria.kode');
        // $mitraLapangan=$dataMitra->where('kegiatan_mitra.kategori','lapangan')->get()->getResult();
        $resultMitraLapangan = [];
        foreach ($model->getNilaiMitra('lapangan',$id)->getResult() as $row) {
            $resultMitraLapangan[
                $row->nama_mitra
                ][] = [

                'kriteria' => $row->kriteria,
                'keterangan' => $row->keterangan,
                
            ];
        }
        $resultMitraPengolahan = [];
        foreach ($model->getNilaiMitra('pengolahan',$id)->getResult() as $row) {
            $resultMitraPengolahan[
                $row->nama_mitra
                ][] = [

                'kriteria' => $row->kriteria,
                'keterangan' => $row->keterangan,
                
            ];
        }

        
        // dd($resultArray);

        return view('/master/nilai_kegiatan_mitra/detail', [
            'lapangan' => $resultMitraLapangan,
            // 'pengolahan' => $resultMitraPengolahan,
            'kegiatan' => $nama_kegiatan
        ]);
    }
}
