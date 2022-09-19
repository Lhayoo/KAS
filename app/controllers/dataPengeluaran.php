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
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'dataPemasukan';
            $data['title']  = 'Tambah users';
            $data['info'] = $this->model('dataInfoModel')->getInfo();
            $this->view('admin/kas/datapengeluaran/tambah', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataPengeluaranModel')->tambah($_POST);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'dataPemasukan';
            $data['title']  = 'Edit users';
            $data['pengeluaran'] = $this->model('dataPengeluaranModel')->getInfoById($id);
            $data['info'] = $this->model('dataInfoModel')->getInfo();
            $this->view('admin/kas/datapengeluaran/edit', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataPengeluaranModel')->edit($_POST);
        }
    }
    public function hapus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataPengeluaranModel')->hapus();
        }
    }
}