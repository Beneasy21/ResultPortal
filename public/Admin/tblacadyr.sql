-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 04:39 PM
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
-- Table structure for table `tblacadyr`
--

CREATE TABLE `tblacadyr` (
  `AcadYrId` int(11) NOT NULL,
  `acadYrName` varchar(15) NOT NULL,
  `acadYrDesc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblacadyr`
--

INSERT INTO `tblacadyr` (`AcadYrId`, `acadYrName`, `acadYrDesc`) VALUES
(1, '2017/2018', ''),
(2, '2018/2019', ''),
(3, '2019/2020', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblacadyr`
--
ALTER TABLE `tblacadyr`
  ADD PRIMARY KEY (`AcadYrId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblacadyr`
--
ALTER TABLE `tblacadyr`
  MODIFY `AcadYrId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
