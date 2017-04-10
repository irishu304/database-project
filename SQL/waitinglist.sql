-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2016 at 02:14 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `waitinglist`
--

CREATE TABLE `waitinglist` (
  `WUserID` int(10) NOT NULL,
  `WTeamID` int(8) NOT NULL,
  `RequestID` int(8) UNSIGNED NOT NULL,
  `RequestTime` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waitinglist`
--

INSERT INTO `waitinglist` (`WUserID`, `WTeamID`, `RequestID`, `RequestTime`) VALUES
(12, 1, 1, '2016-12-15 23:30:41'),
(11, 7, 2, '2016-12-15 23:30:41'),
(10, 10, 3, '2016-12-15 23:30:41'),
(9, 13, 4, '2016-12-15 23:30:41'),
(8, 3, 5, '2016-12-15 23:30:41'),
(7, 6, 6, '2016-12-15 23:30:41'),
(6, 9, 7, '2016-12-15 23:30:41'),
(5, 14, 8, '2016-12-15 23:30:41'),
(4, 3, 9, '2016-12-15 23:30:41'),
(3, 5, 10, '2016-12-15 23:30:41'),
(6, 11, 11, '2016-12-15 23:50:32'),
(1, 14, 12, '2016-12-15 23:30:41'),
(3, 12, 13, '2016-12-15 23:49:21'),
(9, 12, 14, '2016-12-15 23:49:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `waitinglist`
--
ALTER TABLE `waitinglist`
  ADD PRIMARY KEY (`RequestID`),
  ADD KEY `WUserID` (`WUserID`),
  ADD KEY `WTeamID` (`WTeamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
  MODIFY `RequestID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
