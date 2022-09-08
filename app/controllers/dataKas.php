<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataKas extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAnggota();
    }
    public function index()
    {
        $data['active'] = 'dataKas';
        $data['title'] = 'Data Kas';
        $this->view('anggota/kas/dataKas/index', $data, 'default');
    }
}