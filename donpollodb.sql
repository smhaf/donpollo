-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 06:02 PM
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
-- Database: `donpollodb`
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
('BR', 'Bank Rakyat'),
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
('C53982', 'zulkifli', '$2y$10$HlJWDchnCsQ60iSc.O4y1uNXUkMUAyzdUG1iKkYgwtsqnvdkAb9Ha', 'raub', '01111', 'zz@gmail.com'),
('C54712', 'Ahmad Faris', '$2y$10$IQ7Y3bxHu1INqRh6IkMIk.2Mlm8F2PQCSxaZrfLue0LOEKZd2M5H2', 'kota warisan, raub', '0134137802', 'ahmadfarismk@gmail.com'),
('C67138', 'Aiman Ikram', '$2y$10$GMVBhzqK.BwpA2H2qnKQdePOq0flgT5kKAYgIzw89y3uO9Da.ji3q', 'Temerloh', '01292983423', 'aiman@gmail.com'),
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
('1-1', 'Open Short Sleeve Polo Shirt', '- Smooth \'AIRism\' fabric with the look of cotton.\n- With DRY and Cool Touch comfort features.\n- Crisp fabric creates a sleek silhouette.\n- Elegant dress with a shirt-style collar. ', 49.00, 'https://i.ibb.co/tsMbwV2/goods-467039-sub14.jpg', 'polo t-shirt'),
('1-2', 'Pique Polo Shirt', '- With quick-drying DRY technology, suitable for leisure, sports, and everyday wear.\n- Collar looks great buttoned-up or undone.\n- Ribbed cuffs for a classic look.\n- Versatile, basic design and cut for easy styling', 49.00, 'https://i.ibb.co/4RsVd3M/goods-472592-sub14.jpg', 'polo t-shirt'),
('1-3', 'Striped Short Sleeve Polo Shirt', '- Smooth, light pique fabric made from a blend of pilling-resistant cotton and polyester.\n- Keeps its shape even after repeated washing.\n- With DRY technology. ', 49.00, 'https://i.ibb.co/CHqkstR/goods-465195-sub14.jpg', 'polo t-shirt'),
('2-1', 'Sweat Pullover Long Sleeve Hoodie', '- Fine fabric with a smooth, premium feel.\n- Contoured hood design.\n- Sleek and functional side pockets', 65.00, 'https://i.ibb.co/dJSm6m5/goods-444967-sub14.jpg', 'sweatshirt'),
('2-2', 'Sweat Long Sleeve Cardigan', '- Smooth touch on the inside and out.\n- Special looped lining prevents pilling.\n- Sleek and functional side pockets.\n- Versatile, roomy silhouette. ', 65.00, 'https://i.ibb.co/fddTC3g/goods-465497-sub14.jpg', 'sweatshirt'),
('2-3', 'Striped Ribbed Crew Neck Long Sleeve Sweater', '- Knit with alternating cotton-rayon and polyester threads for a crisp, stretchy fabric that retains its shape.\n- The cut showcases the texture of the fabric.', 65.00, 'https://i.ibb.co/R7KWj6W/goods-468753-sub14.jpg', 'sweatshirt'),
('3-1', 'Jean-Michel Basquiat UT', '“UT Archive” is a project that revives carefully selected T-shirts which have been sold in the past. From the UT collection that has been on sale for about 20 years, popular patterns by Andy Warhol, Basquiat, and Keith Haring will be re-released.', 39.00, 'https://i.ibb.co/gMbC6tH/goods-03-469261.jpg', 't-shirt'),
('3-2', 'UT ARCHIVE Keith Haring UT', '“UT Archive” is a project that revives carefully selected T-shirts which have been sold in the past. From the UT collection that has been on sale for about 20 years, popular patterns by Andy Warhol, Basquiat, and Keith Haring will be re-released.', 39.00, 'https://i.ibb.co/x24VVfT/goods-30-469260.jpg', 't-shirt'),
('3-3', 'Tears of the Kingdom UT', '&quot;THE LEGEND OF ZELDA TEARS OF THE KINGDOM&quot; is a game for Nintendo Switch released by Nintendo in 2023. The magnificent worldview, unique characters, and memorable scenes and lines from the game have been expressed and designed into T-shirts in a', 39.00, 'https://i.ibb.co/dQp1jtG/goods-472681-sub14.jpg', 'polo t-shirt');

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
  `emp_id` varchar(6) DEFAULT NULL,
  `size` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prod_order`
--

INSERT INTO `prod_order` (`ord_id`, `cust_id`, `prod_id`, `qty`, `ord_status`, `emp_id`, `size`) VALUES
('O11868', 'C54712', '2-1', 1, 'Complete', 'E00001', 'L'),
('O31349', 'C67138', '2-1', 1, 'Complete', 'E00001', 'L'),
('O74466', 'C53982', '2-1', 1, 'Cancelled', NULL, 'S'),
('O96852', 'C54712', '3-2', 2, 'Cancelled', 'E00001', 'M'),
('O97885', 'C53982', '2-1', 5, 'Complete', 'E00001', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `pay_id` varchar(6) NOT NULL,
  `ord_id` varchar(6) DEFAULT NULL,
  `bank_id` varchar(6) DEFAULT NULL,
  `rep_date` date DEFAULT NULL,
  `size` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`pay_id`, `ord_id`, `bank_id`, `rep_date`, `size`) VALUES
('P37873', 'O97885', 'BI', '2024-06-28', 'L'),
('P79158', 'O31349', 'MYB', '2024-07-06', 'L'),
('P87562', 'O11868', 'MYB', '2024-06-28', 'L');

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

