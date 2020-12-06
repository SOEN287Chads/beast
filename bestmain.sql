-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 05:57 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestmain`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'NIKE'),
(2, 'ADIDAS'),
(3, 'UNDER ARMOUR'),
(4, 'GYM SHARK');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`cat_id`, `cat_name`) VALUES
(1, 'Boxing'),
(2, 'Yoga'),
(3, 'Running'),
(4, 'Gym Workout'),
(5, 'Accesories');

-- --------------------------------------------------------

--
-- Table structure for table `incart`
--

CREATE TABLE `incart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incart`
--

INSERT INTO `incart` (`cart_id`, `product_id`, `quantity`) VALUES
(3, 1, 2),
(4, 2, 3),
(6, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` float NOT NULL,
  `product_desc` text NOT NULL,
  `product_img` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_desc`, `product_img`, `cat_id`, `brand_id`, `featured`, `date`) VALUES
(1, 'Lifting Gloves', 25, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'LiftingGloves/img-1.jpg\r\n', 5, 4, 0, '2020-12-06 11:38:59'),
(2, 'Skipping Rope', 25, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'SkippingRope/img-1.jpg\r\n\r\n', 4, 3, 1, '2020-12-06 11:38:59'),
(3, 'Resistant Tube', 20, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'ResistantTube/img-1.jpg', 2, 4, 0, '2020-12-06 11:43:59'),
(4, 'Fruit Infuser', 20, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'FruitInfuser/img-1.jpg', 5, 4, 0, '2020-12-06 11:45:59'),
(5, 'Boxing Gloves', 50, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'BoxingGloves/img-1.jpg', 1, 3, 1, '2020-12-06 11:45:59'),
(6, 'Nike Headband', 10, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'NikeHeadband/img-1.jpg', 5, 1, 0, '2020-12-06 11:45:59'),
(7, 'Lole Yoga Mat', 70, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'YogaMat/img-1.jpg', 2, 2, 0, '2020-12-06 11:45:59'),
(8, 'Polar Smart Watch', 389, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'SmartWatch/img-1.jpg', 5, 2, 0, '2020-12-06 11:49:59'),
(9, 'Knee Sleeve', 32, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'KneeSleeve/img-1.jpg', 3, 3, 1, '2020-12-06 11:45:59'),
(10, 'Ankle Sleeve ', 30, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'AnkleSleeve/img-1.jpg', 3, 3, 1, '2020-12-06 11:55:59'),
(11, 'Nike Bottle\r\n', 10, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'NikeBottle/img-1.jpg', 5, 1, 0, '2020-12-06 11:56:59'),
(12, 'Everlast Punch Mitts', 50, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'PunchMitts/img-1.jpg', 1, 2, 1, '2020-12-06 11:58:59'),
(13, 'Phone Armband', 25, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'SmartphoneArmband/img-1.jpg', 3, 1, 1, '2020-12-06 11:59:59'),
(14, 'Striking Ball', 299, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'StrikingBall/img-1.jpg', 5, 3, 1, '2020-12-06 11:59:59'),
(15, 'Sack Pack', 19, 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'SackPack/img-1.jpg', 3, 3, 0, '2020-12-06 12:00:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `incart`
--
ALTER TABLE `incart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `incart`
--
ALTER TABLE `incart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
