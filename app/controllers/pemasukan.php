<?php

use App\Core\Controller;
use App\Core\Middleware;

class pemasukan extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAnggota();
    }
    public function index()
    {
        $data['active'] = 'pemasukan';
        $data['title'] = 'Data pemasukan';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['pemasukan'] = $this->model('dataPemasukanModel')->filter($_POST);
        } else {
            $data['pemasukan'] = $this->model('dataPemasukanModel')->getInfo();
        }
        $this->view('anggota/kas/dataPemasukan/index', $data, 'default');
    }
}