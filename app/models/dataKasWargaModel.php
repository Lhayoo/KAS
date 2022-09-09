<?php

use App\Core\Database;

class dataKaswargaModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT `warga`.`nama`,`kas`.`tanggal`,`kas`.`jumlah`,`kas`.`status` FROM kas,warga,users WHERE kas.users_id=users.id AND users.NIK=warga.NIK ");
        return $query;
    }
}