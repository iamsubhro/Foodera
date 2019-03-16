-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 05:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `21gunsalute`
--

CREATE TABLE `21gunsalute` (
  `food_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `21gunsalute`
--

INSERT INTO `21gunsalute` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Fried Chicken', 'Chicken fried with the best oil', 200, '1 Plate', 0),
(2, 'Vodka', 'Russian Vodka', 250, '1 Bottle', 0),
(3, 'Vegitarian Plate', 'North Indian dish', 100, '1 Plate', 0),
(4, 'Cheese Pizza', '10 Inches radius Italian Cheese Pizza', 200, '1', 0),
(5, 'Parantha Dahi', 'Potato Parantha with sweet curd and icecream', 100, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `absolutebarbeque`
--

CREATE TABLE `absolutebarbeque` (
  `food_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absolutebarbeque`
--

INSERT INTO `absolutebarbeque` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Seekh Kabab', 'Best Kabab in the city', 300, '1', 0),
(2, 'Grilled Chicken', 'Grilled to the bones', 200, '1 Plate', 0),
(3, 'Roasted Chiken', 'North Indian dish', 100, '1 Plate', 0),
(4, 'Chicken Pizza', '10 Inches radius Italian ,Vegetarian , Pizza', 200, '1', 0),
(5, 'Chicken Biryani', 'Biryani that blows your mind', 300, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `absolutebarbequejubileehills`
--

CREATE TABLE `absolutebarbequejubileehills` (
  `food_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absolutebarbequejubileehills`
--

INSERT INTO `absolutebarbequejubileehills` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Prawn', 'Best Prawn in the city', 300, '1 Plate', 0),
(2, 'Tuna', 'Best type of fish available', 100, '1 Cup', 0),
(3, 'Vegitarian Plate', 'North Indian dish', 100, '1 Plate', 0),
(4, 'Fried Crab', 'Fried Crabs which taste better than fried Chicken', 300, '1 Plate', 0),
(5, 'Shrimp', 'Better than shrimp shown in Forest Gump', 200, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bawarchirestaurant`
--

CREATE TABLE `bawarchirestaurant` (
  `food_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bawarchirestaurant`
--

INSERT INTO `bawarchirestaurant` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Manchurian', 'Deep-fried mixed vegetable balls sautéed with ginger-garlic paste, chilli sauce and chopped vegetables', 200, '1 Plate', 0),
(2, 'Tuna', 'Delicious Tuna', 100, '1 Plate', 0),
(3, 'Vegitarian Plate', 'North Indian dish', 100, '1 Plate', 0),
(4, 'Chana Masala', 'Chana dal that is extra spicy', 200, '1', 0),
(5, 'Parantha Dahi', 'Potato Parantha with sweet curd and icecream', 100, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bhukhararestaurant`
--

CREATE TABLE `bhukhararestaurant` (
  `food_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bhukhararestaurant`
--

INSERT INTO `bhukhararestaurant` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Manchurian', 'Deep-fried mixed vegetable balls sautéed with ginger-garlic paste, chilli sauce and chopped vegetables', 200, '1 Plate', 0),
(2, 'Real Lassi', 'Milky,Curdy,Natural', 50, '1 Cup', 0),
(3, 'Vegitarian Plate', 'North Indian dish', 100, '1 Plate', 0),
(4, 'Vegitarian Pizza', '10 Inches radius Italian ,Vegetarian , Pizza', 200, '1', 0),
(5, 'Parantha Dahi', 'Potato Parantha with sweet curd and icecream', 100, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `creativefoods`
--

CREATE TABLE `creativefoods` (
  `food_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creativefoods`
--

INSERT INTO `creativefoods` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Manchurian', 'Deep-fried mixed vegetable balls sautéed with ginger-garlic paste, chilli sauce and chopped vegetables', 200, '1 Plate', 0),
(2, 'Real Lassi', 'Milky,Curdy,Natural', 50, '1 Cup', 0),
(3, 'Vegitarian Plate', 'North Indian dish', 100, '1 Plate', 0),
(4, 'Vegitarian Pizza', '10 Inches radius Italian ,Vegetarian , Pizza', 200, '1', 0),
(5, 'Parantha Dahi', 'Potato Parantha with sweet curd and icecream', 100, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` varchar(400) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`id`, `name`, `details`, `price`, `image`) VALUES
(1, 'Vegitarian Pizza', 'Italian ,Vegetarian , Pizza', 0, 'pizza.jpg'),
(3, 'Cream Stone', 'Cakes-Bakery, Icecream', 0, 'icecream.jpg'),
(4, 'Real Lassi', 'Milky,Curdy,Natural', 0, 'lassi.jpg'),
(5, 'Vegitarian Plate', 'North Indian dish', 0, 'deshi_khana.jpg'),
(6, 'Veg. Manchurian', 'Deep-fried mixed vegetable balls sautéed with ginger-garlic paste, chilli sauce and chopped vegetables', 0, 'manchurian.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `mob_no` bigint(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `food_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `date1` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `mob_no`, `name`, `food_id`, `type`, `rating`, `date1`) VALUES
(29, 9876543210, 'sipnbite', 2, 'preorder', 0, '2019-03-16'),
(30, 9876543210, 'creativefoods', 4, 'preorder', 0, '2019-03-16'),
(31, 9876543210, 'creativefoods', 2, 'delivery', 0, '2019-03-16'),
(32, 9876543210, 'creativefoods', 4, 'liveorder', 0, '2019-03-16'),
(33, 9876543210, 'creativefoods', 4, 'liveorder', 0, '2019-03-16'),
(34, 9996333054, '21 Gun Salute', 1, 'delivery', 0, '2019-03-16'),
(35, 9996333054, '21 Gun Salute', 2, 'delivery', 0, '2019-03-16'),
(36, 8288966848, 'creativefoods', 1, 'delivery', 0, '2019-03-16'),
(37, 8288966848, 'creativefoods', 2, 'delivery', 0, '2019-03-16'),
(38, 8288966848, 'creativefoods', 1, 'delivery', 0, '2019-03-16'),
(39, 8288966848, 'creativefoods', 2, 'delivery', 0, '2019-03-16'),
(40, 8288966848, 'creativefoods', 1, 'delivery', 0, '2019-03-16'),
(41, 8288966848, 'creativefoods', 2, 'delivery', 0, '2019-03-16'),
(42, 8288966848, 'creativefoods', 3, 'delivery', 0, '2019-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `pawansweets`
--

CREATE TABLE `pawansweets` (
  `food_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `mob_no` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `delivery` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `street` varchar(300) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(12) NOT NULL,
  `country` varchar(40) NOT NULL,
  `working1` varchar(20) NOT NULL,
  `working2` varchar(20) NOT NULL,
  `working3` varchar(20) NOT NULL,
  `working4` varchar(20) NOT NULL,
  `working5` varchar(20) NOT NULL,
  `working6` varchar(20) NOT NULL,
  `working7` varchar(20) NOT NULL,
  `from1` varchar(20) NOT NULL,
  `from2` varchar(20) NOT NULL,
  `from3` varchar(20) NOT NULL,
  `from4` varchar(20) NOT NULL,
  `from5` varchar(20) NOT NULL,
  `from6` varchar(20) NOT NULL,
  `from7` varchar(20) NOT NULL,
  `to1` varchar(20) NOT NULL,
  `to2` varchar(20) NOT NULL,
  `to3` varchar(20) NOT NULL,
  `to4` varchar(20) NOT NULL,
  `to5` varchar(20) NOT NULL,
  `to6` varchar(20) NOT NULL,
  `to7` varchar(20) NOT NULL,
  `rating` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `mob_no`, `email`, `delivery`, `name`, `image`, `street`, `district`, `city`, `state`, `zipcode`, `country`, `working1`, `working2`, `working3`, `working4`, `working5`, `working6`, `working7`, `from1`, `from2`, `from3`, `from4`, `from5`, `from6`, `from7`, `to1`, `to2`, `to3`, `to4`, `to5`, `to6`, `to7`, `rating`) VALUES
(33, '9876543210', 'anubhavsingh5132506@gmail.com', 'on', 'creativefoods', 'creativefoods.jpg', 'Level-Block-9', 'Kharar', 'Chandigarh', 'Chandigarh', 140413, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 0),
(34, '12345678', 'anubhavsingh5132506@gmail.com', 'on', 'sipnbite', 'sipnbite.jpg', 'Level-block-7', 'morinda', 'Chandigarh', 'Chandigarh', 140413, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 0),
(36, '9876543210', 'anubhavsingh5132506@gmail.com', 'on', 'Bhukhara Restaurant', 'bhulhar.jpg', 'ITC Maurya', 'Chanakyapuri', 'Delhi', 'Delhi', 102456, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 3),
(37, '9876543210', 'anubhavsingh5132506@gmail.com', 'on', 'Sorrento', 'Sorrento Hero Image.jpg', 'Ground Level, Eros Hotel', 'New Delhi', 'Delhi', 'Delhi', 102456, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 5),
(40, '9876543210', 'anubhavsingh5132506@gmail.com', 'on', 'The Marina', 'the marina.jpg', '39, College Road', 'Nungambakkam', 'Chennai', 'Tamil Nadu', 139421, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 5),
(41, '9876543210', 'anubhavsingh5132506@gmail.com', 'on', 'Absolute Barbeque', 'absolute barbeque.jpg', 'Tower Victorie 45', 'Chennai', 'Chennai', 'Tamil Nadu', 143291, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 5),
(42, '9876548510', 'anubhavsingh5132506@gmail.com', 'on', 'threesixtyone', 'threesixtyone.jpg', 'The Oberoi, Gurgaon 43', 'Jhajjar', 'Gurgaon', 'Haryana', 139218, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 4),
(43, '9876548510', 'anubhavsingh5132506@gmail.com', 'on', '21 Gun Salute', '21gunsalute.jpg', 'First Floor SCO 35-36', 'Jhajjar', 'Gurgaon', 'Haryana', 139219, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 5),
(45, '9876548510', 'anubhavsingh5132506@gmail.com', 'on', 'Bawarchi Restaurant', 'bawarchirestaurant.jpg', 'Plot No 44, RTC Road', 'Hyderabad', 'Hyderabad', 'Telangana', 134890, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 3),
(46, '9876548483', 'anubhavsingh5132506@gmail.com', 'on', 'Absolute Barbeque Jubilee Hills', 'jubileehills.jpg', '4th Floor, Above Bajaj Electronics, Plot No. 722', 'Hyderabad', 'Hyderabad', 'Telangana', 134891, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '9AM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', '10PM', 5),
(47, '9996333054', 'pawansweets@gmail.com', 'on', 'Pawan Sweets', 'pawansweets.jpg', 'Plot no 34, Sec 45', 'Kolkata', 'Kolkata', 'West Bengal', 134569, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', NULL),
(48, '8288966848', 'abc@xyz.com', 'on', 'sdfsdfsdf', NULL, 'asdfsdfsdfsdf', 'sdfsdfsdf', 'Chennai', 'asdasdfadsf', 140413, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', NULL),
(49, '8288966848', 'abc@xyz.com', 'on', 'sdfsdfsdf', NULL, 'asdfsdfsdfsdf', 'sdfsdfsdf', 'Chennai', 'asdasdfadsf', 140413, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', NULL),
(50, '8288966848', 'abc@xyz.com', 'on', 'sdfsdfsdf', NULL, 'asdfsdfsdfsdf', 'sdfsdfsdf', 'Chennai', 'asdasdfadsf', 140413, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', NULL),
(51, '8288966848', 'abc@xyz.com', 'on', 'sdfsdfsdf', NULL, 'asdfsdfsdfsdf', 'sdfsdfsdf', 'Chennai', 'asdasdfadsf', 140413, 'India', 'open', 'open', 'open', 'open', 'open', 'open', 'open', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 AM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', '9 PM ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sdfsdfsdf`
--

CREATE TABLE `sdfsdfsdf` (
  `food_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sipnbite`
--

CREATE TABLE `sipnbite` (
  `food_id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sipnbite`
--

INSERT INTO `sipnbite` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Manchurian', 'Deep-fried mixed vegetable balls sautéed with ginger-garlic paste, chilli sauce and chopped vegetables', 150, '1 Plate', 0),
(2, 'Maharaja Thali', 'Choice of matar paneer or paneer butter masala, dal makhani and dal tadka, seasonal vegetable, chhole, 6 poori, rice, raita, salad, pickle, papad and semiya kheer', 200, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sorrento`
--

CREATE TABLE `sorrento` (
  `food_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sorrento`
--

INSERT INTO `sorrento` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Noodles', 'Most popular chinese dish', 100, '1 Plate', 0),
(2, 'Chicen Momos', 'Fried Chicken momos', 100, '1 Plate', 0),
(3, 'Idli Sambar', 'Best of South India', 100, '1 Plate', 0),
(4, 'Vegitarian Pizza', '10 Inches radius Italian ,Vegetarian , Pizza', 200, '1', 0),
(5, 'Parantha Dahi', 'Potato Parantha with sweet curd and icecream', 100, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `themarina`
--

CREATE TABLE `themarina` (
  `food_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themarina`
--

INSERT INTO `themarina` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Prawn', 'Best Prawn in the city', 300, '1 Plate', 0),
(2, 'Tuna', 'Best type of fish available', 100, '1 Cup', 0),
(3, 'Vegitarian Plate', 'North Indian dish', 100, '1 Plate', 0),
(4, 'Fried Crab', 'Fried Crabs which taste better than fried Chicken', 300, '1 Plate', 0),
(5, 'Shrimp', 'Better than shrimp shown in Forest Gump', 200, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `threesixtyone`
--

CREATE TABLE `threesixtyone` (
  `food_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) DEFAULT NULL,
  `details` varchar(400) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `threesixtyone`
--

INSERT INTO `threesixtyone` (`food_id`, `name`, `details`, `price`, `quantity`, `rating`) VALUES
(1, 'Imperial Blue', 'The alcohol everyone loves', 350, '1 Bottle', 0),
(2, 'Royal Stag', 'Royal Drink', 400, '1 Bottle', 0),
(3, 'Blender Pride', 'Premium Alcohol', 600, '1 Bottle', 0),
(4, 'White Pasta', 'Italian dish at its best', 200, '1 Plate', 0),
(5, 'Parantha Dahi', 'Potato Parantha with sweet curd and icecream', 100, '1 Plate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mob_no` bigint(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mob_no`, `password`) VALUES
(34, 'Anubhav Singh', 9876543210, '12345'),
(38, 'Anubhav Singh', 9876543211, '123456'),
(40, 'Ajesh', 9996333054, 'ajesh'),
(41, 'Subhradeep Bhattacharya', 8288966848, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `21gunsalute`
--
ALTER TABLE `21gunsalute`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `absolutebarbeque`
--
ALTER TABLE `absolutebarbeque`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `absolutebarbequejubileehills`
--
ALTER TABLE `absolutebarbequejubileehills`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `bawarchirestaurant`
--
ALTER TABLE `bawarchirestaurant`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `bhukhararestaurant`
--
ALTER TABLE `bhukhararestaurant`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `creativefoods`
--
ALTER TABLE `creativefoods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pawansweets`
--
ALTER TABLE `pawansweets`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdfsdfsdf`
--
ALTER TABLE `sdfsdfsdf`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `sipnbite`
--
ALTER TABLE `sipnbite`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `sorrento`
--
ALTER TABLE `sorrento`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `themarina`
--
ALTER TABLE `themarina`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `threesixtyone`
--
ALTER TABLE `threesixtyone`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creativefoods`
--
ALTER TABLE `creativefoods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sipnbite`
--
ALTER TABLE `sipnbite`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
