<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataWarga extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'dataWarga';
        $data['title'] = 'Data warga';
        $this->view('admin/warga//index', $data, 'default');
    }
    public function tambah()
    {
        $data['active'] = 'dataWarga';
        $data['title'] = 'Tambah warga';
        $this->view('admin/warga/tambah', $data, 'default');
    }
}