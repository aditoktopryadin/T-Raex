-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2024 at 11:06 AM
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
  `n_rute` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `tb_stasiun`
--

CREATE TABLE `tb_stasiun` (
  `id` int NOT NULL,
  `n_stasiun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_stasiun`
--

INSERT INTO `tb_stasiun` (`id`, `n_stasiun`) VALUES
(1, 'MANGGARAI'),
(2, 'BNI CITY'),
(3, 'TANAH ABANG'),
(4, 'DURI'),
(5, 'BATU CEPER'),
(6, 'BASOETA'),
(7, 'JAKARTA KOTA'),
(8, 'JAYAKARTA'),
(9, 'MANGGA BESAR'),
(10, 'SAWAH BESAR'),
(11, 'JUANDA'),
(12, 'GAMBIR'),
(13, 'GONDANGDIA'),
(14, 'CIKINI'),
(15, 'MANGGARAI'),
(16, 'TEBET'),
(17, 'CAWANG'),
(18, 'DUREN KALIBATA'),
(19, 'PASAR MINGGU BARU'),
(20, 'PASAR MINGGU '),
(21, 'TANJUNG BARAT'),
(22, 'LENTENG AGUNG'),
(23, 'UNIV. PANCASILA'),
(24, 'UNIV. INDONESIA'),
(25, 'PONDOK CINA'),
(26, 'DEPOK BARU'),
(27, 'DEPOK  '),
(28, 'CITAYAM'),
(29, 'BOJONG GEDE'),
(30, 'CILEBUT'),
(31, 'SUKARESMI'),
(32, 'BOGOR'),
(33, 'PONDOK RAJEG'),
(34, 'CIBINONG'),
(35, 'GUNUNG PUTRI'),
(36, 'NAMBO'),
(37, 'JATINEGARA'),
(38, 'PONDOK JATI'),
(39, 'KRAMAT'),
(40, 'GANG SENTIONG'),
(41, 'PASAR SENEN'),
(42, 'KEMAYORAN'),
(43, 'RAJAWALI'),
(44, 'KAMPUNG BANDAN'),
(45, 'ANGKE'),
(46, 'DURI'),
(47, 'TANAH ABANG'),
(48, 'KARET'),
(49, 'BNI CITY'),
(50, 'SUDIRMAN'),
(51, 'MANGGARAI'),
(52, 'MATRAMAN'),
(53, 'JATINEGARA'),
(54, 'KLENDER'),
(55, 'BUARAN'),
(56, 'KLENDER BARU'),
(57, 'CAKUNG'),
(58, 'KRANJI'),
(59, 'BEKASI'),
(60, 'BEKASI TIMUR'),
(61, 'TAMBUN'),
(62, 'CIBITUNG'),
(63, 'METLAND TELAGA MURNI'),
(64, 'CIKARANG'),
(65, 'TANAH ABANG'),
(66, 'PALMERAH'),
(67, 'KEBAYORAN'),
(68, 'PONDOK RANJI'),
(69, 'JURANG MANGU'),
(70, 'SUDIMARA'),
(71, 'RAWA BUNTU'),
(72, 'SERPONG'),
(73, 'CISAUK'),
(74, 'CICAYUR'),
(75, 'JATAKE'),
(76, 'PARUNG PANJANG'),
(77, 'PARAYASA'),
(78, 'CILEJIT'),
(79, 'DARU'),
(80, 'TENJO'),
(81, 'TIGARAKSA PODOMORO'),
(82, 'TIGARAKSA  '),
(83, 'CIKOYA'),
(84, 'MAJA'),
(85, 'CITERAS'),
(86, 'RANGKASBITUNG'),
(87, 'JAKARTA KOTA'),
(88, 'KAMPUNG BANDAN'),
(89, 'ANCOL'),
(90, 'JIS'),
(91, 'TANJUNG PRIOK'),
(92, 'DURI'),
(93, 'GROGOL'),
(94, 'PESING'),
(95, 'TAMAN KOTA'),
(96, 'BOJONG INDAH'),
(97, 'RAWA BUAYA'),
(98, 'KALI DERES'),
(99, 'PORIS'),
(100, 'BATU CEPER'),
(101, 'TANAH TINGGI'),
(102, 'TANGERANG'),
(103, 'RANGKASBITUNG'),
(104, 'JAMBUBARU'),
(105, 'CATANG'),
(106, 'CIKEUSAL'),
(107, 'WALANTAKA'),
(108, 'SERANG'),
(109, 'KARANGANTU'),
(110, 'TONJONGBARU'),
(111, 'CILEGON'),
(112, 'KRENCENG'),
(113, 'MERAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int NOT NULL,
  `n_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `tb_stasiun`
--
ALTER TABLE `tb_stasiun`
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
-- AUTO_INCREMENT for table `tb_stasiun`
--
ALTER TABLE `tb_stasiun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
