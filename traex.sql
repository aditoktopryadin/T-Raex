-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3310
-- Generation Time: Jan 19, 2024 at 03:05 PM
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
  `n_stasiun` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
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
  `id` int NOT NULL,
  `id_stasiun` int DEFAULT NULL,
  `id_rute` int DEFAULT NULL,
  `urutan` int DEFAULT NULL,
  `waktu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_urutan`
--

INSERT INTO `tb_urutan` (`id`, `id_stasiun`, `id_rute`, `urutan`, `waktu`) VALUES
(1, 47, 4, 1, 2),
(2, 1, 4, 2, 6),
(3, 46, 4, 3, 4),
(4, 2, 4, 4, 1),
(5, 45, 4, 5, 1),
(6, 3, 4, 6, 6),
(7, 4, 4, 7, 8),
(8, 44, 4, 8, 5),
(9, 43, 4, 9, 8),
(10, 42, 4, 10, 3),
(11, 41, 4, 11, 5),
(12, 40, 4, 12, 5),
(13, 39, 4, 13, 2),
(14, 38, 4, 14, 1),
(15, 37, 4, 15, 2),
(16, 36, 4, 16, 8),
(17, 1, 3, 1, 2),
(18, 14, 3, 2, 2),
(19, 13, 3, 3, 2),
(20, 11, 3, 4, 6),
(21, 10, 3, 5, 1),
(22, 9, 3, 6, 1),
(23, 8, 3, 7, 7),
(24, 7, 3, 8, 3),
(25, 7, 6, 1, 6),
(26, 43, 6, 2, 0);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_stasiun`
--
ALTER TABLE `tb_stasiun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tb_urutan`
--
ALTER TABLE `tb_urutan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
