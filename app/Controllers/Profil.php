<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profil extends BaseController
{
    public function index()
    {
        $UserModel = new UserModel();
        $data['user'] = $UserModel->find(user()->id);
        return view('/master/profil', $data);
    }
}
