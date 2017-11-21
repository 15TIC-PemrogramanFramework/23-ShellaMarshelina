-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2017 at 01:40 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3673161_shellauts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('shella', 'shella');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(255) NOT NULL,
  `nama_manager` varchar(255) NOT NULL,
  `nohp` int(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `pass`, `alamat`, `nohp`) VALUES
(2, 'fadli', 'fadli', 'padang', 81234950),
(12, 'ani', 'ani', 'gg', 6563525),
(13, '', '', '', 0),
(14, 'ica', 'ica', 'duri', 82347329),
(15, 'shella', 'shella', 'rumbai', 89786757);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(255) NOT NULL,
  `id_member` int(255) NOT NULL,
  `id_tiket` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_member`, `id_tiket`, `status`) VALUES
(1, 2, 89, 'Sedang diproses'),
(7, 2, 454, 'Dibatalkan');

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `id_supir` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supir`
--

INSERT INTO `supir` (`id_supir`, `nama`, `alamat`, `nohp`, `status`) VALUES
(2, 'alilii', 'padaaang', 35244, 'nikah'),
(8, 'ali', 'padang', 93876, 'nikah');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_berangkat` varchar(15) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `nohp` int(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_pol` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama`, `tgl_berangkat`, `tujuan`, `harga`, `nohp`, `alamat`, `no_pol`) VALUES
(89, 'agung', '23', 'sad', '120.000', 312, 'asd', '312'),
(123, 'anggi', '12 maret 2017', 'padang', '', 81234567, 'padang', ''),
(454, 'ani', '12 Agustus', 'Padang', '120.000', 812938217, 'tegal sari', 'BA 1234 nm'),
(457, 'Masri', '12 Agustus', 'Padang', '130.000', 19283038, 'Harapan', 'Bm 1213 Bm'),
(458, 'isti', '12 maret 2017', 'pekanbaru', '', 897546534, 'rowo sari', ''),
(460, 'risya', '8 mei 2017', 'padang', '', 8237387, 'usa', ''),
(464, 'andi', '56', 'gg', '120.000', 45, 'df', 'Bm 1213 Bm');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(255) NOT NULL,
  `id_manager` int(255) NOT NULL,
  `id_supir` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `transfer_via` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_manager`, `id_supir`, `nama`, `transfer_via`) VALUES
(14, 3, 2, 'andi', 'atm'),
(15, 6, 8, 'ali', 'atm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`),
  ADD KEY `nama_manager` (`nama_manager`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `id_member` (`id_member`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_supir`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pesan` (`id_manager`),
  ADD KEY `id_supir` (`id_supir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
  MODIFY `id_supir` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`id_manager`) REFERENCES `transaksi` (`id_manager`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supir`
--
ALTER TABLE `supir`
  ADD CONSTRAINT `supir_ibfk_1` FOREIGN KEY (`id_supir`) REFERENCES `transaksi` (`id_supir`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
