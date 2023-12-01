<?php

namespace App\Models;

use CodeIgniter\Model;

class BKModel extends Model
{
    protected $table            = 'bobot_kriteria';
    protected $primaryKey       = 'kode';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kode', 'kriteria', 'bobot'];
    protected $useTimestamps = false;
    protected $createdField  = 'kode';
    protected $updatedField  = ['kode', 'kriteria', 'bobot'];
    public function ratings()
    {
        return $this->hasMany(RKModel::class, 'kode');
    }

}
