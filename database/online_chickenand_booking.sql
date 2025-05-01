-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 11:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_chickenand_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblboda`
--

CREATE TABLE `tblboda` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bod_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `rote_count` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `ID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `serviceID` int(11) NOT NULL,
  `massage` varchar(255) DEFAULT NULL,
  `status_booking` int(11) NOT NULL DEFAULT 0,
  `transfer` int(11) NOT NULL DEFAULT 0,
  `bodaID` int(11) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `paymnt_id` int(11) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `discount` varchar(255) DEFAULT NULL,
  `payment_proj` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE `tblcomment` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `masage` varchar(255) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `ID` int(11) NOT NULL,
  `paymentID` int(11) NOT NULL,
  `payment_methode` varchar(255) DEFAULT NULL,
  `payedID` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `upadeted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `pic_profile` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 5 COMMENT '1:super admin,2:admin,3:employee,4:bodaboda,5:enduser',
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `positon` varchar(255) DEFAULT NULL,
  `card_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `name`, `gender`, `address`, `phone`, `user_type`, `is_deleted`, `status`, `created_by`, `profile_pic`, `positon`, `card_id`, `email`, `password`, `create_at`, `update_at`) VALUES
(8, 'ABDULWAHID ALI ISSA', 'Male', 'FUONI', '0772645905', 1, 0, 0, 0, 'IMG-20230119-WA0000.jpg', NULL, NULL, 'abdullwahidaliy9@gmail.com', '80d40f1df7efab7c1e38b0cc835291d3', '2025-05-01 09:13:34', '2025-05-01 09:13:34'),
(9, 'ILHAM MALIK MOHAMEND', 'Female', 'TOMONDO', '088789564', 2, 0, 0, 8, 'little-girl-thinking-book-read.jpg', 'admin', '12345678932', 'ilhammalik90@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2025-05-01 09:15:32', '2025-05-01 09:15:32'),
(10, 'KASSIM BAKAR HAJI ', 'Male', 'NYARUGUSU', '0774567890', 2, 0, 0, 8, 'download.jpeg', 'admin2', '696969495994', 'kassimbakari.ni@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2025-05-01 09:42:08', '2025-05-01 09:42:08'),
(11, 'haji juma', 'Male', 'mwera', '077567890', 1, 0, 0, 0, NULL, NULL, NULL, 'abdullwahidaliy91@gmail.com', '80d40f1df7efab7c1e38b0cc835291d3', '2025-05-01 09:44:45', '2025-05-01 09:44:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblboda`
--
ALTER TABLE `tblboda`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `userID` (`userID`,`serviceID`,`bodaID`),
  ADD KEY `serviceID` (`serviceID`),
  ADD KEY `bodaID` (`bodaID`),
  ADD KEY `paymnt_id` (`paymnt_id`);

--
-- Indexes for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `paymentID` (`paymentID`);

--
-- Indexes for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `created_by` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblboda`
--
ALTER TABLE `tblboda`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcomment`
--
ALTER TABLE `tblcomment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblservice`
--
ALTER TABLE `tblservice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblboda`
--
ALTER TABLE `tblboda`
  ADD CONSTRAINT `tblboda_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`ID`);

--
-- Constraints for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD CONSTRAINT `tblbooking_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tbluser` (`ID`),
  ADD CONSTRAINT `tblbooking_ibfk_2` FOREIGN KEY (`serviceID`) REFERENCES `tblservice` (`ID`),
  ADD CONSTRAINT `tblbooking_ibfk_3` FOREIGN KEY (`bodaID`) REFERENCES `tbluser` (`ID`);

--
-- Constraints for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD CONSTRAINT `tblpayment_ibfk_1` FOREIGN KEY (`paymentID`) REFERENCES `tblbooking` (`paymnt_id`);

--
-- Constraints for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD CONSTRAINT `tblservice_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbluser` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
