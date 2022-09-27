<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataKas extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAnggota();
    }
    public function index()
    {
        $data['active'] = 'dataKas';
        $data['title'] = 'Data Kas';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $awal = $_POST['awal'];
            $akhir = $_POST['akhir'];
            if (isset($_POST['filter'])) {
                $data['kas'] = $this->model('dataKasModel')->filter($awal, $akhir);
                $this->view('anggota/kas/dataKas/index', $data, 'default');
            } else {
                $data['kas'] = $this->model('dataKasModel')->getKasById();
            }
        } else {
            $data['kas'] = $this->model('dataKasModel')->getKasById();
        }
        $this->view('anggota/kas/dataKas/index', $data, 'default');
    }
}