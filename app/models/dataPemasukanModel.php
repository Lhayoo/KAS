<?php

use App\Core\Database;

class dataPemasukanModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT * FROM pemasukan");
        return $query;
    }
    public function tambahData($data)
    {
        $tanggal = $data['tanggal'];
        $jumlah = $data['jumlah'];
        $keterangan = $data['keterangan'];
        $query = $this->connect->query("INSERT INTO pemasukan VALUES ('','$tanggal','$jumlah','$keterangan')");
        return $query;
    }
    public function hapusData($id)
    {
        $query = $this->connect->query("DELETE FROM pemasukan WHERE id='$id'");
        return $query;
    }
    public function getKasById($id)
    {
        $query = $this->connect->query("SELECT * FROM pemasukan WHERE id='$id'");
        return $query;
    }
    public function editData($data)
    {
        $id = $data['id'];
        $tanggal = $data['tanggal'];
        $jumlah = $data['jumlah'];
        $keterangan = $data['keterangan'];
        $query = $this->connect->query("UPDATE pemasukan SET tanggal='$tanggal',jumlah='$jumlah',keterangan='$keterangan' WHERE id='$id'");
        return $query;
    }
}