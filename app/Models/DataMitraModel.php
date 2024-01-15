<?php

namespace App\Models;

use CodeIgniter\Model;

class DataMitraModel extends Model
{
    protected $table            = 'mitra';
    protected $primaryKey       = 'nik';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nik', 'nama_mitra', 'jenis_kelamin', 'tanggal_lahir', 'umur', 'pendidikan', 'email'];
    protected $useTimestamps = false;
    protected $createdField  = 'nik';
    protected $updatedField  = ['nik', 'nama_mitra', 'jenis_kelamin', 'tanggal_lahir', 'umur', 'pendidikan', 'email'];
}
