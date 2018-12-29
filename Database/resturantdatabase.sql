-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 05:11 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturantdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(10) UNSIGNED NOT NULL,
  `ADMIN_NAME` varchar(30) NOT NULL,
  `ADMIN_EMAIL` varchar(50) NOT NULL,
  `ADMIN_PASSWORD` varchar(20) NOT NULL,
  `ADMIN_CONTACT` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `ADMIN_NAME`, `ADMIN_EMAIL`, `ADMIN_PASSWORD`, `ADMIN_CONTACT`) VALUES
(1, 'AKSHAY', 'KUMAR@GMAIL.COM', '12345', 333123456);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BOOKING_NO` int(10) UNSIGNED NOT NULL,
  `ROOM_NO` int(10) UNSIGNED DEFAULT NULL,
  `CUSTOMER_NAME` varchar(30) DEFAULT NULL,
  `ARRIVAL_DATE` date DEFAULT NULL,
  `DEPARTURE` date DEFAULT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BOOKING_NO`, `ROOM_NO`, `CUSTOMER_NAME`, `ARRIVAL_DATE`, `DEPARTURE`, `TIME`) VALUES
(3, 100, 'akshay', '2018-12-02', '2018-12-03', '2018-12-04 14:56:53'),
(5, 100, 'akshay', '2018-01-01', '2018-02-01', '2018-12-04 16:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(6) UNSIGNED NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `BIRTHDATE` date DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `CONTACT` int(15) DEFAULT NULL,
  `CITY` varchar(30) DEFAULT NULL,
  `STATES` varchar(30) DEFAULT NULL,
  `COUNTRY` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `FNAME`, `LNAME`, `EMAIL`, `PASSWORD`, `BIRTHDATE`, `ADDRESS`, `CONTACT`, `CITY`, `STATES`, `COUNTRY`) VALUES
(1, 'akshay', 'kumar', 'akshay@gmail.com', '12345', '0000-00-00', 'a434', 2147483647, 'UK', 'SINDH', 'PAKISTAN'),
(2, 'akshay', 'kumar', 'akshayKUMAR@gmail.com', '12345', '0000-00-00', 'a434', 2147483647, 'UK', 'SINDH', 'PAKISTAN');

-- --------------------------------------------------------

--
-- Table structure for table `foodsdetails`
--

CREATE TABLE `foodsdetails` (
  `ITEM_NO` int(10) UNSIGNED NOT NULL,
  `ITEM_NAME` varchar(30) DEFAULT NULL,
  `CHEIF_NAME` varchar(30) DEFAULT NULL,
  `QUANTITY` int(10) DEFAULT NULL,
  `AVAILBILITY` varchar(30) DEFAULT NULL,
  `PRICE` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodsdetails`
--

INSERT INTO `foodsdetails` (`ITEM_NO`, `ITEM_NAME`, `CHEIF_NAME`, `QUANTITY`, `AVAILBILITY`, `PRICE`) VALUES
(103, 'WHITE CHICKEN ', 'WAQAR', 2, 'YES', 500),
(104, 'Brown Chicken', 'ZAKIR', 10, 'YES', 600),
(105, 'Chicken Tikka', 'WAQAR', 5, 'YES', 300),
(106, 'Chicken Rice', 'ALI', 15, 'NO', 200),
(107, 'Chola Biryani', 'Zakir', 10, 'yes', 200);

--
-- Triggers `foodsdetails`
--
DELIMITER $$
CREATE TRIGGER `itemHistory` AFTER DELETE ON `foodsdetails` FOR EACH ROW BEGIN

INSERT INTO itemlog (`ITEM_NO`, `ITEM_NAME`, `CHEIF_NAME`, `QUANTITY`, `AVAILBILITY`,`PRICE`,`OPERATION`) 
VALUES (OLD.ITEM_NO,OLD.ITEM_NAME,OLD.CHEIF_NAME,OLD.QUANTITY,OLD.AVAILBILITY,OLD.PRICE,'DELETE');

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `itemHistory2` AFTER INSERT ON `foodsdetails` FOR EACH ROW BEGIN
INSERT INTO itemlog (`ITEM_NO`, `ITEM_NAME`, `CHEIF_NAME`, `QUANTITY`, `AVAILBILITY`,`PRICE`,`OPERATION`) 
VALUES (NEW.ITEM_NO,NEW.ITEM_NAME,NEW.CHEIF_NAME,NEW.QUANTITY,NEW.AVAILBILITY,NEW.PRICE,'INSERTION');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `itemlog`
--

CREATE TABLE `itemlog` (
  `ITEM_NO` int(10) UNSIGNED NOT NULL,
  `ITEM_NAME` varchar(30) DEFAULT NULL,
  `CHEIF_NAME` varchar(30) DEFAULT NULL,
  `QUANTITY` int(10) DEFAULT NULL,
  `AVAILBILITY` varchar(30) DEFAULT NULL,
  `PRICE` int(10) DEFAULT NULL,
  `TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `OPERATION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemlog`
--

INSERT INTO `itemlog` (`ITEM_NO`, `ITEM_NAME`, `CHEIF_NAME`, `QUANTITY`, `AVAILBILITY`, `PRICE`, `TIME`, `OPERATION`) VALUES
(102, 'VEGETABLE RICE', 'ZAKIR', 5, 'YES', 100, '2018-12-04 14:26:21', 'DELETE');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `ORDER_NO` int(10) UNSIGNED NOT NULL,
  `ITEM_NAME` varchar(30) NOT NULL,
  `QUANTITY` int(10) NOT NULL,
  `PRICE` int(10) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CID` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`ORDER_NO`, `ITEM_NAME`, `QUANTITY`, `PRICE`, `Date`, `CID`) VALUES
(1, 'EGG RICE', 1, 170, '2018-12-02 09:23:29', 1),
(4, 'VEGETABLE RICE', 2, 200, '2018-12-02 09:29:05', 2),
(34, 'Brown Chicken', 1, 600, '2018-12-04 13:04:35', 1),
(35, 'Chola Biryani', 2, 400, '2018-12-04 13:04:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ROOM_NO` int(10) UNSIGNED NOT NULL,
  `ROOM_NAME` varchar(30) NOT NULL,
  `RATING` decimal(5,1) NOT NULL,
  `REVIEWS` int(10) DEFAULT NULL,
  `GUEST_CAPACITY` int(10) DEFAULT NULL,
  `ROOM_PIC` varchar(100) NOT NULL,
  `PRICE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ROOM_NO`, `ROOM_NAME`, `RATING`, `REVIEWS`, `GUEST_CAPACITY`, `ROOM_PIC`, `PRICE`) VALUES
(100, 'Classic Simple Room', '3.5', 150, 2, 'img/rooms/rooms1.jpg', 2900),
(101, 'Single Bed Room', '4.1', 120, 2, 'img/rooms/rooms2.jpg', 2000),
(116, ' Single Pink BedRoom', '4.8', 120, 2, 'img/rooms/rooms3.jpg', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`),
  ADD UNIQUE KEY `ADMIN_EMAIL` (`ADMIN_EMAIL`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BOOKING_NO`),
  ADD KEY `FK_ROOM_BOOKING` (`ROOM_NO`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `foodsdetails`
--
ALTER TABLE `foodsdetails`
  ADD PRIMARY KEY (`ITEM_NO`),
  ADD UNIQUE KEY `ITEM_NAME` (`ITEM_NAME`);

--
-- Indexes for table `itemlog`
--
ALTER TABLE `itemlog`
  ADD PRIMARY KEY (`ITEM_NO`),
  ADD UNIQUE KEY `ITEM_NAME` (`ITEM_NAME`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`ORDER_NO`),
  ADD KEY `FK_ORDER_CUSTOMER` (`CID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ROOM_NO`),
  ADD UNIQUE KEY `ROOM_NAME` (`ROOM_NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BOOKING_NO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `foodsdetails`
--
ALTER TABLE `foodsdetails`
  MODIFY `ITEM_NO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `itemlog`
--
ALTER TABLE `itemlog`
  MODIFY `ITEM_NO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `ORDER_NO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ROOM_NO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `FK_ROOM_BOOKING` FOREIGN KEY (`ROOM_NO`) REFERENCES `rooms` (`ROOM_NO`) ON UPDATE CASCADE;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_ORDER_CUSTOMER` FOREIGN KEY (`CID`) REFERENCES `customer` (`CID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
