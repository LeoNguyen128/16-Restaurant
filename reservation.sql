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
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationReference` int(10) NOT NULL,
  `typeoforder` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `TypeofTable` varchar(10) NOT NULL,
  `NumberofCustomer` varchar(50) NOT NULL,
  `Stage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationReference`, `typeoforder`, `date`, `time`, `TypeofTable`, `NumberofCustomer`, `Stage`) VALUES
(1, 'Dine-In', '2020-09-12', '19:00', 'large', '6', 'Finished'),
(3, 'Dine-In', '3211-12-31', '19:00', 'large', '3', 'Processing'),
(4, 'Take-Out', '', '', 'small', '', 'Finished'),
(5, 'Dine-In', '2000-09-12', '19:00', 'large', '5', 'Processing'),
(6, 'Dine-In', '2000-09-12', '19:00', 'large', '5', 'Processing'),
(7, 'Dine-In', '2000-09-12', '19:00', 'large', '5', 'Processing'),
(8, 'Dine-In', '2000-09-12', '19:00', 'large', '5', 'Processing'),
(9, 'Dine-In', '2000-09-12', '19:00', 'large', '5', 'Processing'),
(10, 'Dine-In', '2000-09-12', '19:00', 'large', '5', 'Processing'),
(11, 'Dine-In', '2000-09-12', '19:00', 'large', '1', 'Processing'),
(12, 'Dine-In', '2000-09-12', '19:00', 'large', '1', 'Finished'),
(13, 'Dine-In', '2000-09-12', '12:12', 'large', '12', 'Processing'),
(14, 'Dine-In', '2000-09-12', '12:12', 'large', '12', 'Processing'),
(15, 'Dine-In', '2000-09-12', '12:12', 'large', '12', 'Processing'),
(16, 'Dine-In', '2000-09-12', '12:12', 'large', '12', 'Processing'),
(17, 'Dine-In', '2000-09-12', '12:12', 'large', '12', 'Processing'),
(18, 'Dine-In', '1212-12-12', '00:12', 'large', '12', 'Processing'),
(19, 'Dine-In', '1212-12-12', '00:12', 'large', '12', 'Processing'),
(20, 'Dine-In', '1212-12-12', '00:12', 'large', '12', 'Processing'),
(21, 'Dine-In', '1212-12-12', '00:12', 'large', '12', 'Processing'),
(22, 'Dine-In', '1212-12-12', '00:12', 'large', '12', 'Processing'),
(23, 'Dine-In', '1212-12-12', '00:12', 'large', '12', 'Finished'),
(24, 'Dine-In', '1212-12-12', '00:12', 'large', '12', 'Finished'),
(25, 'Take-Out', '2020-11-26', '10:00', 'small', '1', 'Processing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationReference`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationReference` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
