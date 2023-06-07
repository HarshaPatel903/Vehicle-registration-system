-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 05:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

CREATE TABLE `attendee` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` int(50) NOT NULL,
  `number` varchar(11) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendee`
--

INSERT INTO `attendee` (`id`, `fname`, `lname`, `email`, `number`, `comment`) VALUES
(0, 'harsha', 'patel', 0, '8971303971', ' noiceeee boiii'),
(91, 'kiran', 'patel', 0, '907268462', ' dopee');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `reg_fee` varchar(50) DEFAULT NULL,
  `temp_no` varchar(50) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  `status` int(10) DEFAULT 0,
  `pamveh_no` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `reg_fee`, `temp_no`, `cus_id`, `status`, `pamveh_no`) VALUES
(31, 'paid', '1876638', 1, 1, 77848364),
(3435, 'PAID', '9873978', 1, 1, 7486376),
(4434, 'PAID', '9873978', 2, 0, 0),
(77364, 'PAID', '9873978', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(50) DEFAULT NULL,
  `cus_addres` varchar(50) DEFAULT NULL,
  `cus_email` varchar(50) DEFAULT NULL,
  `cus_mobile` varchar(11) DEFAULT NULL,
  `cus_dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_addres`, `cus_email`, `cus_mobile`, `cus_dob`) VALUES
(0, 'hi hello', 'who', 'yahoo@cmrit.in', '8392883525', '2022-01-06'),
(1, 'harshul morey', 'banglore', 'harshul@cmrit.av.in', '98377748', '2022-01-07'),
(2, 'sanath', 'HAL', 'snath@cmrith.cism.in', '984789248', '2007-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `driver_license`
--

CREATE TABLE `driver_license` (
  `dl_id` int(11) NOT NULL,
  `dl_no` int(11) DEFAULT NULL,
  `license_type` varchar(40) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `issue_city` varchar(30) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_license`
--

INSERT INTO `driver_license` (`dl_id`, `dl_no`, `license_type`, `issue_date`, `exp_date`, `issue_city`, `cus_id`) VALUES
(20, 8283886, 'HML', '2022-01-08', '2024-05-14', 'BEML', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `uname`, `pass`) VALUES
(0, 'admin', '45f2603610af569b6155c45067268c6b');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `veh_id` int(11) NOT NULL,
  `veh_num` varchar(50) DEFAULT NULL,
  `veh_type` varchar(50) DEFAULT NULL,
  `chechis` varchar(50) DEFAULT NULL,
  `engine_no` varchar(50) DEFAULT NULL,
  `veh_desc` varchar(150) DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`veh_id`, `veh_num`, `veh_type`, `chechis`, `engine_no`, `veh_desc`, `cus_id`) VALUES
(0, '6353678', 'FOUR WHEELER', '2863827V773', '937747923', NULL, 0),
(102, '764795774', 'Three Wheeler', '937827V82772', '87759896848', 'Auto of company mahindra', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendee`
--
ALTER TABLE `attendee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`),
  ADD UNIQUE KEY `cus_id` (`cus_id`);

--
-- Indexes for table `driver_license`
--
ALTER TABLE `driver_license`
  ADD PRIMARY KEY (`dl_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`veh_id`),
  ADD UNIQUE KEY `veh_id` (`veh_id`),
  ADD KEY `fk_customer_vehicle` (`cus_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `driver_license`
--
ALTER TABLE `driver_license`
  ADD CONSTRAINT `driver_license_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_customer_vehicle` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
