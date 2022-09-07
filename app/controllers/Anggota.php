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
        $data['title'] = 'Anggota';
        $data['active'] = 'anggota';
        $this->view('anggota/index', $data, 'default');
    }
}