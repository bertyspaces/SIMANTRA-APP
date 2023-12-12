<?php

namespace App\Controllers;

use App\Models\BKModel;
use App\Models\KegiatanMitraModel;
use App\Models\KegiatanModel;
use App\Models\NilaiKegiatanMitraModel;
use App\Models\RKModel;

class Penilaian extends BaseController
{
    public function index(): string
    {
        $model = new KegiatanModel();
        $kegiatan_mitra = $model->findAll();

        return view('user/penilaian_mitra/index', [
            'kegiatan_mitra' => $kegiatan_mitra]
        );
    }
    public function kegiatan($id)
    {
        $model = new KegiatanMitraModel();

        $roles = user()->getRoles();
       foreach ($roles as $role) {
           $role ;
       }
       if ($role=='pml') {     
        $mitra = $model->getKegitanMitra('lapangan', $id);
        $keterangan="Mitra Lapangan";
      }else{
          $mitra = $model->getKegitanMitra('pengolahan', $id);
          $keterangan="Mitra Pengolahan";
      }
       

        $model = new KegiatanModel();
        $nama_kegiatan = $model->find($id);

        return view('user/penilaian_mitra/detail', [
            'mitra' => $mitra,
            'kegiatan' => $nama_kegiatan,
            'keterangan'=>$keterangan
        ]);
    }
    public function mitra ($nik){
        $bk = new BKModel();
        $rk = new RKModel();
        $kegiatanMitraModel= new KegiatanMitraModel();

        $data = $kegiatanMitraModel->select('mitra.nama_mitra , kegiatan_mitra.*,kegiatan.nama_kegiatan')->join('mitra', 'mitra.nik = kegiatan_mitra.nik')->join('kegiatan', 'kegiatan.id_kegiatan = kegiatan_mitra.id_kegiatan')->where('kegiatan_mitra.nik',$nik)->get()->getRow();
        // dd($data);
        $query = $rk->select('bobot_kriteria.kriteria , rating_kriteria.*')->join('bobot_kriteria', 'bobot_kriteria.kode = rating_kriteria.kode')->get();
     
        $resultArray = [];
        foreach ($query->getResult() as $row) {
            $resultArray[$row->kriteria][] = [

                'id_rating_kriteria' => $row->id_rating_kriteria,
                'bobot' => $row->bobot,
                'keterangan' => $row->keterangan,
            ];
        }
      
     


        return view('user/form_input_nilai', [
            "penilaian"=>$resultArray,
            "data_mitra"=>$data
        ]);

    }

    public function simpan (){
        $allInput = $this->request->getRawInput();
        $postData = $this->request->getPost();
        $nilaiModel=new NilaiKegiatanMitraModel();
      

        // Ambil nilai array dari input form
        $dataArray = $postData['nilai'];
        $id_kegiatan_mitra = $this->request->getVar('id_kegiatan_mitra');
        
            foreach ($dataArray as $ratingId=>$value) {
                
                $data = [
                    "id_kegiatan_mitra" => $id_kegiatan_mitra,
                    "id_rating_kriteria" => $value
                ];
              
                $nilaiModel->save($data);
            }
     
    

        return json_encode($allInput);
    }
}
