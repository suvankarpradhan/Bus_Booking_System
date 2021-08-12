-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 03:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'suva', 'suva');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bus_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `total_seat` int(10) NOT NULL,
  `booked_seat` int(3) NOT NULL DEFAULT '0',
  `available_seat` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `available_seat` (`available_seat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `bus_id`, `date`, `total_seat`, `booked_seat`, `available_seat`) VALUES
(1, 22, '2019-04-27', 60, 20, 40),
(2, 16, '2019-05-03', 65, 6, 59),
(3, 16, '2019-05-31', 65, 2, 63),
(4, 16, '2019-06-02', 65, 126, -61),
(5, 20, '2019-06-03', 30, 5, 25),
(6, 11, '2019-06-03', 65, 4, 61),
(7, 15, '2019-06-04', 65, 4, 61),
(8, 14, '2019-06-03', 70, 4, 66),
(9, 10, '2019-06-03', 60, 0, 60),
(10, 15, '2019-06-03', 65, 11, 54),
(11, 8, '2019-06-03', 60, 1, 59);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `bus_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bus_name` varchar(50) NOT NULL,
  `bus_type` varchar(10) NOT NULL,
  `seat_no` int(3) unsigned NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `depature` varchar(10) NOT NULL,
  `arrive` varchar(10) NOT NULL,
  `fare` int(3) unsigned NOT NULL,
  `admin_id` int(100) unsigned NOT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `bus_name`, `bus_type`, `seat_no`, `source`, `destination`, `depature`, `arrive`, `fare`, `admin_id`) VALUES
(8, 'kojagori', 'Non AC', 60, 'Medinipur', 'Digha', '12.30 P.M.', '5.40 P.M.', 100, 1),
(10, 'Mitra', 'Non AC', 60, 'howra', 'Digha', '6.30 A.M.', '11.00 A.M.', 105, 1),
(11, 'Dolphin', 'Non AC', 65, 'Digha', 'Howra', '4.30 A.M.', '8.00 A.M,', 90, 1),
(12, 'Sakuntala', 'Non AC', 60, 'Jhargram', 'Haldia', '8.10 A.M.', '12.45 P.M.', 95, 1),
(13, 'Good luck', 'Non AC', 60, 'Haldia', 'Kukrahati', '07.00 A.M.', '8.45 A.M.', 120, 1),
(14, 'Samanta Travels', 'Non AC', 70, 'Haldia', 'Digha', '10.00 A.M.', '1.45. P.M.', 105, 1),
(15, 'Mitra', 'Non AC', 65, 'Digha', 'Mukutmonipur', '05.10 P.M.', '11.15. P.M', 120, 1),
(16, 'Radha Gobinda', 'Non AC', 65, 'Digha', 'Howra', '5.00 A.M.', '11.10 A.M.', 120, 1),
(18, 'Radha Gobinda', 'AC', 60, 'Digha', 'Howra', '7.45 A.M.', '12.30 A.M.', 140, 1),
(20, 'Jackson', 'Non AC', 30, 'Digha', 'kolkata', '9.00 A.M.', '1.10 P.M.', 90, 1),
(22, 'Good luck', 'AC', 60, 'kukrahati', 'Digha', '8.10 A.M.', '12.45 P.M.', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cost_estimation`
--

CREATE TABLE IF NOT EXISTS `cost_estimation` (
  `date` date NOT NULL,
  `bus_id` bigint(10) NOT NULL,
  `total_reserve` int(30) NOT NULL,
  `total_sale` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_estimation`
--

INSERT INTO `cost_estimation` (`date`, `bus_id`, `total_reserve`, `total_sale`) VALUES
('2019-04-27', 22, 20, 2000),
('2019-05-03', 16, 6, 720),
('2019-05-31', 16, 2, 240),
('2019-06-02', 16, 126, 15120),
('2019-06-03', 20, 5, 450),
('2019-06-03', 11, 4, 360),
('2019-06-04', 15, 4, 480),
('2019-06-03', 14, 4, 420),
('2019-06-03', 15, 11, 1320),
('2019-06-03', 8, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(10) NOT NULL AUTO_INCREMENT,
  `notification` text NOT NULL,
  `admin_id` int(100) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `notification`, `admin_id`) VALUES
(1, 'Track your bus with our site and know the exact location in real time.', 1),
(3, 'Bus named as Santosh is cancelled Today  due to some reasons. The   alternative bus Chandan  also available  in this route ', 1),
(5, 'Save upto rs 250 0f on Bus Tickets', 1),
(6, 'We add a new route Digha- Arambag-Barasat  from 21/12/2019', 1),
(7, 'New: Discount on every ticket up to 50% for our anniversary', 1),
(8, 'For bad condition of Contai-digha rout, Bus  going through via Egra-Ramnagar Road', 1),
(9, 'Bus named as Santosh is cancelled Today  due to some reasons. The   alternative bus Chandan  also available  in this route ', 1),
(10, 'New: Discount on every ticket up to 50% for our anniversary', 1),
(11, 'For bad condition of Contai-digha rout, Bus  going through via Egra-Ramnagar Road', 1),
(12, 'New: Discount on every ticket up to 50% for our anniversary', 1),
(13, 'Bus named as Santosh is cancelled Today  due to some reasons. The   alternative bus Chandan  also available  in this route ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `offers_id` int(10) NOT NULL AUTO_INCREMENT,
  `offers` text NOT NULL,
  `admin_id` int(100) NOT NULL,
  PRIMARY KEY (`offers_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offers_id`, `offers`, `admin_id`) VALUES
(3, 'Up to 75% off for Senior Citizen .*Term and condition apply.', 1),
(4, 'No Ticket is required for under the 3 years  child', 1),
(5, 'Bye 4 tickets and get rupees 50 off on total order', 1),
(6, 'Book 10 tickets and get 1 ticket free of cost', 1),
(7, '50% off for family members of Soldiers. We provides free of cost journey for our Soldiers who saved our Great Nation ', 1),
(8, 'Up to 75% off for Senior Citizen .*Term and condition apply', 1),
(9, 'Bye 4 tickets and get rupees 50 off on total order', 1),
(10, '50% off for family members of Soldiers. We provides free of cost journey for our Soldiers who saved our Great Nation ', 1),
(11, 'Book 10 tickets and get 1 ticket free of cost', 1),
(12, '50% off for family members of Soldiers. We provides free of cost journey for our Soldiers who saved our Great Nation ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE IF NOT EXISTS `ticket_details` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `bus_id` int(10) NOT NULL,
  `bookseat_no` int(3) NOT NULL,
  `total_fare` bigint(5) unsigned NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `ticket_details`
--

INSERT INTO `ticket_details` (`ticket_id`, `user_id`, `date`, `bus_id`, `bookseat_no`, `total_fare`) VALUES
(1, 1, '2019-04-27', 22, 3, 300),
(2, 1, '2019-04-27', 22, 3, 300),
(3, 1, '2019-04-27', 22, 3, 300),
(4, 1, '2019-04-27', 22, 3, 300),
(5, 1, '2019-04-27', 22, 2, 200),
(6, 1, '2019-04-27', 22, 2, 200),
(7, 1, '2019-04-27', 22, 2, 200),
(8, 1, '2019-04-27', 22, 2, 200),
(9, 1, '2019-05-03', 16, 3, 360),
(10, 1, '2019-05-03', 16, 3, 360),
(11, 1, '2019-05-31', 16, 1, 120),
(12, 1, '2019-05-31', 16, 1, 120),
(13, 1, '2019-06-02', 16, 3, 360),
(14, 1, '2019-06-02', 16, 3, 360),
(15, 1, '2019-06-02', 16, 3, 360),
(16, 1, '2019-06-02', 16, 3, 360),
(17, 1, '2019-06-02', 16, 3, 360),
(18, 1, '2019-06-02', 16, 3, 360),
(19, 1, '2019-06-02', 16, 4, 480),
(20, 1, '2019-06-02', 16, 4, 480),
(21, 1, '2019-06-02', 16, 4, 480),
(22, 1, '2019-06-02', 16, 4, 480),
(23, 1, '2019-06-02', 16, 4, 480),
(24, 1, '2019-06-02', 16, 4, 480),
(25, 1, '2019-06-02', 16, 4, 480),
(26, 1, '2019-06-02', 16, 4, 480),
(27, 1, '2019-06-02', 16, 4, 480),
(28, 1, '2019-06-02', 16, 4, 480),
(29, 1, '2019-06-02', 16, 4, 480),
(30, 1, '2019-06-02', 16, 4, 480),
(31, 1, '2019-06-02', 16, 4, 480),
(32, 1, '2019-06-02', 16, 4, 480),
(33, 1, '2019-06-02', 16, 4, 480),
(34, 1, '2019-06-02', 16, 4, 480),
(35, 1, '2019-06-02', 16, 4, 480),
(36, 1, '2019-06-02', 16, 4, 480),
(37, 1, '2019-06-02', 16, 4, 480),
(38, 1, '2019-06-02', 16, 4, 480),
(39, 1, '2019-06-02', 16, 4, 480),
(40, 1, '2019-06-02', 16, 4, 480),
(41, 1, '2019-06-02', 16, 4, 480),
(42, 1, '2019-06-02', 16, 4, 480),
(43, 1, '2019-06-02', 16, 4, 480),
(44, 1, '2019-06-02', 16, 4, 480),
(45, 1, '2019-06-02', 16, 4, 480),
(46, 2, '2019-06-03', 20, 5, 450),
(47, 2, '2019-06-03', 11, 1, 90),
(48, 2, '2019-06-04', 15, 2, 240),
(49, 5, '2019-06-03', 14, 4, 420),
(50, 5, '2019-06-03', 11, 3, 270),
(51, 1, '2019-06-03', 15, 2, 240),
(52, 1, '2019-06-03', 15, 2, 240),
(53, 1, '2019-06-03', 15, 1, 120),
(54, 6, '2019-06-03', 8, 1, 100),
(55, 1, '2019-06-03', 15, 1, 120),
(56, 1, '2019-06-03', 15, 1, 120),
(57, 7, '2019-06-03', 15, 1, 120),
(58, 7, '2019-06-03', 15, 2, 240),
(59, 7, '2019-06-03', 15, 1, 120),
(60, 1, '2019-06-04', 15, 1, 120),
(61, 1, '2019-06-04', 15, 1, 120);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint(100) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `phone`, `email`, `password`) VALUES
(1, 'Santanu', 'Parai', 7685346815, 'admin@admin.com', '123'),
(2, 'Subhas', 'Manna', 8975455675, 'admin@admin.com', '789'),
(3, 'Suman', 'de', 9876543210, 'gdfgdhfh@cgv.com', '456'),
(4, 'Suman', 'de', 9876543210, 'gdfgdhfh@cgv.com', '741'),
(5, 'PATRIK', 'DARK', 8373891746, 'desuman18@gmail.com', '123456'),
(6, 'Afsana', 'Khatoon', 7029709207, 'myowndestiny000@gmail.com', '123456789'),
(7, 'Subhas', 'de', 9876543210, 'admin@admin.com', '852');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
