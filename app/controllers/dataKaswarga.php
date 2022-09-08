<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataKasWarga extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'dataKasWarga';
        $data['title'] = 'Data Kas';
        $this->view('admin/kas/dataKasWarga/index', $data, 'default');
    }
    public function tambah()
    {
        $data['active'] = 'dataKasWarga';
        $data['title'] = 'Tambah Data Kas';
        $this->view('admin/kas/dataKasWarga/tambah', $data, 'default');
    }
}