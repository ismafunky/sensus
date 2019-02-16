-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2019 at 01:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensus`
--

-- --------------------------------------------------------

--
-- Table structure for table `datadaerah`
--

CREATE TABLE `datadaerah` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jumlahPndk` int(250) NOT NULL,
  `pendapatan` int(250) NOT NULL,
  `AvgPendapatan` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datadaerah`
--

INSERT INTO `datadaerah` (`id`, `nama`, `jumlahPndk`, `pendapatan`, `AvgPendapatan`) VALUES
(1, 'lorem', 123, 123, 123),
(2, 'lorem', 123, 123, 123),
(3, 'Pandeglang', 150, 15000, 2000),
(4, 'lorem', 123, 123, 1800000),
(5, 'lorem', 123, 123, 1800000);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `region` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `income` varchar(250) NOT NULL,
  `create_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `region`, `address`, `income`, `create_by`) VALUES
(1, 'lorem', 'lorem', 'lorem', 'lorem', 'lorem'),
(2, 'lorem', 'lorem', 'lorem', 'lorem', 'lorem');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'bilkis', '$2y$10$Af5dSAPInyXOXoDwF5SFAupUhZ8gU1q8CDQRBWOUwUpQeBIux9Xe2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datadaerah`
--
ALTER TABLE `datadaerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datadaerah`
--
ALTER TABLE `datadaerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
