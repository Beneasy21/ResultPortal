-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 09:47 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comschoolmand`
--

-- --------------------------------------------------------

--
-- Table structure for table `newusers`
--

CREATE TABLE `newusers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logclass` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newusers`
--

INSERT INTO `newusers` (`id`, `username`, `email`, `logclass`, `password`) VALUES
(6, 'Commandjss1', 'jss1@command.com', 'JSS 1', '661645082bb64a90a2401189fea675b0'),
(7, 'Commandsss1Hum', 'sss1Hum@command.com', 'SSS 1 Humanities', 'aa11a143c9c98af431ace7d6a8eb757a'),
(9, 'Commandjss2', 'jss2@command.com', 'JSS 2', '5454a85b3d7ec51ecc0465d36a5e6719'),
(10, 'Commandjss3', 'jss3@command.com', 'JSS 3', '151133f3449b58b2f142942e4c21d1b7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newusers`
--
ALTER TABLE `newusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newusers`
--
ALTER TABLE `newusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
