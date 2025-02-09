-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2020 at 09:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beastmain`
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
(2, 'LOLE'),
(3, 'EVER LAST'),
(4, 'GYM SHARK'),
(5, 'POLAR'),
(6, 'MCDAVID');

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
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incart`
--

INSERT INTO `incart` (`cart_id`, `product_id`, `quantity`) VALUES
(3, 1, 2),
(4, 2, 3),
(6, 8, 1),
(7, 3, 1);

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
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_desc`, `product_img`, `cat_id`, `brand_id`, `featured`, `date`) VALUES
(1, 'Lifting Gloves', 25, 'Gymshark Lifting Gloves', 'LiftingGloves/img-1.jpg\r\n', 5, 4, 0, '2020-12-06 11:38:59'),
(2, 'Skipping Rope', 25, 'Gymshark Skipping Rope', 'SkippingRope/img-1.jpg\r\n\r\n', 4, 4, 1, '2020-12-06 11:38:59'),
(3, 'Resistant Tube', 20, 'Gymshark Resistant Tube', 'ResistantTube/img-1.jpg', 2, 4, 0, '2020-12-06 11:43:59'),
(4, 'Fruit Infuser', 20, 'Gymshark ruit Infuser', 'FruitInfuser/img-1.jpg', 5, 4, 0, '2020-12-06 11:45:59'),
(5, 'Boxing Gloves', 50, 'Everlast Boxing Gloves', 'BoxingGloves/img-1.jpg', 1, 3, 1, '2020-12-06 11:45:59'),
(6, 'Nike Headband', 10, 'Nike Headband', 'NikeHeadband/img-1.jpg', 5, 1, 0, '2020-12-06 11:45:59'),
(7, 'Lole Yoga Mat', 70, 'Lole Yoga Mat', 'YogaMat/img-1.jpg', 2, 2, 0, '2020-12-06 11:45:59'),
(8, 'Polar Smart Watch', 389, 'Polar Smart Watch', 'SmartWatch/img-1.jpg', 5, 5, 0, '2020-12-06 11:49:59'),
(9, 'Knee Sleeve', 32, 'McDavid Knee Sleeve', 'KneeSleeve/img-1.jpg', 3, 6, 1, '2020-12-06 11:45:59'),
(10, 'Ankle Sleeve ', 30, 'McDavid Ankle Sleeve', 'AnkleSleeve/img-1.jpg', 3, 6, 1, '2020-12-06 11:55:59'),
(11, 'Nike Bottle\r\n', 10, 'Nike Bottle', 'NikeBottle/img-1.jpg', 5, 1, 0, '2020-12-06 11:56:59'),
(12, 'Everlast Punch Mitts', 50, 'Everlast Punch Mitts', 'PunchMitts/img-1.jpg', 1, 3, 1, '2020-12-06 11:58:59'),
(13, 'Phone Armband', 25, 'Nike Phone Armband', 'SmartphoneArmband/img-1.jpg', 3, 1, 1, '2020-12-06 11:59:59'),
(14, 'Striking Ball', 299, 'Everlast Striking Ball', 'StrikingBall/img-1.jpg', 5, 3, 1, '2020-12-06 11:59:59'),
(15, 'Sack Pack', 19, 'Everlast Sack Pack', 'SackPack/img-1.jpg', 3, 3, 0, '2020-12-06 12:00:59');

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
