<?php

namespace App\Controllers;

use App\Models\UserModel as ModelsUserModel;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Models\GroupModel;

class Admin extends BaseController
{
    public function index()
    {

        return view('/admin/index');
    }
    public function manajemenUser()
    {

        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        $groupModel = new GroupModel();

        foreach ($data['users'] as $row) {
            $dataRow['group'] = $groupModel->getGroupsForUser($row->id);
            $dataRow['row'] = $row;
            $data['row' . $row->id] = view('admin/row', $dataRow);
        }


        $data['groups'] = $groupModel->whereNotIn('name', ['admin'])->findAll();

        $data['title'] = 'Users';
        return view('admin/manajemenUser', $data);
    }
    public function addUser (){
        return view('/admin/tambah');
    }

    public function changeGroup()
    {
        $userId = $this->request->getVar('id');
        $groupId = $this->request->getVar('group');

        $groupModel = new GroupModel();
        $groupModel->removeUserFromAllGroups(intval($userId));

        $groupModel->addUserToGroup(intval($userId), intval($groupId));

        return redirect()->to(base_url('admin/manajemenUser'));
    }
    public function changePassword()
    {
        $userId = $this->request->getVar('user_id');
        $password_baru = $this->request->getVar('password_baru');
        $userModel = new ModelsUserModel();
        $user = $userModel->find($userId);
        // $dataUser->update($userId, ['password_hash' => password_hash($password_baru, PASSWORD_DEFAULT)]);
        $userEntity = new User($user);
        $userEntity->password= $password_baru;
        $userModel->save($userEntity);
        return redirect()->to(base_url('admin/manajemenUser'));
    }
}
