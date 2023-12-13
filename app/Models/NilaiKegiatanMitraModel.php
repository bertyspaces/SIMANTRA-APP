<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiKegiatanMitraModel extends Model
{
    protected $table            = 'nilai_kegiatan_mitra';
    protected $primaryKey       = 'id_nilai_kegiatan_mitra';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_kegiatan_mitra', 'id_rating_kriteria'];

    protected $useTimestamps = false;
    // protected $createdField  = 'id_kegiatan';
    // protected $updatedField  = ['nik', 'kategori', 'id_kegiatan'];
    public function getNilaiMitra($kategoriMitra = null , $idKegitan=null)
    {
        $dataMitra = $this->db->table('nilai_kegiatan_mitra')
        ->select('nilai_kegiatan_mitra.* , rating_kriteria.*,kegiatan_mitra.*,kegiatan.nama_kegiatan,mitra.nama_mitra,bobot_kriteria.kriteria')->join('rating_kriteria', 'rating_kriteria.id_rating_kriteria = nilai_kegiatan_mitra.id_rating_kriteria')
        ->join('kegiatan_mitra','kegiatan_mitra.id_kegiatan_mitra=nilai_kegiatan_mitra.id_kegiatan_mitra')
        ->join('kegiatan','kegiatan.id_kegiatan=kegiatan_mitra.id_kegiatan')
        ->join('mitra','mitra.nik=kegiatan_mitra.nik')
        ->join('bobot_kriteria', 'bobot_kriteria.kode = rating_kriteria.kode');

      
      
        if ($kategoriMitra) {
            $dataMitra->where('kegiatan_mitra.kategori', $kategoriMitra);
        }
        if ($idKegitan) {
            $dataMitra->where('kegiatan_mitra.id_kegiatan', $idKegitan);
        }

        return $dataMitra->get();
    }
   
}
