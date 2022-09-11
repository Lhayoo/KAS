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
        $data['warga'] = $this->model('dataWargaModel')->getInfo();
        $data['id'] = $this->model('dataWargaModel')->getInfo()->fetch_assoc();
        $data['umur'] = date("Y-m-d");
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $this->view('admin/warga//index', $data, 'default');
    }
    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $data['active']  = 'dataWarga';
            $data['title']  = 'Tambah Warga';
            $this->view('admin/warga/tambah', $data, 'default');
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataWargaModel')->tambah($_POST);
        }
    }
    public function hapus()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('dataWargaModel')->hapus();
        }
    }
}