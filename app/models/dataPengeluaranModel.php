<?php

use App\Core\Controller;
use App\Core\Database;
use App\Core\Flash;

class dataPengeluaranModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT * FROM pengeluaran");
        return $query;
    }
    public function tambah($post)
    {
        $tanggal = $post['tanggal'];
        $jumlah = $post['jumlah'];
        $keterangan = $post['keterangan'];
        if (empty($tanggal) || empty($jumlah) || empty($keterangan)) {
            Flash::setFlash('Data tidak boleh kosong', 'danger');
        } else {
            $query = $this->connect->query("INSERT INTO pengeluaran (`tanggal`,`jumlah`,`keterangan`)VALUES ('$tanggal','$jumlah','$keterangan')");
            if ($query) {
                Flash::setFlash('Data berhasil ditambahkan', 'success');
            } else {
                Flash::setFlash('Data gagal ditambahkan', 'danger');
            }
        }
        Controller::redirect(BASE_URL . 'dataPengeluaran/tambah');
    }
    public function hapus($id)
    {
        $query = $this->connect->query("DELETE FROM pengeluaran WHERE id='$id'");
        return $query;
    }
    public function getKasById($id)
    {
        $query = $this->connect->query("SELECT * FROM pengeluaran WHERE id='$id'");
        return $query;
    }
    public function edit($data)
    {
        $id = $data['id'];
        $tanggal = $data['tanggal'];
        $jumlah = $data['jumlah'];
        $keterangan = $data['keterangan'];
        if (empty($tanggal) || empty($jumlah) || empty($keterangan)) {
            Flash::setFlash('Data tidak boleh kosong', 'danger');
            Controller::redirect(BASE_URL . 'dataPengeluaran/edit/' . $id);
        } else {
            $query = $this->connect->query("UPDATE pengeluaran SET tanggal='$tanggal',jumlah='$jumlah',keterangan='$keterangan' WHERE id='$id'");
            if ($query) {
                Flash::setFlash('Data berhasil diubah', 'success');
                Controller::redirect(BASE_URL . 'dataPengeluaran');
            } else {
                Flash::setFlash('Data gagal diubah', 'danger');
                Controller::redirect(BASE_URL . 'dataPengeluaran/edit/' . $id);
            }
        }
    }
}