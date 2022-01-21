-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 09:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helperland`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookservice`
--

CREATE TABLE `bookservice` (
  `service_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `service_date` date NOT NULL,
  `service_time` time NOT NULL,
  `service_hours` float NOT NULL,
  `service_extra` varchar(20) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `newstreet_name` varchar(30) NOT NULL,
  `newhouse_num` varchar(20) NOT NULL,
  `postalcode` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `service_newdate` date NOT NULL,
  `service_newtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` int(11) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_fname` varchar(20) NOT NULL,
  `cust_lname` varchar(20) NOT NULL,
  `cust_email` varchar(40) NOT NULL,
  `cust_phone` int(11) UNSIGNED NOT NULL,
  `cust_DOB` date DEFAULT NULL,
  `street_name` varchar(30) NOT NULL,
  `house_num` varchar(10) NOT NULL,
  `postalcode` int(10) UNSIGNED NOT NULL,
  `city` varchar(20) NOT NULL,
  `cust_pass` varchar(20) NOT NULL,
  `cust_newpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customerservicerequest`
--

CREATE TABLE `customerservicerequest` (
  `id` int(11) NOT NULL,
  `service_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `sp_id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `newdate` date NOT NULL,
  `newtime` time NOT NULL,
  `canclemsg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `sp_id` int(11) NOT NULL,
  `sp_fname` varchar(20) NOT NULL,
  `sp_lname` varchar(20) NOT NULL,
  `sp_email` varchar(30) NOT NULL,
  `sp_phone` int(11) UNSIGNED NOT NULL,
  `sp_DOB` date NOT NULL,
  `sp_gender` varchar(10) NOT NULL,
  `sp_nationality` varchar(20) NOT NULL,
  `street_name` varchar(30) NOT NULL,
  `house_num` varchar(20) NOT NULL,
  `postalcode` int(10) UNSIGNED NOT NULL,
  `city` varchar(20) NOT NULL,
  `sp_password` varchar(20) NOT NULL,
  `sp_newpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sprequest`
--

CREATE TABLE `sprequest` (
  `request_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `service_date` date NOT NULL,
  `service_time` time NOT NULL,
  `cust_id` int(11) NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `distance` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `useraddresses`
--

CREATE TABLE `useraddresses` (
  `address_id` int(11) NOT NULL,
  `street_name` varchar(30) NOT NULL,
  `house_num` varchar(20) NOT NULL,
  `postalcode` int(10) UNSIGNED NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone_no` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookservice`
--
ALTER TABLE `bookservice`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customerservicerequest`
--
ALTER TABLE `customerservicerequest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `sprequest`
--
ALTER TABLE `sprequest`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `sprequest_ibfk_2` (`service_id`),
  ADD KEY `amount` (`amount`);

--
-- Indexes for table `useraddresses`
--
ALTER TABLE `useraddresses`
  ADD PRIMARY KEY (`address_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookservice`
--
ALTER TABLE `bookservice`
  MODIFY `service_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customerservicerequest`
--
ALTER TABLE `customerservicerequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sprequest`
--
ALTER TABLE `sprequest`
  MODIFY `request_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useraddresses`
--
ALTER TABLE `useraddresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookservice`
--
ALTER TABLE `bookservice`
  ADD CONSTRAINT `bookservice_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `customerservicerequest`
--
ALTER TABLE `customerservicerequest`
  ADD CONSTRAINT `customerservicerequest_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `bookservice` (`service_id`),
  ADD CONSTRAINT `customerservicerequest_ibfk_2` FOREIGN KEY (`sp_id`) REFERENCES `serviceprovider` (`sp_id`);

--
-- Constraints for table `sprequest`
--
ALTER TABLE `sprequest`
  ADD CONSTRAINT `sprequest_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `sprequest_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `bookservice` (`service_id`),
  ADD CONSTRAINT `sprequest_ibfk_3` FOREIGN KEY (`amount`) REFERENCES `bookservice` (`service_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
