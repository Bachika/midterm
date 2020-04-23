-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 05:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `englishdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `sityva` text NOT NULL,
  `targmani` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `sityva`, `targmani`) VALUES
(1, 'dog', 'ძაღლი'),
(2, 'cat', 'კატა'),
(3, 'book', 'წიგნი'),
(8, 'cup', 'ჭიქა'),
(9, 'house', 'სახლი'),
(10, 'charger', 'დამტენი'),
(11, 'box', 'ყუთი'),
(12, 'finger', 'თითი'),
(13, 'head', 'თავი'),
(14, 'eyes', 'თვალები'),
(15, 'bag', 'ჩანთა');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
