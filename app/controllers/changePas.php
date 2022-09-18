<?php

use App\Core\Middleware;
use App\Core\Controller;

class changePas extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
    }
    public function index()
    {
        $data['active'] = 'accountSettings';
        $data['title'] = 'Account Settings';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('accoutSettingsModel')->changePas($_POST);
        }
        $this->view('accountSettings/index', $data, 'default');
    }
}