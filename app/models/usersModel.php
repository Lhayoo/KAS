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
    public function tambah($post)
    {
        $nik = htmlspecialchars($post['nik']);
        $username = htmlspecialchars($post['username']);
        $password = htmlspecialchars($post['password']);
        $retype = htmlspecialchars($post['retype']);
        if (empty($nik) || empty($username) || empty($password) || empty($retype)) {
            Flash::setFlash('Data tidak boleh kosong', 'danger',);
        } elseif ($this->connect->query("SELECT * FROM warga WHERE NIK = '$nik'")->num_rows == 0) {
            Flash::setFlash('NIK tidak terdaftar', 'danger');
        } elseif ($this->connect->query("SELECT * FROM users WHERE username = '$username' OR NIK = '$nik'")->num_rows > 0) {
            Flash::setFlash('NIk/Username sudah terdaftar', 'danger');
        } elseif ($password != $retype) {
            Flash::setFlash('Password tidak sama', 'danger');
        } else {
            // $password = password_hash($password, PASSWORD_DEFAULT);
            $query = $this->connect->query("INSERT INTO `users` (`nik`, `username`, `password`,`role`,`profile`) VALUES ('$nik', '$username', '$password', 'anggota','person.png')");
            if ($query) {
                Flash::setFlash('Data berhasil ditambahkan', 'success');
            } else {
                Flash::setFlash('Data gagal ditambahkan', 'danger');
            }
        }
        Controller::redirect(BASE_URL . 'users/tambah');
    }
    public function getUsersByid($id)
    {
        $query = $this->connect->query("SELECT * FROM users WHERE id = '$id'")->fetch_assoc();
        return $query;
    }
    public function hapus()
    {
        $id = $_POST['id'];
        $query = $this->connect->query("DELETE FROM users WHERE id = '$id'");
        if ($query) {
            Flash::setFlash('Data berhasil ditambahkan', 'success');
            Controller::redirect(BASE_URL . 'users');
        } else {
            Flash::setFlash('Data gagal ditambahkan', 'danger');
            Controller::redirect(BASE_URL . 'users');
        }
    }
    public function edit($post, $id)
    {
        $nik = htmlspecialchars($post['nik']);
        $username = htmlspecialchars($post['username']);
        $password = htmlspecialchars($post['password']);
        $retype = htmlspecialchars($post['retype']);
        if (empty($nik) || empty($username) || empty($password) || empty($retype)) {
            Flash::setFlash('Data tidak boleh kosong', 'danger');
        } elseif ($this->connect->query("SELECT * FROM warga WHERE NIK = '$nik'")->num_rows == 0) {
            Flash::setFlash('NIK tidak terdaftar', 'danger');
        } elseif ($password != $retype) {
            Flash::setFlash('Password tidak sama', 'danger');
        } else {
            // $password = password_hash($password, PASSWORD_DEFAULT);
            $query = $this->connect->query("UPDATE `users` SET `NIK` = '$nik', `username` = '$username', `password` = '$password' WHERE `users`.`id` = '$id'");
            if ($query) {
                Flash::setFlash('Data berhasil diubah', 'success');
                Controller::redirect(BASE_URL . 'users');
            } else {
                Flash::setFlash('Data gagal diubah', 'danger');
                Controller::redirect(BASE_URL . 'users/edit/' . $id);
            }
        }
        Controller::redirect(BASE_URL . 'users/edit/' . $id);
    }
}