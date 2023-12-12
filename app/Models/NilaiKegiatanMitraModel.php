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

   
}
