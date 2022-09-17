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
        $data['data'] = $this->model('homeModel')->getInfo();
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $this->view('admin/home/index', $data, 'default');
    }
}
