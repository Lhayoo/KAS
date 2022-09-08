<?php

use App\Core\Controller;
use App\Core\Middleware;

class dataPengeluaran extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'dataPengeluaran';
        $data['title'] = 'Data pengeluaran';
        $this->view('admin/kas/dataPengeluaran/index', $data, 'default');
    }
}