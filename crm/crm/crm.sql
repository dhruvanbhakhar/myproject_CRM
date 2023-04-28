-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 07:20 AM
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
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_company`
--

CREATE TABLE `add_company` (
  `cid` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_company`
--

INSERT INTO `add_company` (`cid`, `address`, `cname`) VALUES
(1, 'dadar', 'M2M'),
(2, 'surat', 'M4M'),
(3, 'surat', 'Zara');

-- --------------------------------------------------------

--
-- Table structure for table `add_cust`
--

CREATE TABLE `add_cust` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phn_no` int(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_cust`
--

INSERT INTO `add_cust` (`cust_id`, `cust_name`, `email`, `phn_no`, `cname`, `Status`) VALUES
(38, 'Mansuk Patel', 'mnp@gmail.com', 1234567890, 'zara', 'customer'),
(39, 'Dhruv Patel', 'dptl@gmail.com	', 2147483647, 'M2M', 'pending'),
(40, 'Dhruvan Bhakhar', 'db@gmail.com', 2147483647, 'M4M', 'pending'),
(41, 'dhruuv Parjapati', 'dp@gmail.com', 2147483647, 'M4M', 'pending'),
(42, 'Om Sukhadiya', 'om@gmail.com', 2147483647, 'Zara', 'pending'),
(43, 'Heet Patel', 'Heetptl@gmail.com', 2147483647, 'M2M', 'pending'),
(44, 'Heet borad', 'Heet@gmail.com', 2147483647, 'M2M', 'pending'),
(45, 'Variya dev', 'variya@gmail.coom', 2147483647, 'M2M', 'pending'),
(46, ' JIVRAJBHAI VARIYA', 'sumit01@gmail.coom', 2147483647, 'Zara', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `add_emp`
--

CREATE TABLE `add_emp` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenum` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_emp`
--

INSERT INTO `add_emp` (`emp_id`, `name`, `email`, `phonenum`, `password`) VALUES
(13, 'dhruvan', 'db@gmail.com', 789456123, '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `name`, `password`) VALUES
(1, 'admin1', '123\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `emp_record`
--

CREATE TABLE `emp_record` (
  `emp_id` int(11) NOT NULL,
  `leads` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_company`
--
ALTER TABLE `add_company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `add_cust`
--
ALTER TABLE `add_cust`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `cid` (`cname`);

--
-- Indexes for table `add_emp`
--
ALTER TABLE `add_emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_record`
--
ALTER TABLE `emp_record`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_company`
--
ALTER TABLE `add_company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_cust`
--
ALTER TABLE `add_cust`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `add_emp`
--
ALTER TABLE `add_emp`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_record`
--
ALTER TABLE `emp_record`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp_record`
--
ALTER TABLE `emp_record`
  ADD CONSTRAINT `emp_record_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `add_emp` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
