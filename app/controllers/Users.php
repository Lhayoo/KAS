<?php

use App\Core\Controller;
use App\Core\Middleware;

class users extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'users';
        $data['title'] = 'Data User';
        $data['users'] = $this->model('usersModel')->getUsers();
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $this->view('admin/users/index', $data, 'default');
    }
    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'users';
            $data['title']  = 'Tambah users';
            $this->view('admin/users/tambah', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('usersModel')->tambah($_POST);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'users';
            $data['title']  = 'Edit users';
            $data['users'] = $this->model('usersModel')->getUsersById($id);
            $data['info'] = $this->model('dataInfoModel')->getInfo();
            $this->view('admin/users/edit', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('usersModel')->edit($_POST, $id);
        }
    }
    public function hapus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('usersModel')->hapus();
        }
    }
}