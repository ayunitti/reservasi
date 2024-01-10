-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2023 at 03:20 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservasinew`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `pax` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `harga_weekday` varchar(225) NOT NULL,
  `harga_weekend` varchar(225) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `pax`, `gambar`, `jumlah`, `harga_weekday`, `harga_weekend`, `jam_buka`, `jam_tutup`, `deskripsi`) VALUES
(2, 'Medium Room', 'bg-pg4.jpg', '6', '600.000', '400.000', '09:00:00', '23:50:00', 'Ready untuk acara ulang tahun'),
(3, 'Small Room', 'pg2.2.jpg', '4', '200.000', '100.000', '09:00:00', '23:59:00', 'Acara keluarga ready');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `tanggal_reservasi` date NOT NULL,
  `jam_reservasi` time NOT NULL,
  `tipe_ruangan` varchar(50) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `status_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `atas_nama`, `tanggal_reservasi`, `jam_reservasi`, `tipe_ruangan`, `total_harga`, `status_bayar`) VALUES
(2, 'Cakra Dewi', '2023-11-09', '18:09:12', 'Publik', '40.000', 'Belum'),
(5, 'Nitti', '2023-11-16', '08:23:15', 'Privat', '30.000', 'Belum'),
(10, 'Dwi Putri', '2023-11-18', '19:24:00', 'Publik', '100.000', 'Belum'),
(11, 'Adinda Dewi', '2023-11-11', '19:26:52', 'Publik', '60.000', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `nama`, `email`, `password`, `akses`) VALUES
(1, 'admin', 'admin@gmail.com', '123', 'Admin'),
(2, 'Cakra', 'cakra26@gmail.com', '26042006', 'Pengguna'),
(3, 'Nitti', 'nittipratiwi04@gmail.com', '2304', 'Pengguna'),
(4, 'Enny', 'enny@gmail.com', '1453', 'Pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
