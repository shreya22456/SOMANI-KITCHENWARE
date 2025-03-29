-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 01:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `somani_kitchenware`
--
CREATE DATABASE IF NOT EXISTS `somani_kitchenware` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `somani_kitchenware`;

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

DROP TABLE IF EXISTS `addtocart`;
CREATE TABLE `addtocart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`id`, `name`, `price`, `quantity`, `total`, `image`, `username`) VALUES
(12, 'cookpan', 950, 0, 0, 'img_project/cc2.jpg', 'riyansh'),
(13, 'plate', 350, 2, 700, 'img_project/plate.jpg', 'riyansh'),
(14, 'rolling pin', 450, 2, 900, 'img_project/rolling.jpg', 'riyansh');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'steel'),
(2, 'glass'),
(3, 'bronze'),
(4, 'brass'),
(0, 'wooden');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `feedback`) VALUES
(1, 'navya', 'viroja', 'navya12@gmail.com', 'good!'),
(2, 'riyansh', 'shah', 'shah@gmail.com', 'amazing item!'),
(3, 'navya', 'viroja', 'navya12@gmail.com', 'very! usefull your kitchenware item.'),
(4, 'drashti', 'soliya', 'drashti22@gmail.com', 'very! durable item!');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `item_id` int(3) NOT NULL,
  `category` varchar(100) NOT NULL,
  `itemnm` varchar(50) NOT NULL,
  `itemdes` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `category`, `itemnm`, `itemdes`, `price`, `image`) VALUES
(1, 'steel', 'plate', 'plate', '2000', 'img_project/p1.jpg'),
(2, 'steel', 'bowl', 'bowl', '850', 'img_project/b11.jpg'),
(3, 'glass', 'spoon', 'spoon', '550', 'img_project/images (6).jpg'),
(4, 'steel', 'glass', 'glass', '700', 'img_project/glass1.jpeg'),
(5, 'steel', 'nonstick ', 'nonstick', '1500', 'img_project/nn3.jpg'),
(6, 'steel', 'cooker ', 'cooker', '2000', 'img_project/cc3.jpg'),
(7, 'glass', 'dinner set', 'dinner set', '2200', 'img_project/dinner.jpg'),
(8, 'wooden', 'dinner set', 'dinner set', '1500', 'img_project/w2.jpg'),
(9, 'glass', 'cup', 'cup', '200', 'img_project/c1.webp'),
(10, 'wooden', 'jug', 'jug', '750', 'img_project/jug1.jpg'),
(11, 'steel', 'cookpan', 'cookpan', '1100', 'img_project/cook.jpg'),
(12, 'steel', 'kettle   ', 'kettle', '800', 'img_project/kettle1.jpg'),
(13, 'steel', 'sandwhich maker', 'sandwhich maker', '1400', 'img_project/OIP (1).jpg'),
(14, 'steel', 'juicer', 'juicer', '2500', 'img_project/j5.jpg'),
(15, 'steel', 'stove', 'stove', '5000', 'img_project/stove.webp'),
(16, 'steel', 'blander ', 'blander', '2500', 'img_project/b1.jpg'),
(17, 'brass', 'dinner set', 'dinner set', '1500', 'img_project/brass.jpg'),
(18, 'steel', 'knife ', 'knife', '250', 'img_project/nife.jpg'),
(19, 'steel', 'grater', 'grater', '150', 'img_project/graaa.jpg'),
(20, 'wooden', 'mortar', 'mortar', '350', 'img_project/morrr.jpg'),
(21, 'wooden', 'rolling pin', 'rolling pin', '450', 'img_project/rolling.jpg'),
(22, 'wooden', 'spoon', 'spoon', '100', 'img_project/o9.jpg'),
(23, 'glass', 'glass', 'glass', '250', 'img_project/gll.jpg'),
(24, 'brass', 'glass', 'glass', '500', 'img_project/bras.jpg'),
(25, 'wooden', 'bowl', 'bowl', '250', 'img_project/wo.jpg'),
(26, 'glass', 'bowl', 'bowl', '350', 'img_project/blo.jpeg'),
(27, 'wooden', 'cup', 'cup', '250', 'img_project/cup2.jpg'),
(28, 'brass', 'cup', 'cup', '300', 'img_project/cup3.jpg'),
(29, 'steel', 'sandwhich maker ', 'sandwhich maker', '850', 'img_project/ss1.jpg'),
(30, 'steel', 'sandwhich maker', 'sandwhich maker', '1500', 'img_project/ss2.jpg'),
(31, 'steel', 'sandwhich maker', 'sandwhich maker', '1200', 'img_project/ss3.jpg'),
(32, 'wooden', 'knife ', 'knife', '250', 'img_project/kk1.webp'),
(33, 'steel', 'mortar ', 'mortar', '600', 'img_project/mm1.jpg'),
(34, 'brass', 'mortar ', 'mortar', '800', 'img_project/mm2.jpg'),
(35, 'wooden', 'kettle ', 'kettle', '750', 'img_project/kk5.jpg'),
(36, 'steel', 'kettle', 'kettle', '800', 'img_project/kk6.jpg'),
(37, 'brass', 'kettle', 'kettle', '650', 'img_project/k2.jpg'),
(38, 'brass', 'spoon', 'spoon', '350', 'img_project/ss4.jpg'),
(39, 'wooden', 'glass', 'glass', '200', 'img_project/glas.jpg'),
(40, 'wooden', 'plate', 'plate', '350', 'img_project/plate.jpg'),
(41, 'brass', 'plate', 'plate', '350', 'img_project/plate2.jpg'),
(42, 'wooden', 'plate', 'plate', '250', 'img_project/plate1.jpg'),
(43, 'steel', 'dishwasher', 'dishwasher', '1000', 'img_project/d1.jpg'),
(44, 'steel', 'dishwasher', 'dishwasher', '1200', 'img_project/d2.jpg'),
(45, 'brass', 'cookpan', 'cookpan', '850', 'img_project/cc1.jpg'),
(46, 'steel', 'cookpan', 'cookpan', '950', 'img_project/cc2.jpg'),
(47, 'steel', 'juicer', 'juicer', '1800', 'img_project/jj1.jpg'),
(48, 'steel', 'juicer', 'juicer', '2000', 'img_project/jj2.jpg'),
(49, 'steel', 'stove', 'stove', '4500', 'img_project/ss5.jpg'),
(50, 'steel', 'stove', 'stove', '3000', 'img_project/ss6.jpg'),
(51, 'steel', 'nonstick', 'nonstick', '1200', 'img_project/nn2.jpg'),
(52, 'steel', 'nonstick', 'nonstick', '1000', 'img_project/n2.webp'),
(53, 'steel', 'cooker', 'cooker', '1500', 'img_project/cc4.jpg'),
(54, 'glass', 'jug', 'jug', '500', 'img_project/jj3.jpg'),
(55, 'steel', 'jug ', 'jug', '450', 'img_project/jj6.jpg'),
(56, 'steel', 'blander', 'blander', '2000', 'img_project/bb1.jpg'),
(57, 'steel', 'blander', 'blander', '1500', 'img_project/b8.jpg'),
(58, 'steel', 'grater', 'grater', '50', 'img_project/gg1.jpg'),
(59, 'steel', 'rolling pin', 'rolling pin', '300', 'img_project/ss8.jpg'),
(60, 'steel', 'cooker', 'cooker', '1000', 'img_project/cc5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(5, 'anjali', 'anjali123'),
(6, 'shreya', 'shreya456'),
(7, 'mital', 'mital123'),
(9, 'miran', 'miran77');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE `purchase` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `total` int(10) NOT NULL,
  `payment` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `address`, `city`, `item`, `total`, `payment`) VALUES
(2, 'navya', 'viroja', 'baroda', 'mortar', 700, 700),
(3, 'navya', 'viroja', 'baroda', 'juicer', 1800, 1800),
(4, 'navya', 'viroja', 'baroda', 'kettle   ', 1600, 1600),
(5, 'navya', 'viroja', 'baroda', 'dinner set', 3000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `id` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `contactno` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `address`, `country`, `city`, `state`, `contactno`, `email`, `username`, `password`) VALUES
(1, 'drashti', 'soliya', 'amreli', 'india', 'amreli', 'gujarat', 123, 'drasti22@gmail.com', 'drasti', 'drasti22'),
(2, 'navya', 'viroja', 'baroda', 'india', 'baroda', 'gujarat', 2147483647, 'navya12@gmail.com', 'navya', 'navya12'),
(3, 'riyansh', 'shah', 'bhuj,kutch', 'india', 'bhuj', 'gujarat', 123456787, 'shah@gmail.com', 'riyansh', 'riyansh12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=657;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
