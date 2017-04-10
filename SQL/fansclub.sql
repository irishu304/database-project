-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2016 at 02:12 AM
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
-- Table structure for table `fansclub`
--

CREATE TABLE `fansclub` (
  `FUserID` int(10) UNSIGNED NOT NULL,
  `FTeamID` int(8) NOT NULL,
  `JoinTime` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fansclub`
--

INSERT INTO `fansclub` (`FUserID`, `FTeamID`, `JoinTime`) VALUES
(1, 3, '2016-12-01'),
(2, 11, '2016-12-01'),
(4, 8, '2016-11-06'),
(5, 4, '2016-11-01'),
(3, 2, '2016-09-11'),
(6, 3, '2016-08-14'),
(10, 5, '2016-06-05'),
(8, 6, '2016-09-20'),
(7, 1, '2016-11-06'),
(9, 7, '2016-08-16'),
(2, 12, '2016-11-06'),
(4, 12, '2016-11-13'),
(3, 13, '2016-12-08'),
(5, 14, '2016-11-06'),
(7, 15, '2016-11-20'),
(7, 6, '2016-12-01'),
(10, 6, '2016-12-02'),
(12, 7, '2016-12-06'),
(4, 6, '2016-12-01'),
(7, 11, '2016-12-05'),
(6, 11, '2016-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fansclub`
--
ALTER TABLE `fansclub`
  ADD PRIMARY KEY (`FUserID`,`FTeamID`),
  ADD KEY `FTeamID` (`FTeamID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fansclub`
--
ALTER TABLE `fansclub`
  MODIFY `FUserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
