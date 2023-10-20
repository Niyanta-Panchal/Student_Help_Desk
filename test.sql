-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2023 at 09:12 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '9ae2be73b58b565bce3e47493a56e26a');

-- --------------------------------------------------------

--
-- Table structure for table `bonafide`
--

DROP TABLE IF EXISTS `bonafide`;
CREATE TABLE IF NOT EXISTS `bonafide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `department` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `enroll` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `sterm` varchar(20) NOT NULL,
  `eterm` varchar(20) NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonafide`
--

INSERT INTO `bonafide` (`id`, `fname`, `course`, `department`, `semester`, `enroll`, `dob`, `category`, `sterm`, `eterm`, `purpose`, `status`, `email`) VALUES
(4, 'Niyanta Panchal', '', 'Computer Engineering', '2', '1208401215', '2022-11-22', 'OBC', '2022-11-23', '2022-12-06', 'bus', 0, ''),
(2, 'bgp', '', 'Computer Engineering', '4', '254876', '2022-11-15', 'OBC', '2022-11-22', '2022-12-06', 'bus', 1, 'nmp1@gmail.com'),
(5, 'bhagysri patel', '', 'Computer Engineering', '8', '090110116040', '2022-11-23', 'OBC', '2022-11-24', '2022-11-28', 'bus', 1, 'bgpatel@gmail.com'),
(6, 'vatsal patel', '', 'Computer Engineering', '4', '150234756', '2022-12-01', 'OBC', '2022-11-17', '2022-12-05', 'bus', 1, 'a1@gmail.com'),
(7, 'akash patel', '', 'Computer Engineering', '5', '2111569783', '2022-11-23', 'OBC', '2022-11-23', '2022-12-07', 'bus', 1, 'akashpatel@gmail.com'),
(8, 'Mitisha Patel ', '', 'Commerce', '4', '123456', '2023-02-13', 'SC', '2023-02-21', '2023-03-10', 'bus pass', 0, 'm@gmail.com'),
(9, 'Roshni patel', 'SSACM', 'BCA', '3', '123456', '2023-02-21', 'SC', '2023-02-19', '2023-03-09', 'bus pass', 0, 'r@gmail.com'),
(10, 'vatsal pate;', 'SSAIMT', 'MBA', '3', '1313', '2023-02-06', 'SC', '2023-02-19', '2023-03-09', 'bus pass', 0, 'n1@gmail.com'),
(11, 'akash patel', 'SSAIET', 'Computer Engineering', '8', '1313', '2023-02-21', 'OBC', '2023-02-27', '2023-03-09', 'bus pass', 0, 'n1@gmail.com'),
(12, 'Mayur Panchal', 'SSAIMT', 'MBA', '8', '1978542135', '2023-02-13', 'OBC', '2022', '2023', 'Bus pass', 0, 'n1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `deleteduser`
--

DROP TABLE IF EXISTS `deleteduser`;
CREATE TABLE IF NOT EXISTS `deleteduser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleteduser`
--

INSERT INTO `deleteduser` (`id`, `email`, `deltime`) VALUES
(21, 'nmp@gmail.com', '2022-10-14 07:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(500) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `saleID` int(11) NOT NULL,
  `itemNumber` varchar(255) NOT NULL,
  `customerID` int(11) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `saleDate` date NOT NULL,
  `discount` float NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `unitPrice` float(10,0) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`saleID`, `itemNumber`, `customerID`, `customerName`, `itemName`, `saleDate`, `discount`, `quantity`, `unitPrice`) VALUES
(0, '01', 47, 'ENGNEERING MAIN BUILDING', 'Benches', '2023-01-27', 0, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lor`
--

DROP TABLE IF EXISTS `lor`;
CREATE TABLE IF NOT EXISTS `lor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `sdept` varchar(200) NOT NULL,
  `senroll` varchar(100) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `smblno` varchar(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdept` varchar(100) NOT NULL,
  `lor` varchar(100) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lor`
--

INSERT INTO `lor` (`id`, `sname`, `sdept`, `senroll`, `semail`, `smblno`, `pname`, `pdept`, `lor`, `status`) VALUES
(2, 'niyantapanchal', 'computer', '12345678', 'akashpatel@gmail.com', '9586412356', 'Prof. Roshni patel', 'Computer', 'lor-formate-2022-23-(1).docx', 0),
(3, 'bhagyasri patel', 'computer', '2314567', 'bgp.ssaiet@gmail.com', '9586412356', 'Prof. Roshni patel', 'Computer', 'lor-formate-2022-23-(5).docx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(18, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 05:04:24'),
(19, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 05:59:19'),
(20, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 05:59:31'),
(21, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:00:09'),
(22, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:00:29'),
(23, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:02:53'),
(24, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:03:11'),
(25, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:03:32'),
(26, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:09:10'),
(27, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:10:42'),
(28, 'nmp1@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:16:04'),
(29, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:19:23'),
(30, 'nmp2@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:23:00'),
(31, 'nmp2@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:25:18'),
(32, 'nmp1@gmail.com', 'Admin', 'Create Account', '2022-10-14 06:33:01'),
(33, 'abc@gmail.com', 'Admin', 'Create Account', '2022-10-14 07:31:12'),
(34, 'nmp@gmail.com', 'Admin', 'Create Account', '2022-10-14 07:36:38'),
(35, 'nmp21@gmail.com', 'Admin', 'Create Account', '2022-10-14 07:49:16'),
(36, 'nmp1@gmail.com', 'Admin', 'Create Account', '2022-11-09 18:18:26'),
(37, 'g1@gmail.com', 'Admin', 'Create Account', '2022-11-15 08:26:34'),
(38, 'bgpatel@gmail.com', 'Admin', 'Create Account', '2022-11-15 08:31:22'),
(39, 'bgpatel@gmail.com', 'Admin', 'Create Account', '2022-11-15 08:32:56'),
(40, 'bgpatel@gmail.com', 'Admin', 'Create Account', '2022-11-15 08:34:18'),
(41, 'a1@gmail.com', 'Admin', 'Create Account', '2022-11-15 08:55:41'),
(42, 'akashpatel@gmail.com', 'Admin', 'Create Account', '2022-11-15 09:08:53'),
(43, 'n1@gmail.com', 'Admin', 'Create Account', '2023-02-15 06:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `enroll` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `collegename` varchar(250) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `enroll`, `name`, `collegename`, `dept`, `email`, `password`, `gender`, `image`, `status`) VALUES
(2, 'niyanta', 'niyanta', 'SSAIET', 'computer Engineering', 'nmp@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Female', 'golden-view.jpeg', 0),
(3, '1921445678', 'niyanta', 'SSAIET', 'computer Engineering', 'nmp2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Female', 'golden-view.jpeg', 0),
(5, '18456237522', 'farhin', 'SSAIET', 'computer Engineering', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', 'golden-view.jpeg', 0),
(6, '18456237522', 'niyanta', 'SSAIET', 'computer Engineering', 'nmp21@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', 'img-20220929-wa0005.jpg', 1),
(7, '12345678', 'Niyanta', 'ssaiet-navsari', 'Computer', 'nmp1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Female', 'download.jpg', 1),
(9, '090110116040', 'bhagyasri patel', 'ssaiet-navsari', 'Computer', 'bgpatel@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', 'download.jpg', 1),
(10, '150234756', 'vatsal patel', 'ssaiet-navsari', 'Computer', 'a1@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male', 'download.jpg', 1),
(11, '2111569783', 'Akash Patel', 'ssaiet-navsari', 'Computer Engineering', 'akashpatel@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male', 'download.jpg', 1),
(12, '1313', 'niyanta', 'ssaiet', 'computer', 'n1@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', 'download-(1).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('male','female') CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL DEFAULT 'general',
  `status` enum('active','pending','deleted','') NOT NULL DEFAULT 'pending',
  `authtoken` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobile`, `designation`, `image`, `type`, `status`, `authtoken`) VALUES
(1, 'web', 'damn', 'admin@webdamn.com', '202cb962ac59075b964b07152d234b70', 'male', '123456789', 'Web developer', '', 'administrator', 'active', ''),
(5, 'jhonn', 'smith', 'info@webdamn.com', '202cb962ac59075b964b07152d234b70', 'male', '123456789', 'Web developer', '', 'general', 'deleted', '73f66749989c7b09389894f1b27daa7387f9956fa51c87c1ba4fc4684b91acb5'),
(6, 'Jimmy', 'Anderson', 'jm@wd.com', '202cb962ac59075b964b07152d234b70', 'male', '11111111111', 'PHP developer', '', 'general', 'pending', '73f66749989c7b09389894f1b27daa736156fbd08795da8955fb36cf730f2fb0'),
(7, 'Andy', 'Flower', 'andy@wd.com', '202cb962ac59075b964b07152d234b70', 'male', '11111111111', 'dfdsd', '', 'administrator', 'deleted', '73f66749989c7b09389894f1b27daa738d2775af2555b0d1ed582212a3991144'),
(8, 'niyanta', 'panchal', 'nmp@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', '', '', '', 'general', 'pending', '73f66749989c7b09389894f1b27daa735ae4911fff27b5cf87868fbae4a5848d'),
(9, 'niyanta', 'panchal', 'nmp1@gmail.com', 'b41cb62ec6767f2e41f9df7a2d161515', 'male', '', '', '', 'general', 'deleted', '73f66749989c7b09389894f1b27daa73a9b7fb6e963ad0bcdbc50afba0f30a3c'),
(10, 'niyanta', 'panchal', 'nmp12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', '', '', '', 'general', 'deleted', '73f66749989c7b09389894f1b27daa7336cf23ac69cc1f21178f1dd68ede918c'),
(11, 'niyanta', 'panchal', 'nmp2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', '', '', '', 'general', 'deleted', '73f66749989c7b09389894f1b27daa73c6e6304fe87cbee9df49e01065745bd4'),
(12, 'niyanta', 'panchal', 'nmp@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'female', '9547865875', 'adhoc', '', 'general', 'active', '73f66749989c7b09389894f1b27daa735ae4911fff27b5cf87868fbae4a5848d');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `designation`, `image`, `status`) VALUES
(1, 'niyanta', 'nmp@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', '9654875123', 'adhoc', 'golden-view.jpeg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
