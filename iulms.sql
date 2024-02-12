-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 02:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iulms`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Id` int(12) NOT NULL,
  `First Name` varchar(14) NOT NULL,
  `Middle Name` varchar(22) NOT NULL,
  `Last Name` varchar(22) NOT NULL,
  `Email Address` varchar(22) NOT NULL,
  `password` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Id`, `First Name`, `Middle Name`, `Last Name`, `Email Address`, `password`) VALUES
(72, 'Mahnoor', 'awais', 'Shaikh', 'hamza@gmail.com', 2147483647),
(75, 'Awais', 'baig', 'khan', 'saghsaf@gmail.com', 33333),
(76, 'Awais', 'awais', 'Shaikh', 'Awaisshaikh020@gmail.c', 2147483647),
(77, 'Awais', 'Ahmed', 'Shaikh', 'Awaisshaikh020@gmail.c', 2147483647),
(78, 'shaikh', 'Ahmed', 'Shaikh', 'Awaisshaikh020@gmail.c', 2147483647),
(79, 'uzair', 'Ahmed', 'Shaikh', 'Awaisshaikh020@gmail.c', 2147483647),
(80, 'yumna', 'shaikh', 'Shaikh', 'saghsaf@gmail.com', 2147483647),
(82, 'yumna', 'Ahmed', 'Shaikh', 'saghsaf@gmail.com', 2147483647),
(85, 'yumna', 'ali', 'Khan', 'saghsaf@gmail.com', 565656),
(88, 'Aliza', 'khan', 'zada', 'saghsaf@gmail.com', 2323),
(89, 'hadi', 'Ahmed', 'Shaikh', 'saghsaf@gmail.com', 6765);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `Id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
