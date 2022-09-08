<?php

use App\Core\Database;

class pemasukanModel extends Database
{
    public function getInfo()
    {
        $query =  $this->connect->query("SELECT * FROM pemasukan");
        return $query;
    }
}