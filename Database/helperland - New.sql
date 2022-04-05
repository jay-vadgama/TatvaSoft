-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 05:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Id` int(11) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `StateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactUsId` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` varchar(500) DEFAULT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Message` longtext NOT NULL,
  `UploadFileName` varchar(100) DEFAULT NULL,
  `CreatedOn` datetime(3) DEFAULT NULL,
  `CreatedBy` int(11) DEFAULT NULL,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactUsId`, `Firstname`, `Lastname`, `Email`, `Subject`, `PhoneNumber`, `Message`, `UploadFileName`, `CreatedOn`, `CreatedBy`, `IsDeleted`) VALUES
(1, 'Test', 'tatva', 'joy@gamil.com', 'Contact', '9624527786', 'dsadsadas', 'Online session.pdf', NULL, NULL, 0),
(2, 'Test', 'tatva', 'joy@gamil.com', 'Contact', '9624527786', 'dsadsadas', 'Online session.pdf', NULL, NULL, 0),
(3, 'Test', 'tatva2', 'joy@gamil.com', 'Inquiry', '8451135435', 'dasdsadsad', 'astronaut_spacesuit_reflection_144426_1280x720.jpg', NULL, NULL, 0),
(4, 'fgfdg', 'gdfgdfg', 'dawdw@gmail.com', 'Service', '6654654645', 'gdhgd', 'Jay Documents..pdf', NULL, NULL, 0),
(5, 'Test', 'tatva', 'joy@gamil.com', 'Service', '9624527786', 'dasdsa', 'Screenshot (1).png', NULL, NULL, 0),
(6, 'Jay', 'Vadgama', 'jaygajjjar143@gmail.com', 'Contact', '9652253151', 'abcde', '', NULL, NULL, 0),
(7, 'Joy', 'helper', 'joy@gamil.com', 'Contact', '9624527786', 'dasdsadsa', 'MySql thapa.txt', NULL, NULL, 0),
(8, 'Jay', 'Vadgama', 'jaygajjjar143@gmail.com', 'Inquiry', '9652253166', 'hello', '2.jpg', NULL, NULL, 0),
(9, 'krutik', 'aghera', 'agherakrutik99@gmail.com', 'Contact', '8646846841', 'bhjkshdfk', '', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactusattachment`
--

CREATE TABLE `contactusattachment` (
  `ContactUsAttachmentId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `FileName` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favoriteandblocked`
--

CREATE TABLE `favoriteandblocked` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `TargetUserId` int(11) NOT NULL,
  `IsFavorite` tinyint(4) NOT NULL,
  `IsBlocked` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RatingId` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `RatingFrom` int(11) NOT NULL,
  `RatingTo` int(11) NOT NULL,
  `Ratings` decimal(2,1) NOT NULL DEFAULT 0.0,
  `Comments` varchar(2000) DEFAULT NULL,
  `RatingDate` datetime(3) NOT NULL,
  `IsApproved` tinyint(4) DEFAULT 1,
  `VisibleOnHomeScreen` tinyint(4) NOT NULL DEFAULT 0,
  `OnTimeArrival` decimal(2,1) NOT NULL DEFAULT 0.0,
  `Friendly` decimal(2,1) NOT NULL DEFAULT 0.0,
  `QualityOfService` decimal(2,1) NOT NULL DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RatingId`, `ServiceRequestId`, `RatingFrom`, `RatingTo`, `Ratings`, `Comments`, `RatingDate`, `IsApproved`, `VisibleOnHomeScreen`, `OnTimeArrival`, `Friendly`, `QualityOfService`) VALUES
(1, 210, 0, 0, '3.5', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(2, 209, 0, 0, '2.5', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(3, 208, 0, 0, '4.5', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(4, 212, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(5, 213, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(6, 214, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(7, 215, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(8, 216, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(9, 217, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(10, 218, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(11, 219, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(12, 220, 0, 0, '5.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(13, 221, 0, 0, '2.2', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(14, 222, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(15, 223, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(16, 224, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0'),
(17, 225, 0, 0, '0.0', NULL, '0000-00-00 00:00:00.000', 1, 0, '0.0', '0.0', '0.0');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `ServiceRequestId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `ServiceStartDate` datetime(3) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `ServiceHourlyRate` decimal(8,2) DEFAULT NULL,
  `ServiceHours` double NOT NULL,
  `ExtraHours` double DEFAULT NULL,
  `SubTotal` decimal(8,2) NOT NULL,
  `Discount` decimal(8,2) DEFAULT NULL,
  `TotalCost` decimal(8,2) NOT NULL,
  `Comments` varchar(500) DEFAULT NULL,
  `PaymentTransactionRefNo` varchar(50) DEFAULT NULL,
  `PaymentDue` tinyint(4) NOT NULL DEFAULT 0,
  `ServiceProviderId` int(11) DEFAULT NULL,
  `SPAcceptedDate` datetime(3) DEFAULT NULL,
  `HasPets` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL,
  `ReasonForCancel` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedDate` datetime(3) NOT NULL DEFAULT current_timestamp(3),
  `ModifiedBy` int(11) DEFAULT NULL,
  `RefundedAmount` decimal(8,2) DEFAULT NULL,
  `Distance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `HasIssue` tinyint(4) DEFAULT NULL,
  `PaymentDone` tinyint(4) DEFAULT NULL,
  `RecordVersion` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`ServiceRequestId`, `UserId`, `ServiceId`, `ServiceStartDate`, `ZipCode`, `ServiceHourlyRate`, `ServiceHours`, `ExtraHours`, `SubTotal`, `Discount`, `TotalCost`, `Comments`, `PaymentTransactionRefNo`, `PaymentDue`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `ReasonForCancel`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`) VALUES
(208, 7, 0, '2022-04-02 08:00:00.000', '362001', '60.00', 3, 1.5, '90.00', '0.00', '90.00', '1st Service', NULL, 0, 6, '0000-00-00 00:00:00.000', 1, NULL, '', '2022-04-02 15:31:00.328', '2022-04-02 15:31:00.328', NULL, NULL, '0.00', NULL, NULL, NULL),
(219, 8, 0, '2022-04-14 02:00:00.000', '362001', '120.00', 6, 1.5, '150.00', '0.00', '150.00', '1st', NULL, 0, 6, '0000-00-00 00:00:00.000', 0, NULL, 'dasdasd', '2022-04-03 10:34:33.459', '2022-04-03 10:34:33.459', NULL, NULL, '0.00', NULL, NULL, NULL),
(220, 8, 0, '2022-04-05 03:30:00.000', '362001', '110.00', 5.5, 1.5, '140.00', '0.00', '140.00', '2nd Service', NULL, 0, 6, '0000-00-00 00:00:00.000', 1, NULL, 'Not Available!', '2022-04-03 10:35:12.161', '2022-04-03 10:35:12.161', NULL, NULL, '0.00', NULL, NULL, NULL),
(221, 8, 0, '2022-04-10 09:00:00.000', '362001', '90.00', 4.5, 2, '130.00', '0.00', '130.00', '3rd', NULL, 0, 6, '0000-00-00 00:00:00.000', 1, NULL, 'Not Available', '2022-04-03 10:35:39.854', '2022-04-03 10:35:39.854', NULL, NULL, '0.00', NULL, NULL, NULL),
(222, 8, 0, '2022-04-13 12:30:00.000', '362001', '170.00', 8.5, 1.5, '200.00', '0.00', '200.00', '', NULL, 0, 6, '0000-00-00 00:00:00.000', 0, 1, 'dasdsad', '2022-04-03 10:52:21.510', '2022-04-03 10:52:21.510', NULL, NULL, '0.00', NULL, NULL, NULL),
(223, 8, 0, '2022-04-08 10:00:00.000', '362001', '140.00', 7, 1.5, '170.00', '0.00', '170.00', 'Hello', NULL, 0, 6, '0000-00-00 00:00:00.000', 1, 2, 'dsadas', '2022-04-04 10:44:27.406', '2022-04-04 10:44:27.406', NULL, NULL, '0.00', NULL, NULL, NULL),
(224, 8, 0, '2022-04-08 08:00:00.000', '362001', '80.00', 4, 2.5, '130.00', '0.00', '130.00', 'Hello', NULL, 0, 6, '0000-00-00 00:00:00.000', 1, 3, NULL, '2022-04-04 13:36:13.271', '2022-04-04 13:36:13.271', NULL, NULL, '0.00', NULL, NULL, NULL),
(225, 7, 0, '2022-04-06 08:00:00.000', '362001', '190.00', 9.5, 1.5, '220.00', '0.00', '220.00', '2nd Service', NULL, 0, 6, '0000-00-00 00:00:00.000', 1, 1, NULL, '2022-04-04 15:46:09.825', '2022-04-04 15:46:09.825', NULL, NULL, '0.00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `servicerequestaddress`
--

CREATE TABLE `servicerequestaddress` (
  `Id` int(11) NOT NULL,
  `ServiceRequestId` int(11) DEFAULT NULL,
  `AddressLine1` varchar(200) DEFAULT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequestaddress`
--

INSERT INTO `servicerequestaddress` (`Id`, `ServiceRequestId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `Mobile`, `Email`) VALUES
(26, 199, 'Shubhashnagar', '90', 'joshipura', 'Gujarat', '215321', '8984646846', 'jayvadgama143@gmail.com'),
(27, 200, 'Visat', '500', 'Ahmedabad', 'Gujarat', '382022', '9652253151', 'jayvadgama143@gmail.com'),
(28, 201, 'Visat', '500', 'Ahmedabad', 'Gujarat', '382022', '9652253151', 'jayvadgama143@gmail.com'),
(29, 202, 'Visat', '500', 'Ahmedabad', 'Gujarat', '382022', '9652253151', 'jayvadgama143@gmail.com'),
(30, 203, 'Visat', '500', 'Ahmedabad', 'Gujarat', '382022', '9652253151', 'jayvadgama143@gmail.com'),
(31, 204, 'Shubhashnagar', '90', 'joshipura', 'Gujarat', '215321', '8984646846', 'jayvadgama143@gmail.com'),
(32, 205, 'Shubhashnagar', '90', 'joshipura', 'Gujarat', '215321', '8984646846', 'jayvadgama143@gmail.com'),
(33, 206, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(34, 207, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(35, 208, 'Shambhunagar', '321', 'Junagadh', 'Gujarat', '123123', '8468486464', 'jayvadgama143@gmail.com'),
(36, 209, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(37, 210, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(38, 211, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(39, 212, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(40, 213, 'vadva', '4', 'bvn', 'Gujarat', '3510000', '6354343132', 'user1@gmail.com'),
(41, 214, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(42, 215, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(43, 216, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(44, 217, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(45, 218, 'Joshipura', '201', 'JND', 'Gujarat', '321321', '8345484334', 'user1@gmail.com'),
(46, 219, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(47, 220, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(48, 221, '2312', 'hjhhjas', 'klv', 'Gujarat', '535135', '6488464646', 'user1@gmail.com'),
(49, 222, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(50, 223, '2312', 'hjhhjas', 'klv', 'Gujarat', '535135', '6488464646', 'user1@gmail.com'),
(51, 224, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', '9999999999', 'user1@gmail.com'),
(52, 225, 'shivnaga1212', '22225', 'Ahmedabad', 'Gujarat', '362001', '8888888888', 'jayvadgama143@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequestextra`
--

CREATE TABLE `servicerequestextra` (
  `ServiceRequestExtraId` int(11) NOT NULL,
  `ServiceRequestId` int(11) NOT NULL,
  `ServiceExtraId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequestextra`
--

INSERT INTO `servicerequestextra` (`ServiceRequestExtraId`, `ServiceRequestId`, `ServiceExtraId`) VALUES
(1, 201, 0),
(2, 204, 2),
(3, 204, 4),
(4, 204, 5),
(5, 205, 2),
(6, 205, 4),
(7, 205, 5),
(8, 206, 1),
(9, 206, 3),
(10, 206, 5),
(11, 207, 1),
(12, 207, 2),
(13, 207, 3),
(14, 207, 4),
(15, 207, 5),
(16, 208, 1),
(17, 208, 3),
(18, 208, 5),
(19, 209, 1),
(20, 209, 2),
(21, 209, 3),
(22, 209, 4),
(23, 210, 1),
(24, 210, 2),
(25, 210, 3),
(26, 210, 4),
(27, 211, 1),
(28, 211, 2),
(29, 211, 3),
(30, 211, 4),
(31, 211, 4),
(32, 212, 1),
(33, 212, 3),
(34, 212, 5),
(35, 213, 1),
(36, 213, 2),
(37, 213, 4),
(38, 214, 1),
(39, 214, 3),
(40, 214, 5),
(41, 215, 1),
(42, 215, 2),
(43, 215, 3),
(44, 215, 4),
(45, 215, 5),
(46, 216, 1),
(47, 216, 2),
(48, 216, 3),
(49, 217, 1),
(50, 217, 3),
(51, 217, 4),
(52, 217, 5),
(53, 218, 1),
(54, 218, 3),
(55, 218, 5),
(56, 219, 1),
(57, 219, 3),
(58, 219, 5),
(59, 220, 1),
(60, 220, 3),
(61, 220, 5),
(62, 221, 1),
(63, 221, 2),
(64, 221, 3),
(65, 221, 4),
(66, 222, 1),
(67, 222, 3),
(68, 222, 5),
(69, 223, 1),
(70, 223, 3),
(71, 223, 5),
(72, 224, 1),
(73, 224, 2),
(74, 224, 3),
(75, 224, 4),
(76, 224, 5),
(77, 225, 1),
(78, 225, 3),
(79, 225, 5);

-- --------------------------------------------------------

--
-- Table structure for table `servicesetting`
--

CREATE TABLE `servicesetting` (
  `Id` int(11) NOT NULL,
  `ActionType` int(11) NOT NULL,
  `Interval` int(11) NOT NULL,
  `ScheduleTime` time(6) NOT NULL,
  `LastPoll` datetime(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `Id` int(11) NOT NULL,
  `StateName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `token_expire` date DEFAULT NULL,
  `Mobile` varchar(20) NOT NULL,
  `UserTypeId` int(11) NOT NULL,
  `Gender` int(11) DEFAULT NULL,
  `DateOfBirth` datetime(3) DEFAULT NULL,
  `UserProfilePicture` varchar(200) DEFAULT NULL,
  `IsRegisteredUser` tinyint(4) NOT NULL DEFAULT 0,
  `PaymentGatewayUserRef` varchar(200) DEFAULT NULL,
  `ZipCode` varchar(20) DEFAULT NULL,
  `WorksWithPets` tinyint(4) NOT NULL DEFAULT 0,
  `LanguageId` int(11) DEFAULT NULL,
  `NationalityId` int(11) DEFAULT NULL,
  `CreatedDate` datetime(3) NOT NULL,
  `ModifiedDate` datetime(3) NOT NULL,
  `ModifiedBy` int(11) NOT NULL,
  `IsApproved` tinyint(4) NOT NULL DEFAULT 0,
  `IsActive` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Status` int(11) DEFAULT NULL,
  `BankTokenId` varchar(100) DEFAULT NULL,
  `TaxNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `reset_token`, `token_expire`, `Mobile`, `UserTypeId`, `Gender`, `DateOfBirth`, `UserProfilePicture`, `IsRegisteredUser`, `PaymentGatewayUserRef`, `ZipCode`, `WorksWithPets`, `LanguageId`, `NationalityId`, `CreatedDate`, `ModifiedDate`, `ModifiedBy`, `IsApproved`, `IsActive`, `IsDeleted`, `Status`, `BankTokenId`, `TaxNo`) VALUES
(6, 'Service1', 'P', 'sp1@gmail.com', '$2y$10$T8TNZhTDMye2I7tmRbnkDu1QA4Je7g.5LNrb8s2p/dGeqsggj6PJO', 'd32c453f6cc46191316d3f0568c049d1', '2022-03-29', '1231232312', 2, 1, '2022-03-17 00:00:00.000', 'car', 0, NULL, '123123', 1, 3, 1, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(7, 'Jay', 'Vadgama', 'jayvadgama143@gmail.com', '$2y$10$WiQWlMO8hwMmsz/BB7CVf.j1nlfYE6lVsDI37HkTdT4EStphAEUgy', NULL, NULL, '9624527785', 1, NULL, '2000-01-06 00:00:00.000', NULL, 0, NULL, NULL, 0, 3, NULL, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(8, 'user8', 'test8', 'user1@gmail.com', '$2y$10$z8RNCPKH4BiqQi9v7YxO4.5RVBQiV3bvjFbUXICDPOSnvJ0QVAdWG', 'd32c453f6cc46191316d3f0568c049d1', '2022-03-29', '6846468441', 1, NULL, '2001-09-27 00:00:00.000', NULL, 0, NULL, NULL, 0, 2, NULL, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(9, 'Admin', 'Helperland', 'helperland.services.test@gmail.com', '$2y$10$n2P/g4gDGq2EBArefqPPsONICnHDTayuGEY7h9Kcaz06rRZl3KyTu', 'd32c453f6cc46191316d3f0568c049d1', '2022-03-29', '9624527785', 3, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(10, 'krutik', 'aghera', 'agherakrutik99@gmail.com', '$2y$10$.GjMHUgVy89tGGt8S2zXX.dmsh/E8cQWJkrdueOyHnDDUODFF8try', 'd32c453f6cc46191316d3f0568c049d1', '2022-03-29', '8646846841', 1, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL),
(12, 'sp2', 'sp2', 'sp2@gmail.com', '$2y$10$C0uj.5ZXMAAChgAyU.lnvu7/X0byoWxVQfYhXFNLhHVtY1qJcKHGG', NULL, NULL, '8784648486', 2, 1, '1970-01-01 00:00:00.000', NULL, 0, NULL, NULL, 1, 2, 0, '0000-00-00 00:00:00.000', '0000-00-00 00:00:00.000', 0, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `AddressId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AddressLine1` varchar(200) NOT NULL,
  `AddressLine2` varchar(200) DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) DEFAULT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `IsDefault` tinyint(4) NOT NULL DEFAULT 0,
  `IsDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`AddressId`, `UserId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `IsDefault`, `IsDeleted`, `Mobile`, `Email`, `Type`) VALUES
(64, 8, 'shivnagar', '101', 'Ahmedabad', NULL, '362001', 0, 0, '8888888888', NULL, NULL),
(65, 8, 'Joshipura', '201', 'JND', NULL, '321321', 0, 0, '8345484334', NULL, NULL),
(67, 8, 'shivnagar', '301', 'joshipura', NULL, '133202', 0, 0, '8984646846', NULL, NULL),
(73, 7, 'Shiavnagar', '101', 'JND', NULL, '362001', 0, 0, '8997898797', NULL, NULL),
(74, 8, 'vadva', '4', 'bvn', NULL, '3510000', 0, 0, '6354343132', NULL, NULL),
(75, 7, 'Shambhunagar', '321', 'Junagadh', NULL, '123123', 0, 0, '8468486464', NULL, NULL),
(85, 0, 'xz', '201', '1', 'Gujarat', '1', 0, 0, '9652253151', NULL, NULL),
(86, 0, 'Shambhunagar', 'pop', 'joshipura', 'Gujarat', '133202', 0, 0, '8984646846', NULL, NULL),
(87, 7, 'shivnaga1212', '22225', 'Ahmedabad', 'Gujarat', '362001', 0, 0, '8888888888', 'jayvadgama143@gmail.com', NULL),
(88, 7, 'shivnaga1212', '22225', 'Ahmedabad', 'Gujarat', '362001', 0, 0, '8888888888', 'jayvadgama143@gmail.com', NULL),
(89, 7, 'Visat', '500', 'Ahmedabad', 'Gujarat', '382022', 0, 0, '9652253151', 'jayvadgama143@gmail.com', NULL),
(90, 8, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', 0, 0, '9999999999', 'user1@gmail.com', NULL),
(91, 8, 'shivnagar', '32221211212', 'joshipura', 'Gujarat', '133202', 0, 0, '9999999999', 'user1@gmail.com', NULL),
(92, 8, '2312', 'hjhhjas', 'klv', 'Gujarat', '535135', 0, 0, '6488464646', 'user1@gmail.com', NULL),
(93, 8, 'Visat', '1000', 'Ahmedabad', 'Gujarat', '382022', 0, 0, '9652253151', 'user1@gmail.com', NULL),
(94, 7, 'Shubhashnagar', '90', 'joshipura', 'Gujarat', '215321', 0, 0, '8984646846', 'jayvadgama143@gmail.com', NULL),
(101, 6, 'shivnagar', '201', 'Junagadh', NULL, '362001', 0, 0, NULL, 'sp1@gmail.com', 2),
(102, 12, 'Mahadev', '333', 'Junagadh', NULL, '320012', 0, 0, NULL, 'sp2@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `zipcode`
--

CREATE TABLE `zipcode` (
  `Id` int(11) NOT NULL,
  `ZipcodeValue` varchar(50) NOT NULL,
  `CityId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipcode`
--

INSERT INTO `zipcode` (`Id`, `ZipcodeValue`, `CityId`) VALUES
(3, '362001', 0),
(4, '362001', 0),
(5, '362001', 0),
(6, '362001', 0),
(7, '362001', 0),
(8, '362001', 0),
(9, '362001', 0),
(10, '362001', 0),
(11, '320012', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUsId`);

--
-- Indexes for table `contactusattachment`
--
ALTER TABLE `contactusattachment`
  ADD PRIMARY KEY (`ContactUsAttachmentId`);

--
-- Indexes for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RatingId`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`ServiceRequestId`);

--
-- Indexes for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  ADD PRIMARY KEY (`ServiceRequestExtraId`);

--
-- Indexes for table `servicesetting`
--
ALTER TABLE `servicesetting`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`AddressId`);

--
-- Indexes for table `zipcode`
--
ALTER TABLE `zipcode`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactusattachment`
--
ALTER TABLE `contactusattachment`
  MODIFY `ContactUsAttachmentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favoriteandblocked`
--
ALTER TABLE `favoriteandblocked`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RatingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `ServiceRequestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `servicerequestaddress`
--
ALTER TABLE `servicerequestaddress`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `servicerequestextra`
--
ALTER TABLE `servicerequestextra`
  MODIFY `ServiceRequestExtraId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `servicesetting`
--
ALTER TABLE `servicesetting`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `useraddress`
--
ALTER TABLE `useraddress`
  MODIFY `AddressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `zipcode`
--
ALTER TABLE `zipcode`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
