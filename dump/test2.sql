-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 01:51 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` char(50) NOT NULL,
  `name` char(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`id`, `email`, `name`, `password`) VALUES
(22, 'nenad@nenad.com', 'nenad', 'Nenad1234'),
(23, 'nikola@nikola.com', 'nikola', 'Nikola1234'),
(24, 'rada@rada.com', 'rada', 'Rada1234'),
(25, 'nena@nena.com', 'nena', 'Nena1234'),
(26, 'dinja@dunja.com', 'dunja', 'Dunja1234'),
(27, 'lazar@lazar.com', 'lazar', 'Lazar1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test2`
--
ALTER TABLE `test2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
