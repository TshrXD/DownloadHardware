-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 02:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `downloadhardware`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` mediumtext NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Denki', 'password'),
(2, 'YO', 'ggwp'),
(3, 'ppap', 'ppap');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomky`
--

CREATE TABLE `tblcustomky` (
  `id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `layout` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `switch` varchar(255) NOT NULL,
  `keycap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcustomky`
--

INSERT INTO `tblcustomky` (`id`, `size`, `layout`, `color`, `switch`, `keycap`) VALUES
(5, 'full', 'windows', 'black', 'yellow', 'red');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustompc`
--

CREATE TABLE `tblcustompc` (
  `id` int(11) NOT NULL,
  `mbord` varchar(255) NOT NULL,
  `psor` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `ssd` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `smps` varchar(255) NOT NULL,
  `cabi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcustompc`
--

INSERT INTO `tblcustompc` (`id`, `mbord`, `psor`, `ram`, `ssd`, `gpu`, `smps`, `cabi`) VALUES
(5, 'msi', 'intel', '16 gb ', '500 gb ', 'gt 710 ', '550W', 'Corrsir'),
(7, 'msi', 'Ryzen 7', '16 gb ', '500 gb ', 'RTX 3090', '550W', 'DEEPCOOL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcustomky`
--
ALTER TABLE `tblcustomky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcustompc`
--
ALTER TABLE `tblcustompc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcustomky`
--
ALTER TABLE `tblcustomky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcustompc`
--
ALTER TABLE `tblcustompc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
