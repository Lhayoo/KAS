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
        $query = $this->connect->query("SELECT * FROM warga WHERE id = '$id'")->fetch_assoc();
        return $query;
    }
    public function hapus()
    {
        $id = $_POST['id'];
        $query = $this->connect->query("DELETE FROM warga WHERE id = '$id'");
        if ($query) {
            Flash::setFlash('Data warga berhasil dihapus', 'success');
            Controller::redirect(BASE_URL . 'dataWarga');
        } else {
            Flash::setFlash('Data warga gagal dihapus', 'danger');
            Controller::redirect(BASE_URL . 'dataWarga');
        }
    }
    public function edit($post, $id)
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
            $query = $this->connect->query("UPDATE `warga` SET `NIK`='$NIK',`nama` = '$nama', `alamat` = '$alamat', `no_telfon` = '$no_telfon', `pekerjaan` = '$pekerjaan', `status` = '$status', `jenis_kelamin` = '$jenis_kelamin', `tanggal_lahir` = '$tanggal_lahir' WHERE `id` = '$id'");
            if ($query) {
                Flash::setFlash('Data warga berhasil diubah', 'success');
                Controller::redirect(BASE_URL . 'dataWarga');
            } else {
                Flash::setFlash('Data warga gagal diubah', 'danger');
                Controller::redirect(BASE_URL . 'dataWarga/edit/' . $id);
            }
        }
    }
}