-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 04:50 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucapin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mimin` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(30) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT 0,
  `karcoin` varchar(10) NOT NULL DEFAULT '0',
  `register` timestamp NULL DEFAULT current_timestamp(),
  `ipaddress` varchar(12) NOT NULL,
  `uagent` varchar(250) NOT NULL,
  `address` varchar(100) NOT NULL,
  `verifikasi` varchar(5) NOT NULL,
  `profil` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `username`, `password`, `mimin`, `email`, `hp`, `approve`, `karcoin`, `register`, `ipaddress`, `uagent`, `address`, `verifikasi`, `profil`) VALUES
(1, 'Karta Sasmita', 'Karta', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'karta@gmail.com', '082211234455', 1, '50000000', '2022-05-24 07:42:25', '', '', 'Palembang', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(32) NOT NULL,
  `pdeskripsi` varchar(50) NOT NULL,
  `pprice` varchar(10) NOT NULL,
  `pcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pdeskripsi`, `pprice`, `pcode`) VALUES
(1, 'Demo 1', 'Demo 1', '2500', 'HdVsa'),
(2, 'Demo 2', 'Demo 2', '5000', 'HdVsa'),
(3, 'Demo 3', 'Demo 3', '7500', 'HdVsa'),
(4, 'Demo 4', 'Demo 4', '10000', 'HdVsa'),
(5, 'Demo 5', 'Demo 5', '12500', 'HdVsa'),
(6, 'Demo 6', 'Demo 7', '15000', 'HdVsa'),
(7, 'Demo 7', 'Demo 7', '17500', 'HdVsa'),
(8, 'Demo 8', 'Demo 8', '20000', 'HdVsa'),
(9, 'Demo 9', 'Demo 9', '22500', 'HdVsa'),
(10, 'Demo 10', 'Demo 10', '25000', 'HdVsa');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_product`
--

CREATE TABLE `riwayat_product` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` varchar(5) NOT NULL,
  `url` varchar(32) NOT NULL,
  `rcost` varchar(10) NOT NULL,
  `tgl_start` varchar(32) NOT NULL,
  `tgl_end` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_topup`
--

CREATE TABLE `riwayat_topup` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `topup` varchar(10) NOT NULL,
  `tgl_topup` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_topup`
--

INSERT INTO `riwayat_topup` (`id`, `uid`, `topup`, `tgl_topup`) VALUES
(1, 1, '5000000', '2022-05-28 10:04:27'),
(3, 1, '10000000', '2022-05-28 22:53:39'),
(4, 1, '15000000', '2022-05-28 23:01:00'),
(5, 1, '20000000', '2022-11-22 01:04:41'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `hp` (`hp`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `pcode` (`pcode`);

--
-- Indexes for table `riwayat_product`
--
ALTER TABLE `riwayat_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `riwayat_topup`
--
ALTER TABLE `riwayat_topup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `riwayat_topup`
--
ALTER TABLE `riwayat_topup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat_product`
--
ALTER TABLE `riwayat_product`
  ADD CONSTRAINT `riwayat_product_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_product_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`pcode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat_topup`
--
ALTER TABLE `riwayat_topup`
  ADD CONSTRAINT `riwayat_topup_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
