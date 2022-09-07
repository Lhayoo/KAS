<?php

use App\Core\Controller;
use App\Core\Middleware;

class logout
{
    public function __construct()
    {
        Middleware::beforeLogin();
    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            session_destroy();
            Controller::redirect(BASE_URL . 'login');
        }
    }
}