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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `full_name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `isDriver` varchar(5) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`full_name`, `username`, `email`, `password`, `phone`, `isDriver`, `picture`) VALUES
('hisham', 'icum', 'me@icum.com', 'icum', '087756666666', '', ''),
('Irfan', 'irfan', 'me@irfan.com', 'irfan', '087756666666', '', ''),
('ivan', 'ivan', 'me@ivan.com', 'ivan', '8899899999999', 'Yes', ''),
('Rio Dwi Putra Perkasa', 'perkasaid', 'dwiputra.rio@gmail.com', '135sengonfc', '087756050060', '', ''),
('royyan', 'roy', 'me@royan.com', 'roy', '123456789', '', ''),
('rio', 'zaza', 'jdjfhd@SJJ', '123', 'II9I09I9', '', ''),
('Aziz', 'zizi', 'gh@zizi.com', 'zizi', '087654321', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `full_name` (`full_name`,`username`,`email`,`password`,`phone`),
  ADD UNIQUE KEY `full_name_2` (`full_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
