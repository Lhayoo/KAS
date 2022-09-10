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
        $data['pemasukan'] = $this->model('pemasukanModel')->getInfo();
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $this->view('anggota/kas/dataPemasukan/index', $data, 'default');
    }
}