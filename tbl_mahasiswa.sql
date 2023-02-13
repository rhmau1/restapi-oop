-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 03:54 AM
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
-- Database: `indonetsource`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`) VALUES
('20210002', 'm sulthon aulia ', 'laki-laki', 'jakarta', '2005-06-15', 'bct'),
('20210003', 'arya chandra', 'laki-laki', 'surabaya', '2004-10-29', 'Jl. hubdam 5'),
('20210004', 'stivani hilda', 'perempuan', 'malang', '2005-09-11', 'jl. bandulanbaru12'),
('20210005', 'daffa putra', 'laki-laki', 'malang', '2005-11-11', 'jl. bandulanbaru tebo tengah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
