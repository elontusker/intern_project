-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 19, 2023 at 11:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `website` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `phone`, `website`) VALUES
(1, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ewrewf'),
(2, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ewrewf'),
(3, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ewrewf'),
(4, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ewrewf'),
(5, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ewrewf'),
(6, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ewrewf'),
(7, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ewrewf'),
(8, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ergrg'),
(9, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ergrg'),
(10, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'ergrg'),
(12, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'reyrhtrh'),
(13, 'Pavan S', 'pavanpuvan2003@gmail.com', 989342234, 'reyrhtrh'),
(14, 'Tejaswi', 'ts@gmail.com', 737382920, 'ts.com'),
(15, 'Tejaswi', 'ts@gmail.com', 737382920, 'ts.com'),
(16, 'Tejaswi', 'ts@gmail.com', 737382920, 'ts.com'),
(17, 'Tejaswi', 'ts@gmail.com', 737382920, 'ts.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
