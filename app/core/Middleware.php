<?php

namespace App\Core;

class Middleware
{
    public static function afterlogin()
    {
        if (!isset($_SESSION['login'])) {
            return Controller::redirect(BASE_URL . 'login');
        }
    }
    public static function beforeLogin()
    {
        if (isset($_SESSION['login'])) {
            if ($_SESSION['user']['role'] == 'admin') {
                return Controller::redirect(BASE_URL);
            } else {
                return Controller::redirect(BASE_URL . 'anggota');
            }
        }
    }
    public static function isAdmin()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] != 'admin') {
                return Controller::redirect(BASE_URL . 'anggota');
            }
        }
    }
    public static function isAnggota()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] != 'anggota') {
                return Controller::redirect(BASE_URL . 'Forbiden');
            }
        }
    }
}