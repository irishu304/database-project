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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NewsID` int(8) UNSIGNED NOT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `Body` varchar(500) DEFAULT NULL,
  `PosterID` int(10) DEFAULT NULL,
  `PostTime` timestamp NULL DEFAULT NULL,
  `NPrivacyID` int(8) DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL,
  `Rating` varchar(6) DEFAULT NULL,
  `CommentUserID` int(10) DEFAULT NULL,
  `Comment` varchar(140) DEFAULT NULL,
  `Commenttime` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsID`, `Title`, `Body`, `PosterID`, `PostTime`, `NPrivacyID`, `Location`, `Rating`, `CommentUserID`, `Comment`, `Commenttime`) VALUES
(1, 'Test', 'Hello World!', 2, '2016-12-16 02:04:09', 1, 'Boston', '1', 4, 'Test comment', '2016-12-16 21:00:24'),
(2, 'A Nice Day in Boston', 'A good introduction to Boston!\r\n<br />\r\n<figure class="gallery-item">\r\n  <img src="images/Boston2.jpg">\r\n</figure>', 2, '2016-12-16 02:08:42', 1, 'Boston', '3', 8, 'Love your photos!', '2016-12-16 21:00:24'),
(3, 'Best Score This Year', 'This is the most exciting match I\'ve ever saw.<br />Hope we can be the champion this year!<br /><figure class="gallery-item">\r\n  <img src="images/field.jpg">\r\n</figure>', 4, '2016-12-01 05:00:00', 2, 'New York', '5', 2, 'Yes, I love this match too', '2016-12-16 21:00:24'),
(4, 'Share My Favorite MV', 'This is my favorite MV.<br />\r\nLove the way lyrics are written.\r\n<video width="640" height="480" controls> <source src="images/Titanic MV.mp4" type="video/mp4"> </video>', 5, '2016-12-16 16:39:03', 4, 'Washington', '10', 6, 'Good MV~', '2016-12-16 21:00:24'),
(5, 'Exciting Moments in Baseball', 'Share some awesome pictures with you all :-)<br />\r\n<figure class="gallery-item">\r\n  <img src="images/baseball1.jpg">\r\n</figure><br />Nice Catch!\r\n<figure class="gallery-item">\r\n  <img src="images/baseball2.jpg">\r\n</figure><br />Lovely young player!\r\n<figure class="gallery-item">\r\n  <img src="images/baseball3.jpg">\r\n</figure>\r\n', 9, '2016-12-16 16:54:40', 3, 'Baltimore', '2', 1, 'Really nice photos!', '2016-12-16 21:00:24'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Yes, I love this match too', '2016-12-16 21:00:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`),
  ADD KEY `NPrivacyID` (`NPrivacyID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
