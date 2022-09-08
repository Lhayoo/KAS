<?php

use App\Core\Controller;
use App\Core\Middleware;

class wargaPindahan extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
        Middleware::isAdmin();
    }
    public function index()
    {
        $data['active'] = 'wargaPindahan';
        $data['title'] = 'Warga pindahan';
        $this->view('admin/warga/wargaPindahan/index', $data, 'default');
    }
}