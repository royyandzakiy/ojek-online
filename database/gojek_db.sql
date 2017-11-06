-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 10:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pick_point` varchar(256) NOT NULL,
  `dest_point` varchar(256) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pengguna`, `id_driver`, `tanggal`, `pick_point`, `dest_point`, `rating`, `comment`) VALUES
(1, 4, 1, '2017-10-06', 'dago asri', 'tubagus ismail', 4, 'mantap nih jiwa mantap'),
(2, 4, 2, '2017-10-06', 'dago giri', 'dago asri', 5, 'dahsyat tenan'),
(3, 7, 2, '2017-10-07', 'tubagus ismail', 'safs', 3, 'jldsjdfls'),
(4, 7, 0, '2017-10-07', '', '', 3, 'jldsjdfls'),
(5, 7, 2, '2017-10-07', 'tubagus ismail', 'a', 4, 'mantap'),
(6, 7, 1, '2017-10-07', 'tubagus ismail', 'sdaf', 2, 'cupu'),
(7, 7, 1, '2017-10-07', 'tubagus ismail', 'afads', 4, 'asik mantap'),
(8, 7, 1, '2017-10-07', 'tubagus ismail', 'sdf', 4, ''),
(9, 7, 1, '2017-10-07', 'tubagus ismail', 'sdff', 4, ''),
(10, 7, 1, '2017-10-07', 'tubagus ismail', 'sdfsdf', 4, ''),
(11, 7, 2, '2017-10-07', 'tubagus ismail', 'dsf', 4, 'asdfds'),
(12, 7, 2, '2017-10-07', 'tubagus ismail', 'dsfsd', 3, 'adsfafs'),
(13, 7, 1, '2017-10-07', 'tubagus ismail', 'sdfs', 4, 'sadfdsa'),
(14, 7, 1, '2017-10-07', '', '', 4, 'sadfdsasadf'),
(15, 7, 1, '2017-10-07', 'tubagus ismail', 'fwf', 4, 'sadfds'),
(16, 7, 2, '2017-10-07', 'tubagus ismail', 'sadf', 4, 'sadfds'),
(17, 7, 2, '2017-10-07', 'tubagus ismail', 'dsf', 4, ''),
(18, 7, 1, '2017-10-07', 'tubagus ismail', 'dsfs', 4, ''),
(19, 7, 1, '2017-10-07', 'tu', 'tubagus ismail', 4, 'sf');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telefon` varchar(256) NOT NULL,
  `is_driver` tinyint(1) NOT NULL,
  `profpic` varchar(500) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `pass`, `nama`, `email`, `telefon`, `is_driver`, `profpic`, `is_active`) VALUES
(1, 'mantapjiwa', 'mantapjiwa', 'mantap', 'mantap@jiwa.com', '00808080808', 1, 'mantap.jiwa', 1),
(2, 'asikmantap', 'asikmantap', 'asik', 'asik@mantap.com', '9080808080', 1, 'asik.mantap', 1),
(3, 'jiwaentap', 'jiwaentap', 'jiwa', 'jiwa@entap', '087070700708', 1, 'jiwa.entap', 0),
(4, 'orangbiasa', 'orangbiasa', 'orang', 'orang@biasa.com', '0807070708080', 0, 'orang.biasa', 0),
(7, 'roy', 'roy', 'roy', 'roy@roy.com', '08080808080', 1, 'roy.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prefloc`
--

CREATE TABLE `prefloc` (
  `id_prefloc` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `location` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prefloc`
--

INSERT INTO `prefloc` (`id_prefloc`, `id_driver`, `location`) VALUES
(1, 1, 'dago asri'),
(2, 2, 'tubagus ismail'),
(3, 1, 'tubagus ismail');

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

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prefloc`
--
ALTER TABLE `prefloc`
  ADD PRIMARY KEY (`id_prefloc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `prefloc`
--
ALTER TABLE `prefloc`
  MODIFY `id_prefloc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
