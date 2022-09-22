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
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $data['infoKas'] = $this->model('dataKasWargaModel')->getInfo();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['filter'])) {
                $data['kas'] = $this->model('dataKasWargaModel')->filter($_POST);
                $this->view('admin/kas/dataKasWarga/index', $data, 'default');
            } else {
                $data['kas'] = $this->model('dataKasWargaModel')->getInfo();
            }
        } else {
            $data['kas'] = $this->model('dataKasWargaModel')->getInfo();
        }
        $this->view('admin/kas/dataKasWarga/index', $data, 'default');
    }
    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'dataKasWarga';
            $data['title']  = 'Tambah Kas';
            $data['kas'] = $this->model('dataKasWargaModel')->getUser();
            $data['info'] = $this->model('dataInfoModel')->getInfo();
            $this->view('admin/kas/dataKasWarga/tambah', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataKasWargaModel')->tambah($_POST);
        }
    }
    public function hapus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataKasWargaModel')->hapus($_POST);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'dataKasWarga';
            $data['title']  = 'Edit Kas';
            $data['kas'] = $this->model('dataKasWargaModel')->getKasById($id);
            $data['info'] = $this->model('dataInfoModel')->getInfo();
            $this->view('admin/kas/dataKasWarga/edit', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataKasWargaModel')->edit($_POST);
        }
    }
    public function export()
    {
        $data['active'] = 'dataKasWarga';
        $data['title'] = 'data KasWarga';
        $data['kas'] = $this->model('dataKasWargaModel')->getInfo();
        $this->view('admin/kas/dataKasWarga/export', $data, 'export');
    }
}