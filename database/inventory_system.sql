-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 04:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `acctype` varchar(255) NOT NULL DEFAULT 'admin',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `acctype`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin12345'),
(2, 'user', 'user', 'user12345');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `productid` int(50) NOT NULL,
  `product` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `stock` int(20) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`productid`, `product`, `size`, `stock`, `price`) VALUES
(1, 'Nike', 'EU 35', 10, '2365.00'),
(2, 'Adidas', 'EU 40', 20, '2500.00'),
(3, 'Vans', 'EU 38', 5, '999.00'),
(4, 'Uniqlo', 'EU 38', 15, '1500.75'),
(5, 'Jordan', 'EU 40', 18, '4367.00'),
(6, 'World Balance', 'EU 37', 15, '4000.50'),
(7, 'Converse', 'EU 40', 10, '2500.00'),
(8, 'Fila', 'EU 42', 10, '3345.75'),
(9, 'Puma', 'EU 36', 8, '5000.00'),
(10, 'Gucci', 'EU 38', 17, '4300.00');

-- --------------------------------------------------------

--
-- Table structure for table `proditems`
--

CREATE TABLE `proditems` (
  `productid` int(50) NOT NULL,
  `product` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `stock` int(20) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proditems`
--

INSERT INTO `proditems` (`productid`, `product`, `size`, `stock`, `price`) VALUES
(1, 'Nike', 'EU 35', 10, '2365.00'),
(2, 'Adidas', 'EU 40', 20, '2500.00'),
(3, 'Vans', 'EU 38', 5, '999.00'),
(4, 'Uniqlo', 'EU 38', 15, '1500.75'),
(5, 'Jordan', 'EU 40', 18, '4367.00'),
(6, 'World Balance', 'EU 37', 15, '4000.50'),
(7, 'Converse', 'EU 40', 10, '2500.00'),
(8, 'Fila', 'EU 42', 10, '3345.75'),
(9, 'Puma', 'EU 36', 8, '5000.00'),
(10, 'Gucci', 'EU 38', 17, '4300.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `proditems`
--
ALTER TABLE `proditems`
  ADD PRIMARY KEY (`productid`),
  ADD UNIQUE KEY `product` (`product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `productid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proditems`
--
ALTER TABLE `proditems`
  MODIFY `productid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
