-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2019 at 11:42 PM
-- Server version: 10.3.17-MariaDB-1
-- PHP Version: 7.2.9-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'madara', 'ed06a360b820d6a9a2bcf218f53b9922');

-- --------------------------------------------------------

--
-- Table structure for table `datarSertifikasi`
--

CREATE TABLE `datarSertifikasi` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `sertifikasi` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nohp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datarSertifikasi`
--

INSERT INTO `datarSertifikasi` (`id_mhs`, `nim_mhs`, `nama_mhs`, `prodi`, `sertifikasi`, `tgl_lahir`, `nohp`) VALUES
(1, 165410089, 'naruto uzumaki', 'teknik informatika', 'CCNA', '1994-10-10', '087765345123');

-- --------------------------------------------------------

--
-- Table structure for table `detailSertifikasi`
--

CREATE TABLE `detailSertifikasi` (
  `id_detail` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `sertifikasi` varchar(25) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `tglMulai` date NOT NULL,
  `tglSelesai` date NOT NULL,
  `jam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailSertifikasi`
--

INSERT INTO `detailSertifikasi` (`id_detail`, `id_mhs`, `nim_mhs`, `nama_mhs`, `prodi`, `sertifikasi`, `id_sertifikasi`, `dosen`, `tglMulai`, `tglSelesai`, `jam`) VALUES
(1, 1, 165410089, 'naruto uzumaki', 'teknik informatika', 'CCNA', 1, '', '2019-12-17', '2019-12-28', '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id_sertifikasi` int(11) NOT NULL,
  `namaSertifikasi` varchar(25) NOT NULL,
  `tglMulai` date NOT NULL,
  `tglSelesai` date NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `jam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`id_sertifikasi`, `namaSertifikasi`, `tglMulai`, `tglSelesai`, `dosen`, `jam`) VALUES
(1, 'CCNA', '2019-12-24', '2019-12-31', 'Wagito', '10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datarSertifikasi`
--
ALTER TABLE `datarSertifikasi`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `detailSertifikasi`
--
ALTER TABLE `detailSertifikasi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_mhs` (`id_mhs`),
  ADD KEY `id_sertifikasi` (`id_sertifikasi`);

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `datarSertifikasi`
--
ALTER TABLE `datarSertifikasi`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detailSertifikasi`
--
ALTER TABLE `detailSertifikasi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailSertifikasi`
--
ALTER TABLE `detailSertifikasi`
  ADD CONSTRAINT `detailSertifikasi_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `datarSertifikasi` (`id_mhs`),
  ADD CONSTRAINT `detailSertifikasi_ibfk_2` FOREIGN KEY (`id_sertifikasi`) REFERENCES `sertifikasi` (`id_sertifikasi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
