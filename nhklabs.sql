-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2024 at 05:08 PM
-- Server version: 8.0.39-0ubuntu0.22.04.1
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhklabs`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `product` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rdate` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `ddate` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `less` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `paid` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `due` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `bill` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cssd4` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cssd3` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cssd1` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cssd2` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cdate` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `product`, `rdate`, `ddate`, `type`, `address`, `less`, `paid`, `due`, `color`, `bill`, `cssd4`, `cssd3`, `cssd1`, `cssd2`, `cdate`) VALUES
(6, 'Anoar kaka', '01728052552', 'Digital Display IC Service', '2024-10-31', '2024-11-03', 'Delivered', 'Bahispotipur , Ataikula , Pabna', '', '100', '300', 'd900ff', '400', NULL, 'none', NULL, 'none', '2024-11-03'),
(7, 'Ripon', '', 'Blender ', '2024-10-27', '2024-11-09', 'Delivered', 'Bhobanipur', '00', '500', '00', 'd900ff', '500', NULL, 'none', NULL, 'none', '2024-11-03'),
(8, 'Roksana Apu', '', 'Big Fan', '2024-10-24', '', 'pending', 'Luhyagara ,ataikula ,pabna', '', '', '', 'fca605', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Moni Master', '', 'spker unit', '2024-11-03', '2024-11-09', 'Delivered', 'bhobanipur ', '220', '220', '00', 'd900ff', '220', NULL, 'none', NULL, 'none', '2024-11-04'),
(10, 'moni master', '', 'spker unit model - 7561H', '', '2024-11-09', 'Delivered', 'bhoabnipur ', '220', '220', '00', 'd900ff', '220', NULL, 'none', NULL, 'none', '2024-11-04'),
(11, 'Md. Shakil sir', '01885590357', 'home Service', '2024-11-04', '2024-11-05', 'Delivered', 'Gongarampur, Ataikula , Pabna', '500', '1700', '800', 'd900ff', '3000', NULL, 'none', NULL, 'none', '2024-11-05'),
(12, 'Md. Shakil sir', '01885590357', '20W Led Blub', '2024-11-06', '', 'pending', 'Gongarampur, Ataikula , Pabna', '00', '00', '00', 'fca605', '00', NULL, NULL, NULL, NULL, NULL),
(13, 'Md. Moni Master', '01797852761', '18W Lemp led blup', '', '', 'pending', 'bhobanipur, Ataikula ,Pabna', '00', '00', '00', 'fca605', '00', NULL, NULL, NULL, NULL, NULL),
(14, 'Md. Shakil sir', '01885590357', 'small dc light', '2024-11-08', '', 'pending', 'Gongarampur, Ataikula , Pabna', '00', '00', '00', 'fca605', '00', NULL, NULL, NULL, NULL, NULL),
(15, 'Md. Moni Master', '01797852761', '9W red led ', '2024-11-09', '', 'pending', 'bhobanipur, Ataikula ,Pabna', '00', '00', '00', 'fca605', '00', NULL, NULL, NULL, NULL, NULL),
(16, 'Md. Moni Master', '01797852761', '9W red led', '2024-11-09', '', 'Success', 'bhobanipur, Ataikula ,Pabna', '00', '00', '20', '10c22b', '20', NULL, 'none', NULL, NULL, '2024-11-09'),
(17, 'Md. Moni Master', '01797852761', '9W greend ', '2024-11-09', '', 'Success', 'bhobanipur, Ataikula ,Pabna', '00', '00', '50', '10c22b', '50', NULL, 'none', NULL, NULL, '2024-11-09'),
(18, 'Md. Moni Master', '01797852761', '9w Blue Led', '2024-11-09', '', 'pending', 'bhobanipur, Ataikula ,Pabna', '00', '00', '00', 'fca605', '00', NULL, NULL, NULL, NULL, NULL),
(19, 'Md. Moni Master', '01797852761', '9w blue led', '2024-11-09', '', 'pending', 'bhobanipur, Ataikula ,Pabna', '00', '00', '0', 'fca605', '00', NULL, NULL, NULL, NULL, NULL),
(21, 'Md Hasmoat Ali', '01770601214', 'Demo ', '2024-11-10', '2024-11-10', 'Delivered', 'Ataikula', '20', '300', '80', 'd900ff', '400', NULL, 'none', NULL, 'none', '2024-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `customersdata`
--

CREATE TABLE `customersdata` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customersdata`
--

INSERT INTO `customersdata` (`id`, `username`, `phone`, `address`) VALUES
(1, 'Md. Shakil sir', '01885590357', 'Gongarampur, Ataikula , Pabna'),
(2, 'Anoar kaka', '01728052552', 'Bahispotipur , Ataikula , Pabna'),
(3, 'Md. Moni Master', '01797852761', 'bhobanipur, Ataikula ,Pabna'),
(4, 'Md Hasmoat ', '', ''),
(5, 'Md Hasmoat Ali', '01770601214', 'Ataikula');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customersdata`
--
ALTER TABLE `customersdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customersdata`
--
ALTER TABLE `customersdata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
