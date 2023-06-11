-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 05:48 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbados`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_reject`
--

CREATE TABLE `accept_reject` (
  `id` int(11) NOT NULL,
  `app_id` int(16) DEFAULT NULL,
  `file` varchar(1000) DEFAULT NULL,
  `sup_id` varchar(122) DEFAULT NULL,
  `pro_id` varchar(133) DEFAULT NULL,
  `status` varchar(133) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(16) NOT NULL,
  `Names` varchar(222) DEFAULT NULL,
  `Email` varchar(177) DEFAULT NULL,
  `Username` varchar(177) DEFAULT NULL,
  `Password` varchar(177) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Names`, `Email`, `Username`, `Password`) VALUES
(1, 'mbarushimana', 'fabricembarush5@gmail.com', 'mbarushimana', 'mbarushimana');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` int(16) NOT NULL,
  `file` varchar(177) DEFAULT NULL,
  `sup_id` int(16) DEFAULT NULL,
  `pro_id` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(16) NOT NULL,
  `pro_Name` varchar(166) DEFAULT NULL,
  `Quality` varchar(177) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `sup_id` int(16) NOT NULL,
  `sup_name` varchar(188) DEFAULT NULL,
  `national_id` varchar(188) DEFAULT NULL,
  `Address` varchar(188) DEFAULT NULL,
  `Phone` varchar(188) DEFAULT NULL,
  `Username` varchar(188) DEFAULT NULL,
  `Password` varchar(188) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_name`, `national_id`, `Address`, `Phone`, `Username`, `Password`) VALUES
(1, 'Dushimirimana Aristide', '120043566457834', 'Rubabu', '0789425942', 'Dushimirimana', 'Dushimirimana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept_reject`
--
ALTER TABLE `accept_reject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `app_id` (`app_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `sup_id` (`sup_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept_reject`
--
ALTER TABLE `accept_reject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `app_id` int(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accept_reject`
--
ALTER TABLE `accept_reject`
  ADD CONSTRAINT `accept_reject_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `application` (`app_id`);

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`sup_id`) REFERENCES `supplier` (`sup_id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
