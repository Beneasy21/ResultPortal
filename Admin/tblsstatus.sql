-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 04:46 PM
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
-- Table structure for table `tblsstatus`
--

CREATE TABLE `tblsstatus` (
  `sStatusId` int(11) NOT NULL,
  `sName` varchar(25) NOT NULL,
  `sDesc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsstatus`
--

INSERT INTO `tblsstatus` (`sStatusId`, `sName`, `sDesc`) VALUES
(1, 'Officer', ''),
(2, 'Soldier', ''),
(3, 'Civilian', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblsstatus`
--
ALTER TABLE `tblsstatus`
  ADD PRIMARY KEY (`sStatusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsstatus`
--
ALTER TABLE `tblsstatus`
  MODIFY `sStatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
