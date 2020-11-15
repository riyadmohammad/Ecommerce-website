-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 04:44 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ct_id` int(10) NOT NULL,
  `ct_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ct_id`, `ct_name`) VALUES
(1, 'MEN'),
(2, 'WOMEN'),
(3, 'CHILDREN');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(10) NOT NULL,
  `log_date` varchar(15) NOT NULL,
  `lquantity` int(5) NOT NULL,
  `total_price` double NOT NULL,
  `uid` int(10) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pquantity` int(10) NOT NULL,
  `pbuying_price` double NOT NULL,
  `pselling_price` double NOT NULL,
  `pdate` varchar(50) NOT NULL,
  `sct_id` int(10) NOT NULL,
  `psize` varchar(50) NOT NULL,
  `pdescrip` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pquantity`, `pbuying_price`, `pselling_price`, `pdate`, `sct_id`, `psize`, `pdescrip`) VALUES
(1, 'Tanjim Side Stripe Casual Shirt', 10, 1500, 2500, '26/07/2019', 1, 'S-M-L-XL', 'Hang Bang Tang'),
(2, 'Tanjim Side Stripe Casual Shirt(RED)', 20, 1500, 2500, '25/07/2019', 1, 'S-M-L-XL', 'Hang Bang Tang'),
(3, 'Denim Jeans Blue', 30, 2000, 3000, '10/3/2019', 2, 'S-M-L-XL', 'Hang Bang Tang'),
(4, 'Denim Jeans Black', 30, 2000, 3000, '10/3/2019', 2, 'S-M-L-XL', 'Hang Bang Tang'),
(5, 'Denim Jeans Grey', 30, 2000, 3000, '10/3/2019', 2, 'S-M-L-XL', 'Hang Bang Tang'),
(6, 'Fitted Panjabi(White)', 50, 2000, 5000, '1/1/2019', 3, 'S-M-L-XL', 'Hang Bang Tang'),
(7, 'jamadani', 10, 1800, 4500, '26/07/2019', 4, 'M-L', 'Sharee'),
(8, 'jeans tops', 10, 1200, 2500, '26/07/2019', 7, 'M-L', 'denim jeans tops'),
(9, 'slim fit salwear', 10, 1000, 1550, '10/3/2015', 5, 'M-L', 'western'),
(10, 'western shirts', 10, 1800, 2500, '10/3/2015', 6, 'S-M-L', 'check shirt'),
(11, 'shirt with denim pant', 10, 1000, 1999, '25/07/2017', 8, 'S-M-L', 'black blazer with denim pant'),
(12, 'lehenga', 10, 1500, 2500, '25/07/2018', 9, 'S-M-L', 'blue lehenga');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sct_id` int(10) NOT NULL,
  `sct_name` varchar(100) NOT NULL,
  `ct_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sct_id`, `sct_name`, `ct_id`) VALUES
(1, 'Shirts', 1),
(2, 'Jeans', 1),
(3, 'Panjabi', 1),
(4, 'Saree', 2),
(5, 'salwar-kameez', 2),
(6, 'Women-Shirts', 2),
(7, 'Tops', 2),
(8, 'boys', 3),
(9, 'girls', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `ugender` varchar(20) NOT NULL,
  `uphone` varchar(15) NOT NULL,
  `uaddress` varchar(500) NOT NULL,
  `upassword` varchar(15) NOT NULL,
  `ut_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `ugender`, `uphone`, `uaddress`, `upassword`, `ut_id`) VALUES
(1, 'mahbub', 'sm@gmail.com', 'male', '01731569019', 'Nikunjjo', 'mahbub', 1),
(2, 'rafe', 'r@g.com', 'male', '09876543212', 'dfghj', 'a', 2),
(3, 'joy', 'joy@gmail.com', 'male', '09876543211', 'nikunju', '12345', 2),
(10, 'Razon', 'sayedmehedi110@gmail.com', 'male', '09876543211', 'asegtfhju', 'a', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `ut_id` int(10) NOT NULL,
  `ut_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`ut_id`, `ut_name`) VALUES
(1, 'admin'),
(2, 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `sct_id` (`sct_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sct_id`),
  ADD KEY `ct_id` (`ct_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uemail` (`uemail`),
  ADD KEY `ut_id` (`ut_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`ut_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ct_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sct_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `ut_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`),
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sct_id`) REFERENCES `subcategory` (`sct_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`ct_id`) REFERENCES `category` (`ct_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ut_id`) REFERENCES `user_type` (`ut_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
