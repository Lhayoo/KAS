<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataPemasukan extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'dataPemasukan';
        $data['title'] = 'Data Pemasukan';
        $this->view('admin/kas/dataPemasukan/index', $data, 'default');
    }
    public function tambah()
    {
        $data['active'] = 'dataPemasukan';
        $data['title'] = 'Tambah Pemasukan';
        $this->view('admin/kas/dataPemasukan/tambah', $data, 'default');
    }
}