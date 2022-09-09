<?php

use App\Core\Database;

class dataPengeluaranModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT * FROM pengeluaran");
        return $query;
    }
}