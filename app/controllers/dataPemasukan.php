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
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['pemasukan'] = $this->model('dataPemasukanModel')->filter($_POST);
        } else {
            $data['pemasukan'] = $this->model('dataPemasukanModel')->getInfo();;
        }
        $this->view('admin/kas/dataPemasukan/index', $data, 'default');
    }
    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'dataPemasukan';
            $data['title']  = 'Tambah users';
            $data['info'] = $this->model('dataInfoModel')->getInfo();
            $this->view('admin/kas/dataPemasukan/tambah', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataPemasukanModel')->tambah($_POST);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'dataPemasukan';
            $data['title']  = 'Edit users';
            $data['pemasukan'] = $this->model('dataPemasukanModel')->getInfoById($id);
            $data['info'] = $this->model('dataInfoModel')->getInfo();
            $this->view('admin/kas/dataPemasukan/edit', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataPemasukanModel')->edit($_POST);
        }
    }
    public function hapus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataPemasukanModel')->hapus();
        }
    }
}