-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 06:00 PM
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
-- Table structure for table `tblhouse`
--

CREATE TABLE `tblhouse` (
  `houseId` int(8) NOT NULL,
  `houseName` varchar(25) NOT NULL,
  `houseDesc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhouse`
--

INSERT INTO `tblhouse` (`houseId`, `houseName`, `houseDesc`) VALUES
(1, 'Dragon', ''),
(2, 'Hippopotamus', ''),
(3, 'Rhinoceros', ''),
(4, 'Stallion', ''),
(5, 'Tiger', ''),
(6, 'Commandant', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblhouse`
--
ALTER TABLE `tblhouse`
  ADD PRIMARY KEY (`houseId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblhouse`
--
ALTER TABLE `tblhouse`
  MODIFY `houseId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
