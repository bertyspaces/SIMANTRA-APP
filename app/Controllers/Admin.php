<?php

namespace App\Controllers;

use App\Models\DataMitraModel;
use App\Models\KegiatanModel;
use App\Models\UserModel as ModelsUserModel;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Models\GroupModel;

class Admin extends BaseController
{
    public function index()
    {
        $modelKegiatan = new  KegiatanModel();
        $modelMitra = new  DataMitraModel();
        $modelUser = new UserModel();
        $counUser = count($modelUser->findAll());
        $counKegiatan = count($modelKegiatan->findAll());
        $counMitra = count($modelMitra->findAll());
        return view('/admin/index', [
            'countKegiatan' => $counKegiatan,
            'countMitra' => $counMitra,
            'countUser' => $counUser,
        ]);
    }
    public function activate()
    {
        $userModel = new UserModel();
        $data = [
            'activate_hash' => null,
            'active' => $this->request->getVar('active') == '0' || '' ? '1' : '0',
        ];
        $userModel->update($this->request->getVar('id'), $data);
        session()->setFlashdata('pesan_user', 'Update Status Pengguna Berhasil');
        return redirect()->to(base_url('admin/manajemenUser'));
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
    public function addUser()
    {
        return view('/admin/tambah');
    }

    public function changeGroup()
    {
        $userId = $this->request->getVar('id');
        $groupId = $this->request->getVar('group');

        $groupModel = new GroupModel();
        $groupModel->removeUserFromAllGroups(intval($userId));

        $groupModel->addUserToGroup(intval($userId), intval($groupId));
        session()->setFlashdata('pesan_ubah_group', 'Group Berhasil Diubah');
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
        $userEntity->password = $password_baru;
        $userModel->save($userEntity);
        session()->setFlashdata('pesan_ubah_password', 'Password Berhasil Diubah');
        return redirect()->to(base_url('admin/manajemenUser'));
    }
}
