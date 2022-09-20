<?php

use App\Core\Controller;
use App\Core\Database;
use App\Core\Flash;

class dataPengeluaranModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT * FROM pengeluaran ORDER BY tanggal DESC");
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
            $query = $this->connect->query("INSERT INTO pengeluaran (`saldo_id`,`tanggal`,`jumlah`,`keterangan`)VALUES ('1','$tanggal','$jumlah','$keterangan')");
            if ($query) {
                Flash::setFlash('Data berhasil ditambahkan', 'success');
            } else {
                Flash::setFlash('Data gagal ditambahkan', 'danger');
            }
        }
        Controller::redirect(BASE_URL . 'dataPengeluaran/tambah');
    }
    public function hapus()
    {
        $id = htmlspecialchars($_POST['id']);
        $query = $this->connect->query("DELETE FROM pengeluaran WHERE id='$id'");
        if ($query) {
            Flash::setFlash('Data berhasil dihapus', 'success');
        } else {
            Flash::setFlash('Data gagal dihapus', 'danger');
        }
        Controller::redirect(BASE_URL . 'dataPengeluaran');
    }
    public function getKasById($id)
    {
        $query = $this->connect->query("SELECT * FROM pengeluaran WHERE id='$id'");
        return $query;
    }
    public function filter($post)
    {
        $awal = $post['awal'];
        $akhir = $post['akhir'];
        $query = $this->connect->query("SELECT * FROM pengeluaran WHERE tanggal BETWEEN '$awal' AND '$akhir' ORDER BY tanggal DESC");
        return $query;
    }
}