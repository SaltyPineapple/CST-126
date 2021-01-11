-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2021 at 03:01 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `fruitsalad`
--

CREATE TABLE `fruitsalad` (
  `ID` int(11) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Post` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fruitsalad`
--

INSERT INTO `fruitsalad` (`ID`, `Username`, `Date`, `Title`, `Post`) VALUES
(1, 'FruitSalad', '2020-12-20', 'Test Post', 'Hello everyone, this is another test post, but from a different user! How fun!');

-- --------------------------------------------------------

--
-- Table structure for table `markjpratt`
--

CREATE TABLE `markjpratt` (
  `ID` int(11) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Post` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `markjpratt`
--

INSERT INTO `markjpratt` (`ID`, `Username`, `Date`, `Title`, `Post`) VALUES
(1, 'markjpratt', '2020-12-20', '', 'Hello everyone and welcome to my blog! This is my first test post, let me know in the comments!'),
(2, 'markjpratt', '2020-12-20', 'Second test post', 'Hey guys, I am testing this once again, my last post did not contain the title, which means I need error handling. I should also add a character counter because I have no idea what I am at right now.'),
(3, 'markjpratt', '2021-01-10', 'hello', 'this is my psot'),
(4, 'markjpratt', '2021-01-10', 'new Post', 'Can I see all of my posts?'),
(5, 'markjpratt', '2021-01-10', 'new Post', 'Can I see all of my posts?'),
(6, 'markjpratt', '2021-01-10', 'Test Post', 'I love posting on my blog'),
(7, 'markjpratt', '2021-01-10', 'another test post', 'here is another test post... lets hope this works'),
(8, 'markjpratt', '2021-01-10', 'will this work', 'here is another test post... lets hope this works'),
(9, 'markjpratt', '2021-01-10', 'will this work', 'here is another test post... lets hope this works'),
(10, 'markjpratt', '2021-01-10', 'will this work', 'here is another test post... lets hope this works'),
(11, 'markjpratt', '2021-01-10', 'another test', 'test test'),
(12, 'markjpratt', '2021-01-10', 'test', 'test'),
(13, 'markjpratt', '2021-01-10', 'test', 'ttest'),
(14, 'markjpratt', '2021-01-10', 'test', 'ttest'),
(15, 'markjpratt', '2021-01-10', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `markmark`
--

CREATE TABLE `markmark` (
  `ID` int(11) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Post` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orange`
--

CREATE TABLE `orange` (
  `ID` int(11) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Post` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Email`, `Age`) VALUES
(12, 'markjpratt', 'password', 'mark@mark.com', 22),
(13, 'markmark', 'markmark', 'markmark', 12),
(14, 'FruitSalad', 'fruits', 'fruity@fruitysalads.com', 45),
(18, 'orange', 'favFruits', 'orangey', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruitsalad`
--
ALTER TABLE `fruitsalad`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `markjpratt`
--
ALTER TABLE `markjpratt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `markmark`
--
ALTER TABLE `markmark`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orange`
--
ALTER TABLE `orange`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruitsalad`
--
ALTER TABLE `fruitsalad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `markjpratt`
--
ALTER TABLE `markjpratt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `markmark`
--
ALTER TABLE `markmark`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orange`
--
ALTER TABLE `orange`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
