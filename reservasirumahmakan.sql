-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 05:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
-- Table structure for table `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_konsumen` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`id_konsumen`, `nama_konsumen`, `no_hp`, `password`) VALUES
(1, 'Aditya Aziz Fikhri', '081362059403', '73f008c37252b9c86005ce9a4c2300be');

-- --------------------------------------------------------

--
-- Table structure for table `tb_meja`
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
-- Dumping data for table `tb_meja`
--

INSERT INTO `tb_meja` (`id_meja`, `id_rm`, `nama_rm`, `no_meja`, `kapasitas`, `status`) VALUES
(2, 5, 'Bakso Lampoh Arab', '1', '5', 'Ready'),
(3, 2, 'Ayam Lepaas', '3', '3', 'Ready'),
(4, 6, 'Warung CM', '1', '2', 'Ready'),
(5, 7, 'Pak Ulis', '1', '4', 'Ready'),
(7, 7, 'Pak Ulis', '02', '4', 'Ready'),
(8, 9, '', '1', '4', 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
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
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `id_rm`, `nama_rm`, `nama_menu`, `harga`, `ket_menu`, `foto`) VALUES
(2, 5, 'Bakso Lampoh Arab', 'Paket 02', 25000, 'Bakso Jumbo + Teh Dingin', 'bag5.jpg'),
(3, 7, 'Pak Ulis', 'Paket 01', 20000, 'Ayam Penyet + Teh Botol', '6421.jpg'),
(4, 5, 'Bakso Lampoh Arab', 'Paket 03', 25000, 'Bakso Urap + Teh Dingin', 'menueditor_item_992607a576bf42728a625e9c06256c42_1574132213107416187_(1).jpg'),
(5, 5, 'Bakso Lampoh Arab', 'Paket 04', 35000, '2 Bakso + 2 Teh Dingin', 'menueditor_item_992607a576bf42728a625e9c06256c42_1574132213107416187_(1)1.jpg'),
(6, 9, 'Cak Soleh', 'Paket 01', 25000, 'Bakso Jumbo + Teh Dingin', 'bg_login.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nama_konsumen` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `nama_rm` varchar(128) NOT NULL,
  `id_rm` int(128) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL,
  `jumlah_pemesanan` int(3) NOT NULL,
  `total_harga` int(8) NOT NULL,
  `tanggal_reservasi` date NOT NULL,
  `waktu_reservasi` varchar(5) NOT NULL,
  `status_reservasi` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_reservasi`, `nama_konsumen`, `no_hp`, `nama_rm`, `id_rm`, `no_meja`, `nama_menu`, `jumlah_pemesanan`, `total_harga`, `tanggal_reservasi`, `waktu_reservasi`, `status_reservasi`) VALUES
(1, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 5, 1, 'Paket 02', 1, 20000, '2020-09-23', '23.00', 'Diterima'),
(2, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 5, 1, 'Paket 02', 1, 20000, '2020-09-23', '23.00', 'Diterima'),
(3, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 5, 1, 'Paket 02', 1, 20000, '2020-09-23', '23.00', 'Menunggu'),
(4, 'Aditya Aziz Fikhri', '081362059403', 'Bakso Lampoh Arab', 6, 1, 'Paket 02', 1, 20000, '2020-09-23', '23.00', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm`
--

CREATE TABLE `tb_rm` (
  `id_rm` int(11) NOT NULL,
  `nama_rm` varchar(128) NOT NULL,
  `nama_pemilik` varchar(128) NOT NULL,
  `alamat_rm` varchar(128) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto_rm` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rm`
--

INSERT INTO `tb_rm` (`id_rm`, `nama_rm`, `nama_pemilik`, `alamat_rm`, `no_hp`, `foto_rm`, `username`, `password`) VALUES
(2, 'Ayam Lepaas', 'Muhammad Roby', 'Bireuen', '081362059403', 'adminrm.jpg', 'ayamlepas', 'ayamlepas'),
(5, 'Bakso Lampoh Arab', 'Asep', 'Bireuen', '081362059403', 'foto.jpg', 'lampoharab', 'lampoharab'),
(6, 'Warung CM', 'Aditya Aziz Fikhri', 'Bireuen', '081362059403', 'foto1.jpg', 'warungcm', 'warungcm'),
(7, 'Pak Ulis', 'Pak Ulis', 'Lhokseumawe', '081362059403', 'foto2.jpg', 'pakulis', 'pakulis'),
(9, 'Cak Soleh', 'Soleh', 'Bireuen', '085208520852', '131.png', 'caksoleh', 'caksoleh'),
(10, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_useradmin`
--

CREATE TABLE `tb_useradmin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_useradmin`
--

INSERT INTO `tb_useradmin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'ulianum', 'ulianum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `tb_meja`
--
ALTER TABLE `tb_meja`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `tb_rm`
--
ALTER TABLE `tb_rm`
  ADD PRIMARY KEY (`id_rm`);

--
-- Indexes for table `tb_useradmin`
--
ALTER TABLE `tb_useradmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_meja`
--
ALTER TABLE `tb_meja`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_rm`
--
ALTER TABLE `tb_rm`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_useradmin`
--
ALTER TABLE `tb_useradmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
