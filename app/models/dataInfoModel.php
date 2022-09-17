<?php

use App\Core\Database;

class dataInfoModel extends Database
{
    public function getInfo()
    {
        $id = $_SESSION['user']['id'];
        $query = $this->connect->query("SELECT * FROM users,warga WHERE id='$id' AND `users`.`NIK` = `warga`.`NIK`");
        return $query;
    }
}