-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 05:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `res_id` int(50) NOT NULL,
  `room_id` varchar(255) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_registration`
--

CREATE TABLE `hotel_registration` (
  `hotel_id` int(11) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `short_description` varchar(20000) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `hotel_facilities` varchar(2000) NOT NULL,
  `hotel_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_registration`
--

INSERT INTO `hotel_registration` (`hotel_id`, `business_type`, `hotel_name`, `short_description`, `address`, `email_address`, `phone_number`, `hotel_facilities`, `hotel_img`) VALUES
(10, 'Hotel & Resort', 'Duchess Royal', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus', 'Silang Cavite', 'royal@gmail.com', '0912322222', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `emailad` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `account_type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `emailad`, `password`, `birthdate`, `username`, `account_type`) VALUES
(1, ' merween freo', 'merween@gmail.com', '213', '', 'KarolG', '2'),
(3, ' ', ' ', '213', '', ' ', '2'),
(4, 'merween freo', 'merween@gmail.com', '123', '', 'wew', '2'),
(5, 'Asd Asd', 'merween1@gmail.com', '12', '2', 'KarolGe', '2'),
(6, 'merween freo', 'admin@gmail.com', 'admin', '', 'admin', '2'),
(7, 'merween', 'admin@pogi.com', 'admin', '', 'admin', '1'),
(8, 'wew', 'merween123@gmail.com', '123', '', 'wew2', '2'),
(9, 'wew', 'wew@gmail.com', '1234', '2003-8-15', '123213', '2');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `adult` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `roomamenities` varchar(2000) NOT NULL,
  `beds` varchar(255) NOT NULL,
  `pools` varchar(255) NOT NULL,
  `room_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `hotel_id`, `room_name`, `description`, `adult`, `child`, `price`, `roomamenities`, `beds`, `pools`, `room_img`) VALUES
(15, 10, 'Standard Package', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus', '2', '2', 2039, 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus', '1', 'Infinity pool, Wave pool', 'Img/9497_standard-room-city-inn-palace-hotel-ramallah-double-01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `hotel_registration`
--
ALTER TABLE `hotel_registration`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `res_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_registration`
--
ALTER TABLE `hotel_registration`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
