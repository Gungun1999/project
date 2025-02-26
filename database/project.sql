-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 01:22 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `otp` int(6) NOT NULL,
  `verify` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `phone`, `otp`, `verify`) VALUES
(1, 'Gungun', 'gunuchaba6@gmail.com', '1234', '9896294972', 123456, 1),
(2, 'Gungun', 'gunuchaba@gmail.com', '1234', '9896294972', 123456, 1),
(3, 'Gungun', 'ghfghfg@gmail.com', '1234', '9896294972', 0, 0),
(8, 'test', 'test@gmail.com', '1234', '9896294972', 0, 1),
(9, 'Ekta', 'ektachaba9@gmail.com', '0987', '9350302776', 454545, 1),
(10, 'Diksha', 'dikshachaba28@gamil.com', '0987', '9896294972', 534854, 1);

-- --------------------------------------------------------

--
-- Table structure for table `skilltable`
--

CREATE TABLE `skilltable` (
  `id` int(11) NOT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `experience` int(4) DEFAULT NULL,
  `skills` varchar(500) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `duration` int(2) DEFAULT NULL,
  `fees` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skilltable`
--

INSERT INTO `skilltable` (`id`, `profession`, `experience`, `skills`, `timing`, `duration`, `fees`) VALUES
(1, 'mohan', 7, 'ljkljkljklj', '65675', 7, 2000),
(2, 'mohan', 7, 'ljkljkljklj', '65675', 7, 2000),
(3, 'mohan', 7, 'ljkljkljklj', '65675', 7, 2000),
(4, 'mohan', 7, 'kjhhkjh', '5445', 9, 3000),
(5, '', 0, '', '', 0, 0),
(6, 'mo', 6, 'vgjfj', '8', 6, 300000),
(7, '', 0, '', '', 0, 0),
(8, '', 0, '', '', 0, 0),
(9, 'mohan', 2, 'kjh', '8', 2, 324);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skilltable`
--
ALTER TABLE `skilltable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skilltable`
--
ALTER TABLE `skilltable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
