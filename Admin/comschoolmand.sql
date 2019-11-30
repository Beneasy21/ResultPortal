-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 10:40 PM
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
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`user_id`, `time`) VALUES
(1, '1539991714'),
(1, '1539991734'),
(2, '1539988710'),
(2, '1539988910'),
(2, '1539988928'),
(2, '1539990152'),
(2, '1539991208');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`) VALUES
(1, 'test_user', 'test@example.com', '$2y$10$IrzYJi10j3Jy/K6jzSLQtOLif1wEZqTRQoK3DcS3jdnFEhL4fWM4G'),
(2, 'Admin', 'u@u.com', '$2y$10$IEiOsn1bj..G.rIgMlmYV.wxyyoDG2WiEZs.ao5eXw1IdGco.SbZS');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resId` int(11) NOT NULL,
  `studId` varchar(30) NOT NULL,
  `studName` varchar(30) DEFAULT NULL,
  `sex` varchar(11) DEFAULT NULL,
  `acadYr` varchar(30) NOT NULL,
  `term` varchar(30) NOT NULL,
  `resClass` varchar(20) NOT NULL,
  `arm` varchar(20) DEFAULT NULL,
  `combination` varchar(20) DEFAULT NULL,
  `subject` varchar(35) DEFAULT NULL,
  `ca1` int(11) NOT NULL,
  `ca2` int(11) DEFAULT NULL,
  `exam` int(11) DEFAULT NULL,
  `examTotal` int(11) DEFAULT NULL,
  `chm` int(11) DEFAULT NULL,
  `clm` int(11) DEFAULT NULL,
  `cam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`resId`, `studId`, `studName`, `sex`, `acadYr`, `term`, `resClass`, `arm`, `combination`, `subject`, `ca1`, `ca2`, `exam`, `examTotal`, `chm`, `clm`, `cam`) VALUES
(1, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 10, 65, 95, NULL, NULL, NULL),
(2, '1', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 5, 5, 15, 30, NULL, NULL, NULL),
(3, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 5, 7, 22, 39, NULL, NULL, NULL),
(4, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 5, 5, 0, 15, NULL, NULL, NULL),
(5, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 6, 5, 35, 51, NULL, NULL, NULL),
(6, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 5, 5, 60, 75, NULL, NULL, NULL),
(7, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 5, 5, 20, 35, NULL, NULL, NULL),
(8, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 5, 40, 60, NULL, NULL, NULL),
(9, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 5, 40, 60, NULL, NULL, NULL),
(10, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 5, 7, 25, 42, NULL, NULL, NULL),
(11, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 2, 5, 10, 21, NULL, NULL, NULL),
(12, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 10, 60, 90, NULL, NULL, NULL),
(13, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 0, 5, 35, 45, NULL, NULL, NULL),
(14, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 7, 10, 70, 97, NULL, NULL, NULL),
(15, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 7, 5, 60, 77, NULL, NULL, NULL),
(16, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 5, 5, 40, 55, NULL, NULL, NULL),
(17, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 10, 67, 91, NULL, NULL, NULL),
(18, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 5, 65, 85, NULL, NULL, NULL),
(19, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 0, 5, 15, 25, NULL, NULL, NULL),
(20, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 0, 5, 15, 25, NULL, NULL, NULL),
(21, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 2, 10, 30, 52, NULL, NULL, NULL),
(22, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 6, 55, 76, NULL, NULL, NULL),
(23, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 0, 5, 15, 25, NULL, NULL, NULL),
(24, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 3, 3, 15, 25, NULL, NULL, NULL),
(25, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 2, 5, 50, 62, NULL, NULL, NULL),
(26, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 0, 5, 20, 30, NULL, NULL, NULL),
(27, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 5, 35, 56, NULL, NULL, NULL),
(28, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 5, 5, 70, 85, NULL, NULL, NULL),
(29, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 9, 5, 25, 44, NULL, NULL, NULL),
(30, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 6, 5, 60, 76, NULL, NULL, NULL),
(31, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 10, 70, 100, NULL, NULL, NULL),
(32, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 5, 35, 55, NULL, NULL, NULL),
(33, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 2, 70, 92, NULL, NULL, NULL),
(34, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 8, 70, 98, NULL, NULL, NULL),
(35, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 0, 5, 20, 30, NULL, NULL, NULL),
(36, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 8, 10, 45, 73, NULL, NULL, NULL),
(37, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 4, 50, 68, NULL, NULL, NULL),
(38, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 6, 70, 96, NULL, NULL, NULL),
(39, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 4, 40, 58, NULL, NULL, NULL),
(40, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 10, 70, 100, NULL, NULL, NULL),
(41, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 8, 70, 98, NULL, NULL, NULL),
(42, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 10, 70, 100, NULL, NULL, NULL),
(43, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 10, 10, 52, 82, NULL, NULL, NULL),
(44, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'English Language', 6, 5, 65, 81, NULL, NULL, NULL),
(397, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 5, 33, 43, NULL, NULL, NULL),
(398, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 5, 10, 41, 64, NULL, NULL, NULL),
(399, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 20, 37, NULL, NULL, NULL),
(400, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 26, 43, NULL, NULL, NULL),
(401, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 5, 20, 32, NULL, NULL, NULL),
(402, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 24, 39, NULL, NULL, NULL),
(403, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 20, 37, NULL, NULL, NULL),
(404, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 5, 22, 32, NULL, NULL, NULL),
(405, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 33, 48, NULL, NULL, NULL),
(406, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 5, 12, 22, NULL, NULL, NULL),
(407, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 28, 45, NULL, NULL, NULL),
(408, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 20, 35, NULL, NULL, NULL),
(409, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 42, 59, NULL, NULL, NULL),
(410, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 16, 31, NULL, NULL, NULL),
(411, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 14, 29, NULL, NULL, NULL),
(412, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 2, 5, 26, 39, NULL, NULL, NULL),
(413, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 32, 49, NULL, NULL, NULL),
(414, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 25, 40, NULL, NULL, NULL),
(415, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 0, 15, NULL, NULL, NULL),
(416, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 5, 25, 37, NULL, NULL, NULL),
(417, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 33, 48, NULL, NULL, NULL),
(418, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 5, 14, 24, NULL, NULL, NULL),
(419, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 16, 31, NULL, NULL, NULL),
(420, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 0, 15, NULL, NULL, NULL),
(421, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 6, 14, 27, NULL, NULL, NULL),
(422, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 28, 45, NULL, NULL, NULL),
(423, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 26, 41, NULL, NULL, NULL),
(424, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 28, 45, NULL, NULL, NULL),
(425, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 33, 48, NULL, NULL, NULL),
(426, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 4, 10, 52, 73, NULL, NULL, NULL),
(427, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 5, 10, 0, 23, NULL, NULL, NULL),
(428, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 0, 15, NULL, NULL, NULL),
(429, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 30, 45, NULL, NULL, NULL),
(430, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 5, 16, 26, NULL, NULL, NULL),
(431, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 5, 33, 45, NULL, NULL, NULL),
(432, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 5, 24, 34, NULL, NULL, NULL),
(433, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 26, 41, NULL, NULL, NULL),
(434, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 0, 10, 24, 39, NULL, NULL, NULL),
(435, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 2, 10, 26, 44, NULL, NULL, NULL),
(436, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 10, 0, 17, NULL, NULL, NULL),
(437, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 2, 10, 33, 51, NULL, NULL, NULL),
(438, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 2, 10, 38, 56, NULL, NULL, NULL),
(439, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Mathematics', 1, 5, 33, 45, NULL, NULL, NULL),
(440, '1', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 6, 4, 11, 31, NULL, NULL, NULL),
(441, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 6, 6, 58, 80, NULL, NULL, NULL),
(442, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 7, 2, 70, 89, NULL, NULL, NULL),
(443, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 7, 40, 67, NULL, NULL, NULL),
(444, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 5, 6, 38, 59, NULL, NULL, NULL),
(445, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 5, 7, 42, 64, NULL, NULL, NULL),
(446, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 5, 15, 40, NULL, NULL, NULL),
(447, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 4, 1, 60, 75, NULL, NULL, NULL),
(448, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 0, 0, 0, 0, NULL, NULL, NULL),
(449, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 7, 7, 40, 64, NULL, NULL, NULL),
(450, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 0, 0, 10, 10, NULL, NULL, NULL),
(451, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 8, 4, 55, 77, NULL, NULL, NULL),
(452, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 6, 41, 67, NULL, NULL, NULL),
(453, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 8, 70, 98, NULL, NULL, NULL),
(454, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 10, 27, 57, NULL, NULL, NULL),
(455, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 5, 10, 29, 54, NULL, NULL, NULL),
(456, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 9, 1, 20, 40, NULL, NULL, NULL),
(457, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 7, 5, 42, 64, NULL, NULL, NULL),
(458, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 5, 3, 8, 26, NULL, NULL, NULL),
(459, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 6, 2, 10, 28, NULL, NULL, NULL),
(460, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 8, 31, 59, NULL, NULL, NULL),
(461, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 9, 27, 56, NULL, NULL, NULL),
(462, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 5, 2, 5, 22, NULL, NULL, NULL),
(463, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 5, 2, 9, 26, NULL, NULL, NULL),
(464, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 6, 35, 61, NULL, NULL, NULL),
(465, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 8, 2, 12, 32, NULL, NULL, NULL),
(466, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 9, 15, 44, NULL, NULL, NULL),
(467, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 7, 43, 70, NULL, NULL, NULL),
(468, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 5, 5, 0, 20, NULL, NULL, NULL),
(469, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 9, 40, 69, NULL, NULL, NULL),
(470, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 8, 60, 88, NULL, NULL, NULL),
(471, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 2, 20, 42, NULL, NULL, NULL),
(472, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 7, 5, 35, 57, NULL, NULL, NULL),
(473, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 8, 63, 91, NULL, NULL, NULL),
(474, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 8, 2, 8, 18, NULL, NULL, NULL),
(475, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 8, 63, 91, NULL, NULL, NULL),
(476, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 4, 2, 58, 74, NULL, NULL, NULL),
(477, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 7, 48, 75, NULL, NULL, NULL),
(478, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 2, 46, 68, NULL, NULL, NULL),
(479, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 8, 10, 55, 83, NULL, NULL, NULL),
(480, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 10, 68, 88, NULL, NULL, NULL),
(481, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 6, 56, 72, NULL, NULL, NULL),
(482, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 6, 6, 42, 64, NULL, NULL, NULL),
(483, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Computer Studies', 10, 9, 40, 69, NULL, NULL, NULL),
(484, '1', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 10, 0, 36, 46, NULL, NULL, NULL),
(485, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 62, 92, NULL, NULL, NULL),
(486, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 24, 0, 51, 75, NULL, NULL, NULL),
(487, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 12, 0, 42, 54, NULL, NULL, NULL),
(488, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 26, 0, 21, 47, NULL, NULL, NULL),
(489, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 12, 0, 51, 63, NULL, NULL, NULL),
(490, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 0, 0, 21, 21, NULL, NULL, NULL),
(491, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 61, 91, NULL, NULL, NULL),
(492, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 0, 0, 35, 35, NULL, NULL, NULL),
(493, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 0, 0, 40, 40, NULL, NULL, NULL),
(494, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 50, 80, NULL, NULL, NULL),
(495, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 50, 80, NULL, NULL, NULL),
(496, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 25, 0, 33, 58, NULL, NULL, NULL),
(497, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 58, 88, NULL, NULL, NULL),
(498, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 46, 76, NULL, NULL, NULL),
(499, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 34, 64, NULL, NULL, NULL),
(500, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 7, 0, 55, 62, NULL, NULL, NULL),
(501, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 10, 0, 54, 64, NULL, NULL, NULL),
(502, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 5, 0, 20, 25, NULL, NULL, NULL),
(503, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 17, 0, 16, 33, NULL, NULL, NULL),
(504, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 45, 75, NULL, NULL, NULL),
(505, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 0, 0, 32, 32, NULL, NULL, NULL),
(506, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 0, 0, 20, 20, NULL, NULL, NULL),
(507, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 8, 0, 24, 32, NULL, NULL, NULL),
(508, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 48, 78, NULL, NULL, NULL),
(509, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 20, 0, 22, 42, NULL, NULL, NULL),
(510, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 28, 58, NULL, NULL, NULL),
(511, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 27, 0, 62, 89, NULL, NULL, NULL),
(512, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 6, 0, 34, 40, NULL, NULL, NULL),
(513, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 25, 0, 58, 83, NULL, NULL, NULL),
(514, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 53, 83, NULL, NULL, NULL),
(515, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 47, 77, NULL, NULL, NULL),
(516, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 15, 0, 55, 70, NULL, NULL, NULL),
(517, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 61, 91, NULL, NULL, NULL),
(518, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 20, 0, 40, 60, NULL, NULL, NULL),
(519, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 16, 0, 53, 69, NULL, NULL, NULL),
(520, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 51, 81, NULL, NULL, NULL),
(521, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 56, 86, NULL, NULL, NULL),
(522, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 26, 0, 51, 77, NULL, NULL, NULL),
(523, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 61, 91, NULL, NULL, NULL),
(524, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 58, 88, NULL, NULL, NULL),
(525, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 55, 85, NULL, NULL, NULL),
(526, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 15, 0, 51, 66, NULL, NULL, NULL),
(527, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Business Studies', 30, 0, 60, 90, NULL, NULL, NULL),
(528, '1', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 3, 4, 20, 37, NULL, NULL, NULL),
(529, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 7, 61, 88, NULL, NULL, NULL),
(530, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 9, 62, 91, NULL, NULL, NULL),
(531, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 6, 50, 72, NULL, NULL, NULL),
(532, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 7, 24, 47, NULL, NULL, NULL),
(533, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 6, 32, 54, NULL, NULL, NULL),
(534, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 5, 20, 41, NULL, NULL, NULL),
(535, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 4, 48, 72, NULL, NULL, NULL),
(536, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 3, 3, 20, 36, NULL, NULL, NULL),
(537, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 5, 23, 48, NULL, NULL, NULL),
(538, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 5, 3, 20, 38, NULL, NULL, NULL),
(539, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 9, 61, 90, NULL, NULL, NULL),
(540, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 2, 4, 32, 48, NULL, NULL, NULL),
(541, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 10, 56, 86, NULL, NULL, NULL),
(542, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 7, 24, 47, NULL, NULL, NULL),
(543, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 3, 5, 20, 38, NULL, NULL, NULL),
(544, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 7, 5, 55, 77, NULL, NULL, NULL),
(545, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 8, 4, 47, 69, NULL, NULL, NULL),
(546, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 3, 4, 20, 37, NULL, NULL, NULL),
(547, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 3, 2, 20, 35, NULL, NULL, NULL),
(548, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 6, 30, 52, NULL, NULL, NULL),
(549, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 3, 4, 47, 64, NULL, NULL, NULL),
(550, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 2, 4, 24, 40, NULL, NULL, NULL),
(551, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 2, 3, 20, 35, NULL, NULL, NULL),
(552, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 3, 30, 49, NULL, NULL, NULL),
(553, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 4, 5, 20, 39, NULL, NULL, NULL),
(554, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 8, 44, 72, NULL, NULL, NULL),
(555, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 8, 10, 47, 75, NULL, NULL, NULL),
(556, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 5, 20, 41, NULL, NULL, NULL),
(557, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 5, 47, 72, NULL, NULL, NULL),
(558, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 8, 70, 98, NULL, NULL, NULL),
(559, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 4, 3, 27, 44, NULL, NULL, NULL),
(560, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 5, 5, 20, 40, NULL, NULL, NULL),
(561, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 9, 10, 43, 72, NULL, NULL, NULL),
(562, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 4, 4, 22, 40, NULL, NULL, NULL),
(563, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 6, 62, 84, NULL, NULL, NULL),
(564, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 3, 3, 20, 36, NULL, NULL, NULL),
(565, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 6, 56, 78, NULL, NULL, NULL),
(566, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 6, 5, 37, 58, NULL, NULL, NULL),
(567, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 9, 10, 62, 91, NULL, NULL, NULL),
(568, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 10, 51, 81, NULL, NULL, NULL),
(569, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 10, 10, 55, 85, NULL, NULL, NULL),
(570, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 8, 10, 45, 73, NULL, NULL, NULL),
(571, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'R N V', 7, 7, 44, 68, NULL, NULL, NULL),
(572, '1', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 35, 61, NULL, NULL, NULL),
(573, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 62, 89, NULL, NULL, NULL),
(574, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 50, 78, NULL, NULL, NULL),
(575, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 9, 50, 79, NULL, NULL, NULL),
(576, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 60, 87, NULL, NULL, NULL),
(577, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 59, 85, NULL, NULL, NULL),
(578, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 9, 59, 85, NULL, NULL, NULL),
(579, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 51, 77, NULL, NULL, NULL),
(580, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 42, 67, NULL, NULL, NULL),
(581, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 40, 67, NULL, NULL, NULL),
(582, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 9, 35, 62, NULL, NULL, NULL),
(583, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 9, 60, 87, NULL, NULL, NULL),
(584, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 51, 78, NULL, NULL, NULL),
(585, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 65, 91, NULL, NULL, NULL),
(586, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 9, 51, 79, NULL, NULL, NULL),
(587, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 39, 64, NULL, NULL, NULL),
(588, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 9, 65, 92, NULL, NULL, NULL),
(589, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 60, 87, NULL, NULL, NULL),
(590, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 29, 55, NULL, NULL, NULL),
(591, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 6, 20, 44, NULL, NULL, NULL),
(592, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 45, 71, NULL, NULL, NULL),
(593, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 65, 90, NULL, NULL, NULL),
(594, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 30, 55, NULL, NULL, NULL),
(595, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 6, 15, 41, NULL, NULL, NULL),
(596, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 38, 63, NULL, NULL, NULL),
(597, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 6, 51, 74, NULL, NULL, NULL),
(598, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 55, 81, NULL, NULL, NULL),
(599, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 65, 91, NULL, NULL, NULL),
(600, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 45, 70, NULL, NULL, NULL),
(601, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 54, 81, NULL, NULL, NULL),
(602, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 70, 97, NULL, NULL, NULL),
(603, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 50, 77, NULL, NULL, NULL),
(604, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 9, 55, 82, NULL, NULL, NULL),
(605, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 65, 90, NULL, NULL, NULL),
(606, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 52, 77, NULL, NULL, NULL),
(607, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 56, 83, NULL, NULL, NULL),
(608, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 50, 76, NULL, NULL, NULL),
(609, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 60, 87, NULL, NULL, NULL),
(610, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 57, 84, NULL, NULL, NULL),
(611, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 65, 89, NULL, NULL, NULL),
(612, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 67, 92, NULL, NULL, NULL),
(613, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 65, 91, NULL, NULL, NULL),
(614, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 7, 67, 92, NULL, NULL, NULL),
(615, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Cultural & Creative Art', 10, 8, 60, 87, NULL, NULL, NULL),
(616, '1', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 0, 39, 39, NULL, NULL, NULL),
(617, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 7, 49, 63, NULL, NULL, NULL),
(618, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 10, 66, 94, NULL, NULL, NULL),
(619, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 7, 28, 43, NULL, NULL, NULL),
(620, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 5, 70, 88, NULL, NULL, NULL),
(621, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 9, 49, 75, NULL, NULL, NULL),
(622, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 6, 0, 43, 49, NULL, NULL, NULL),
(623, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 6, 10, 33, 59, NULL, NULL, NULL),
(624, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 5, 5, 45, 65, NULL, NULL, NULL),
(625, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 6, 0, 40, 46, NULL, NULL, NULL),
(626, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 8, 31, 45, NULL, NULL, NULL),
(627, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 9, 10, 64, 93, NULL, NULL, NULL),
(628, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 0, 42, 42, NULL, NULL, NULL),
(629, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 9, 10, 70, 99, NULL, NULL, NULL),
(630, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 6, 10, 43, 67, NULL, NULL, NULL),
(631, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 0, 35, 43, NULL, NULL, NULL),
(632, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 9, 10, 48, 77, NULL, NULL, NULL),
(633, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 7, 0, 48, 55, NULL, NULL, NULL),
(634, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 6, 0, 43, 49, NULL, NULL, NULL),
(635, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 0, 25, 33, NULL, NULL, NULL),
(636, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 7, 7, 64, 84, NULL, NULL, NULL),
(637, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 6, 10, 46, 72, NULL, NULL, NULL),
(638, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 0, 10, 10, NULL, NULL, NULL),
(639, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 0, 0, 0, NULL, NULL, NULL),
(640, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 0, 38, 43, NULL, NULL, NULL),
(641, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 5, 25, 35, NULL, NULL, NULL),
(642, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 7, 8, 60, 84, NULL, NULL, NULL),
(643, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 7, 48, 61, NULL, NULL, NULL),
(644, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 6, 10, 30, 56, NULL, NULL, NULL),
(645, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 0, 64, 64, NULL, NULL, NULL),
(646, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 9, 70, 96, NULL, NULL, NULL),
(647, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 6, 8, 0, 21, NULL, NULL, NULL),
(648, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 5, 5, 54, 69, NULL, NULL, NULL),
(649, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 9, 44, 70, NULL, NULL, NULL),
(650, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 0, 19, 19, NULL, NULL, NULL),
(651, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 7, 10, 52, 79, NULL, NULL, NULL),
(652, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 5, 5, 56, 71, NULL, NULL, NULL),
(653, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 10, 0, 28, NULL, NULL, NULL),
(654, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 0, 0, 43, 43, NULL, NULL, NULL),
(655, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 5, 62, 81, NULL, NULL, NULL),
(656, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 9, 10, 67, 96, NULL, NULL, NULL),
(657, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 5, 10, 56, 81, NULL, NULL, NULL),
(658, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 7, 0, 60, 67, NULL, NULL, NULL),
(659, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Basic Science & Technology', 8, 10, 58, 86, NULL, NULL, NULL),
(660, '1', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 15, 6, 10, 31, NULL, NULL, NULL),
(661, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 7, 36, 63, NULL, NULL, NULL),
(662, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 8, 31, 59, NULL, NULL, NULL),
(663, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 3, 21, 44, NULL, NULL, NULL),
(664, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 6, 22, 48, NULL, NULL, NULL),
(665, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 5, 26, 51, NULL, NULL, NULL),
(666, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 7, 25, 52, NULL, NULL, NULL),
(667, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 22, 10, 46, 78, NULL, NULL, NULL),
(668, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 5, 30, 55, NULL, NULL, NULL),
(669, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 6, 21, 47, NULL, NULL, NULL),
(670, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 18, 3, 15, 36, NULL, NULL, NULL),
(671, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 23, 10, 47, 80, NULL, NULL, NULL),
(672, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 4, 14, 38, NULL, NULL, NULL),
(673, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 27, 10, 50, 87, NULL, NULL, NULL),
(674, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 7, 19, 46, NULL, NULL, NULL),
(675, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 6, 30, 56, NULL, NULL, NULL),
(676, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 5, 37, 62, NULL, NULL, NULL),
(677, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 6, 27, 53, NULL, NULL, NULL),
(678, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 4, 21, 45, NULL, NULL, NULL),
(679, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 6, 23, 49, NULL, NULL, NULL),
(680, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 7, 24, 51, NULL, NULL, NULL),
(681, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 8, 44, 72, NULL, NULL, NULL),
(682, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 0, 10, 30, NULL, NULL, NULL),
(683, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 17, 7, 8, 32, NULL, NULL, NULL),
(684, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 3, 26, 49, NULL, NULL, NULL),
(685, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 3, 16, 39, NULL, NULL, NULL),
(686, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 8, 36, 64, NULL, NULL, NULL),
(687, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 25, 10, 50, 85, NULL, NULL, NULL),
(688, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 3, 9, 32, NULL, NULL, NULL),
(689, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 10, 40, 70, NULL, NULL, NULL),
(690, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 28, 10, 58, 96, NULL, NULL, NULL),
(691, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 0, 0, 4, 4, NULL, NULL, NULL),
(692, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 17, 4, 14, 35, NULL, NULL, NULL),
(693, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 21, 10, 46, 77, NULL, NULL, NULL),
(694, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 7, 24, 51, NULL, NULL, NULL),
(695, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 6, 22, 48, NULL, NULL, NULL),
(696, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 6, 27, 53, NULL, NULL, NULL),
(697, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 22, 10, 41, 73, NULL, NULL, NULL),
(698, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 7, 36, 63, NULL, NULL, NULL),
(699, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 27, 10, 53, 90, NULL, NULL, NULL),
(700, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 25, 10, 54, 89, NULL, NULL, NULL),
(701, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 10, 47, 77, NULL, NULL, NULL),
(702, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 20, 6, 34, 60, NULL, NULL, NULL),
(703, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'Prevocational Studies', 27, 6, 48, 81, NULL, NULL, NULL),
(704, '1', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 7, 9, 50, 66, NULL, NULL, NULL),
(705, '2', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 8, 54, 80, NULL, NULL, NULL),
(706, '3', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 7, 57, 82, NULL, NULL, NULL),
(707, '4', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 8, 51, 77, NULL, NULL, NULL),
(708, '5', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 10, 49, 77, NULL, NULL, NULL),
(709, '6', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 9, 10, 56, 85, NULL, NULL, NULL),
(710, '7', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 10, 38, 64, NULL, NULL, NULL),
(711, '8', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 10, 66, 92, NULL, NULL, NULL),
(712, '9', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 10, 40, 66, NULL, NULL, NULL),
(713, '10', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 0, 26, NULL, NULL, NULL),
(714, '11', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 3, 10, 25, 46, NULL, NULL, NULL),
(715, '12', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 8, 63, 89, NULL, NULL, NULL),
(716, '13', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 5, 10, 48, 71, NULL, NULL, NULL),
(717, '14', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 68, 96, NULL, NULL, NULL),
(718, '15', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 9, 8, 60, 87, NULL, NULL, NULL),
(719, '16', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 57, 85, NULL, NULL, NULL),
(720, '17', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 62, 90, NULL, NULL, NULL),
(721, '18', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 7, 8, 64, 89, NULL, NULL, NULL),
(722, '19', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 9, 6, 34, 57, NULL, NULL, NULL),
(723, '20', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 44, 72, NULL, NULL, NULL),
(724, '21', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 5, 8, 53, 76, NULL, NULL, NULL),
(725, '22', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 5, 6, 58, 79, NULL, NULL, NULL),
(726, '23', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 4, 6, 32, 50, NULL, NULL, NULL),
(727, '24', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 6, 8, 38, 62, NULL, NULL, NULL),
(728, '25', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 9, 8, 55, 82, NULL, NULL, NULL),
(729, '26', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 5, 10, 48, 69, NULL, NULL, NULL),
(730, '27', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 10, 64, 92, NULL, NULL, NULL),
(731, '28', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 8, 70, 96, NULL, NULL, NULL),
(732, '29', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 6, 36, 60, NULL, NULL, NULL),
(733, '30', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 7, 8, 68, 93, NULL, NULL, NULL),
(734, '31', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 10, 68, 98, NULL, NULL, NULL),
(735, '32', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 10, 0, 26, NULL, NULL, NULL),
(736, '33', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 6, 8, 52, 76, NULL, NULL, NULL),
(737, '34', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 70, 98, NULL, NULL, NULL),
(738, '35', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 5, 8, 38, 61, NULL, NULL, NULL),
(739, '36', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 8, 70, 96, NULL, NULL, NULL),
(740, '37', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 70, 96, NULL, NULL, NULL),
(741, '38', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 7, 8, 70, 95, NULL, NULL, NULL),
(742, '39', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 7, 60, 85, NULL, NULL, NULL),
(743, '40', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 63, 91, NULL, NULL, NULL),
(744, '41', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 65, 93, NULL, NULL, NULL),
(745, '42', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 8, 68, 96, NULL, NULL, NULL),
(746, '43', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 8, 7, 65, 90, NULL, NULL, NULL),
(747, '44', NULL, NULL, '16/17', '2nd', 'JSS2', NULL, NULL, 'P H E', 10, 7, 46, 71, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studId` varchar(15) NOT NULL,
  `studName` varchar(40) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `currentClass` varchar(11) NOT NULL,
  `arm` varchar(20) NOT NULL,
  `studImage` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studId`, `studName`, `sex`, `currentClass`, `arm`, `studImage`) VALUES
(1, '1', 'Abu Emmanuel', 'M', 'JSS 2', 'A', NULL),
(2, '2', 'Achimi Grace Ojochogwu', 'F', 'JSS 2', 'A', NULL),
(3, '3', 'Adanu Reuben', 'M', 'JSS 2', 'A', NULL),
(4, '4', 'Adehi Gamaliel', 'M', 'JSS 2', 'A', NULL),
(5, '5', 'Agbo Amarachi Perpetual', 'F', 'JSS 2', 'A', NULL),
(6, '6', 'Aruwa Nicodemus', 'M', 'JSS 2', 'A', NULL),
(7, '7', 'Benjamin Patience Ojogefu', 'F', 'JSS 2', 'A', NULL),
(8, '8', 'Daniel James', 'M', 'JSS 2', 'A', NULL),
(9, '9', 'Daniel Patience', 'F', 'JSS 2', 'A', NULL),
(10, '10', 'Danladi Miracle', 'F', 'JSS 2', 'A', NULL),
(11, '11', 'Egwuoba Benedict', 'M', 'JSS 2', 'A', NULL),
(12, '12', 'Ejiga Regina Omacheleojo', 'F', 'JSS 2', 'A', NULL),
(13, '13', 'Elijah Victoria Omojo', 'F', 'JSS 2', 'A', NULL),
(14, '14', 'Ezema Desmond Nnemaka', 'M', 'JSS 2', 'A', NULL),
(15, '15', 'Ezeuke David Uchechukwu', 'M', 'JSS 2', 'A', NULL),
(16, '16', 'Ezike Emmanuel', 'M', 'JSS 2', 'B', NULL),
(17, '17', 'Ibrahim Nathaniel Ugebedeojo', 'M', 'JSS 2', 'B', NULL),
(18, '18', 'Ibrahim Ufedojo Keziah', 'F', 'JSS 2', 'B', NULL),
(19, '19', 'Idogwu Sunday', 'M', 'JSS 2', 'B', NULL),
(20, '20', 'Isah Kasimu', 'M', 'JSS 2', 'B', NULL),
(21, '21', 'John Emmanuel', 'M', 'JSS 2', 'B', NULL),
(22, '22', 'John Jibrin Deborah', 'F', 'JSS 2', 'B', NULL),
(23, '23', 'John Joseph', 'M', 'JSS 2', 'B', NULL),
(24, '24', 'Joseph Ojoajogwu', 'M', 'JSS 2', 'B', NULL),
(25, '25', 'Keke Friday', 'M', 'JSS 2', 'B', NULL),
(26, '26', 'Kure Eunice', 'F', 'JSS 2', 'B', NULL),
(27, '27', 'Momoh David Enyojo', 'M', 'JSS 2', 'B', NULL),
(28, '28', 'Musa Rosemary Ojonugwa', 'F', 'JSS 2', 'B', NULL),
(29, '29', 'Odaudu Solomon Omaye', 'M', 'JSS 2', 'B', NULL),
(30, '30', 'Okike Israel Chinonso', 'M', 'JSS 2', 'B', NULL),
(31, '31', 'Ozor Juliet Onyinyechukwu', 'F', 'JSS 2', 'B', NULL),
(32, '32', 'Paul Silas', 'M', 'JSS 2', 'B', NULL),
(33, '33', 'Salifu Ibrahim', 'M', 'JSS 2', 'C', NULL),
(34, '34', 'Samuel Esther Iye', 'F', 'JSS 2', 'C', NULL),
(35, '35', 'Shiloba Innocent', 'M', 'JSS 2', 'C', NULL),
(36, '36', 'Silas Caroline Precious', 'F', 'JSS 2', 'C', NULL),
(37, '37', 'Sumaila Aishat', 'F', 'JSS 2', 'C', NULL),
(38, '38', 'Tokula Precious', 'F', 'JSS 2', 'C', NULL),
(39, '39', 'Udaya Rachael Mmesoma', 'F', 'JSS 2', 'C', NULL),
(40, '40', 'Ugbede Happiness Enyo-ojo', 'F', 'JSS 2', 'C', NULL),
(41, '41', 'Umoru Solomon', 'M', 'JSS 2', 'C', NULL),
(42, '42', 'Usman Halimat', 'F', 'JSS 2', 'C', NULL),
(43, '43', 'Yusufu Sunday', 'M', 'JSS 2', 'C', NULL),
(44, '44', 'Zekeri Shedrach', 'M', 'JSS 2', 'C', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=748;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
