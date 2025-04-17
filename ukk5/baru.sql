-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 05:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `password`) VALUES
(1, 'jey', '$2y$10$zkFgReUMdhDB82HphJn8nOE5NgiwD5zKwq4ZE3EWAbSzWDzpyE7PC'),
(5, 'user', '$2y$10$GELVJr8HE1ddcXB7zYncdeaiqBEy0Nk.XToEFZGUTaHTeNf65wYza'),
(6, 'yulita', '$2y$10$PkB9cqZu0y2AFZsC0qS/BesCDiJnbKeuvD/j1VenDTiOUWfqQwUoW');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `taskname` varchar(100) NOT NULL,
  `status` enum('selesai','belum selesai','','') NOT NULL,
  `prioritas` enum('tinggi','sedang','rendah','') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`id`, `taskname`, `status`, `prioritas`, `tanggal`) VALUES
(25, 'minum air', 'belum selesai', 'tinggi', '2025-04-09'),
(28, 'nabung', 'selesai', 'tinggi', '2025-04-10'),
(38, 'jalan jalan', 'selesai', 'tinggi', '2025-04-11'),
(39, 'belajar coding', 'selesai', 'sedang', '2025-04-10'),
(40, 'Main Epep', 'selesai', 'sedang', '2025-04-18'),
(41, 'pukul pimen', 'selesai', 'rendah', '2025-04-16'),
(42, 'belajar coding', 'selesai', 'tinggi', '2025-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`) VALUES
(1, 'user', 'user'),
(2, 'admin', 'admin'),
(3, 'jey', '1234'),
(4, 'yulita', '$2y$10$973xEB0H5tYUq'),
(6, 'ikha', 'hallo'),
(10, 'alok', '1234'),
(11, 'rasya', '1234'),
(12, 'hayoto', '1234'),
(13, 'imelda', '1234'),
(14, 'anyes', '1111'),
(15, 'pisang', 'pisang goreng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
