-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2023 at 12:46 AM
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
-- Database: `healthinformationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(50) DEFAULT NULL,
  `doc_specialty` varchar(50) DEFAULT NULL,
  `doc_add` varchar(100) DEFAULT NULL,
  `doc_mobile` varchar(20) DEFAULT NULL,
  `doc_email` varchar(50) DEFAULT NULL,
  `doc_pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hos_id` int(11) NOT NULL,
  `hos_name` varchar(50) DEFAULT NULL,
  `hos_type` varchar(50) DEFAULT NULL,
  `hos_desc` varchar(100) DEFAULT NULL,
  `hos_doc_id` int(11) DEFAULT NULL,
  `hos_place` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(50) DEFAULT NULL,
  `login_password` varchar(50) DEFAULT NULL,
  `login_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_id` int(11) NOT NULL,
  `med_name` varchar(50) DEFAULT NULL,
  `med_quantity` int(11) DEFAULT NULL,
  `med_price` decimal(10,2) DEFAULT NULL,
  `hos_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pat_id` int(11) NOT NULL,
  `pat_userid` int(11) DEFAULT NULL,
  `pat_name` varchar(50) DEFAULT NULL,
  `pat_gender` enum('male','female','other') DEFAULT NULL,
  `pat_age` int(11) DEFAULT NULL,
  `pat_email` varchar(50) DEFAULT NULL,
  `pat_mobile` varchar(20) DEFAULT NULL,
  `pat_address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL,
  `permission_role_id` int(11) DEFAULT NULL,
  `permission_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) DEFAULT NULL,
  `role_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(145) NOT NULL,
  `user_role` varchar(145) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_role`, `user_mobile`, `user_email`, `user_address`) VALUES
(1, 'JohnDoe', 'pass123', 'admin', '555-1234', 'john.doe@example.com', '123 Main St'),
(2, 'JaneDoe', 'pass456', 'user', '555-5678', 'jane.doe@example.com', '456 Elm St'),
(3, 'BobSmith', 'pass789', 'staff', '555-9012', 'bob.smith@example.com', '789 Oak Ave'),
(4, 'AliceLee', 'passabc', 'user', '555-3456', 'alice.lee@example.com', '321 Pine St'),
(5, 'TomNguyen', 'passdef', 'admin', '555-7890', 'tom.nguyen@example.com', '987 Cedar Ln'),
(6, 'EmilyJohnson', 'passxyz', 'user', '555-1234', 'emily.johnson@example.com', '123 Main St'),
(7, 'MichaelBrown', 'passlmn', 'user', '555-5678', 'michael.brown@example.com', '456 Elm St'),
(8, 'SarahGarcia', 'passqrs', 'user', '555-9012', 'sarah.garcia@example.com', '789 Oak Ave'),
(9, 'DavidDavis', 'passuvw', 'user', '555-3456', 'david.davis@example.com', '321 Pine St'),
(10, 'JenniferWilson', 'passijk', 'user', '555-7890', 'jennifer.wilson@example.com', '987 Cedar Ln'),
(11, 'KevinLopez', 'passnop', 'user', '555-4321', 'kevin.lopez@example.com', '246 Maple Ave'),
(12, 'JessicaGreen', 'passrst', 'user', '555-8765', 'jessica.green@example.com', '135 Birch Blvd'),
(13, 'BrianLee', 'passfgh', 'user', '555-0987', 'brian.lee@example.com', '864 Cherry Rd'),
(14, 'StephanieClark', 'passuvw', 'user', '555-5432', 'stephanie.clark@example.com', '273 Cedar St'),
(15, 'MatthewHall', 'passklm', 'user', '555-9876', 'matthew.hall@example.com', '610 Oak St');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hos_id`),
  ADD KEY `hos_doc_id` (`hos_doc_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `login_role_id` (`login_role_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`),
  ADD KEY `hos_id` (`hos_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`permission_id`),
  ADD KEY `permission_role_id` (`permission_role_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`hos_doc_id`) REFERENCES `doctor` (`doc_id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`login_role_id`) REFERENCES `role` (`role_id`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`hos_id`) REFERENCES `hospital` (`hos_id`);

--
-- Constraints for table `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `permission_ibfk_1` FOREIGN KEY (`permission_role_id`) REFERENCES `role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
