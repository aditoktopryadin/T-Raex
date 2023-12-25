-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 11:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_lapinsideninternal`
--

CREATE TABLE `tb_lapinsideninternal` (
  `id` int(50) NOT NULL,
  `n_pelapor` varchar(100) NOT NULL,
  `n_pasien` varchar(100) NOT NULL,
  `no_rm` varchar(50) DEFAULT '-',
  `umur_p` varchar(20) NOT NULL,
  `ruangan_p` varchar(50) NOT NULL,
  `gender_p` varchar(20) NOT NULL,
  `penjamin` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jam_masuk` time(6) NOT NULL,
  `tgl_insiden` date NOT NULL,
  `jam_insiden` time(6) NOT NULL,
  `insiden` text NOT NULL,
  `kronologis` text NOT NULL,
  `jenis_insiden` varchar(30) NOT NULL,
  `n_pelapor1` varchar(50) NOT NULL,
  `t_insiden` varchar(50) NOT NULL,
  `poli` varchar(50) NOT NULL,
  `unit_penyebab` varchar(50) NOT NULL,
  `akibat` varchar(50) NOT NULL,
  `tindakan` text NOT NULL,
  `hasil_tindakan` text NOT NULL,
  `pemberi_tindakan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lapinsideninternal`
--

INSERT INTO `tb_lapinsideninternal` (`id`, `n_pelapor`, `n_pasien`, `no_rm`, `umur_p`, `ruangan_p`, `gender_p`, `penjamin`, `tgl_masuk`, `jam_masuk`, `tgl_insiden`, `jam_insiden`, `insiden`, `kronologis`, `jenis_insiden`, `n_pelapor1`, `t_insiden`, `poli`, `unit_penyebab`, `akibat`, `tindakan`, `hasil_tindakan`, `pemberi_tindakan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '2', '3', '2000-07-26', '4', 'Pria', '1', '2023-11-30', '10:33:00.000000', '2023-11-30', '10:34:00.000000', '5', '6', 'KNC', '7', '8', 'bedah', '9', '1', '10', '11', '1', '2023-11-29 20:33:58', '2023-11-30 03:33:58', NULL),
(2, '1', '2', '3', '2000-07-26', '4', 'Pria', '1', '2023-11-30', '10:33:00.000000', '2023-11-30', '10:34:00.000000', '5', '6', 'KNC', '7', '8', 'bedah', '9', '1', '10', '11', '1', '2023-11-29 20:33:58', '2023-11-30 03:33:58', NULL),
(3, 'Naufal Habib Hakim', 'Ny Uun Supiah', '33492', '1967-07-26', 'Fisioterapi', 'Wanita', '1', '2023-11-30', '05:05:00.000000', '2023-08-14', '12:30:00.000000', 'Luka bakar', 'Pasien Dipasang alat tensi dibagian uppertrapetius billateral dengan posisi tidur terlentang, setelah menit ke 13 pasien mengeluh ada panas dan perih lalu terapis mematikan alat di menit ke 14 setelah di cek ada luka di bagian uppertrapetius sinistra', 'KTD', 'Karyawan', 'Ruang Fisioterapi', 'bedah', 'Rehab Medik', '2', 'diberikan saran ke keluarga pasien untuk tindakan pertama dirumah diberkan kompres es dan salep luka bakar', '-', '1', '2023-11-29 22:27:51', '2023-11-30 05:27:51', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_lapinsideninternal`
--
ALTER TABLE `tb_lapinsideninternal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_lapinsideninternal`
--
ALTER TABLE `tb_lapinsideninternal`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
