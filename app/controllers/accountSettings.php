<?php

use App\Core\Controller;
use App\Core\Middleware;

class accountSettings extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAnggota();
    }
    public function index()
    {
        $data['active'] = 'accountSettings';
        $data['title'] = 'Account Settings';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $this->view('accountSettings/index', $data, 'default');
    }
}