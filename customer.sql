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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `bookingreference` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `ReservationReference` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`bookingreference`, `name`, `phonenumber`, `email`, `zipcode`, `ReservationReference`) VALUES
(5, 'Thanh Dat Dinh', 2147483647, 'dinhdat0912@gmail.com', 'V5N4P4', 1),
(6, 'Hoa', 2147483647, 'dinhdat0912@gmail.com', 'V5N4P4', 1),
(7, 'Amanda', 1281212, 'dinhdat0912@gmail.com', 'V5N4P4', 12),
(8, 'alexander', 123123123, 'you@me', 'V5N4P4', 1),
(9, 'Thanh Dat Dinh', 2147483647, 'dinhdat0912@gmail.com', 'V5N4P4', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`bookingreference`),
  ADD KEY `ReservationReference` (`ReservationReference`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `bookingreference` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `ReservationReference` FOREIGN KEY (`ReservationReference`) REFERENCES `reservation` (`ReservationReference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
