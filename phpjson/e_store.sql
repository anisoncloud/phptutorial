-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 07:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Samsung'),
(2, 'Nokia'),
(3, 'Canon');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Television'),
(2, 'Mobilephone'),
(3, 'Camera');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(250) NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `attributes` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand_id`, `category_id`, `attributes`) VALUES
(1, 'Prime', 1, 1, '{"screen": "50 inch", "resolution": "2048 x 1152 pixels", "ports": {"hdmi": 1, "usb": 3}, "speakers": {"left": "10 watt", "right": "10 watt"}}'),
(2, 'Octoview', 1, 1, '{"screen": "40 inch", "resolution": "1920 x 1080 pixels", "ports": {"hdmi": 1, "usb": 2}, "speakers": {"left": "10 watt", "right": "10 watt"}}'),
(3, 'Dreamer', 1, 1, '{"screen": "30 inch", "resolution": "1600 x 900 pixles", "ports": {"hdmi": 1, "usb": 1}, "speakers": {"left": "10 watt", "right": "10 watt"}}'),
(4, 'Bravia', 1, 1, '{"screen": "25 inch", "resolution": "1366 x 768 pixels", "ports": {"hdmi": 1, "usb": 0}, "speakers": {"left": "5 watt", "right": "5 watt"}}'),
(5, 'Proton', 1, 1, '{"screen": "20 inch", "resolution": "1280 x 720 pixels", "ports": {"hdmi": 0, "usb": 0}, "speakers": {"left": "5 watt", "right": "5 watt"}}');

-- --------------------------------------------------------

--
-- Table structure for table `stdtable`
--

CREATE TABLE IF NOT EXISTS `stdtable` (
`id` int(6) NOT NULL,
  `std_id` int(6) NOT NULL,
  `std_name` varchar(20) NOT NULL,
  `std_age` int(6) NOT NULL,
  `std_gender` varchar(20) NOT NULL,
  `std_num` int(20) NOT NULL,
  `std_street` varchar(30) NOT NULL,
  `std_city` varchar(20) NOT NULL,
  `std_country` varchar(20) NOT NULL,
  `std_postal` int(10) NOT NULL,
  `std_dept` varchar(20) NOT NULL,
  `std_semstr` int(6) NOT NULL,
  `std_major` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdtable`
--

INSERT INTO `stdtable` (`id`, `std_id`, `std_name`, `std_age`, `std_gender`, `std_num`, `std_street`, `std_city`, `std_country`, `std_postal`, `std_dept`, `std_semstr`, `std_major`) VALUES
(1, 106, 'Mirwaise', 23, 'Male', 12345, '786 Street', 'Riyadh', 'Saudi Arabia', 98765, 'Computer Science', 8, 'Web Programming');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
`employee_id` int(4) NOT NULL,
  `employee_name` varchar(60) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `hired_date` date NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`employee_id`, `employee_name`, `designation`, `hired_date`, `salary`) VALUES
(1, 'Steve', 'VP', '2013-08-01', 60000),
(2, 'Robert', 'Executive', '2014-10-09', 20000),
(3, 'Luci', 'Manager', '2013-08-20', 40000),
(4, 'Joe', 'Executive', '2013-06-01', 25000),
(5, 'Julia', 'Trainee', '2014-10-01', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD KEY `CATEGORY_ID` (`category_id`), ADD KEY `BRAND_ID` (`brand_id`);

--
-- Indexes for table `stdtable`
--
ALTER TABLE `stdtable`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
 ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stdtable`
--
ALTER TABLE `stdtable`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
MODIFY `employee_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
ADD CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
