<?php

use App\Core\Database;

class HomeModel extends Database
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
        $info['pemasukan'] = $this->connect->query("SELECT * FROM pemasukan WHERE `pemasukan`.`tanggal` BETWEEN '$tgl1' AND '$tgl31' ORDER BY `pemasukan`.`tanggal` DESC");
        $info['pengeluaran'] = $this->connect->query("SELECT * FROM pengeluaran WHERE tanggal BETWEEN '$tgl1' AND '$tgl31' ORDER BY tanggal DESC");
        $info['kas'] = $this->connect->query("SELECT `kas`.`jumlah`,`kas`.`users_id`,`kas`.`tanggal`,`kas`.`status`,`warga`.`nama` FROM kas,warga,users WHERE `kas`.`status`='belum' AND `kas`.`users_id`=`users`.`id` AND `users`.`NIK`=`warga`.`NIK` AND `kas`.`tanggal` ORDER BY `kas`.`tanggal` DESC");
        return $info;
    }
    public function filterKas($post)
    {
        $awal = $post['awal'];
        $akhir = $post['akhir'];
        $tgl1 = date('Y-m-1');
        $tgl31 = date('Y-m-31');
        $info = [];
        $info['total_saldo'] = $this->connect->query("SELECT * FROM saldo")->fetch_assoc()['total'];
        $info['total_kas'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM kas")->fetch_assoc()['total'];
        $info['total_pemasukan'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM pemasukan WHERE tanggal BETWEEN '$tgl1' AND '$tgl31'")->fetch_assoc()['total'];
        $info['total_pengeluaran'] = $this->connect->query("SELECT SUM(jumlah) AS total FROM pengeluaran WHERE tanggal BETWEEN '$tgl1' AND '$tgl31'")->fetch_assoc()['total'];
        $info['pemasukan'] = $this->connect->query("SELECT * FROM pemasukan WHERE `pemasukan`.`tanggal` BETWEEN '$tgl1' AND '$tgl31' ORDER BY `pemasukan`.`tanggal` DESC");
        $info['pengeluaran'] = $this->connect->query("SELECT * FROM pengeluaran WHERE tanggal BETWEEN '$tgl1' AND '$tgl31' ORDER BY tanggal DESC");
        $info['kas'] = $this->connect->query("SELECT `kas`.`jumlah`,`kas`.`users_id`,`kas`.`tanggal`,`kas`.`status`,`warga`.`nama` FROM kas,warga,users WHERE `kas`.`status`='belum' AND `kas`.`users_id`=`users`.`id` AND `users`.`NIK`=`warga`.`NIK` AND `kas`.`tanggal` BETWEEN '$awal' AND '$akhir' ORDER BY `kas`.`tanggal` DESC");
        return $info;
    }
}