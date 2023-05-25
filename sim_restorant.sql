-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 12:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_restorant`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket_makanan`
--

CREATE TABLE `paket_makanan` (
  `kode_paket` varchar(300) NOT NULL,
  `nama_paket` varchar(300) NOT NULL,
  `harga` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `jumlah` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket_makanan`
--

INSERT INTO `paket_makanan` (`kode_paket`, `nama_paket`, `harga`, `status`, `jumlah`) VALUES
('565263', 'martabak', '200', 'ADA', '2992');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `nama_pemesan` varchar(300) NOT NULL,
  `kode_paket` varchar(300) NOT NULL,
  `jumlah` varchar(300) NOT NULL,
  `nomer_meja` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`nama_pemesan`, `kode_paket`, `jumlah`, `nomer_meja`) VALUES
('jjj', '565263', '2', 'u88');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket_makanan`
--
ALTER TABLE `paket_makanan`
  ADD PRIMARY KEY (`kode_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
