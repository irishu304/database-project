-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2016 at 02:13 AM
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
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TeamID` int(8) UNSIGNED NOT NULL,
  `TeamName` varchar(30) NOT NULL,
  `TSportsID` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `TeamName`, `TSportsID`) VALUES
(1, 'Los Angeles Lakers', 1),
(2, 'Huston Rockets', 1),
(3, 'New York Knicks', 1),
(4, 'Chicago Bulls', 1),
(5, 'Toronto BlueJays', 2),
(6, 'New York Yankees', 2),
(7, 'Boston RedSox', 2),
(8, 'Chicago WhiteSox', 2),
(9, 'Buffalo Bills', 3),
(10, 'Miami Dolphins', 3),
(11, 'New England Patriots', 3),
(12, 'New York Jets', 3),
(13, 'Boston Bruins', 4),
(14, 'Buffalo Sabres', 4),
(15, 'Detroit Red Wings', 4),
(16, 'Montreal Canadiens', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TeamID`),
  ADD KEY `TSportsID` (`TSportsID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
