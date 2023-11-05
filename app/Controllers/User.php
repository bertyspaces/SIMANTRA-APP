<?php

namespace App\Controllers;

use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\UserModel;

class User extends BaseController
{
    public function index()
    {


        return view('user/index');
    }

    // public function changeGroup()
    // {
    //     $userId = $this->request->getVar('id');
    //     $groupId = $this->request->getVar('group');

    //     $groupModel = new GroupModel();
    //     $groupModel->removeUserFromAllGroups(intval($userId));

    //     $groupModel->addUserToGroup(intval($userId), intval($groupId));

    //     return redirect()->to(base_url('admin/index'));
    // }
}
