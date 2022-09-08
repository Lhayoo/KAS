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
        $this->view('admin/users/index', $data, 'default');
    }
    public function tambah()
    {
        $data['active'] = 'users';
        $data['title'] = 'Tambah User';
        $this->view('admin/users/tambah', $data, 'default');
    }
}