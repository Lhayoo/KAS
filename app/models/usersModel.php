<?php

use App\Core\Database;
use App\Core\Controller;
use App\Core\Flash;

class usersModel extends Database
{
    public function getUsers()
    {
        $query = $this->connect->query("SELECT * FROM users");
        return $query;
    }
    // public function tambah($_POST)
    // {
    //     $nik = $_POST['nik'];
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $password_reype = $_POST['retype_password'];
    //     if (empty($nik) || empty($username) || empty($password) || empty($password_reype)) {
    //         Flash::setFlash('danger', 'Data tidak boleh kosong');
    //         Controller::redirect(BASE_URL . 'users/tambah');
    //     } else {
    //         if ($password == $password_reype) {
    //             $query = $this->connect->query("INSERT INTO users (nik, username, password) VALUES ('$nik', '$username', '$password')");
    //             if ($query) {
    //                 Flash::setFlash('success', 'Data berhasil ditambahkan');
    //                 Controller::redirect(BASE_URL . 'users');
    //             } else {
    //                 Flash::setFlash('danger', 'Data gagal ditambahkan');
    //                 Controller::redirect(BASE_URL . 'users/tambah');
    //             }
    //         } else {
    //             Flash::setFlash('danger', 'Password tidak sama');
    //             Controller::redirect(BASE_URL . 'users/tambah');
    //         }
    //     }
    // }
}