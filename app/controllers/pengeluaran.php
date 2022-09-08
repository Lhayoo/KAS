<?php

use App\Core\Controller;
use App\Core\Middleware;

class pengeluaran extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAnggota();
    }
    public function index()
    {
        $data['active'] = 'pengeluaran';
        $data['title'] = 'Data pengeluaran';
        $data['pengeluaran'] = $this->model('pengeluaranModel')->getInfo();
        $this->view('anggota/kas/dataPengeluaran/index', $data, 'default');
    }
}