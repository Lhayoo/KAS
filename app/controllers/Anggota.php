<?php

use App\Core\Controller;
use App\Core\Middleware;

class Anggota extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAnggota();
    }
    public function index()
    {
        $data['title'] = 'Home';
        $data['active'] = 'anggota';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $this->view('anggota/dashboard/index', $data, 'default');
    }
}