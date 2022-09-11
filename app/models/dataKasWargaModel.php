<?php

use App\Core\Database;
use App\Core\Flash;
use App\Core\Controller;

class dataKaswargaModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT `warga`.`nama`,`kas`.`tanggal`,`kas`.`jumlah`,`kas`.`status` FROM kas,warga,users WHERE kas.users_id=users.id AND users.NIK=warga.NIK ");
        return $query;
    }
    public function tambah($post)
    {
        $username = htmlspecialchars($post['username']);
        $tanggal = htmlspecialchars($post['tanggal']);
        $status = htmlspecialchars($post['status']);
        if (empty($username) || empty($tanggal) || empty($status)) {
            Flash::setFlash('Data wajin diisi lengkap', 'danger');
        } elseif ($this->connect->query("SELECT * FROM users WHERE username='$username'")->num_rows < 0) {
            Flash::setFlash('Username tidak terdaftar', 'danger');
        } else {
            $query = $this->connect->query("INSERT INTO kas (`username`, `tanggal`,`5000`, `status`) VALUES ('$username', '$tanggal', '$status')");
            if ($query) {
                Flash::setFlash('Data kas berhasil ditambahkan', 'success');
            } else {
                Flash::setFlash('Data kas gagal ditambahkan', 'danger');
            }
        }
        Controller::redirect(BASE_URL . 'dataKasWarga/tambah');
    }
}