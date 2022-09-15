<?php

use App\Core\Database;

class dataKasModel extends Database
{
    public function getKasById()
    {
        $user_id = $_SESSION['user']['id'];
        $query = $this->connect->query("SELECT * FROM kas WHERE users_id='$user_id'");
        return $query;
    }
    public function getInfo()
    {
        // tampilkan semua data kas setiap satu bulan
        $tgl1 = date('Y-m-01');
        $tgl31 = date('Y-m-31');
        $query = $this->connect->query("SELECT * FROM kas WHERE tanggal BETWEEN '$tgl1' AND '$tgl31'");
        return $query;
    }
}