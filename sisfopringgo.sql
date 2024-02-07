-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2024 at 09:54 AM
-- Server version: 10.6.16-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.3.2-1+ubuntu22.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfopringgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kodelingkungan` varchar(10) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `namalengkap`, `username`, `password`, `kodelingkungan`, `level`) VALUES
(1, 'admin A', 'admin_a', '5e4c97416ab0c239e98f06554f0e766e', '001', 'adminlingkungan'),
(2, 'super admin', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `data_lingkungan`
--

CREATE TABLE `data_lingkungan` (
  `id` int(11) NOT NULL,
  `lingkungan` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `nmwilayah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_lingkungan`
--

INSERT INTO `data_lingkungan` (`id`, `lingkungan`, `ket`, `nmwilayah`) VALUES
(1, '001', 'Lingkungan A', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_umat`
--

CREATE TABLE `data_umat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenkel` int(1) NOT NULL,
  `np` varchar(100) NOT NULL,
  `lingkungan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_umat`
--

INSERT INTO `data_umat` (`id`, `nama`, `jenkel`, `np`, `lingkungan`) VALUES
(1, 'Dhimas Kirana', 1, '03849570238947503248', '001');

-- --------------------------------------------------------

--
-- Table structure for table `data_umat_kk`
--

CREATE TABLE `data_umat_kk` (
  `id` int(11) NOT NULL,
  `nmkk` varchar(100) NOT NULL,
  `np` varchar(100) NOT NULL,
  `nmlingkungan` varchar(20) NOT NULL,
  `nmwilayah` varchar(20) NOT NULL,
  `lingkungan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_umat_kk`
--

INSERT INTO `data_umat_kk` (`id`, `nmkk`, `np`, `nmlingkungan`, `nmwilayah`, `lingkungan`) VALUES
(1, 'Dhimas Kirana', '03849570238947503248', '', '', '001');

-- --------------------------------------------------------

--
-- Table structure for table `data_wilayah`
--

CREATE TABLE `data_wilayah` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_lingkungan`
--
ALTER TABLE `data_lingkungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_umat`
--
ALTER TABLE `data_umat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_umat_kk`
--
ALTER TABLE `data_umat_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_wilayah`
--
ALTER TABLE `data_wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_lingkungan`
--
ALTER TABLE `data_lingkungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_umat`
--
ALTER TABLE `data_umat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_umat_kk`
--
ALTER TABLE `data_umat_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_wilayah`
--
ALTER TABLE `data_wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
