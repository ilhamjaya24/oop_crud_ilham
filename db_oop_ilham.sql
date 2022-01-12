-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 07:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_oop_ilham`
--

-- --------------------------------------------------------

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
(24, 'KD004', '7 In 1 Pemrograman', 'Rohichan', 'Perpusnas', '2013', '2013-12-12', 224, ' 3'),
(29, 'KD005', 'Boruto The Next Generations', 'Tsubatsa', 'Doraemon Publishing', '2002', '2001-12-31', 200, ' 5'),
(35, 'KD003', 'Ranah 3 Warna', 'A.Fuadi', 'Gramedia', '2017', '2021-11-16', 2224, '2'),
(36, 'KD009', 'Java Programming', 'Pa Farihin', 'Expedisi', '2021', '2021-12-04', 300, '3'),
(37, 'KD006', 'rerer', 'rer', 'erer', '3434', '2021-12-15', 3, '2'),
(38, 'rerer', 'Java Programming', 'Pa Farihin', 'erer', '2021', '2022-01-03', 300, '3'),
(39, 'kj', 'rerer', 'kjh', 'Expedisi', 'hjk', '2021-12-08', 300, '2'),
(40, 'dsd', 'Java Programming', 'dsds', 'erer', 'dsd', '2021-12-01', 231, '4'),
(41, 'KD0063', 'Java Programming', 'kjh', 'erer', '3434', '2024-09-22', 2224, '2');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_login`, `username`, `password`, `nama_pengguna`, `telepon`, `email`, `alamat`) VALUES
(3, 'ilham', '21232f297a57a5a743894a0e4a801fc3', 'Ilham Jaya Kusumah', '085711372583', 'kusumahilhamjaya27@gmail.com', 'Ciamis'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '085711372583', 'aaW@gmail.com', 'dsd');

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
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_jenis_buku`
--
ALTER TABLE `tbl_jenis_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
