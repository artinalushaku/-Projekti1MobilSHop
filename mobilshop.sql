-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 11:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bleje`
--

CREATE TABLE `bleje` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bleje`
--

INSERT INTO `bleje` (`id`, `name`, `price`, `discount`, `image`) VALUES
(2, 'Apple iPhone 11, 64GB, Black', 549.00, 20, 'iphone.webp'),
(1, 'Apple MacBook Air 13.3', 999.00, 100, 'download.webp'),
(1, 'Apple MacBook Air 13.3', 999.00, 100, 'download.webp'),
(2, 'Apple iPhone 11, 64GB, Black', 549.00, 20, 'iphone.webp'),
(1, 'Apple MacBook Air 13.3', 999.00, 100, 'download.webp'),
(2, 'Apple iPhone 11, 64GB, Black', 549.00, 20, 'iphone.webp'),
(3, 'Kufje HyperX Cloud II', 29.00, 10, 'hyper.webp'),
(1, 'Apple MacBook Air 13.3', 999.00, 100, 'download.webp'),
(1, 'Apple MacBook Air 13.3', 999.00, 100, 'download.webp'),
(1, 'Apple MacBook Air 13.3', 999.00, 100, 'download.webp'),
(1, 'Apple MacBook Air 13.3', 999.00, 100, 'download.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`fname`, `lname`, `email`, `subject`) VALUES
('Artina', 'Lushaku', 'al64778@ubt-uni.net', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `produktet`
--

CREATE TABLE `produktet` (
  `produktet_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` decimal(5,0) NOT NULL,
  `produktet_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produktet`
--

INSERT INTO `produktet` (`produktet_id`, `name`, `price`, `discount`, `produktet_image`) VALUES
(1, 'Apple MacBook Air 13.3', 999, 100, 'download.webp'),
(2, 'Apple iPhone 11, 64GB, Black', 549, 20, 'iphone.webp'),
(3, 'Kufje HyperX Cloud II', 29, 10, 'hyper.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
