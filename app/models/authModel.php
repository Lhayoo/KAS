<?php

use App\Core\Controller;
use App\Core\Database;
use App\Core\Flash;

class authModel extends Database
{
    public function login($post)
    {
        date_default_timezone_set("Asia/Jakarta");
        $username = htmlspecialchars($post['username']);
        $password = htmlspecialchars($post['password']);
        $login = $this->connect->query("SELECT * from users where username='$username' and password='$password' limit 1");
        if ($login->num_rows) {
            $user = $login->fetch_assoc();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $id = $user['id'];
            $last_login = date('Y-m-d H:i:s');
            $this->connect->query("UPDATE `users` SET `last_login` = '$last_login' WHERE `id` = $id");
            if ($user['role'] == 'admin') {
                Controller::redirect(BASE_URL);
            } else {
                Controller::redirect(BASE_URL . 'anggota');
            }
        } else {
            Flash::setFlash('Invalid Username dan Password', 'danger');
            Controller::redirect(BASE_URL . 'login');
        }
    }
}