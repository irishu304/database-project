-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2016 at 02:11 AM
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
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `ActivityID` int(8) UNSIGNED NOT NULL,
  `Theme` varchar(30) DEFAULT NULL,
  `Description` varchar(400) DEFAULT NULL,
  `ALocation` varchar(100) DEFAULT NULL,
  `ATime` timestamp NULL DEFAULT NULL,
  `APosterID` int(10) DEFAULT NULL,
  `APosttime` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`ActivityID`, `Theme`, `Description`, `ALocation`, `ATime`, `APosterID`, `APosttime`) VALUES
(1, 'Fans Meeting', 'Would you like to share your story about sports? Come to join us!', 'Central Park, New York', '2016-12-15 17:00:00', 7, '2016-12-10 16:22:34'),
(2, 'T-shirt on sale', 'Lots of brand-new T-shirts of Boston RedSox is on sale. Don\'t miss it!', 'Telegraph Hill, Boston', '2016-12-20 15:30:00', 9, '2016-12-16 17:49:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`ActivityID`),
  ADD KEY `APosterID` (`APosterID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `ActivityID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
