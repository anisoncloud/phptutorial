-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 06:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dd3`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_example`
--

CREATE TABLE IF NOT EXISTS `ajax_example` (
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `wpm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax_example`
--

INSERT INTO `ajax_example` (`name`, `age`, `sex`, `wpm`) VALUES
('Jill', 22, 'f', 72),
('Tracy', 27, 'f', 0),
('Julie', 35, 'f', 90),
('Frank', 45, 'm', 87),
('Regis', 75, 'm', 44),
('Jerry', 120, 'm', 20);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_id` int(2) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'Fruits'),
(2, 'Colors'),
(3, 'Games'),
(4, 'Vehicles');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `created`, `modified`) VALUES
(1, 'LG P880 4X HD', 'My first awesome phone!', 336, 3, '2014-06-01 01:12:26', '2014-05-31 11:12:26'),
(2, 'Google Nexus 4', 'The most awesome phone of 2013!', 299, 2, '2014-06-01 01:12:26', '2014-05-31 11:12:26'),
(3, 'Samsung Galaxy S4', 'How about no?', 600, 3, '2014-06-01 01:12:26', '2014-05-31 11:12:26'),
(6, 'Bench Shirt', 'The best shirt!', 29, 1, '2014-06-01 01:12:26', '2014-05-30 20:12:21'),
(7, 'Lenovo Laptop', 'My business partner.', 399, 2, '2014-06-01 01:13:45', '2014-05-30 20:13:39'),
(8, 'Samsung Galaxy Tab 10.1', 'Good tablet.', 259, 2, '2014-06-01 01:14:13', '2014-05-30 20:14:08'),
(9, 'Spalding Watch', 'My sports watch.', 199, 1, '2014-06-01 01:18:36', '2014-05-30 20:18:31'),
(10, 'Sony Smart Watch', 'The coolest smart watch!', 300, 2, '2014-06-06 17:10:01', '2014-06-05 12:09:51'),
(11, 'Huawei Y300', 'For testing purposes.', 100, 2, '2014-06-06 17:11:04', '2014-06-05 12:10:54'),
(12, 'Abercrombie Lake Arnold Shirt', 'Perfect as gift!', 60, 1, '2014-06-06 17:12:21', '2014-06-05 12:12:11'),
(13, 'Abercrombie Allen Brook Shirt', 'Cool red shirt!', 70, 1, '2014-06-06 17:12:59', '2014-06-05 12:12:49'),
(25, 'Abercrombie Allen Anew Shirt', 'Awesome new shirt!', 999, 1, '2014-11-22 18:42:13', '2014-11-21 13:42:13'),
(26, 'Another product', 'Awesome product!', 555, 2, '2014-11-22 19:07:34', '2014-11-21 14:07:34'),
(27, 'Bag', 'Awesome bag for you!', 999, 1, '2014-12-04 21:11:36', '2014-12-03 16:11:36'),
(28, 'Wallet', 'You can absolutely use this one!', 799, 1, '2014-12-04 21:12:03', '2014-12-03 16:12:03'),
(30, 'Wal-mart Shirt', '', 555, 2, '2014-12-13 00:52:29', '2014-12-11 19:52:29'),
(31, 'Amanda Waller Shirt', 'New awesome shirt!', 333, 1, '2014-12-13 00:52:54', '2014-12-11 19:52:54'),
(32, 'Washing Machine Model PTRR', 'Some new product.', 999, 1, '2015-01-08 22:44:15', '2015-01-07 17:44:15'),
(33, 'fsdf', 'sdfdfdf', 0, 0, '2017-01-30 17:46:38', '2017-01-30 16:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
`subcat_id` int(3) NOT NULL,
  `cat_id` int(2) NOT NULL DEFAULT '0',
  `subcategory` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcategory`) VALUES
(1, 1, 'Mango'),
(2, 1, 'Banana'),
(3, 1, 'Orange'),
(4, 1, 'Apple'),
(5, 2, 'Red'),
(6, 2, 'Blue'),
(7, 2, 'Green'),
(8, 2, 'Yellow'),
(9, 3, 'Cricket'),
(10, 3, 'Football'),
(11, 3, 'Baseball'),
(12, 3, 'Tennis'),
(13, 4, 'Cars'),
(14, 4, 'Trucks'),
(15, 4, 'Blkes'),
(16, 4, 'Train');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory2`
--

CREATE TABLE IF NOT EXISTS `subcategory2` (
  `subcat_id` int(3) NOT NULL DEFAULT '0',
  `subcat2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory2`
--

INSERT INTO `subcategory2` (`subcat_id`, `subcat2`) VALUES
(1, 'Mango good'),
(1, 'Mango bad'),
(2, 'Banana sweet'),
(2, 'Banana hot'),
(3, 'Orange sweet'),
(3, 'Orange Sour'),
(4, 'Apple sweet'),
(4, 'Apple sour'),
(5, 'Red light'),
(5, 'Red Zone'),
(6, 'Blue deep'),
(6, 'Blue light'),
(7, 'Green light'),
(7, 'Green color'),
(9, 'Cricket Oneday'),
(9, 'Cricket test'),
(10, 'Football world'),
(10, 'Football team'),
(11, 'Base Ball team'),
(11, 'Base ball game'),
(13, 'Cars Big'),
(13, 'Cars small'),
(14, 'Trucks Big'),
(14, 'Trucks small'),
(15, 'Bikes sports'),
(15, 'Bike small'),
(16, 'Train fast'),
(16, 'Train slow'),
(8, 'Yellow card'),
(8, 'Yellow line'),
(12, 'Tennis Long'),
(12, 'Tennis table');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `user_city` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_city`) VALUES
(13, 'test', 'rest', 'guest'),
(14, 'west', 'best', 'test'),
(16, 'Anisur', 'Rahman', 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_example`
--
ALTER TABLE `ajax_example`
 ADD PRIMARY KEY (`age`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
 ADD PRIMARY KEY (`subcat_id`), ADD UNIQUE KEY `subcat_id` (`subcat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
MODIFY `subcat_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
