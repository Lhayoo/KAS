<?php

use App\Core\Controller;
use App\Core\Database;
use App\Core\Flash;

class AnggotaModel extends Database
{
    public function getInfo()
    {
        $id = $_SESSION['user']['id'];
        $tgl1 = date('Y-m-1');
        $tgl31 = date('Y-m-31');
        $info = [];
        $info['total_saldo'] = $this->connect->query("SELECT * FROM saldo")->fetch_assoc()['total'];
        $info['total_kas'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM kas WHERE id = '$id'")->fetch_assoc()['total'];
        $info['total_pemasukan'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM pemasukan WHERE tanggal BETWEEN '$tgl1' AND '$tgl31'")->fetch_assoc()['total'];
        $info['total_pengeluaran'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM pengeluaran WHERE tanggal BETWEEN '$tgl1' AND '$tgl31'")->fetch_assoc()['total'];
        $info['pemasukan'] = $this->connect->query("SELECT * FROM pemasukan WHERE `pemasukan`.`tanggal` BETWEEN '$tgl1' AND '$tgl31'");
        $info['pengeluaran'] = $this->connect->query("SELECT * FROM pengeluaran WHERE tanggal BETWEEN '$tgl1' AND '$tgl31'");
        $info['kas'] = $this->connect->query("SELECT * FROM kas WHERE id = '$id'");
        return $info;
    }
}