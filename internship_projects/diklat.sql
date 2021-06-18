-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 03:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `diklat`
--

CREATE TABLE `diklat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Diklat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jumlah_Peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_Mulai` date NOT NULL,
  `Tanggal_Berakhir` date NOT NULL,
  `Durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diklat`
--

INSERT INTO `diklat` (`id`, `Nama_Diklat`, `Jenis`, `Penyelenggara`, `Jumlah_Peserta`, `Tanggal_Mulai`, `Tanggal_Berakhir`, `Durasi`, `Tempat`) VALUES
(1, 'Pelatihan K3', 'Internal', 'Dinas Kesehatan ', '3', '2020-11-11', '2020-11-11', '4', 'Semarang'),
(2, 'P3K', 'Internal', 'UGM', '20', '2018-04-30', '2018-04-30', '6', 'Aula Baitul Jannah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diklat`
--
ALTER TABLE `diklat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diklat`
--
ALTER TABLE `diklat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
