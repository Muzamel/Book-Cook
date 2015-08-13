-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2015 at 04:55 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cook_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`account_id` int(50) NOT NULL,
  `amount` int(50) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `chef_id` int(50) DEFAULT NULL,
  `restaurant_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE IF NOT EXISTS `bidding` (
`bidding_id` int(50) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `cost` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
`brand_id` int(11) NOT NULL,
  `brand_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'dalda'),
(2, 'Sufi');

-- --------------------------------------------------------

--
-- Table structure for table `bulk_delivery`
--

CREATE TABLE IF NOT EXISTS `bulk_delivery` (
  `bulk_delivery_id` int(11) NOT NULL,
  `max_quantity` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` varchar(11) NOT NULL,
  `restaurant_id` int(50) NOT NULL,
  `recipe_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulk_delivery`
--

INSERT INTO `bulk_delivery` (`bulk_delivery_id`, `max_quantity`, `quantity`, `price`, `restaurant_id`, `recipe_id`) VALUES
(1, 4, '5kg', '10Rs', 1, 2),
(2, 4, '5kg', '20 Rs', 1, 7),
(3, 4, '5kg', '10Rs', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `bulk_delivery_order`
--

CREATE TABLE IF NOT EXISTS `bulk_delivery_order` (
  `bulk_delivery_order_id` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `user_quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `bulk_delivery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE IF NOT EXISTS `chef` (
`chef_id` int(50) NOT NULL,
  `chef_name` varchar(50) DEFAULT NULL,
  `account_no` int(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chef_bidding`
--

CREATE TABLE IF NOT EXISTS `chef_bidding` (
  `chef_bidding_id` int(50) NOT NULL,
  `chef_id` int(50) DEFAULT NULL,
  `bidding_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cooking_task`
--

CREATE TABLE IF NOT EXISTS `cooking_task` (
`cooking_task_id` int(11) NOT NULL,
  `cooking_task_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cooking_task`
--

INSERT INTO `cooking_task` (`cooking_task_id`, `cooking_task_name`) VALUES
(1, 'dip'),
(2, 'flame'),
(3, 'on Coila');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`feedback_id` int(50) NOT NULL,
  `feedback_detail` int(50) DEFAULT NULL,
  `restaurant_id` int(50) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
`ingredient_id` int(50) NOT NULL,
  `ingredient_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`ingredient_id`, `ingredient_name`) VALUES
(9, 'chiken'),
(10, 'green chili'),
(11, 'yougurt'),
(12, 'salt'),
(13, 'oil'),
(14, 'red chli');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_brand`
--

CREATE TABLE IF NOT EXISTS `ingredient_brand` (
`ingredient_brand_id` int(50) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `ingredient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient_brand`
--

INSERT INTO `ingredient_brand` (`ingredient_brand_id`, `brand_id`, `ingredient_id`) VALUES
(1, 1, 13),
(2, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_catagory`
--

CREATE TABLE IF NOT EXISTS `ingredient_catagory` (
`ingredient_catagory_id` int(50) NOT NULL,
  `ingredient_catagory_name` varchar(500) DEFAULT NULL,
  `ingredient_id` int(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient_catagory`
--

INSERT INTO `ingredient_catagory` (`ingredient_catagory_id`, `ingredient_catagory_name`, `ingredient_id`) VALUES
(1, 'meat', 9),
(2, 'Masla jaat', 10),
(3, 'Masla jaat', 14),
(4, 'Masla jaat', 12);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(50) NOT NULL,
  `restaurant_id` int(50) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `order_name` varchar(50) DEFAULT NULL,
  `order_time` time DEFAULT NULL,
  `bidding_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_recipe`
--

CREATE TABLE IF NOT EXISTS `order_recipe` (
`order_recipe_id` int(50) NOT NULL,
  `order_id` int(50) DEFAULT NULL,
  `recipe_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `procedure`
--

CREATE TABLE IF NOT EXISTS `procedure` (
`procedure_id` int(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `ingredient_id` int(50) DEFAULT NULL,
  `recipe_id` int(50) DEFAULT NULL,
  `cooking_task_id` int(11) DEFAULT NULL,
  `estimate` int(6) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `ingredient_quantity` int(6) DEFAULT NULL,
  `ingredient_quantity_unit` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procedure`
--

INSERT INTO `procedure` (`procedure_id`, `description`, `ingredient_id`, `recipe_id`, `cooking_task_id`, `estimate`, `unit_id`, `ingredient_quantity`, `ingredient_quantity_unit`) VALUES
(1, 'Take chicken', 9, 1, 1, 30, 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
`recipe_id` int(50) NOT NULL,
  `recipe_name` varchar(50) DEFAULT NULL,
  `recipe_type_id` int(11) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `recipe_type_id`, `user_id`) VALUES
(1, 'chiken beryani', 1, NULL),
(2, 'mutton beryani', 1, NULL),
(3, 'mutton handi', 2, NULL),
(4, 'malai boti handi', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredient`
--

CREATE TABLE IF NOT EXISTS `recipe_ingredient` (
`recipe_ingredient_id` int(50) NOT NULL,
  `recipe_id` int(50) DEFAULT NULL,
  `ingredient_id` int(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_ingredient`
--

INSERT INTO `recipe_ingredient` (`recipe_ingredient_id`, `recipe_id`, `ingredient_id`) VALUES
(1, 4, 9),
(2, 4, 10),
(3, 4, 11),
(4, 4, 12),
(5, 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `recipe_type`
--

CREATE TABLE IF NOT EXISTS `recipe_type` (
`recipe_type_id` int(11) NOT NULL,
  `recipe_type` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_type`
--

INSERT INTO `recipe_type` (`recipe_type_id`, `recipe_type`) VALUES
(1, 'beryani'),
(2, 'handi');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
`reservation_id` int(50) NOT NULL,
  `people` int(50) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `res_date` date DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `unique_code` varchar(13) NOT NULL,
  `recipe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
`restaurant_id` int(50) NOT NULL,
  `restaurant_name` varchar(50) DEFAULT NULL,
  `phone_no` int(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `capacity` int(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `phone_no`, `address`, `start_time`, `end_time`, `capacity`) VALUES
(1, 'salten paper', 92365, 'shad bagh lahore', '05:00:00', '20:00:00', 2),
(2, 'lahore cafeteria', 1234569, 'lawarance', '01:00:00', '18:15:00', 530);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_ingredient`
--

CREATE TABLE IF NOT EXISTS `restaurant_ingredient` (
`restaurant_ingredient_id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `ingredient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_recipe`
--

CREATE TABLE IF NOT EXISTS `restaurant_recipe` (
`restaurant_recipe_id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant_recipe`
--

INSERT INTO `restaurant_recipe` (`restaurant_recipe_id`, `restaurant_id`, `recipe_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
`unit_id` int(11) NOT NULL,
  `unit_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`) VALUES
(1, 'minutes'),
(2, 'hours'),
(3, 'kilogram'),
(4, 'liter');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `password`, `email`) VALUES
(18, 'demo', 'final', 'BOOKING', '25c3ec67442c1e84d19677889a019f5d', 'admin_book@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_recipe`
--

CREATE TABLE IF NOT EXISTS `user_recipe` (
`User_recipe_id` int(50) NOT NULL,
  `user_id` int(50) DEFAULT NULL,
  `recipe_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`account_id`), ADD KEY `user_id` (`user_id`), ADD KEY `chef_id` (`chef_id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
 ADD PRIMARY KEY (`bidding_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `bulk_delivery`
--
ALTER TABLE `bulk_delivery`
 ADD PRIMARY KEY (`bulk_delivery_id`), ADD KEY `restaurant_id` (`restaurant_id`), ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `bulk_delivery_order`
--
ALTER TABLE `bulk_delivery_order`
 ADD PRIMARY KEY (`bulk_delivery_order_id`), ADD KEY `bulk_delivery_id` (`bulk_delivery_id`), ADD KEY `id` (`id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
 ADD PRIMARY KEY (`chef_id`);

--
-- Indexes for table `chef_bidding`
--
ALTER TABLE `chef_bidding`
 ADD PRIMARY KEY (`chef_bidding_id`), ADD KEY `chef_id` (`chef_id`), ADD KEY `bidding_id` (`bidding_id`);

--
-- Indexes for table `cooking_task`
--
ALTER TABLE `cooking_task`
 ADD PRIMARY KEY (`cooking_task_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`feedback_id`), ADD KEY `restaurant_id` (`restaurant_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
 ADD PRIMARY KEY (`ingredient_id`);

--
-- Indexes for table `ingredient_brand`
--
ALTER TABLE `ingredient_brand`
 ADD PRIMARY KEY (`ingredient_brand_id`), ADD KEY `ingredient_id` (`ingredient_id`), ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `ingredient_catagory`
--
ALTER TABLE `ingredient_catagory`
 ADD PRIMARY KEY (`ingredient_catagory_id`), ADD KEY `ingredient_id` (`ingredient_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order_id`), ADD KEY `user_id` (`user_id`), ADD KEY `restaurant_id` (`restaurant_id`), ADD KEY `bidding_id` (`bidding_id`);

--
-- Indexes for table `order_recipe`
--
ALTER TABLE `order_recipe`
 ADD PRIMARY KEY (`order_recipe_id`), ADD KEY `recipe_id` (`recipe_id`), ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `procedure`
--
ALTER TABLE `procedure`
 ADD PRIMARY KEY (`procedure_id`), ADD KEY `ingredient_id` (`ingredient_id`), ADD KEY `recipe_id` (`recipe_id`), ADD KEY `unit_id` (`unit_id`), ADD KEY `cooking_task_id` (`cooking_task_id`), ADD KEY `ingredient_quantity_unit` (`ingredient_quantity_unit`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
 ADD PRIMARY KEY (`recipe_id`), ADD KEY `user_id` (`user_id`), ADD KEY `recipe_type_id` (`recipe_type_id`);

--
-- Indexes for table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
 ADD PRIMARY KEY (`recipe_ingredient_id`), ADD KEY `ingredient_id` (`ingredient_id`), ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipe_type`
--
ALTER TABLE `recipe_type`
 ADD PRIMARY KEY (`recipe_type_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`reservation_id`), ADD KEY `restaurent_id` (`restaurant_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
 ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `restaurant_ingredient`
--
ALTER TABLE `restaurant_ingredient`
 ADD PRIMARY KEY (`restaurant_ingredient_id`), ADD KEY `ingredient_id` (`ingredient_id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `restaurant_recipe`
--
ALTER TABLE `restaurant_recipe`
 ADD PRIMARY KEY (`restaurant_recipe_id`), ADD KEY `recipe_id` (`recipe_id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
 ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_recipe`
--
ALTER TABLE `user_recipe`
 ADD PRIMARY KEY (`User_recipe_id`), ADD KEY `user_id` (`user_id`), ADD KEY `recipe_id` (`recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `account_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
MODIFY `bidding_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
MODIFY `chef_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cooking_task`
--
ALTER TABLE `cooking_task`
MODIFY `cooking_task_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `feedback_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
MODIFY `ingredient_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ingredient_brand`
--
ALTER TABLE `ingredient_brand`
MODIFY `ingredient_brand_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ingredient_catagory`
--
ALTER TABLE `ingredient_catagory`
MODIFY `ingredient_catagory_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_recipe`
--
ALTER TABLE `order_recipe`
MODIFY `order_recipe_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `procedure`
--
ALTER TABLE `procedure`
MODIFY `procedure_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
MODIFY `recipe_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
MODIFY `recipe_ingredient_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recipe_type`
--
ALTER TABLE `recipe_type`
MODIFY `recipe_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `reservation_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
MODIFY `restaurant_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `restaurant_ingredient`
--
ALTER TABLE `restaurant_ingredient`
MODIFY `restaurant_ingredient_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurant_recipe`
--
ALTER TABLE `restaurant_recipe`
MODIFY `restaurant_recipe_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_recipe`
--
ALTER TABLE `user_recipe`
MODIFY `User_recipe_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `account_ibfk_2` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `account_ibfk_3` FOREIGN KEY (`chef_id`) REFERENCES `chef` (`chef_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bulk_delivery_order`
--
ALTER TABLE `bulk_delivery_order`
ADD CONSTRAINT `bulk_delivery_order_fk1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `bulk_delivery_order_fk2` FOREIGN KEY (`bulk_delivery_id`) REFERENCES `bulk_delivery` (`bulk_delivery_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chef_bidding`
--
ALTER TABLE `chef_bidding`
ADD CONSTRAINT `chef_bidding_ibfk_1` FOREIGN KEY (`chef_id`) REFERENCES `chef` (`chef_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `chef_bidding_ibfk_2` FOREIGN KEY (`bidding_id`) REFERENCES `bidding` (`bidding_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ingredient_brand`
--
ALTER TABLE `ingredient_brand`
ADD CONSTRAINT `ingredient_brand_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ingredient_brand_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`ingredient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ingredient_catagory`
--
ALTER TABLE `ingredient_catagory`
ADD CONSTRAINT `ingredient_catagory_ibfk_1` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`ingredient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`bidding_id`) REFERENCES `bidding` (`bidding_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_recipe`
--
ALTER TABLE `order_recipe`
ADD CONSTRAINT `order_recipe_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `order_recipe_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `procedure`
--
ALTER TABLE `procedure`
ADD CONSTRAINT `procedure_ibfk_1` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`ingredient_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `procedure_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `procedure_ibfk_3` FOREIGN KEY (`cooking_task_id`) REFERENCES `cooking_task` (`cooking_task_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `procedure_ibfk_4` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `procedure_ibfk_5` FOREIGN KEY (`ingredient_quantity_unit`) REFERENCES `unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
ADD CONSTRAINT `recipe_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `recipe_ibfk_3` FOREIGN KEY (`recipe_type_id`) REFERENCES `recipe_type` (`recipe_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipe_ingredient`
--
ALTER TABLE `recipe_ingredient`
ADD CONSTRAINT `recipe_ingredient_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `recipe_ingredient_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`ingredient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_ingredient`
--
ALTER TABLE `restaurant_ingredient`
ADD CONSTRAINT `restaurant_ingredient_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `restaurant_ingredient_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`ingredient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_recipe`
--
ALTER TABLE `restaurant_recipe`
ADD CONSTRAINT `restaurant_recipe_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `restaurant_recipe_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_recipe`
--
ALTER TABLE `user_recipe`
ADD CONSTRAINT `user_recipe_ibfk_2` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `user_recipe_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
