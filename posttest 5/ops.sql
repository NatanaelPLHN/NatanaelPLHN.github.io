-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 04:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest`
--

-- --------------------------------------------------------

--
-- Table structure for table `ops`
--

CREATE TABLE `ops` (
  `op_id` int(11) NOT NULL,
  `op_name` varchar(64) NOT NULL,
  `op_callsign` varchar(16) NOT NULL,
  `op_gender` varchar(16) NOT NULL,
  `op_experience` int(8) NOT NULL,
  `op_birthplace` varchar(32) NOT NULL,
  `op_dob` date NOT NULL,
  `op_race` varchar(16) NOT NULL,
  `op_height` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ops`
--

INSERT INTO `ops` (`op_id`, `op_name`, `op_callsign`, `op_gender`, `op_experience`, `op_birthplace`, `op_dob`, `op_race`, `op_height`) VALUES
(12, 'bb', 'b', 'b', 2, '12313', '0000-00-00', 'sda', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ops`
--
ALTER TABLE `ops`
  ADD PRIMARY KEY (`op_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ops`
--
ALTER TABLE `ops`
  MODIFY `op_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
