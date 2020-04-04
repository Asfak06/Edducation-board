-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 04:47 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sl` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `roll` int(20) NOT NULL,
  `board` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `bang_o` float NOT NULL,
  `bang_g` varchar(10) NOT NULL,
  `bang_gp` float NOT NULL,
  `eng_o` float NOT NULL,
  `eng_g` varchar(10) NOT NULL,
  `eng_gp` float NOT NULL,
  `math_o` float NOT NULL,
  `math_g` varchar(10) NOT NULL,
  `math_gp` float NOT NULL,
  `ss_o` float NOT NULL,
  `ss_g` varchar(10) NOT NULL,
  `ss_gp` float NOT NULL,
  `s_o` float NOT NULL,
  `s_g` varchar(10) NOT NULL,
  `s_gp` float NOT NULL,
  `r_o` float NOT NULL,
  `r_g` varchar(10) NOT NULL,
  `r_gp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `pass`, `phone`, `img`) VALUES
(4, 'Istehsun', 'admin', 'admin', '01743310181', '896a46be75feee33c5406327da705c98.jpg'),
(5, 'Web', 'web', 'web', '018433122', 'bb51c635ae3be456e84504fa33b6017c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
