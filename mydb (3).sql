-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 07:40 AM
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
  `hotel_facilities` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_registration`
--

INSERT INTO `hotel_registration` (`hotel_id`, `business_type`, `hotel_name`, `short_description`, `address`, `email_address`, `phone_number`, `hotel_facilities`) VALUES
(1, 'Hotel', 'asfdasdasdas', 'qwewq', 'Sa', 'qwwqe@gmail.com', '12321', 'qweqwewq'),
(2, 'Resort', 'duchess royale', 'wew', 'silang', 'duchess@gmail', '0912384723', 'wqewq'),
(3, 'Hotel & Resort', 'asfdasdasdas', 'asdasdsac', 'asd', 'qwewqe@gmail.com', '4812489172', 'qweqw'),
(4, 'Hotel & Resort', 'qweqweq', 'qwqw', 'qweqw', 'qwwq11e@gmail.com', '213213', 'qweqw'),
(5, 'Hotel', 'Papa Doms', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'silang', 'wew@gmail.com', '02412923', 'Wifi');

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
(6, 2, 'Product #1', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '', '', 1000, 'Chrome Firefox Add-on NodeJS', '', '', 'Img//45523885_355628664995165_781602370478931968_n.jpg'),
(7, 5, 'Product #1', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '', '', 4350, 'Wifi', '', '', 'Img//51944939.jpg'),
(8, 5, 'Product #2', 'qwe', '', '', 100, 'qwe', '', '', 'Img/8188_45523885_355628664995165_781602370478931968_n.jpg'),
(9, 2, 'Product #12', 'qw', '1', '1', 100, '21', '1', 'Wave pool', 'Img/3884_45523885_355628664995165_781602370478931968_n.jpg'),
(10, 2, 'Product #12', 'qw', '1', '1', 100, '21', '1', 'Wave pool', 'Img/3928_45523885_355628664995165_781602370478931968_n.jpg'),
(11, 1, 'Product #2', 'qwe', '1', '1', 1000, 'qwe', '1', 'Adult pool, Olympic-Size swimming pool', 'Img/9895_45523885_355628664995165_781602370478931968_n.jpg');

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
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
