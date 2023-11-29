<?php

namespace App\Models;

use CodeIgniter\Model;
use Myth\Auth\Models\GroupModel;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id', 'username', 'password_hash'];
}
