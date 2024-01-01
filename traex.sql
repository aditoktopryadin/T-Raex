-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2024 at 06:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traex`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_rute`
--

CREATE TABLE `tb_rute` (
  `id` int NOT NULL,
  `n_rute` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_rute`
--

INSERT INTO `tb_rute` (`id`, `n_rute`) VALUES
(1, 'Commuter Line Basoeta'),
(2, 'Kalayang Bandara'),
(3, 'Commuter Line Bogor'),
(4, 'Commuter Line Cikarang'),
(5, 'Commuter Line Rangkasbitung'),
(6, 'Commuter Line Tanjung Priok'),
(7, 'Commuter Line Tanggerang'),
(8, 'Commuter Line Merak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int NOT NULL,
  `n_user` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `n_user`, `uname`, `password`) VALUES
(1, 'Naufal Habib', 'habibn97', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(6, '123', '123', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_rute`
--
ALTER TABLE `tb_rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rute`
--
ALTER TABLE `tb_rute`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
