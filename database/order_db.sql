-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 08:36 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gojek_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_db`
--

CREATE TABLE `order_db` (
  `order_date` date NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `picking_point` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `driver_name` varchar(25) NOT NULL,
  `rating` int(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_db`
--

INSERT INTO `order_db` (`order_date`, `user_name`, `picking_point`, `destination`, `driver_name`, `rating`, `comment`) VALUES
('2017-10-06', 'perkasaid', 'cisitu', 'ITB', 'irfan', 5, 'mantab, terbaik, gila, super fast, sangat memuaskan, pakai moge lagi, baru kali ini pakai moge hehe'),
('2017-10-05', 'zizi', 'ITB', 'Jl. Sangkuriang Dalam No. 55', 'perkasaid', 5, 'mantaaabbbb, baru kali ini naik ojek, pakai odong-odong, sekalian jalan, sekalian bernyanyi.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
