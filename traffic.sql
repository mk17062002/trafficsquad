-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2023 at 12:47 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traffic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'Administrator'),
(4, 'mainuser', 'drowssap', 'mainuser');

-- --------------------------------------------------------

--
-- Table structure for table `p_info`
--

DROP TABLE IF EXISTS `p_info`;
CREATE TABLE IF NOT EXISTS `p_info` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `pname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `posting` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `pno` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `psw` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_info`
--

INSERT INTO `p_info` (`p_id`, `uname`, `pname`, `posting`, `post_id`, `pno`, `email`, `psw`) VALUES
(1, 'sham', 'sham', 'SI', '10', '6874598256', 'sham@gmail.com', 'shamsundar'),
(7, 'naruto', 'uzumaki', 'hokage', '7', '09876543210', 'naruto@gmail.com', 'rasengan'),
(10, 'boruto', 'uzumaki', 'i', '16', '8764492310', 'boruto@gmail.com', 'boruto'),
(17, 'monish', 'monish', 'ac', '7', '9638527410', 'monish@gmail.com', 'password'),
(18, 'minato', 'namizake', 'hokage', '4', '9857463210', 'minato@gmail.com', 'minato');

-- --------------------------------------------------------

--
-- Table structure for table `stations_city`
--

DROP TABLE IF EXISTS `stations_city`;
CREATE TABLE IF NOT EXISTS `stations_city` (
  `id` int NOT NULL,
  `location` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stations_city`
--

INSERT INTO `stations_city` (`id`, `location`, `branch`) VALUES
(0, 'ponnai', 'ponnai');

-- --------------------------------------------------------

--
-- Table structure for table `u_info`
--

DROP TABLE IF EXISTS `u_info`;
CREATE TABLE IF NOT EXISTS `u_info` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `pid` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `adds` varchar(30) NOT NULL,
  `pno` varchar(30) NOT NULL,
  `aids` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `challandate` date NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_info`
--

INSERT INTO `u_info` (`uid`, `pid`, `name`, `adds`, `pno`, `aids`, `email`, `challandate`) VALUES
(14, 17, 'naruto', 'Hiddenleaf Village', '9875463257', '658742358796', 'naruto@gmail.com', '2023-10-24'),
(16, 17, 'minato', 'Hiddenleaf Village', '8754963210', '986574325789', 'minato@gmail.com', '2023-10-24'),
(17, 17, 'dharaniraj', 'cheyyar', '6379991017', '656155485514', 'dharanirajbca2019@gmail.com', '2023-11-02'),
(18, 17, 'vijay kumar', 'sholingar', '9585529918', '958435974358', 'vijay@gmail.com', '2023-11-03'),
(19, 17, 'monish', 'ponnai', '7598512950', '58947596854', 'monish@gmail.com', '2023-11-03'),
(20, 17, 'madara', 'arcot', '9685745896', '687456895745', 'madara@gmail.com', '2023-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_detail`
--

DROP TABLE IF EXISTS `vehicle_detail`;
CREATE TABLE IF NOT EXISTS `vehicle_detail` (
  `vid` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `vname` varchar(20) NOT NULL,
  `vhno` varchar(30) NOT NULL,
  `vtype` varchar(30) NOT NULL,
  `vmodel` varchar(30) NOT NULL,
  `pid` int NOT NULL,
  `ccost` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_detail`
--

INSERT INTO `vehicle_detail` (`vid`, `uid`, `vname`, `vhno`, `vtype`, `vmodel`, `pid`, `ccost`, `date`) VALUES
(15, 14, 'Honda', 'tn 24 a 3658', '2', 'splender', 17, '1100', '2023-10-24'),
(16, 16, 'Ktm', 'tn 87 a3658 ', '2', 'duke', 17, '500', '2023-10-24'),
(17, 17, 'MT', 'tn 25 b 2001', '2', 'fasino', 17, '600', '2023-11-02'),
(18, 18, 'duke', 'tn 02 a 4455', '2', 'ktm', 17, '1700', '2023-11-03'),
(19, 19, 'hero honda', 'tn 05 s 1478', '2', 'splender', 17, '1900', '2023-11-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
