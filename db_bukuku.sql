-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 10:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2 

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukuku`
--

-- -------------------sss-------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(11) NOT NULL,
  `kd_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(50) NOT NULL,
  `tanggal_cetak` date NOT NULL,
  `jml_halaman` int(11) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `kd_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`, `tanggal_cetak`, `jml_halaman`, `jenis_buku`) VALUES
(20, 'KD001', 'The Habbits', 'Felix Siauw', 'AlFatih press', '2017', '2021-10-07', 213, '1'),
(22, 'KD002', 'Hidup Satu Kali Lagi', 'Farah Qoonita', 'FarahPublish', '2020', '2020-06-30', 300, ' 1'),
(23, 'KD003', 'The Power Of IDEAS Habibie', 'Makmur Makka', 'Grasindo', '2018', '2018-06-05', 223, ' 3'),
(24, 'KD004', '7 In 1 Pemrograman', 'Rohichan', 'Perpusnas', '2013', '2013-12-12', 224, ' 3'),
(29, 'KD005', 'Boruto The Next Generations', 'Tsubatsa', 'Doraemon Publishing', '2002', '2001-12-31', 200, ' 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_buku`
--

CREATE TABLE `tbl_jenis_buku` (
  `id` int(11) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_buku`
--

INSERT INTO `tbl_jenis_buku` (`id`, `jenis_buku`) VALUES
(1, 'Motivasi'),
(2, 'Novel'),
(3, 'Biografi'),
(4, 'Mata Pelajaran'),
(5, 'Komik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_buku`
--
ALTER TABLE `tbl_jenis_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_jenis_buku`
--
ALTER TABLE `tbl_jenis_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
