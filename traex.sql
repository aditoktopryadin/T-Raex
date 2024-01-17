-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 06:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `id` int(11) NOT NULL,
  `n_rute` varchar(100) NOT NULL
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
  `id` int(11) NOT NULL,
  `n_stasiun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, 'TEBET'),
(16, 'CAWANG'),
(17, 'DUREN KALIBATA'),
(18, 'PASAR MINGGU BARU'),
(19, 'PASAR MINGGU '),
(20, 'TANJUNG BARAT'),
(21, 'LENTENG AGUNG'),
(22, 'UNIV. PANCASILA'),
(23, 'UNIV. INDONESIA'),
(24, 'PONDOK CINA'),
(25, 'DEPOK BARU'),
(26, 'DEPOK  '),
(27, 'CITAYAM'),
(28, 'BOJONG GEDE'),
(29, 'CILEBUT'),
(30, 'SUKARESMI'),
(31, 'BOGOR'),
(32, 'PONDOK RAJEG'),
(33, 'CIBINONG'),
(34, 'GUNUNG PUTRI'),
(35, 'NAMBO'),
(36, 'JATINEGARA'),
(37, 'PONDOK JATI'),
(38, 'KRAMAT'),
(39, 'GANG SENTIONG'),
(40, 'PASAR SENEN'),
(41, 'KEMAYORAN'),
(42, 'RAJAWALI'),
(43, 'KAMPUNG BANDAN'),
(44, 'ANGKE'),
(45, 'KARET'),
(46, 'SUDIRMAN'),
(47, 'MATRAMAN'),
(48, 'JATINEGARA'),
(49, 'KLENDER'),
(50, 'BUARAN'),
(51, 'KLENDER BARU'),
(52, 'CAKUNG'),
(53, 'KRANJI'),
(54, 'BEKASI'),
(55, 'BEKASI TIMUR'),
(56, 'TAMBUN'),
(57, 'CIBITUNG'),
(58, 'METLAND TELAGA MURNI'),
(59, 'CIKARANG'),
(60, 'PALMERAH'),
(61, 'KEBAYORAN'),
(62, 'PONDOK RANJI'),
(63, 'JURANG MANGU'),
(64, 'SUDIMARA'),
(65, 'RAWA BUNTU'),
(66, 'SERPONG'),
(67, 'CISAUK'),
(68, 'CICAYUR'),
(69, 'JATAKE'),
(70, 'PARUNG PANJANG'),
(71, 'PARAYASA'),
(72, 'CILEJIT'),
(73, 'DARU'),
(74, 'TENJO'),
(75, 'TIGARAKSA PODOMORO'),
(76, 'TIGARAKSA  '),
(77, 'CIKOYA'),
(78, 'MAJA'),
(79, 'CITERAS'),
(80, 'RANGKASBITUNG'),
(81, 'JAKARTA KOTA'),
(82, 'ANCOL'),
(83, 'JIS'),
(84, 'TANJUNG PRIOK'),
(85, 'GROGOL'),
(86, 'PESING'),
(87, 'TAMAN KOTA'),
(88, 'BOJONG INDAH'),
(89, 'RAWA BUAYA'),
(90, 'KALI DERES'),
(91, 'PORIS'),
(92, 'TANAH TINGGI'),
(93, 'TANGERANG'),
(94, 'JAMBUBARU'),
(95, 'CATANG'),
(96, 'CIKEUSAL'),
(97, 'WALANTAKA'),
(98, 'SERANG'),
(99, 'KARANGANTU'),
(100, 'TONJONGBARU'),
(101, 'CILEGON'),
(102, 'KRENCENG'),
(103, 'MERAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_urutan`
--

CREATE TABLE `tb_urutan` (
  `id` int(11) NOT NULL,
  `id_stasiun` int(11) DEFAULT NULL,
  `id_rute` int(11) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_urutan`
--

INSERT INTO `tb_urutan` (`id`, `id_stasiun`, `id_rute`, `urutan`) VALUES
(1, 93, 7, 1),
(2, 92, 7, 2),
(3, 5, 7, 3),
(4, 91, 7, 4),
(5, 90, 7, 5),
(6, 89, 7, 6),
(7, 88, 7, 7),
(8, 87, 7, 8),
(9, 86, 7, 9),
(10, 85, 7, 10),
(11, 4, 7, 11),
(12, 1, 8, 1),
(13, 5, 8, 2),
(14, 4, 8, 3),
(15, 2, 8, 4),
(16, 1, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `n_user` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
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
-- Indexes for table `tb_urutan`
--
ALTER TABLE `tb_urutan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Relasi_Stasiun` (`id_stasiun`),
  ADD KEY `Relasi_Rute` (`id_rute`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_stasiun`
--
ALTER TABLE `tb_stasiun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tb_urutan`
--
ALTER TABLE `tb_urutan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_urutan`
--
ALTER TABLE `tb_urutan`
  ADD CONSTRAINT `Relasi_Rute` FOREIGN KEY (`id_rute`) REFERENCES `tb_rute` (`id`),
  ADD CONSTRAINT `Relasi_Stasiun` FOREIGN KEY (`id_stasiun`) REFERENCES `tb_stasiun` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
