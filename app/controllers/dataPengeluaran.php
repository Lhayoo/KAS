<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataPengeluaran extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'dataPengeluaran';
        $data['title'] = 'Data pengeluaran';
        $data['pengeluaran'] = $this->model('dataPengeluaranModel')->getInfo();
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $this->view('admin/kas/dataPengeluaran/index', $data, 'default');
    }
    public function tambah()
    {
        $data['active'] = 'dataPengeluaran';
        $data['title'] = 'Tambah pengeluaran';
        $this->view('admin/kas/dataPengeluaran/tambah', $data, 'default');
    }
}