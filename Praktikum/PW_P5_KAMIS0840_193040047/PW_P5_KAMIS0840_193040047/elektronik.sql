-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 12:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040086`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(8) NOT NULL,
  `photo` varchar(10) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `merek` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `photo`, `jenis`, `merek`, `type`, `harga`) VALUES
(1, 'Ip11.png', 'Handphone', 'Apple', 'Iphone 11 Pro 512gb', 'Rp.32.000.000'),
(2, 'Ipad.png', 'Tablet', 'Apple', '12 inch 256gb', 'Rp.14.999.000'),
(3, 'S20.png', 'Handphone ', 'Samsung', 'S20 Ultra', 'Rp.12.000.000'),
(4, 'S6.png', 'Tablet', 'Samsung', 'Tab S6 with S-Pen + Keyboard', 'Rp.11.999.000'),
(5, 'mac.png', 'Laptop', 'Apple', 'Mac Pro', 'Rp.29.999.000'),
(6, 'fold.png', 'Handphone', 'Samsung', 'Galaxy FOLD', 'Rp.23.999.000'),
(7, 'produo.png', 'Laptop', 'Asus', 'Zenbook Pro Duo', 'Rp.29.999.000'),
(8, 'nokia.png', 'Handphone ', 'Nokia', 'Nokia 3310', 'Rp.99.999.000'),
(9, 'x.png', 'Handphone', 'Apple', 'Iphone X 256gb', 'Rp.11.500.000'),
(10, 'xr.png', 'Handphone', 'Apple ', 'Iphone XR 128gb', 'Rp.10.200.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
