<?php

namespace App\Models;

use CodeIgniter\Model;

class RKModel extends Model
{
    protected $table            = 'rating_kriteria';
    protected $primaryKey       = 'id_rating_kriteria';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_rating_kriteria', 'kode', 'bobot','keterangan'];
    protected $useTimestamps = false;
    protected $createdField  = 'id_rating_kriteria';
    protected $updatedField  = ['id_rating_kriteria', 'kode', 'bobot','keterangan'];

     public function bobotKriteria()
    {
        return $this->belongsTo(BKModel::class, 'kode');
    }
    public function getRatingWithBobotKriteria()
    {
        $db = db_connect();

        $query = $db->table('rating_kriteria')
            ->select('rating_kriteria.id_rating_kriteria,rating_kriteria.bobot,rating_kriteria.keterangan, bobot_kriteria.kode, bobot_kriteria.kriteria')
            ->join('bobot_kriteria', 'bobot_kriteria.kode = rating_kriteria.kode')->orderBy('bobot_kriteria.kode')
            ->get();

        return $query->getResult();
    }
}
