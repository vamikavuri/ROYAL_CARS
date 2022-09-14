-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 06:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `mobile` int(10) NOT NULL,
  `pickuploc` varchar(100) NOT NULL,
  `droploc` varchar(100) NOT NULL,
  `pickupdate` varchar(50) NOT NULL,
  `pickuptime` varchar(50) NOT NULL,
  `carid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`fname`, `lname`, `emailid`, `mobile`, `pickuploc`, `droploc`, `pickupdate`, `pickuptime`, `carid`) VALUES
('abcd', 'efgh', 'abcd@efgh.com', 1112224443, 'Montreal', 'Toronto', '09/05/2022', '9:48 AM', 3),
('hhhh', 'ffff', 'hhhh@ffff.in', 2147483647, 'Montreal', 'Calgary', '08/31/2022', '12:01 PM', 1),
('1111', '2222', 'abc@f.com', 1765432123, 'Toronto', 'Montreal', '08/29/2022', '7:02 AM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carid` int(11) NOT NULL,
  `carname` varchar(200) NOT NULL,
  `carimagename` varchar(200) NOT NULL,
  `caryear` int(11) NOT NULL,
  `carmileage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `carname`, `carimagename`, `caryear`, `carmileage`) VALUES
(1, 'Mercedes Benz S1', 'img/car-rent-1.png', 2018, 25),
(2, 'Mercedes Benz R3', 'img/car-rent-2.png', 2015, 30),
(3, 'Mercedes Benz S3', 'img/car-rent-3.png', 2021, 20),
(4, 'Mercedes Benz R1', 'img/car-rent-4.png', 2016, 35),
(5, 'Mercedes Benz R2', 'img/car-rent-5.png', 2018, 30),
(6, 'Mercedes Benz S2', 'img/car-rent-6.png', 2019, 25);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `emailid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`emailid`) VALUES
('abcd@efgh.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`emailid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
