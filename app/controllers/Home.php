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
        $this->view('home/index', $data, 'default');
    }
}