-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 12:36 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `fname` varchar(39) NOT NULL,
  `lname` varchar(39) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(29) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`fname`, `lname`, `email`, `password`, `phonenumber`, `address`) VALUES
('Satya', 'lakshmi', 'satya@gmail.com', 'satya@1', '9440741139', 'Krishna'),
('talla', 'lakshmi', 'tls@gmail.com', 'tls@1', '9900990011', 'guntur');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_wallet`
--

CREATE TABLE `buyer_wallet` (
  `email` varchar(59) NOT NULL,
  `amount` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_wallet`
--

INSERT INTO `buyer_wallet` (`email`, `amount`) VALUES
('satya@gmail.com', 3500),
('tls@gmail.com', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `fruit_vendors`
--

CREATE TABLE `fruit_vendors` (
  `f_id` int(11) NOT NULL,
  `s_email` varchar(49) NOT NULL,
  `fruit` varchar(49) NOT NULL,
  `quantity` int(10) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_vendors`
--

INSERT INTO `fruit_vendors` (`f_id`, `s_email`, `fruit`, `quantity`, `cost`) VALUES
(1, 'dev@gmail.com', 'f3', 199, 21),
(2, 'dev@gmail.com', 'hh', 12, 30),
(3, 'dev@gmail.com', 'mongo', 1000, 220);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `fname` varchar(39) NOT NULL,
  `lname` varchar(39) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `pannumber` varchar(15) NOT NULL,
  `shop_name` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`fname`, `lname`, `email`, `password`, `address`, `pannumber`, `shop_name`) VALUES
('prabu', 'dev', 'dev@gmail.com', 'dev@123', 'vijayawada', '1234asf1', 'FrooFresh Store');

-- --------------------------------------------------------

--
-- Table structure for table `seller_wallet`
--

CREATE TABLE `seller_wallet` (
  `email` varchar(50) NOT NULL,
  `amout` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`email`(39));

--
-- Indexes for table `buyer_wallet`
--
ALTER TABLE `buyer_wallet`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `fruit_vendors`
--
ALTER TABLE `fruit_vendors`
  ADD PRIMARY KEY (`f_id`,`s_email`,`fruit`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `seller_wallet`
--
ALTER TABLE `seller_wallet`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit_vendors`
--
ALTER TABLE `fruit_vendors`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
