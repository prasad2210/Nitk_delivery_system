-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 04:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `regid` varchar(50) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `regid`, `subject`) VALUES
(1, '', '', '0', ''),
(2, '1', '1', '1', '1'),
(3, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `store_name` varchar(30) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `exp_date` date NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `username`, `store_name`, `prod_name`, `quantity`, `exp_date`, `price`) VALUES
(1, 'Mayuri', 'Mayuri Footware', 'Hills', 10, '2020-06-12', 500),
(2, 'Mayuri', 'Mayuri Footware', 'Sandal', 20, '2020-06-13', 100),
(3, 'Mayuri', 'Mayuri Footware', 'Chappal', 10, '2020-06-13', 150),
(4, 'Mayuri', 'Mayuri Jewellery', 'Neckless', 2, '2020-06-06', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `store_name` varchar(30) NOT NULL,
  `discription` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `username`, `store_name`, `discription`) VALUES
(2, 'Mayuri', 'Mayuri Cloths', 'jnjhfrwt5fhb\r\nnhftydvm\r\nnbvgfteehyv'),
(3, 'Mayuri', 'Mayuri Garments', ',kjytetyfvhc\r\njnckjsgds,jb\r\nmdgngfhgchf'),
(4, 'Mayuri', 'Mayuri Arts', 'jbjhjeyhtd\r\nmnbyjdty\r\nnbbvthd'),
(5, 'Mayuri', 'Mayuri Footware', 'mbjfymgnm\r\nmbnjf\r\nmnbjtd\r\nmn bjgf\r\nnmbf'),
(6, 'Mayuri', 'Mayuri Jewellery', 'nbvhtdytf\r\nmbyt\r\nnby\r\nsdcsd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `category` enum('s','c') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `category`, `email`, `password`, `username`) VALUES
(4, 'Mayuri', 'Mandave', 's', 'mayu54mandave@gmail.com', 'Mayu', 'Mayuri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
