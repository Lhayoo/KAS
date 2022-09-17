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
        if (empty($oldPas) || empty($newPas) || empty($retype)) {
            Flash::setFlash('danger', 'Password tidak boleh kosong');
            $checkpass = $this->connect->query("SELECT `password` FROM user WHERE id = '$id'")->fetch_assoc();
            if ($checkpass['password'] != $oldPas) {
                Flash::setFlash('danger', 'Password lama salah');
            } elseif ($newPas != $retype) {
                Flash::setFlash('danger', 'Password baru tidak sama');
            } elseif ($newPas == $checkpass['password']) {
                Flash::setFlash('danger', 'Password baru tidak boleh sama dengan password lama');
            } else {
                $this->connect->query("UPDATE user SET `password` = '$newPas' WHERE id = '$id'");
                Flash::setFlash('success', 'Password berhasil diubah');
            }
        }
        Controller::redirect('accountSettings');
    }
}
