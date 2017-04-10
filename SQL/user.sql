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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Age` varchar(4) DEFAULT NULL,
  `Gender` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` varchar(60) NOT NULL,
  `Intro` varchar(140) DEFAULT NULL,
  `RegisterTime` date NOT NULL,
  `LastLogin` timestamp NOT NULL,
  `Notification` varchar(20) DEFAULT NULL,
  `NotificationType` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Email`, `Password`, `Username`, `Age`, `Gender`, `Phone`, `Address`, `Intro`, `RegisterTime`, `LastLogin`, `Notification`, `NotificationType`) VALUES
(1, '234345145@qq.com', '234345145', 'Amy', '20', 'female', '3452341234', 'New Orlens', 'First to flower, first to fall.', '2016-12-01', '2016-12-31 05:00:00', NULL, NULL),
(2, 'bobkkk@gmail.com', 'bobkkk', 'Bob', '28', 'male', '4562345112', 'Boston', 'Like game.', '2016-11-15', '2016-12-17 02:14:10', '', 'email'),
(3, 'cindycc@gmail.com', 'cindycc', 'Cindy', '16', 'female', '8678343123', 'Los Angeles ', 'I like films!', '2016-10-02', '2016-12-12 04:31:21', NULL, NULL),
(4, 'davekave@hotmail.com', 'davekave', 'Dave', '35', 'male', '8973421213', 'Phoenix', 'football&baseball', '2016-09-06', '2016-12-12 04:33:29', NULL, NULL),
(5, 'emily23@yahoo.com', 'emily23', 'Emily', '23', 'female', '4534652342', 'New York', 'Beauty in the eyes.', '2016-07-07', '2016-12-12 04:35:40', NULL, NULL),
(6, 'fredddie@gmail.com', 'fredddd', 'Fred', '29', 'male', '4534562323', 'Buffalo', 'sunshine and grass', '2016-11-20', '2016-12-12 04:38:15', NULL, NULL),
(7, 'graig45@gmail.com', 'graiggg', 'Graig', '40', 'male', '3451235423', 'Los Angeles', 'Beer and music', '2016-04-03', '2016-12-12 04:39:55', NULL, NULL),
(8, 'helenn@gmail.com', 'helenn', 'Helen', '30', 'female', '2354234521', 'Baltimore', 'Love volleyball and sea!', '2016-02-21', '2016-12-15 23:03:19', NULL, NULL),
(9, 'jokern@gmail.com', 'jokern', 'Jo', '37', 'male', '6745634523', 'New Jersery', 'Enjoy life', '2016-05-01', '2016-12-12 04:44:20', NULL, NULL),
(10, 'katespc@hotmail.com', 'katespc', 'Kate', '29', 'female', '8227823451', 'Memphis', 'make everyday count', '2015-12-22', '2016-12-15 23:04:04', NULL, NULL),
(11, 'lh1981@nyu.edu', '123456', 'lh1981', '23', 'female', '4563452341', '6 MetroTech Center, Brooklyn, NY 11201ç¾Žå›½', 'Like rain, like music', '2016-12-14', '2016-12-15 03:35:05', 'notifyfriend', 'email'),
(12, 'lh1@nyu.edu', '123456', 'lh1', '20', 'female', '5345123121', '6 MetroTech Center, Brooklyn, NY 11201ç¾Žå›½', 'Test', '2016-12-14', '2016-12-15 20:34:51', 'notifyall', 'sms'),
(13, 'lh2@nyu.edu', '123456', 'lh2', '22', 'male', '3456234512', '6 MetroTech Center, Brooklyn, NY 11201ç¾Žå›½', 'test', '2016-12-14', '2016-12-15 03:00:27', 'notifyfriend', 'email'),
(14, 'lh2@nyu.edu', '123456', 'lh2', NULL, NULL, NULL, '6 MetroTech Center, Brooklyn, NY 11201ç¾Žå›½', NULL, '2016-12-15', '2016-12-15 20:35:23', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
