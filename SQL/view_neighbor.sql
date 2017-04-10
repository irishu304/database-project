-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2016 at 02:15 AM
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
-- Structure for view `neighbor`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `neighbor`  AS  select `user`.`UserID` AS `UserID`,`user`.`Username` AS `UserName`,`team`.`TeamID` AS `TeamID`,`team`.`TeamName` AS `TeamName`,`sports`.`SportsID` AS `SportsID`,`sports`.`SportsName` AS `SportsName` from (((`user` join `fansclub`) join `team`) join `sports`) where ((`user`.`UserID` = `fansclub`.`FUserID`) and (`team`.`TeamID` = `fansclub`.`FTeamID`) and (`team`.`TSportsID` = `sports`.`SportsID`)) ;

--
-- VIEW  `neighbor`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
