-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 07:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamago`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hp` int(5) NOT NULL,
  `mana` int(5) NOT NULL,
  `str` int(4) NOT NULL,
  `waktu_tidur` int(3) NOT NULL DEFAULT 30,
  `level` int(3) NOT NULL DEFAULT 1,
  `def` int(4) NOT NULL,
  `gold` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `hp`, `mana`, `str`, `waktu_tidur`, `level`, `def`, `gold`) VALUES
(1, 'ojan', 0, 0, 0, 30, 1, 0, 0),
(2, 'ojan', 0, 0, 0, 30, 1, 0, 0),
(3, 'ojan', 0, 0, 0, 30, 1, 0, 0),
(4, 'ojan', 0, 0, 0, 30, 1, 0, 0),
(5, 'jarwo', 0, 0, 0, 30, 1, 0, 0),
(6, 'Jarwo', 0, 0, 0, 30, 1, 0, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
