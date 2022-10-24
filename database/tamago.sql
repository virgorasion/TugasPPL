-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 06:28 PM
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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `nama_food` varchar(30) NOT NULL,
  `inc_hp` int(3) NOT NULL,
  `inc_mana` int(3) NOT NULL,
  `harga` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `nama_food`, `inc_hp`, `inc_mana`, `harga`) VALUES
(1, 'Jemblem', 10, 10, 30),
(2, 'Apem', 25, 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nama_item` varchar(30) NOT NULL,
  `inc_hp` int(3) NOT NULL,
  `inc_mana` int(3) NOT NULL,
  `inc_def` int(3) NOT NULL,
  `inc_str` int(3) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `nama_item`, `inc_hp`, `inc_mana`, `inc_def`, `inc_str`, `harga`) VALUES
(1, 'Zirah Api', 500, 80, 77, 0, 250),
(2, 'Zirah Air', 250, 300, 100, 0, 300);

-- --------------------------------------------------------

--
-- Table structure for table `item_user`
--

CREATE TABLE `item_user` (
  `id` int(11) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_item` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_user`
--

INSERT INTO `item_user` (`id`, `id_user`, `id_item`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 1),
(4, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ranking` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `public` int(1) NOT NULL,
  `chat` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proses`
--

INSERT INTO `proses` (`id`, `id_user`, `id_room`, `public`, `chat`, `timestamp`) VALUES
(1, 4, 1, 1, 'Test', '2022-10-24 15:48:10'),
(2, 4, 1, 1, 'Infoooo', '2022-10-24 16:08:39'),
(3, 4, 1, 1, 'Infoooo', '2022-10-24 16:10:03'),
(4, 4, 1, 1, 'infone mase', '2022-10-24 16:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `kode` int(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `kode`, `created_at`) VALUES
(1, 123123, '2022-10-24 08:11:52'),
(2, 123132, '2022-10-24 16:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `nama_skill` varchar(30) NOT NULL,
  `str` int(4) NOT NULL,
  `cooldown` int(3) NOT NULL,
  `delay` int(2) NOT NULL,
  `harga` int(5) NOT NULL,
  `mana_usage` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `nama_skill`, `str`, `cooldown`, `delay`, `harga`, `mana_usage`) VALUES
(1, 'Fire Ball', 20, 1, 0, 150, 50),
(2, 'Lightning Strom', 50, 3, 0, 300, 100);

-- --------------------------------------------------------

--
-- Table structure for table `skill_user`
--

CREATE TABLE `skill_user` (
  `id` int(11) NOT NULL,
  `id_user` int(2) NOT NULL,
  `id_skill` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_user`
--

INSERT INTO `skill_user` (`id`, `id_user`, `id_skill`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 1),
(4, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tournamen`
--

CREATE TABLE `tournamen` (
  `id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL,
  `winner` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `def` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `hp`, `mana`, `str`, `waktu_tidur`, `level`, `def`) VALUES
(1, 'ojan', 0, 0, 0, 30, 1, 0),
(2, 'ojan', 0, 0, 0, 30, 1, 0),
(3, 'ojan', 0, 0, 0, 30, 1, 0),
(4, 'ojan', 0, 0, 0, 30, 1, 0),
(5, 'jarwo', 0, 0, 0, 30, 1, 0),
(6, 'Jarwo', 0, 0, 0, 30, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_in_room`
--

CREATE TABLE `user_in_room` (
  `id` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ready` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_in_room`
--

INSERT INTO `user_in_room` (`id`, `id_room`, `id_user`, `ready`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 2, 5, 0),
(6, 1, 6, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_user`
--
ALTER TABLE `item_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_item` (`id_item`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_user`
--
ALTER TABLE `skill_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_skill` (`id_skill`);

--
-- Indexes for table `tournamen`
--
ALTER TABLE `tournamen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_1` (`user_1`),
  ADD KEY `user_2` (`user_2`),
  ADD KEY `winner` (`winner`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_in_room`
--
ALTER TABLE `user_in_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_user`
--
ALTER TABLE `item_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proses`
--
ALTER TABLE `proses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill_user`
--
ALTER TABLE `skill_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tournamen`
--
ALTER TABLE `tournamen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_in_room`
--
ALTER TABLE `user_in_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_user`
--
ALTER TABLE `item_user`
  ADD CONSTRAINT `item_user_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `item_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tournamen` (`winner`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `proses`
--
ALTER TABLE `proses`
  ADD CONSTRAINT `proses_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `proses_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_in_room` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skill_user`
--
ALTER TABLE `skill_user`
  ADD CONSTRAINT `skill_user_ibfk_1` FOREIGN KEY (`id_skill`) REFERENCES `skill` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `skill_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tournamen`
--
ALTER TABLE `tournamen`
  ADD CONSTRAINT `tournamen_ibfk_1` FOREIGN KEY (`user_1`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tournamen_ibfk_2` FOREIGN KEY (`user_2`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tournamen_ibfk_3` FOREIGN KEY (`winner`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `user_in_room`
--
ALTER TABLE `user_in_room`
  ADD CONSTRAINT `user_in_room_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `user_in_room_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
