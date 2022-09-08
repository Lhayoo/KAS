<?php

use App\Core\Database;

class pengeluaranModel extends Database
{
    public function getInfo()
    {
        $query =  $this->connect->query("SELECT * FROM pengeluaran");
        return $query;
    }
}
