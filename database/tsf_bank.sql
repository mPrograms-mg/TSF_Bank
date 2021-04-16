-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 08:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Sanjay Kumar', 'kumarboy130@gmail.com', 4000),
(2, 'Prashant Mishra', 'prashant@gmail.com', 2200),
(3, 'Mihir Mehta', 'mihirmehta@gmail.com', 3500),
(4, 'Sagar Patel', 'patelsagar01@gmail.com', 4000),
(5, 'Nilesh Patil', 'patilnilesh@gmail.com', 4000),
(6, 'Roshan Yadav', 'roshany12@gmail.com', 5000),
(7, 'Shubham Sonar', 'sonar23@gmail.com', 8000),
(8, 'Mohan Koshti', 'koshti51@gmail.com', 6000),
(9, 'Piyush Sharma', 'piyush@gmil.com', 5500),
(10, 'Gaurav Sonwane', 'gaurav@gmail.com', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `tranc_data`
--

CREATE TABLE `tranc_data` (
  `c_no` int(5) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(10) NOT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tranc_data`
--

INSERT INTO `tranc_data` (`c_no`, `sender`, `receiver`, `balance`, `time`) VALUES
(0, 'Shubham Sonar', 'Prashant Mishra', 0, '2021-04-13'),
(0, 'Nilesh Patil', 'Prashant Mishra', 500, '2021-04-13'),
(0, 'Roshan Yadav', 'Mohan Koshti', 500, '2021-04-13'),
(0, 'Mohan Koshti', 'Sagar Patel', 500, '2021-04-13'),
(0, 'Sagar Patel', 'Mohan Koshti', 1000, '2021-04-13'),
(0, 'Sagar Patel', 'Sanjay Kumar', 500, '2021-04-14'),
(0, 'Sanjay Kumar', 'Mihir Mehta', 500, '2021-04-14'),
(0, 'Sanjay Kumar', 'Prashant Mishra', 200, '2021-04-16'),
(0, 'Mohan Koshti', 'Piyush Sharma', 4000, '2021-04-16'),
(0, 'Gaurav Sonwane', 'Sanjay Kumar', 3000, '2021-04-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
