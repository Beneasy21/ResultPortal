-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 04:43 PM
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
-- Table structure for table `tblarm`
--

CREATE TABLE `tblarm` (
  `armId` int(8) NOT NULL,
  `armName` varchar(25) NOT NULL,
  `armDesc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblarm`
--

INSERT INTO `tblarm` (`armId`, `armName`, `armDesc`) VALUES
(1, 'Beryl', ''),
(2, 'Coral', ''),
(3, 'Diamond', ''),
(4, 'Emerald', ''),
(5, 'Gold', ''),
(6, 'Opal', ''),
(7, 'Pearl', ''),
(8, 'Topaz', ''),
(9, 'Ruby', ''),
(10, 'Silver', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblarm`
--
ALTER TABLE `tblarm`
  ADD PRIMARY KEY (`armId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblarm`
--
ALTER TABLE `tblarm`
  MODIFY `armId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
