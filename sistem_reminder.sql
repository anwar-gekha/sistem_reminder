-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 05:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_reminder`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(3) NOT NULL,
  `name_doc` varchar(25) NOT NULL,
  `expired` date NOT NULL,
  `pic` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `memberID` varchar(100) NOT NULL,
  `passMD5` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2020-09-08 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `account_status` varchar(255) DEFAULT 'Pending',
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`id`, `photo`, `memberID`, `passMD5`, `email`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `account_status`, `roles`) VALUES
(1, NULL, 'anwar', '$2y$10$KVcTA1VvjuvE1Oq33Og6/.Ob7.kLgSkXE6LV.ZYptUaRhsV3RXgLu', 'sukasenang001@gmail.com', NULL, NULL, '2020-09-08 00:00:00', NULL, 'Active', 'Administrator'),
(2, NULL, 'billy', '$2y$10$KVcTA1VvjuvE1Oq33Og6/.Ob7.kLgSkXE6LV.ZYptUaRhsV3RXgLu', 'billy@gekha.com', 'b2ba7966a67f36c267def0198106e3fd', NULL, '2020-09-08 00:00:00', NULL, 'Active', 'administrator'),
(3, NULL, 'elis', '$2y$10$BTxfD5tTdr/VKsaUKBri/Ob3ZLj9tZXxQfnA8oj9VzlWvv1o/t2I2', 'test@test.com', NULL, NULL, '2020-09-08 00:00:00', NULL, 'Pending', 'administrator'),
(5, NULL, 'guest', NULL, NULL, NULL, NULL, '2020-09-08 00:00:00', NULL, 'Pending', 'administrator'),
(6, NULL, 'indah', '$2y$10$7SxYydzSmeped3P7atQ6meE6YFTCXmNceP2omhtu4VRtFV6YnaQl2', 'test@test.com', NULL, NULL, '2020-09-08 00:00:00', NULL, 'Pending', 'administrator'),
(7, NULL, 'louis', '$2y$10$8LhVBdN/6Y9J6Pp83b4n6OE6QY7OezIFdlitQTDgrFIy1Fg9fK7BS', 'test@test.com', NULL, NULL, '2020-09-08 00:00:00', NULL, 'Pending', 'administrator'),
(8, NULL, 'malsen', '$2y$10$KVcTA1VvjuvE1Oq33Og6/.Ob7.kLgSkXE6LV.ZYptUaRhsV3RXgLu', 'test@test.com', '1a8b8a218b8be174a6a7a49166b609b0', NULL, '2020-09-08 00:00:00', NULL, 'Active', 'administrator'),
(9, NULL, 'michael', '$2y$10$hoMGSj8MRLcXifQcCAWJsOPdBECvrBXH0/xHfp5vJSMNHEM7o5R1O', 'test@test.com', NULL, NULL, '2020-09-08 00:00:00', NULL, 'Pending', 'administrator'),
(10, NULL, 'parlin', '$2y$10$KVcTA1VvjuvE1Oq33Og6/.Ob7.kLgSkXE6LV.ZYptUaRhsV3RXgLu', 'test@test.com', 'cb3c539c02c24bc8c2c6d9efb4afdabb', NULL, '2020-09-08 00:00:00', NULL, 'Active', 'administrator'),
(11, NULL, 'vinka', '$2y$10$6OM7For.t.RYEN3Hay/QX.r9LYFI92pD20d6xBbXOPoMDpdvNh6aS', 'vinka@gekha.com', NULL, NULL, '2020-09-08 00:00:00', NULL, 'Pending', 'administrator'),
(12, 'http://192.168.10.31/gekha_inventory/uploads/files/dxb85viow10zqfj.jpg', 'gelark', '$2y$10$Mjys2g26/x9tURLftArB5uiFSrlO5vZwYoDtZNHJuJ1/QkINeIXfO', 'gella_m2001@yahoo.com.au', NULL, NULL, '2020-09-08 00:00:00', NULL, 'Active', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership_users`
--
ALTER TABLE `membership_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
