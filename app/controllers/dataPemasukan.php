<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataPemasukan extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'dataPemasukan';
        $data['title'] = 'Data Pemasukan';
        $this->view('kas/dataPemasukan/index', $data, 'default');
    }
}