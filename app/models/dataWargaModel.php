<?php

use App\Core\Database;

class dataWargaModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT * FROM warga");
        return $query;
    }
    public function getUmur($tanggal_lahir)
    {
        $tanggal_lahir = new DateTime($tanggal_lahir);
        $today = new DateTime('today');
        $y = $today->diff($tanggal_lahir)->y;
        return $y;
    }
}