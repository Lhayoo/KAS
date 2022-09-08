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
}