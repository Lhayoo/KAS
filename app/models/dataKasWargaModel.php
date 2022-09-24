<?php

use App\Core\Database;
use App\Core\Flash;
use App\Core\Controller;

class dataKasWargaModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT `kas`.`id`,`warga`.`nama`,`kas`.`tanggal`,`kas`.`jumlah`,`kas`.`status` FROM kas,warga,users WHERE kas.users_id=users.id AND users.NIK=warga.NIK  ORDER BY `kas`.`tanggal` DESC");
        return $query;
    }
    public function tambah($post)
    {
        $id = htmlspecialchars($post['id']);
        $tanggal = date('Y-m-d');
        $status = htmlspecialchars($post['status']);
        if (empty($id) || empty($tanggal) || empty($status)) {
            Flash::setFlash('Data wajin diisi lengkap', 'danger');
        } else {
            $tanggal = date('Y-m-d');
            $ceheck = $this->connect->query("SELECT * FROM kas WHERE users_id='$id' AND tanggal='$tanggal'");
            if ($ceheck->num_rows) {
                Flash::setFlash('Kas telah di input', 'danger');
            } else {
                $query = $this->connect->query("INSERT INTO `kas` (`users_id`, `tanggal`, `jumlah`, `status`) VALUES ('$id', '$tanggal', '5000', '$status');");
                if ($query) {
                    Flash::setFlash('Data kas berhasil ditambahkan', 'success');
                } else {
                    Flash::setFlash('Data kas gagal ditambahkan', 'danger');
                }
            }
        }
        Controller::redirect(BASE_URL . 'dataKasWarga/tambah');
    }
    public function getUser()
    {
        $query = $this->connect->query("SELECT * FROM users,warga WHERE role = 'anggota' AND users.NIK=warga.NIK");
        return $query;
    }
    public function getKasById($id)
    {
        $query = $this->connect->query("SELECT `kas`.`users_id`,`kas`.`id`,`warga`.`nama`,`kas`.`status` FROM kas,warga,users WHERE `kas`.`id` = '$id' AND `kas`.`users_id`=`users`.`id` AND `users`.`NIK`=`warga`.`NIK`")->fetch_assoc();
        return $query;
    }
    public function edit($post)
    {
        $id = htmlspecialchars($post['id']);
        $status = htmlspecialchars($post['status']);
        if (empty($id) || empty($status)) {
            Flash::setFlash('Data wajin diisi lengkap', 'danger');
        } else {
            $query = $this->connect->query("UPDATE `kas` SET `status` = '$status' WHERE `kas`.`id` = '$id';");
            if ($query) {
                Flash::setFlash('Data kas berhasil diubah', 'success');
                Controller::redirect(BASE_URL . 'dataKasWarga');
            } else {
                Flash::setFlash('Data kas gagal diubah', 'danger');
                Controller::redirect(BASE_URL . 'dataKasWarga/edit/' . $id);
            }
        }
    }
    public function hapus()
    {
        $id = $_POST['id'];
        $query = $this->connect->query("DELETE FROM `kas` WHERE `kas`.`id` = '$id'");
        if ($query) {
            Flash::setFlash('Data kas berhasil dihapus', 'success');
        } else {
            Flash::setFlash('Data kas gagal dihapus', 'danger');
        }
        Controller::redirect(BASE_URL . 'dataKasWarga');
    }
    public function filter($awal, $akhir)
    {
        $query = $this->connect->query("SELECT `kas`.`id`,`warga`.`nama`,`kas`.`tanggal`,`kas`.`jumlah`,`kas`.`status` FROM kas,warga,users WHERE kas.users_id=users.id AND users.NIK=warga.NIK AND kas.tanggal BETWEEN '$awal' AND '$akhir'");
        return $query;
    }
    public function rekap($awal, $akhir)
    {
        $tanggal = date('Y-m-d');
        $bulan = date('M');
        $jumlah = $this->connect->query("SELECT SUM(jumlah) AS jumlah FROM kas WHERE tanggal BETWEEN '$awal' AND '$akhir'")->fetch_assoc()['jumlah'];
        $insert = $this->connect->query("INSERT INTO `pemasukan` (`saldo_id`,`tanggal`, `jumlah`, `keterangan`) VALUES ('1','$tanggal' ,'$jumlah', 'Total pemasukan kas bulan $bulan ');");
        if ($insert) {
            Flash::setFlash('Data berhasil direkap', 'success');
        } else {
            Flash::setFlash('Data gagal direkap', 'danger');
        }
        Controller::redirect(BASE_URL . 'dataKasWarga');
    }
}