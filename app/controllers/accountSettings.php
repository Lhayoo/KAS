<?php

use App\Core\Controller;
use App\Core\Middleware;

class accountSettings extends Controller
{
    public function __construct()
    {
        Middleware::afterLogin();
    }
    public function index()
    {
        $data['active'] = 'accountSettings';
        $data['title'] = 'Account Settings';
        $this->view('accountSettings/index', $data, 'default');
    }
}