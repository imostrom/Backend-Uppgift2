-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2018 at 11:56 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `kundName` varchar(50) NOT NULL,
  `kundAdress` varchar(50) NOT NULL,
  `kundEmail` varchar(50) NOT NULL,
  `kundTelefon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `product_ID`, `kundName`, `kundAdress`, `kundEmail`, `kundTelefon`) VALUES
(1, 2, 'ida', '21 College Drive', 'imostrom@gmail.com', '345678'),
(3, 6, 'Mahmud', 'hfghjkk', 'm@gmail.com', '9876543'),
(6, 3, 'Erika', '23 hejhej gatan', 'erika$gmail.com', '123456'),
(14, 6, 'sofie', 'gatan 1', 'sofie@gmail.com', '123456887654'),
(15, 7, 'Jasmin', 'hejhej', 'jasmin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `name`, `description`, `image`, `price`) VALUES
(1, 'Molly', 'Molly är 5 månader och gillar hundkex.', 'Molly.jpg', '8000'),
(2, 'Pelle', 'Pelle är 5 månader och gillar barn.', 'Pelle.jpg', '7000'),
(3, 'Polly', 'Polly är 4,5 månader och föredrar familjer utan småbarn.', 'Polly.jpg', '7600'),
(6, 'Piff', 'Piff är 4 månader och gillar promenader', 'Piff.jpg', '8400'),
(7, 'Puff', 'Puff är 5 månader och gillar inte att vara hemma själv. ', 'Puff.jpg', '7900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;