-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 12:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `foodid` int(6) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `calories` int(11) DEFAULT NULL,
  `ingredients` varchar(50) DEFAULT NULL,
  `price` double NOT NULL,
  `description` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`foodid`, `foodname`, `calories`, `ingredients`, `price`, `description`) VALUES
(1, 'House Special', 550, 'Pho with Beef', 11, 'Delicious'),
(2, 'Pho Tai', 500, 'Rare Beef', 15, 'Delicious'),
(3, 'Cha Gio', 300, 'vegetables', 5, 'crispy deep fried spring roll'),
(4, 'goi cuon', 400, 'rice vermicelli, ham, salad, shrimp', 6, 'fresh salad roll'),
(5, 'Vietnamese Coffee', 100, 'coffee and ice(hot)', 3, 'Vietnamese original Coffee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`foodid`),
  ADD UNIQUE KEY `foodname` (`foodname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `foodid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
