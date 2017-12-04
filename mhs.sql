-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 03:22 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `npm` varchar(14) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` char(1) NOT NULL,
  `usia` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`npm`, `nama`, `alamat`, `jk`, `usia`, `email`) VALUES
('001', 'ibnu', 'Jakarta', 'L', 98, ''),
('140810160000', 'Junior', 'Caheum', 'L', 0, ''),
('140810160001', 'Fahmi Irfan', 'Bandung', 'L', 0, ''),
('140810160028', 'Fahmi Irfan', 'Jln Jendral A Yani 909 Bandung', 'L', 20, ''),
('140810160072', 'Irfananda', 'Bandung', 'L', 0, ''),
('140810160098', 'Cinta', 'Jatihandap', 'P', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `level` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `npm`, `level`) VALUES
('admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '140810160028', '1'),
('cinta98', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', ''),
('fahmi123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '140810160001', ''),
('fahmifan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '140810160072', ''),
('ibnua', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '001', ''),
('irfanan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '140810160099', ''),
('junior', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '140810160000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
