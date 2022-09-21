<?php

use App\Core\Controller;
use App\Core\Middleware;

class Home extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'Dashboard';
        $data['title'] = 'home';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $awal = $_POST['awal'];
            $akhir = $_POST['akhir'];
            $data['data'] = $this->model('homeModel')->getInfo($awal, $akhir);
        } else {
            $data['data'] = $this->model('homeModel')->getInfo();
        }
        $this->view('admin/home/index', $data, 'default');
    }
}