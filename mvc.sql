-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 08:58 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `common_stock`
--

CREATE TABLE `common_stock` (
  `id` int(4) NOT NULL,
  `quote` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `common_stock`
--

INSERT INTO `common_stock` (`id`, `quote`, `price`) VALUES
(1, 'sdfs', 231.00),
(2, 'dog', 100.00),
(3, 'cat', 500.00),
(4, 'hotdog', 15.00),
(5, 'gooo', 555.00),
(6, 'popo', 12.50),
(7, 'tttt', 2222.00),
(8, 'nnn', 100.00),
(9, 'lol', 555.00),
(10, 'vvv', 1.00),
(11, 'mmmm', 23.00),
(12, 'trtr', 65.00),
(13, 'ewew', 54.00),
(14, 'qwer', 879.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `common_stock`
--
ALTER TABLE `common_stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `common_stock`
--
ALTER TABLE `common_stock`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
