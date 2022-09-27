-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2022 pada 06.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('bayar','belum','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`id`, `users_id`, `tanggal`, `jumlah`, `status`) VALUES
(1, 13, '2022-09-27', 5000, 'bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `saldo_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `saldo_id`, `tanggal`, `keterangan`, `jumlah`) VALUES
(1, 1, '2022-09-27', 'Total pemasukan kas bulan Sep tahun 2022', 5000),
(2, 1, '2022-09-27', 'asdasd', 123123);

--
-- Trigger `pemasukan`
--
DELIMITER $$
CREATE TRIGGER `hapus_pemasukan` AFTER DELETE ON `pemasukan` FOR EACH ROW BEGIN
UPDATE saldo SET total = total - old.jumlah WHERE `saldo`.`id` = old.saldo_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_pemasukan` AFTER INSERT ON `pemasukan` FOR EACH ROW BEGIN
UPDATE saldo SET total = total + new.jumlah WHERE `saldo`.`id` = new.saldo_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `saldo_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `saldo_id`, `tanggal`, `keterangan`, `jumlah`) VALUES
(1, 1, '2022-09-27', 'ASDASD', 1231);

--
-- Trigger `pengeluaran`
--
DELIMITER $$
CREATE TRIGGER `hapus_pengeluaran` AFTER DELETE ON `pengeluaran` FOR EACH ROW BEGIN
UPDATE saldo SET total = total + old.jumlah WHERE `saldo`.`id` = old.saldo_id;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_pengeluran` AFTER INSERT ON `pengeluaran` FOR EACH ROW BEGIN
UPDATE saldo SET total=total-new.jumlah WHERE `saldo`.`id`=new.saldo_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo`
--

CREATE TABLE `saldo` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `saldo`
--

INSERT INTO `saldo` (`id`, `total`) VALUES
(1, 126892);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `NIK` int(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','anggota') NOT NULL,
  `profile` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `NIK`, `username`, `password`, `role`, `profile`, `last_login`) VALUES
(7, 12, 'admin', 'admin', 'admin', 'person.png', '2022-09-27 11:07:20'),
(13, 111, 'alam', 'alam', 'anggota', 'user.png', '2022-09-27 09:38:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `NIK` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telfon` varchar(14) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`NIK`, `nama`, `alamat`, `no_telfon`, `pekerjaan`, `status`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(12, 'admin', 'admn', '089570302454', 'admin', 'Menikah', 'Laki-Laki', '2019-02-14'),
(111, 'alam', 'medono', '0895703024454', 'mahsiswa', 'Belum Menikah', 'Laki-Laki', '2003-11-19'),
(123, 'asdasd', 'asdasd', '0', 'admin', 'Menikah', 'Laki-Laki', '2010-01-27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`users_id`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saldo_id` (`saldo_id`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saldo_id` (`saldo_id`);

--
-- Indeks untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`NIK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD CONSTRAINT `kas_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_ibfk_1` FOREIGN KEY (`saldo_id`) REFERENCES `saldo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`saldo_id`) REFERENCES `saldo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
