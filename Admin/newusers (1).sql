-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 05:56 PM
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
(9, 'Commandjss2', 'jss2@command.com', 'JSS 2', '5454a85b3d7ec51ecc0465d36a5e6719'),
(10, 'Commandjss3', 'jss3@command.com', 'JSS 3', '151133f3449b58b2f142942e4c21d1b7'),
(11, 'Commandsss1Hum', 'sss1hum@command.com', 'SSS 1 Humanities', '8b8ee03afca50ec31dc2e00b7e466bba'),
(12, 'Commandsss1Bus', 'sss1bus@command.com', 'SSS 1 Business', '52c7513bab473cf45efec07f0b0bbccd'),
(13, 'Commandsss1Sci', 'sss1sci@command.com', 'SSS 1 Science', 'f2cad0b2f6cf4f866ab973102f019496'),
(14, 'Commandsss1Tec', 'sss1tec@command.com', 'SSS 1 Technology', 'ab5eae2e459381f85b08aea9f0d3c4fe'),
(15, 'Commandsss2Bus', 'sss2bus@command.com', 'SSS 2 Business', '590c4a7c7e6271fb9ddc09768884ad52'),
(16, 'Commandsss2Hum', 'sss2Hum@command.com', 'SSS 2 Humanities', '44729167abf2443302aab6034607760a'),
(17, 'Commandsss2Tec', 'sss2Tec@command.com', 'SSS 2 Technology', 'd0c9ecb7f3e82060f2057aa122dc24f7'),
(18, 'Commandsss2Sci', 'sss2sci@command.com', 'SSS 2 Science', '0d0c87d59684b8a3f922c590efcc8fad'),
(19, 'Commandsss3Sci', 'sss3sci@command.com', 'SSS 3 Science', '229deb607f1c60e7712f727b46f88671'),
(20, 'Commandsss3Tec', 'sss3tec@command.com', 'SSS 3 Technology', '5ca099bb9bd7bf8a61223a3b28b1a176'),
(21, 'Commandsss3Hum', 'sss3hum@command.com', 'SSS 3 Humanities', '80deca0fe5bfd586cf9d910545a23def'),
(22, 'Commandsss3Bus', 'sss3Bus@command.com', 'SSS 3 Business', 'a70b9d46044ddd785b2ce9a82ca914f5');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
