<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table            = 'kegiatan';
    protected $primaryKey       = 'id_kegiatan';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_kegiatan', 'divisi', 'periode'];

    protected $useTimestamps = false;
    protected $createdField  = 'id_kegiatan';
    protected $updatedField  = ['nama_kegiatan', 'divisi', 'periode'];
}
