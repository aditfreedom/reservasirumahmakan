-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2020 pada 09.23
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasirumahmakan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`id_konsumen`, `nama_konsumen`, `no_hp`, `password`) VALUES
(1, 'Aditya Aziz Fikhri', '081362059403', 'adit'),
(2, '111', '111', '111'),
(3, '112', '112', '112');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_meja`
--

CREATE TABLE `tb_meja` (
  `id_meja` int(11) NOT NULL,
  `id_rm` int(11) NOT NULL,
  `nama_rm` varchar(128) NOT NULL,
  `no_meja` varchar(128) NOT NULL,
  `kapasitas` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_meja`
--

INSERT INTO `tb_meja` (`id_meja`, `id_rm`, `nama_rm`, `no_meja`, `kapasitas`, `status`) VALUES
(2, 5, 'Bakso Lampoh Arab', '1', '5', 'Ready'),
(3, 2, 'Ayam Lepaas', '3', '3', 'Ready'),
(4, 6, 'Warung CM', '1', '2', 'Ready'),
(5, 7, 'Pak Ulis', '1', '4', 'Ready'),
(7, 7, 'Pak Ulis', '02', '4', 'Ready'),
(9, 5, 'Bakso Lampoh Arab', '2', '4', 'Ready'),
(10, 9, 'Cak Soleh', '1', '3', 'Ready');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `id_rm` int(11) NOT NULL,
  `nama_rm` varchar(128) NOT NULL,
  `nama_menu` varchar(128) NOT NULL,
  `harga` int(12) NOT NULL,
  `ket_menu` varchar(128) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `id_rm`, `nama_rm`, `nama_menu`, `harga`, `ket_menu`, `foto`) VALUES
(2, 5, 'Bakso Lampoh Arab', 'Paket 02', 25000, 'Bakso Jumbo + Teh Dingin', 'bag5.jpg'),
(3, 7, 'Pak Ulis', 'Paket 01', 20000, 'Ayam Penyet + Teh Botol', '6421.jpg'),
(4, 5, 'Bakso Lampoh Arab', 'Paket 03', 25000, 'Bakso Urap + Teh Dingin', 'menueditor_item_992607a576bf42728a625e9c06256c42_1574132213107416187_(1).jpg'),
(5, 5, 'Bakso Lampoh Arab', 'Paket 04', 35000, '2 Bakso + 2 Teh Dingin', 'menueditor_item_992607a576bf42728a625e9c06256c42_1574132213107416187_(1)1.jpg'),
(6, 9, 'Cak Soleh', 'Paket 01', 25000, 'Bakso Jumbo + Teh Dingin', 'bg_login.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `id_rek` int(11) NOT NULL,
  `id_rm` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekening`
--

INSERT INTO `tb_rekening` (`id_rek`, `id_rm`, `nama_bank`, `atas_nama`, `no_rek`) VALUES
(10, 5, 'Bank Aceh Syariah', 'Asep', '123.5454.10-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `nama_rm` varchar(128) NOT NULL,
  `id_rm` int(128) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL,
  `jumlah_pemesanan` int(3) NOT NULL,
  `total_harga` int(8) NOT NULL,
  `tanggal_reservasi` date NOT NULL,
  `waktu_reservasi` varchar(10) NOT NULL,
  `keterangan_tambahan` varchar(255) NOT NULL,
  `foto_struk` varchar(255) NOT NULL,
  `status_reservasi` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_reservasi`, `id_konsumen`, `nama_konsumen`, `no_hp`, `nama_rm`, `id_rm`, `no_meja`, `nama_menu`, `jumlah_pemesanan`, `total_harga`, `tanggal_reservasi`, `waktu_reservasi`, `keterangan_tambahan`, `foto_struk`, `status_reservasi`) VALUES
(6, 1, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 5, 1, 'Paket 03', 3, 75000, '2020-11-15', '12.30', '-', 'struk1.jpg', 'Menunggu'),
(8, 1, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 5, 1, 'Paket 03', 5, 125000, '2020-11-15', '22.30', '-', '', 'Ditolak'),
(9, 1, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 5, 1, 'Paket 03', 5, 125000, '2020-11-15', '22.30', '-', '', 'Diterima'),
(10, 1, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 5, 1, 'Paket 03', 2, 50000, '2020-11-17', '13.30', '-', 'download.jpg', 'Menunggu'),
(11, 1, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 5, 1, 'Paket 03', 3, 75000, '2020-11-17', '13.30', '', 'download1.jpg', 'Menunggu'),
(12, 1, 'Aditya Aziz Fikhri', '081362059403', 'Bakso PIM', 5, 1, 'Paket 03', 6, 150000, '2020-11-17', '13.30', '', 'Struk-seminar-42c179385a598c3e0007f6bde43989be.jpg', 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm`
--

CREATE TABLE `tb_rm` (
  `id_rm` int(11) NOT NULL,
  `nama_rm` varchar(128) NOT NULL,
  `nama_pemilik` varchar(128) NOT NULL,
  `alamat_rm` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto_rm` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rm`
--

INSERT INTO `tb_rm` (`id_rm`, `nama_rm`, `nama_pemilik`, `alamat_rm`, `no_hp`, `foto_rm`, `username`, `password`, `status`) VALUES
(2, 'Ayam Lepaas', 'Muhammad Roby', 'Bireuen', '081362059403', 'adminrm.jpg', 'ayamlepas', 'ayamlepas', 'Diterima'),
(5, 'Bakso PIM', 'Asep', 'Kr. Geukeuh', '081362059403', 'download.jpg', 'lampoharab', 'lampoharab', 'Diterima'),
(6, 'Warung CM', 'Aditya Aziz Fikhri', 'Bireuen', '081362059403', 'foto1.jpg', 'warungcm', 'warungcm', 'Diterima'),
(7, 'Pak Ulis', 'Pak Ulis', 'Lhokseumawe', '081362059403', 'foto2.jpg', 'pakulis', 'pakulis', 'Diterima'),
(9, 'Cak Soleh', 'Soleh', 'Bireuen', '085208520852', '131.png', 'caksoleh', 'caksoleh', 'Diterima'),
(10, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'Diterima'),
(18, 'Warung Tekwan', 'Warung Tekwan', 'Warung Tekwan', '0812', '90085380_216000479602771_6165135875043753984_o1.jpg', 'warungtekwan', 'warungtekwan', 'Ditolak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_useradmin`
--

CREATE TABLE `tb_useradmin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_useradmin`
--

INSERT INTO `tb_useradmin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'ulianum', 'ulianum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `tb_meja`
--
ALTER TABLE `tb_meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD PRIMARY KEY (`id_rek`);

--
-- Indeks untuk tabel `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indeks untuk tabel `tb_rm`
--
ALTER TABLE `tb_rm`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indeks untuk tabel `tb_useradmin`
--
ALTER TABLE `tb_useradmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_meja`
--
ALTER TABLE `tb_meja`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_rekening`
--
ALTER TABLE `tb_rekening`
  MODIFY `id_rek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_rm`
--
ALTER TABLE `tb_rm`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_useradmin`
--
ALTER TABLE `tb_useradmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
