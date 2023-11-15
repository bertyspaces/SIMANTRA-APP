<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraPengolahanModel extends Model
{
    protected $table            = 'mitra';
    protected $primaryKey       = 'nik';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nik', 'nama_mitra', 'jenis_kelamin', 'tanggal_lahir', 'umur', 'pendidikan', 'email', 'kategori'];
}
