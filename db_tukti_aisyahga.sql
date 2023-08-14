-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 12:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tukti_aisyahga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_aisyahga`
--

CREATE TABLE `admin_aisyahga` (
  `id_admin` int(5) NOT NULL,
  `nm_admin` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_aisyahga`
--

INSERT INTO `admin_aisyahga` (`id_admin`, `nm_admin`, `password`, `username`) VALUES
(1, 'Aisyah Ghina Azzahra', '123456', 'aisyahga');

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar_aisyahga`
--

CREATE TABLE `suratkeluar_aisyahga` (
  `no_surat` varchar(25) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `waktu` varchar(15) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `pengesah` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratkeluar_aisyahga`
--

INSERT INTO `suratkeluar_aisyahga` (`no_surat`, `penerima`, `waktu`, `tempat`, `perihal`, `pengesah`) VALUES
('357/PL16/KL', 'Pemko', '10/12/2019', 'Banjarmasin', 'Kegiatan kunjungan dan pengajuan', 'Direktur ');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk_aisyahga`
--

CREATE TABLE `suratmasuk_aisyahga` (
  `no_surat` varchar(25) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `waktu` varchar(15) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `lampiran` int(4) NOT NULL,
  `perihal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratmasuk_aisyahga`
--

INSERT INTO `suratmasuk_aisyahga` (`no_surat`, `pengirim`, `waktu`, `tempat`, `lampiran`, `perihal`) VALUES
('123/KH', 'Budi', '14/08/2023', 'Banjarmasin', 0, 'Buatkan surat'),
('124/LL', 'Hesa', '12/08/2023', 'Banjarmasin', 0, 'Tes Surat Masuk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_aisyahga`
--
ALTER TABLE `admin_aisyahga`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `suratkeluar_aisyahga`
--
ALTER TABLE `suratkeluar_aisyahga`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `suratmasuk_aisyahga`
--
ALTER TABLE `suratmasuk_aisyahga`
  ADD PRIMARY KEY (`no_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_aisyahga`
--
ALTER TABLE `admin_aisyahga`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
