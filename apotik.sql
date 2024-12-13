-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 08:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `seller` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `pw`, `seller`) VALUES
(9, 'muhammad', '$2y$10$wHdc4bLWNbVZ90A2C.77UuB8JLtE2.RigrtXxuGatyxz7ubhriZEy', 1),
(10, 'sajad', '$2y$10$hfkKLvsWJ/OvxQS/0Q.dWOfnfChnw9Y7bhZ/330TI9MzXg5JsG2L2', 1),
(11, 'fairus', '$2y$10$sxq8hWoXuf8dVj5rOWm7B.2VOp23V8DKlI6aT/af/oj2QejzXeOnC', 0),
(12, 'athar', '$2y$10$JNUZoHdlXhoARfobdX946OMPiM3t8bL22.bC.2RnWru96jpxTzMdK', 0),
(13, 'fadhel', '$2y$10$UyTpljLHfbL.qwShx.fhPe01o2MeuANV.571fQoXTkY4siP9NgL1S', 0),
(14, 'shifan', '$2y$10$dA9kYGpHUUblz0ohRB67juM2rMHTVx4LdNZmdmg.oRFLI2qe1AqHW', 1),
(15, 'ibnu', '$2y$10$fSFBSO787D9IFpgtjnv6NOzYD9GIZYL9agM3uScfnQ.popj48XJ0G', 0),
(16, 'afsargg', '$2y$10$o6QU2xwTseSJHcmtCuB9meEqi8U91LX0KGv5jDHPDndpXzqud7xh6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `descript` varchar(10000) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `descript` varchar(10000) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `descript`, `nama`) VALUES
(16, 'NIKE AIR', '1000.000000000', 'LIMITED EDITON', 'MYSHOES.COM ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
