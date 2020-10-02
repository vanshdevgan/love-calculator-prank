-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 10:17 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lovequiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `secret` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `secret`, `username`, `userid`) VALUES
(1, 'k0wa7nohj', 'ABC', 'k0wa7nohs'),
(2, '93tt047es', 'Vansh', '0m44qtx9h'),
(3, 'o0lr56ne1', 'Vansh', 'i5vu54u95'),
(4, '66juaj87r', 'Vansh', 'six3hgowk'),
(5, 'h35w1ugtg', 'Vansh', 'h15q11m8l'),
(6, 'u998b5257', 'Vansh', '3brk0csn5'),
(7, 'j441b4t53', 'Vansh', '2010wyxr7'),
(8, 'j441b4t53', 'Vansh', '2010wyxr7'),
(9, 'ls5t9d17e', 'Vansh', 'dgl9xg350'),
(10, 'e2qpp4ai5', 'Devgan', '65p0onvtl');

-- --------------------------------------------------------

--
-- Table structure for table `usersdata`
--

CREATE TABLE `usersdata` (
  `secret` varchar(255) NOT NULL,
  `victim` varchar(255) NOT NULL,
  `crush` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersdata`
--

INSERT INTO `usersdata` (`secret`, `victim`, `crush`) VALUES
('u998b5257', 'Vansh', 'Dvegan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
