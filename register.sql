-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 11:04 AM
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
-- Table structure for table `register`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `enroll`, `name`, `collegename`, `dept`, `email`, `password`, `gender`, `image`, `status`) VALUES
(1, '0', 'niyanta', 'SSAIET', 'computer Engineering', 'nmp1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', 'golden-view.jpeg', 0),
(2, 'niyanta', 'niyanta', 'SSAIET', 'computer Engineering', 'nmp@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Female', 'golden-view.jpeg', 0),
(3, '1921445678', 'niyanta', 'SSAIET', 'computer Engineering', 'nmp2@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Female', 'golden-view.jpeg', 1),
(4, '1921445678', 'vishal', 'SSAIET', 'mech', 'nmp1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', 'golden-view.jpeg', 1),
(5, '18456237522', 'farhin', 'SSAIET', 'computer Engineering', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', 'golden-view.jpeg', 1),
(6, '18456237522', 'niyanta', 'SSAIET', 'computer Engineering', 'nmp21@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', 'img-20220929-wa0005.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
