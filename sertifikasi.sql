-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 08:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
(1, 'madara', 'ed06a360b820d6a9a2bcf218f53b9922'),
(2, 'ganteng', 'ganteng');

-- --------------------------------------------------------

--
-- Table structure for table `datarsertifikasi`
--

CREATE TABLE `datarsertifikasi` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `sertifikasi` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nohp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datarsertifikasi`
--

INSERT INTO `datarsertifikasi` (`id_mhs`, `nim_mhs`, `nama_mhs`, `prodi`, `sertifikasi`, `tgl_lahir`, `nohp`) VALUES
(1, 165410089, 'naruto uzumaki', 'teknik informatika', 'CCNA', '1994-10-10', '087765345123'),
(2, 1231212, 'aesrwer', 'ti', 'ccna', '2019-12-21', '123123123123'),
(3, 1231212, 'aesrwer', 'ti', 'ccna', '2019-12-21', '123123123123'),
(4, 165410029, 'WEDI ARIA SANTANA', 'ti', 'ccna', '2019-12-21', '085934885248'),
(5, 16510022, 'tangguh', 'si', 'oracle', '2019-12-21', '123123123123'),
(6, 16510022, 'tangguh', 'si', 'oracle', '2019-12-21', '123123123123'),
(7, 16510022, 'tangguh', 'si', 'oracle', '2019-12-21', '123123123123'),
(8, 16540212, 'antipecah', 'si', 'ccna', '2019-12-21', '123123123123'),
(10, 165402121, 'tangguh22', 'ti', 'ccna', '2019-12-21', '123123123123'),
(11, 165410022, 'gita', 'ti', 'toefl', '2019-12-21', '085934885222'),
(14, 165410033, 'wahyu', 'TI', 'toefl', '2019-12-23', '085934885222');

-- --------------------------------------------------------

--
-- Table structure for table `detailsertifikasi`
--

CREATE TABLE `detailsertifikasi` (
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
-- Dumping data for table `detailsertifikasi`
--

INSERT INTO `detailsertifikasi` (`id_detail`, `id_mhs`, `nim_mhs`, `nama_mhs`, `prodi`, `sertifikasi`, `id_sertifikasi`, `dosen`, `tglMulai`, `tglSelesai`, `jam`) VALUES
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
(1, 'CCNA', '2019-12-24', '2019-12-31', 'Wagito', '10:00'),
(2, 'ccna', '2019-12-24', '2019-12-25', 'adiyuda', '12:04'),
(3, 'ORACLE', '2019-12-24', '2019-12-27', 'AGUNG', '08:00'),
(4, 'oracle', '2019-12-23', '2019-12-28', 'Bambang', '10:00'),
(5, 'CCNA', '2019-12-30', '2020-01-01', 'WEDI', '08:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datarsertifikasi`
--
ALTER TABLE `datarsertifikasi`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `detailsertifikasi`
--
ALTER TABLE `detailsertifikasi`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `datarsertifikasi`
--
ALTER TABLE `datarsertifikasi`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `detailsertifikasi`
--
ALTER TABLE `detailsertifikasi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailsertifikasi`
--
ALTER TABLE `detailsertifikasi`
  ADD CONSTRAINT `detailSertifikasi_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `datarsertifikasi` (`id_mhs`),
  ADD CONSTRAINT `detailSertifikasi_ibfk_2` FOREIGN KEY (`id_sertifikasi`) REFERENCES `sertifikasi` (`id_sertifikasi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
