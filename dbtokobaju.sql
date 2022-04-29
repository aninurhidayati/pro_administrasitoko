-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 04:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtokobaju`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dt_barang`
--

CREATE TABLE `tb_dt_barang` (
  `id_barang` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  `is_active` tinyint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dt_barang`
--

INSERT INTO `tb_dt_barang` (`id_barang`, `nama_barang`, `jumlah_barang`, `is_active`) VALUES
(1, 'Celana', 2, 0),
(2, 'Baju muslim', 3, 0),
(3, 'Baju Kristen', 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dt_member`
--

CREATE TABLE `tb_dt_member` (
  `id_member` int(100) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dt_member`
--

INSERT INTO `tb_dt_member` (`id_member`, `nama_member`, `jenis_kelamin`, `alamat`, `pekerjaan`) VALUES
(1, 'Muhammad Ardiansyah', 'Laki-laki', 'pandaan', 'mahasiswa'),
(9, 'Putra', 'lk', 'GSK', 'MHS'),
(10, 'ardi', '', '', ''),
(11, 'Nisaul', 'Perempuan', 'Jonggol', 'Mahasiswa '),
(12, 'Dita', 'Perempuan', 'Jonggol', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dt_pembelian`
--

CREATE TABLE `tb_dt_pembelian` (
  `no_trans` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dt_pembelian`
--

INSERT INTO `tb_dt_pembelian` (`no_trans`, `nama_barang`, `harga_barang`, `jumlah`, `total`) VALUES
(1, 'Celana', 50000, 2, 100000),
(2, 'Kopiah', 10000, 2, 20000),
(3, 'sarung', 22000, 1, 22000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kt_barang`
--

CREATE TABLE `tb_kt_barang` (
  `id_kt_barang` int(100) NOT NULL,
  `kategori_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kt_barang`
--

INSERT INTO `tb_kt_barang` (`id_kt_barang`, `kategori_barang`) VALUES
(1, 'Pakaian'),
(3, 'underwear');

-- --------------------------------------------------------

--
-- Table structure for table `tb_submenu`
--

CREATE TABLE `tb_submenu` (
  `id_menu` int(100) NOT NULL,
  `nama_submenu` varchar(100) NOT NULL,
  `folder_submenu` varchar(100) NOT NULL,
  `is_active` tinyint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_submenu`
--

INSERT INTO `tb_submenu` (`id_menu`, `nama_submenu`, `folder_submenu`, `is_active`) VALUES
(1, 'Data Member ', 'mod_dt_member', 1),
(2, 'Data Barang ', 'mod_dt_barang', 1),
(3, 'Data Pembelian ', 'mod_dt_pembelian', 1),
(4, 'Kategori Barang ', 'mod_kt_barang', 1),
(5, 'User Account', 'mod_userlogin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_userlogin`
--

CREATE TABLE `tb_userlogin` (
  `id_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_userlogin`
--

INSERT INTO `tb_userlogin` (`id_user`, `username`, `password`, `is_active`) VALUES
(1, 'arudi', '123', 1),
(2, 'putra', '123', 0),
(3, 'anon', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dt_barang`
--
ALTER TABLE `tb_dt_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_dt_member`
--
ALTER TABLE `tb_dt_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_dt_pembelian`
--
ALTER TABLE `tb_dt_pembelian`
  ADD PRIMARY KEY (`no_trans`);

--
-- Indexes for table `tb_kt_barang`
--
ALTER TABLE `tb_kt_barang`
  ADD PRIMARY KEY (`id_kt_barang`);

--
-- Indexes for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_userlogin`
--
ALTER TABLE `tb_userlogin`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dt_barang`
--
ALTER TABLE `tb_dt_barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_dt_member`
--
ALTER TABLE `tb_dt_member`
  MODIFY `id_member` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_dt_pembelian`
--
ALTER TABLE `tb_dt_pembelian`
  MODIFY `no_trans` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kt_barang`
--
ALTER TABLE `tb_kt_barang`
  MODIFY `id_kt_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_submenu`
--
ALTER TABLE `tb_submenu`
  MODIFY `id_menu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_userlogin`
--
ALTER TABLE `tb_userlogin`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
