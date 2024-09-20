-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2024 at 07:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addcustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `credit` bigint(50) NOT NULL,
  `bill` bigint(50) NOT NULL,
  `DateTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`name`, `address`, `phone`, `credit`, `bill`, `DateTime`) VALUES
('Biyash shreshtha', 'Chitwan', 9745654746, 3000, 123654, '2024-04-30 05:29:43.216435'),
('Raju gupta', 'mahendranagar', 9812042867, 9000, 56243, '2024-02-16 15:38:20.816296'),
('Rajaram Sharma', 'Bateshawar-04, Dhanusha', 9819647795, 5000, 12554, '2024-02-12 14:53:15.494919'),
('shushil ', 'kathmandu', 9860382626, 2000, 885552, '2024-04-29 08:06:39.915500'),
('Aadit sharma', 'kathmandu', 9863034803, 6000, 856211, '2024-04-30 05:39:43.331403');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `phone` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9863034804;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
