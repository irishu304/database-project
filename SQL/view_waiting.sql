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
-- Structure for view `waiting`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `waiting`  AS  select distinct `fansclub`.`FUserID` AS `FUserID`,`fansclub`.`FTeamID` AS `FTeamID`,`waitinglist`.`WUserID` AS `WUserID`,`user`.`Username` AS `Username`,`team`.`TeamName` AS `Teamname` from (((`fansclub` join `waitinglist`) join `user`) join `team`) where ((`fansclub`.`FTeamID` = `waitinglist`.`WTeamID`) and (`waitinglist`.`WUserID` = `user`.`UserID`) and (`fansclub`.`FTeamID` = `team`.`TeamID`)) ;

--
-- VIEW  `waiting`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
