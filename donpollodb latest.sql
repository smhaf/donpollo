-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 05:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakabakerydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` varchar(6) NOT NULL,
  `bank_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`) VALUES
('BI', 'Bank Islam'),
('BR', 'Bank Rakyat'),
('BSN', 'Bank Simpanan Nasional '),
('MYB', 'MayBank'),
('RHB', 'RHB Bank');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` varchar(6) NOT NULL,
  `cust_name` varchar(60) DEFAULT NULL,
  `cust_password` varchar(60) DEFAULT NULL,
  `cust_address` text DEFAULT NULL,
  `cust_phone` varchar(12) DEFAULT NULL,
  `cust_email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_password`, `cust_address`, `cust_phone`, `cust_email`) VALUES
('C54712', 'Ahmad Faris', '$2y$10$IQ7Y3bxHu1INqRh6IkMIk.2Mlm8F2PQCSxaZrfLue0LOEKZd2M5H2', 'kota warisan, raub', '0134137802', 'ahmadfarismk@gmail.com'),
('C94016', 'Syakir Hafiy', '$2y$10$1hEC8fMIKg5B2m4q78os8OIspQ0PuRuz0oXehPtMIAuh5w1qKbRGy', 'Raub', '0123456789', 'syakir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(6) NOT NULL,
  `emp_name` varchar(60) DEFAULT NULL,
  `emp_email` varchar(30) DEFAULT NULL,
  `emp_password` varchar(60) DEFAULT NULL,
  `emp_phone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_password`, `emp_phone`) VALUES
('ADMINS', 'admin', 'adminBaka', '$2y$10$pdaHYOtHfzfxuVSxYS2EMOP0zyvZFbawcy9AyKuImQIYzGSCjwlA6', 'admin'),
('E00001', 'Ahmad Azib', 'azib@gmail.com', '$2y$10$ETXmYeEEeKI.kVu/cllnRuT/Jmw8VjZlgRFuJjEbSC1T07mh69qC6', '0122447683'),
('E00002', 'Dayangku Balqis', 'balqis@gmail.com', '$2y$10$PO/AKTCKYMDir1X34T.8K.YW3r3CkfuD2LB/oBZE21.4IxPoQfbAK', '0112451283'),
('E00003', 'Hariz Rafie', 'hariz@gmail.com', '$2y$10$gURBTzmXVZYKR6R3rwNZVO5EvdFZhrToGOjNMcwTHRHzaBEb8rEwG', '0122447683'),
('E41662', 'Megat Syakirin Hakimi', 'megat@gmail.com', '$2y$10$aGuBxKrGx/.EP65.ucUvq.mukMqvBjw0V/rzdIfbqY5y7lUlMuZ0K', '0123465789'),
('E50739', 'Sheikh', 'sheikh@gmail.com', '$2y$10$O30UsmO0EnPooHncMjDbn.dI/kCoBlGSfPHxewnzIkWEi8w/alugi', '01034567423'),
('E55010', 'Alia Dania', 'dania@gmail.com', '$2y$10$NxtA1h8a3eVwEKu2SBMGUu.O2GFZaqKSir5ll.oS9UztVy0Vfk36u', '01029476865'),
('E98976', 'Amira Natasha', 'mira@gmail.com', '$2y$10$aPL1QVw7xJIhhRq/FfcIEec5lXl8WwCY29CK2qyTkXYssjz6AU2gK', '0103434567');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` varchar(6) NOT NULL,
  `prod_name` varchar(60) DEFAULT NULL,
  `prod_desc` tinytext DEFAULT NULL,
  `prod_price` decimal(10,2) DEFAULT NULL,
  `picture` varchar(60) NOT NULL,
  `prod_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_desc`, `prod_price`, `picture`, `prod_type`) VALUES
('1-1', 'Cookies and Cream', 'A variety of ice cream that contain pre-crumbled cookies from Nabisco Oreo brand', 12.00, 'https://i.ibb.co/58PrVb0/cookies-and-cream.jpg', 'polo t-shirt'),
('1-2', 'Mint Choc Chip', 'An ice cream flavor composed of mint ice cream with small chocolate chips', 13.00, 'https://i.ibb.co/LCb6TBs/mint-choc-chip.jpg', 'polo t-shirt'),
('1-3', 'Caramel Cream', 'Use of caramelized sugar that gives the ice cream a rich, smooth, and creamy texture with a sweet and slightly nutty flavor', 14.00, 'https://i.ibb.co/pP9sHn0/caramel-cream.jpg', 'polo t-shirt'),
('2-1', 'Tiramisu', 'An Italian dessert that has layers of coffee-soaked ladyfingers and a cream made from mascarpone, eggs and sugar', 15.00, 'https://i.ibb.co/wMGrL8n/tiramisu-cake.jpg', 'sweatshirt'),
('2-2', 'Red Velvet', 'A cocoa-based cake in which using vinegar, baking soda, and buttermilk give the cake a smooth, tightly crumbed texture with a subtle, tangy flavor.', 16.00, 'https://i.ibb.co/Qpgxy64/red-velvet.jpg', 'sweatshirt'),
('2-3', 'Burn Cheesecake', 'A dessert consisting of a thick, creamy filling of cheese, eggs, and sugar over a thinner crust with sweet toppings', 17.00, 'https://i.ibb.co/Rz3wRYd/Bask-cheesecake.jpg', 'sweatshirt'),
('3-1', 'Choc Chip', 'A sweet baked treat that is recognized by its butter flavor and the inclusion of chocolate chips', 10.00, 'https://i.ibb.co/kxYTJn9/choc-chip-cookies.jpg', 'pants'),
('3-2', 'Dark Choc Chip', 'A sweet baked treat that is recognized by its butter flavor and the inclusion of dark chocolate chips', 11.00, 'https://i.ibb.co/jLpGPNH/dark-choc-chip.jpg', 'pants'),
('3-3', 'Vanilla Choc Chip', 'A sweet baked treat that is recognized by its butter flavor and the inclusion of vanilla chocolate chips', 12.00, 'https://i.ibb.co/1RqVVrH/vanilla-choc-chip.jpg', 'pants');

-- --------------------------------------------------------

--
-- Table structure for table `prod_order`
--

CREATE TABLE `prod_order` (
  `ord_id` varchar(6) NOT NULL,
  `cust_id` varchar(6) DEFAULT NULL,
  `prod_id` varchar(6) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `ord_status` varchar(60) DEFAULT NULL,
  `emp_id` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `pay_id` varchar(6) NOT NULL,
  `ord_id` varchar(6) DEFAULT NULL,
  `bank_id` varchar(6) DEFAULT NULL,
  `rep_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `cust_email` (`cust_email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_email` (`emp_email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `prod_order`
--
ALTER TABLE `prod_order`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `cake_id` (`prod_id`),
  ADD KEY `food_order` (`emp_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `ord_id` (`ord_id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prod_order`
--
ALTER TABLE `prod_order`
  ADD CONSTRAINT `food_order` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `prod_order_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prod_order_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`ord_id`) REFERENCES `prod_order` (`ord_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `receipt_ibfk_2` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`bank_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
