<?php

use App\Core\Controller;
use App\Core\Middleware;

class pengeluaran extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAnggota();
    }
    public function index()
    {
        $data['active'] = 'pengeluaran';
        $data['title'] = 'Data pengeluaran';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data['pengeluaran'] = $this->model('dataPengeluaranModel')->filter($_POST);
        } else {
            $data['pengeluaran'] = $this->model('dataPengeluaranModel')->getInfo();
        }
        $this->view('anggota/kas/dataPengeluaran/index', $data, 'default');
    }
}