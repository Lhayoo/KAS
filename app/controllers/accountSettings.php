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
        $data['data'] = $this->model('dataInfoModel')->getInfo()->fetch_assoc();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('AnggotaModel')->edit($_POST);
        }
        $this->view('accountSettings/index', $data, 'default');
    }
    public function changePas()
    {
        $data['active'] = 'accountSettings';
        $data['title'] = 'Account Settings';
        $data['info'] = $this->model('dataInfoModel')->getInfo();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $this->model('AnggotaModel')->changePas($_POST);
        }
        $this->view('accountSettings/changePas', $data, 'default');
    }
}