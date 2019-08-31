-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 11:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `picture_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_company`
--

CREATE TABLE `delivery_company` (
  `idDelivery_company` int(25) NOT NULL,
  `name_company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Tel.` int(25) NOT NULL,
  `picture_company` int(50) NOT NULL,
  `idAdmin` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idMember` int(25) NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `name_shop` varchar(200) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idMember`, `oauth_uid`, `first_name`, `last_name`, `email`, `picture`, `name_shop`, `created`, `modified`) VALUES
(19, '1266352953524811', 'Songchai', 'Amornturong', 'boyza10267@hotmail.com', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1266352953524811&height=300&width=300&ext=1569376178&hash=AeQ-1dbHYQkw3wuD', NULL, '2026-08-19 08:49:40', '2026-08-19 08:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idOrder` int(25) NOT NULL,
  `orderdate` datetime NOT NULL,
  `shippedDate` datetime NOT NULL,
  `name_customer` int(50) NOT NULL,
  `address_customer` varchar(200) NOT NULL,
  `status_order` varchar(25) NOT NULL,
  `Price_all` int(25) NOT NULL,
  `idMember` int(25) NOT NULL,
  `idDelivery_company` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `idOrder_Detail` int(25) NOT NULL,
  `amount` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `idProduct` int(25) NOT NULL,
  `idOrder` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(25) NOT NULL,
  `name_product` varchar(25) NOT NULL,
  `image_product` varchar(50) NOT NULL,
  `price` int(25) NOT NULL,
  `amount_product` int(25) NOT NULL,
  `detail_product` varchar(200) NOT NULL,
  `idProduct_type` int(25) NOT NULL,
  `idMember` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `name_product`, `image_product`, `price`, `amount_product`, `detail_product`, `idProduct_type`, `idMember`) VALUES
(16, 'food', 'product_images/inner_produce.jpg', 120, 20, 'dsadas', 1, 19),
(17, 'k', 'product_images/Database (1).png', 100, 1, 'dsadsa', 1, 19),
(18, 'ddddd', 'product_images/222.jpg', 100, 20, 'dsdasda', 2, 19);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `idProduct_type` int(25) NOT NULL,
  `name_type` varchar(25) NOT NULL,
  `idAdmin` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`idProduct_type`, `name_type`, `idAdmin`) VALUES
(1, 'รองเท้า', 0),
(2, 'เสื้อ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `delivery_company`
--
ALTER TABLE `delivery_company`
  ADD PRIMARY KEY (`idDelivery_company`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idOrder`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`idOrder_Detail`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`idProduct_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_company`
--
ALTER TABLE `delivery_company`
  MODIFY `idDelivery_company` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idMember` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idOrder` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `idOrder_Detail` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `idProduct_type` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
