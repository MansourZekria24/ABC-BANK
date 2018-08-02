-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 03:12 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `totaltra`
--

CREATE TABLE `totaltra` (
  `tratype` varchar(50) NOT NULL,
  `amt` int(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totaltra`
--

INSERT INTO `totaltra` (`tratype`, `amt`, `id`) VALUES
('withdraw', 500, 15),
('deposit', 5000, 15),
('withdraw', 1000, 15),
('withdraw', 1, 15),
('withdraw', 1000, 15),
('withdraw', 1001, 15),
('withdraw', 1000, 15),
('deposit', 2000, 15),
('withdraw', 990, 15),
('withdraw', 10, 15),
('deposit', 999, 15),
('deposit', 2, 15),
('withdraw', 500, 15),
('withdraw', 100, 15),
('withdraw', 399, 15),
('withdraw', 0, 1),
('deposit', 9, 15),
('withdraw', 9, 15),
('deposit', 1000, 15),
('withdraw', 0, 15),
('withdraw', 1, 15),
('deposit', 1000, 15),
('deposit', 1000, 15),
('withdraw', 1000, 15),
('deposit', 2000, 15),
('withdraw', 1000, 15),
('withdraw', 2999, 15),
('deposit', 0, 15),
('deposit', 2, 15),
('withdraw', 1, 15),
('deposit', 1000, 16),
('withdraw', 3000, 16),
('deposit', 1000, 1),
('withdraw', 400, 1),
('deposit', 4000, 18),
('deposit', 4000, 19),
('withdraw', 200, 19),
('deposit', 4000, 19),
('deposit', 400, 19),
('deposit', 22, 19),
('deposit', 22, 19),
('deposit', 22, 19),
('deposit', 22, 19),
('deposit', 1, 19),
('deposit', 1, 19),
('deposit', 1, 19),
('deposit', 0, 19),
('deposit', 11, 19),
('deposit', 11, 19),
('deposit', 11, 19),
('deposit', 11, 19),
('deposit', 11, 19),
('deposit', 11, 19),
('deposit', 11, 19),
('deposit', 11, 19),
('withdraw', 11, 19),
('withdraw', 11, 19),
('withdraw', 11, 19),
('withdraw', 11, 19),
('withdraw', 11, 19),
('withdraw', 11, 19),
('withdraw', 11, 19),
('withdraw', 11, 19),
('deposit', 200, 19),
('deposit', 200, 19),
('deposit', 1, 19),
('deposit', 11, 19),
('withdraw', 200, 19),
('deposit', 7000, 19),
('withdraw', 499, 14),
('withdraw', 11, 1),
('deposit', 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Toid` int(50) NOT NULL,
  `Fromid` int(50) NOT NULL,
  `amt` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Toid`, `Fromid`, `amt`) VALUES
(7, 4, 500),
(1, 14, 5000),
(14, 1, 8000),
(14, 1, 4000),
(1, 14, 5000),
(0, 1, 0),
(14, 1, 4000),
(14, 15, 499),
(1, 15, 2000),
(15, 15, 2000),
(15, 15, 100000),
(17, 16, 2000),
(1, 19, 400),
(1, 19, 400),
(1, 19, 11),
(1, 19, 500),
(14, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `intbalans` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `intbalans`) VALUES
(1, 'mehul', 'mehul', 3400),
(14, 'icreate', '123', 5000),
(15, 'mansour', 'zekria', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profile_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `email`, `name`, `address`, `profile_pic`) VALUES
(1, '12345', '12345', 'testing@gmail.com', 'Mansour', 'bla bla', ''),
(2, 'Zekria', '04963d1aed7519a6886704647861feda9ee87248d06b21c796850f56c16f6811', 'teting@gmail.com', 'Zekria', '', ''),
(3, 'staff1', '010f4928749bd109657b1b4ef213359ac420678c72932b0d5bc110076afc52f7', 'testingstaff@gmail.com', 'testing', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
