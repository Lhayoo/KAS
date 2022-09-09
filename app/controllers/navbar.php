<?php

use app\core\Controller;
use app\core\Middleware;

class navbar extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
    }
    public function navbar()
    {
        $data['active'] = 'navbar';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        $this->view('template/navbar', $data, 'default');
    }
}