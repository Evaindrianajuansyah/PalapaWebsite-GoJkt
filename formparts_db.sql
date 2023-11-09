-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 05:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formparts_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_jenis_parts`
--

CREATE TABLE `list_jenis_parts` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_jenis_parts`
--

INSERT INTO `list_jenis_parts` (`id`, `nama_jenis`) VALUES
(1, 'MOSFET '),
(2, 'PISTON');

-- --------------------------------------------------------

--
-- Table structure for table `list_merek_parts`
--

CREATE TABLE `list_merek_parts` (
  `id` int(11) NOT NULL,
  `nama_merek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_merek_parts`
--

INSERT INTO `list_merek_parts` (`id`, `nama_merek`) VALUES
(1, 'samsung'),
(2, 'nokia'),
(3, 'Iphone\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `nama_parts` varchar(255) NOT NULL,
  `package_parts` varchar(255) NOT NULL,
  `tipe_parts` varchar(255) NOT NULL,
  `spesifikasi_parts` varchar(255) NOT NULL,
  `ket_spesifikasi_parts` varchar(255) NOT NULL,
  `harga_jual_parts` varchar(255) NOT NULL,
  `foto_parts` varchar(255) NOT NULL,
  `catatan_parts` varchar(500) NOT NULL,
  `stock_parts` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `id_list_merek_parts` int(11) UNSIGNED NOT NULL,
  `id_list_jenis_parts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`nama_parts`, `package_parts`, `tipe_parts`, `spesifikasi_parts`, `ket_spesifikasi_parts`, `harga_jual_parts`, `foto_parts`, `catatan_parts`, `stock_parts`, `id`, `id_list_merek_parts`, `id_list_jenis_parts`) VALUES
('1', '1', 'tipe ', 'Spesifikasi 1', '1', '1', 'pngtree-pinguin-cartoon-cute-png-image_6212135.png', '78', 'e', 1, 0, 0),
('aku', 'aku', 'tipe ', 'Spesifikasi 2', 'aku', 'aku', 'pngtree-pinguin-cartoon-cute-png-image_6212135.png', 'aku', 'aku', 2, 0, 0),
('kamu dia', 'kamu dia', 'green', 'Spesifikasi 5', 'kamu dia', 'aku', 'pngtree-pinguin-cartoon-cute-png-image_6212135.png', 'kamu dia', 'aku', 3, 0, 0),
('eva cantik', 'eva cantik', 'blue', 'Spesifikasi 4', 'eva cantik', 'aku', 'pngtree-pinguin-cartoon-cute-png-image_6212135.png', 'eva cantik', 'eva cantik', 4, 0, 0),
('pipah cantik', 'pipah cantik', 'blue', 'Spesifikasi 4', 'pipah cantik', 'pipah cantik', 'pngtree-pinguin-cartoon-cute-png-image_6212135.png', 'pipah cantik', '1', 5, 0, 0),
('apaasi', 'apaasi', 'green', 'Spesifikasi 3', 'eva cantik', 'aku', 'pngtree-pinguin-cartoon-cute-png-image_6212135.png', 'asdf12345', '1', 6, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_jenis_parts`
--
ALTER TABLE `list_jenis_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_merek_parts`
--
ALTER TABLE `list_merek_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_jenis_parts`
--
ALTER TABLE `list_jenis_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_merek_parts`
--
ALTER TABLE `list_merek_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
