-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2016 at 09:18 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.12-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `d_id` int(6) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_amount` int(15) NOT NULL,
  `d_purpose` varchar(40) NOT NULL,
  `d_date` date NOT NULL,
  `d_addr` varchar(40) NOT NULL,
  `d_cell` varchar(15) NOT NULL,
  `d_pay` varchar(25) NOT NULL,
  `d_paytype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`d_id`, `d_name`, `d_amount`, `d_purpose`, `d_date`, `d_addr`, `d_cell`, `d_pay`, `d_paytype`) VALUES
(13, 'Sunny', 111, 'Fund', '2016-11-13', 'Rampura', '017266779999', 'Paid', 'Cheque'),
(14, 'Ashraf', 7800, 'Mousque building', '2016-11-13', 'Comilla', '01562799878', 'Paid', 'Other'),
(15, 'Mamun', 100, 'Fund', '2016-11-13', 'Rajarbug', '0183897489', 'Unpaid', 'Cash'),
(16, 'Mamun', 25, 'Fund', '2016-11-13', 'Rajarbug', '019874897897`', 'Paid', 'Cash'),
(17, 'Rakib', 1001, 'Building Mosque', '2016-11-13', 'Gazipur', '01594320989', 'Paid', 'bKash'),
(18, 'Aritra', 2500, 'Fund', '2016-11-13', 'Norshingdi', '0187987897', 'Unpaid', 'Cheque'),
(19, 'Rakib', 100, 'Mousque building', '2016-11-13', 'Gazipur', '01562799878', 'Paid', 'Cash'),
(20, 'Sunny', 5625, 'Fund', '2016-11-13', 'Rampura', '01726287878', 'Paid', 'Other'),
(21, 'Aritra', 120, 'Fund', '2016-11-13', 'Comilla', '0183897489', 'Paid', 'bKash'),
(22, 'Ashraf', 25, 'Fund', '2016-11-13', 'Rajarbug', '01726287878', 'Unpaid', 'Cheque'),
(23, 'Mamun', 30, 'Building Mosque', '2016-11-13', 'Gazipur', '0183897489', 'Paid', 'bKash'),
(24, 'Zion', 1001, 'Fund', '2016-11-15', 'Tejgaon', '0172379899', 'Paid', 'Cash'),
(25, 'Shovon', 115, 'Fund', '2016-11-15', 'Dhaka', '0198437829', 'Paid', 'Cash'),
(26, 'Sunny', 100, 'Fund', '2016-11-15', 'Rampura', '017266779999', 'Unpaid', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `u_name` varchar(20) NOT NULL,
  `u_pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`u_name`, `u_pass`) VALUES
('admin', '123456'),
('root', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_id` (`d_id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD UNIQUE KEY `user` (`u_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `d_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
