<?php

use App\Core\Controller;
use App\Core\Database;
use App\Core\Flash;

class AnggotaModel extends Database
{
    public function getInfo()
    {
        $tgl1 = date('Y-m-1');
        $tgl31 = date('Y-m-31');
        $info = [];
        $info['total_saldo'] = $this->connect->query("SELECT * FROM saldo")->fetch_assoc()['total'];
        $info['total_kas'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM kas")->fetch_assoc()['total'];
        $info['total_pemasukan'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM pemasukan WHERE tanggal BETWEEN '$tgl1' AND '$tgl31'")->fetch_assoc()['total'];
        $info['total_pengeluaran'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM pengeluaran WHERE tanggal BETWEEN '$tgl1' AND '$tgl31'")->fetch_assoc()['total'];
        $info['info'] = $this->connect->query("SELECT * FROM pemasukan,pengeluaran WHERE `pemasukan`.`tanggal` AND `pengeluaran`.`tanggal` BETWEEN '$tgl1' AND '$tgl31'");
        return $info;
    }
    public function changePas()
    {
        $id = $_SESSION['user']['id'];
        $oldPas = $_POST['oldPas'];
        $newPas = $_POST['newPas'];
        $retype = $_POST['retype'];
        $query = $this->connect->query("SELECT * FROM users WHERE id = '$id'")->fetch_assoc();
        if (empty($oldPas) || empty($newPas) || empty($retype)) {
            Flash::setFlash('Data tidak boleh kosong', 'danger');
        } elseif ($newPas != $retype) {
            Flash::setFlash('Password baru tidak sama', 'danger');
        } elseif ($query['password'] != $oldPas) {
            Flash::setFlash('Password lama salah', 'danger');
        } else {
            $query = $this->connect->query("UPDATE users SET password = '$newPas' WHERE id = '$id'");
            if ($query) {
                Flash::setFlash('Password berhasil diubah', 'success');
            } else {
                Flash::setFlash('Password gagal diubah', 'danger');
            }
        }
        Controller::redirect('accountSettings/changePas');
    }
    public function edit($post)
    {
        $id = $_SESSION['user']['id'];
        $nik = htmlspecialchars($post['nik']);
        $no_telfon = htmlspecialchars($post['no_telfon']);
        $profile = $_FILES['profile']['name'];
        $tmp = $_FILES['profile']['tmp_name'];
        $x = explode('.', $profile);
        $ext = end($x);
        if (!empty($profile) && !empty($no_telfon)) {
            if ($_FILES['profile']['name'] != '') {
                if (!in_array($ext, ['jpg', 'png', 'jpeg'])) {
                    Flash::setFlash('Ekstensi , hanya jpg,jpeg,png', 'danger');
                    Controller::redirect(BASE_URL . 'AccoutSettings');
                } else {
                    $old_cover = $this->connect->query("SELECT * FROM users WHERE id = '$id'")->fetch_assoc()['profile'];
                    if (file_exists('assets/img/profile' . $old_cover)) {
                        unlink('assets/img/profile' . $old_cover);
                    }
                    $update = $this->connect->query("UPDATE users SET `profile` = '$profile' WHERE `id` = '$id'");
                    if ($update) {
                        if (!is_dir('assets/img/profile')) {
                            mkdir('assets/img/profile');
                        }
                        if (is_dir('assets/cover')) {
                            move_uploaded_file($tmp, 'assets/img/profile' . $profile);
                        }
                        Flash::setFlash('Berhasil Mengedit profile', 'success');
                        Controller::redirect(BASE_URL . 'accountSettings');
                    }
                }
            } else {
                $update = $this->connect->query("UPDATE warga SET `no_telfon` = '$no_telfon' WHERE `NIK` = '$nik'");
                if ($update) {
                    Flash::setFlash('Berhasil Mengedit No Telfon', 'success');
                    Controller::redirect(BASE_URL . 'accountSettings');
                }
            }
        } else {
            Flash::setFlash('Invalid input value', 'danger');
            Controller::redirect(BASE_URL . 'accountSettings');
        }
    }
}