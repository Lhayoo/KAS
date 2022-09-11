<?php

use App\Core\Controller;
use App\Core\Database;
use App\Core\Flash;

class dataWargaModel extends Database
{
    public function getInfo()
    {
        $query = $this->connect->query("SELECT * FROM warga");
        return $query;
    }
    // public function getUmur()
    // {
    //     $tanggal_lahir = $this->connect->query("SELECT tanggal_lahir FROM warga limit 1 desc");
    //     $today = date("Y-m-d");
    //     $umur = [];
    //     while ($row = $tanggal_lahir->fetch_assoc()) {
    //         $umur = $today - $row['tanggal_lahir'];
    //     }
    //     return $umur;
    // }
    public function tambah($post)
    {
        $NIK = $post['nik'];
        $nama = $post['nama'];
        $alamat = $post['alamat'];
        $no_telfon = $post['no_telfon'];
        $pekerjaan = $post['pekerjaan'];
        $status = $post['status'];
        $jenis_kelamin = $post['jenis_kelamin'];
        $tanggal_lahir = $post['tanggal_lahir'];
        if (empty($NIK) || empty($nama) || empty($alamat) || empty($no_telfon) || empty($pekerjaan) || empty($status) || empty($jenis_kelamin) || empty($tanggal_lahir)) {
            Flash::setFlash('Data wajin diisi lengkap', 'danger');
        } else {
            $query = $this->connect->query("INSERT INTO `warga` (`NIK`, `nama`, `alamat`, `no_telfon`, `pekerjaan`, `status`, `jenis_kelamin`, `tanggal_lahir`) VALUES ('$NIK', '$nama', '$alamat', '$no_telfon', '$pekerjaan', '$status', '$jenis_kelamin', '$tanggal_lahir')");
            if ($query) {
                Flash::setFlash('Data warga berhasil ditambahkan', 'success');
            } else {
                Flash::setFlash('Data warga gagal ditambahkan', 'danger');
            }
        }
        Controller::redirect(BASE_URL . 'dataWarga/tambah');
    }

    public function getWargaById($id)
    {
        $query = $this->connect->query("SELECT * FROM warga WHERE NIK = '$id'");
        return $query;
    }
    public function hapus()
    {
        $id = $_POST['nik'];
        $query = $this->connect->query("DELETE FROM warga WHERE NIK = '$id'");
        if ($query) {
            Flash::setFlash('Data warga berhasil dihapus', 'success');
            Controller::redirect(BASE_URL . 'dataWarga');
        } else {
            Flash::setFlash('Data warga gagal dihapus', 'danger');
            Controller::redirect(BASE_URL . 'dataWarga');
        }
    }
}