-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 08:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harmony`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(128) NOT NULL,
  `firstName` varchar(64) NOT NULL,
  `lastName` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `firstName`, `lastName`, `password`) VALUES
('farhaan@gmail.com', 'Farhaan', 'Nazirkhan', '$2y$10$5dvUVSllMAPG9IT7hvaAGeLTLWif5GU.HRjMhehwULvBdbqgv1d5C'),
('feiz@gmail.com', 'Feiz', 'Roojee', '$2y$10$elWuJP1.pJAlocQb0ZpR4uuGDd/aaMD8yo2iJJSdyCjICTuVVLSS2'),
('geerish@gmail.com', 'Geerishraj', 'Bheekhum', '$2y$10$3nEpFDfY/O36LBsJH7otDuN2KaPRqWBRVkh4ZZ9hmKcNJ2kjBgeCa'),
('levyn@gmail.com', 'Levyn', 'Kwong', '$2y$10$3rXcRU/aLFqxrnXzhu.U4e71sGch60tC5R1RHLTw2g0d2ecpOhSq6'),
('sarwin@gmail.com', 'Sarwin', 'Rajiah', '$2y$10$VNqC35473wZB5ESkFaBdP.bJ1MZkLyO52udxvxQLuVkO9OwkG35Pq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
