<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataKasWarga extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'dataKasWarga';
        $data['title'] = 'Data Kas';
        $this->view('kas/dataKasWarga/index', $data, 'default');
    }
}