<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanMitraModel extends Model
{
    protected $table            = 'kegiatan_mitra';
    protected $primaryKey       = 'id_kegiatan_mitra';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nik', 'kategori', 'id_kegiatan'];

    protected $useTimestamps = false;
    protected $createdField  = 'id_kegiatan';
    protected $updatedField  = ['nik', 'kategori', 'id_kegiatan'];

    public function getKegitanMitra($kategoriMitra = null , $idKegitan=null)
    {
        $query = $this->db->table('kegiatan_mitra')
            ->join('kegiatan', 'kegiatan.id_kegiatan = kegiatan_mitra.id_kegiatan')
            ->join('mitra', 'kegiatan_mitra.nik = mitra.nik');

        if ($kategoriMitra) {
            $query->where('kegiatan_mitra.kategori', $kategoriMitra);
        }
        if ($idKegitan) {
            $query->where('kegiatan_mitra.id_kegiatan', $idKegitan);
        }

        return $query->get()->getResultArray();
    }
}
