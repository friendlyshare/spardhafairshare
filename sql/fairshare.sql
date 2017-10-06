-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 07:19 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fairshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `transactionId` varchar(10) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `dmobile` bigint(12) NOT NULL,
  `vehicleno` varchar(10) NOT NULL,
  `agreementId` int(50) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `cmobile` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`transactionId`, `dname`, `cname`, `dmobile`, `vehicleno`, `agreementId`, `status`, `cmobile`) VALUES
('', 'hari', 'hari', 9000065885, '9000065885', 6, 0, 9154644777);

-- --------------------------------------------------------

--
-- Table structure for table `clientreg`
--

CREATE TABLE `clientreg` (
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adar` bigint(15) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientreg`
--

INSERT INTO `clientreg` (`name`, `age`, `email`, `adar`, `mobile`, `pwd`) VALUES
('sruthi', 20, 'sruthipin@gmail.com', 334370876543, 3322114455, '123456'),
('hari', 20, 'rangaraju29139@gmail.com', 111111111111, 9000065885, 'hari'),
('P.N.V.Rangaraju', 20, 'rangaraju29139@gmail.com', 243809683526, 9154644777, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `customerpost`
--

CREATE TABLE `customerpost` (
  `AgreementId` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `src` varchar(150) NOT NULL,
  `dest` varchar(150) NOT NULL,
  `GoodDescription` varchar(150) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `deliverytime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerpost`
--

INSERT INTO `customerpost` (`AgreementId`, `name`, `src`, `dest`, `GoodDescription`, `mobile`, `deliverytime`) VALUES
(14, 'rangaraju', 'bhimavaram', 'vijayawada', 'fridge', 9154644777, 'tommorow'),
(15, 'rangaraju', 'bhimavaram', 'vijayawada', 'fridge', 9154644777, 'tommorow'),
(17, 'geeta', 'bhimavaram', 'vijayawada', 'fridge', 9154644777, 'tommorow'),
(18, 'geeta', 'bhimavaram', 'vijayawada', 'fridge', 9154644777, 'tommorow'),
(19, 'geeta', 'bhimavaram', 'vijayawada', 'fridge', 9154644777, 'tommorow'),
(20, 'geeta', 'bhimavaram', 'vijayawada', 'fridge', 9154644777, 'tommorow');

-- --------------------------------------------------------

--
-- Table structure for table `driverreg`
--

CREATE TABLE `driverreg` (
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `LisenceId` varchar(20) NOT NULL,
  `pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driverreg`
--

INSERT INTO `driverreg` (`name`, `age`, `email`, `mobile`, `LisenceId`, `pwd`) VALUES
('deepthi', 20, 'rdeepthivarma@gmail.com', 9010652729, 'ap37b3', 'b59c67bf196a4758191e42f76670ceba'),
('rangaraju', 20, 'rangaraju29139@gmail.com', 9154644777, '112233445566', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`agreementId`);

--
-- Indexes for table `clientreg`
--
ALTER TABLE `clientreg`
  ADD PRIMARY KEY (`mobile`);

--
-- Indexes for table `customerpost`
--
ALTER TABLE `customerpost`
  ADD PRIMARY KEY (`AgreementId`);

--
-- Indexes for table `driverreg`
--
ALTER TABLE `driverreg`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `LisenceId` (`LisenceId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `agreementId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customerpost`
--
ALTER TABLE `customerpost`
  MODIFY `AgreementId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
