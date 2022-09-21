-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 04:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_bus`
--

CREATE TABLE `kategori_bus` (
  `id_katbus` int(10) NOT NULL,
  `tipe_unit` varchar(25) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `seat` int(15) NOT NULL,
  `nopol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_bus`
--

INSERT INTO `kategori_bus` (`id_katbus`, `tipe_unit`, `kategori`, `seat`, `nopol`) VALUES
(1, 'Small Bus', 'Hiace', 11, 'B7454FAA'),
(2, 'Medium Bus', 'Premium', 23, 'B7461FAA'),
(3, 'Big Bus', 'Luxury', 59, 'AB7892JN');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(10) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `role`) VALUES
(1, 'Administrator'),
(2, 'Sales'),
(3, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(10) NOT NULL,
  `no_reservasi` varchar(35) NOT NULL,
  `pic_sales` varchar(25) NOT NULL,
  `profit_center` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_sales`, `no_reservasi`, `pic_sales`, `profit_center`) VALUES
(1, 'TRAC-JRT6J6AN140815', 'Nadya', 'UB01'),
(2, 'TRAC-TMU3S0PY141410', 'Zaldi ', 'UB01'),
(3, 'TRAC-RA4P5PH3139145', 'Tiara', 'UB01'),
(4, 'TRAC-5GSB7O7A143172', 'Janner', 'UB01'),
(5, 'TRAC-EAJKXDCA143439', 'Janner', 'UB01'),
(6, 'TRAC-20220830610184292', 'Rani', 'UB01'),
(7, 'TRAC-VZO6B4GJ142781', 'Henti', 'UB01'),
(8, 'TRAC-QWQ4CC7K143358', 'Ardi', 'UB21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_bus`
--
ALTER TABLE `kategori_bus`
  ADD PRIMARY KEY (`id_katbus`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
