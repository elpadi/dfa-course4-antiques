-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 03:58 PM
-- Server version: 5.6.36
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antiques`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compositions`
--

CREATE TABLE IF NOT EXISTS `compositions` (
  `compositionID` int(11) NOT NULL,
  `materialName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dimensions`
--

CREATE TABLE IF NOT EXISTS `dimensions` (
  `dimensionID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `depth` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `dimensionsDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `imageID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `imageName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `itemID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `isAvailable` int(11) NOT NULL,
  `description` text NOT NULL,
  `year` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `compositionID` int(11) NOT NULL,
  `originID` int(11) NOT NULL,
  `mainImageID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `origins`
--

CREATE TABLE IF NOT EXISTS `origins` (
  `originID` int(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `era` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `compositions`
--
ALTER TABLE `compositions`
  ADD PRIMARY KEY (`compositionID`);

--
-- Indexes for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD PRIMARY KEY (`dimensionID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `origins`
--
ALTER TABLE `origins`
  ADD PRIMARY KEY (`originID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `compositions`
--
ALTER TABLE `compositions`
  MODIFY `compositionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dimensions`
--
ALTER TABLE `dimensions`
  MODIFY `dimensionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `origins`
--
ALTER TABLE `origins`
  MODIFY `originID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
