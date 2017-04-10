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
-- Table structure for table `fdwaitinglist`
--

CREATE TABLE `fdwaitinglist` (
  `FWUserID1` int(10) NOT NULL,
  `FWUserID2` int(10) NOT NULL,
  `Time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdwaitinglist`
--

INSERT INTO `fdwaitinglist` (`FWUserID1`, `FWUserID2`, `Time`) VALUES
(2, 6, '2016-07-03'),
(5, 8, '2016-06-05'),
(7, 4, '2016-08-15'),
(9, 2, '2016-09-04'),
(10, 2, '2016-10-16'),
(1, 8, '2016-10-25'),
(6, 3, '2016-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fdwaitinglist`
--
ALTER TABLE `fdwaitinglist`
  ADD PRIMARY KEY (`FWUserID1`,`FWUserID2`),
  ADD KEY `FWUserID2` (`FWUserID2`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
