-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 03:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skd_prak_tujuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`, `nama`) VALUES
('', '', '', ''),
('', '', '', ''),
('novianrizky', '8c58386c303f131907ec884b46e990', 'novianrizky@gmail.com', 'novianrizky'),
('', '', '', ''),
('ibuguru', '272c85e28ad4a79d1b82f73b121005c2d77d1349', 'ibuguru@gmail.com', 'ibuguru'),
('', '', '', ''),
('', '', '', ''),
('nrizky', 'a55ea8f2e59a1b09cb1a6d4258d7f55577f7fa29', 'its.nrizky@student.uns.ac.id', 'Novian Rizky P');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pw`
--

CREATE TABLE `tb_pw` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `md5` varchar(255) NOT NULL,
  `sha1` varchar(255) NOT NULL,
  `sha256` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pw`
--

INSERT INTO `tb_pw` (`username`, `email`, `nama`, `md5`, `sha1`, `sha256`) VALUES
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('nrizky', 'its.nrizky@student.uns.ac.id', 'Novian Rizky P', '3196622457d0212560cb75da47747adf', 'a55ea8f2e59a1b09cb1a6d4258d7f55577f7fa29', 'fff48541bd415915f7956517c11bc416f49b02d17b6ff75dd332438e91df798c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
