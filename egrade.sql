-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 01:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `sass`
--

CREATE TABLE `sass` (
  `sid` int(10) NOT NULL,
  `sucode` varchar(90) NOT NULL,
  `subName` varchar(50) NOT NULL,
  `teacherName` varchar(50) NOT NULL,
  `studName` varchar(90) NOT NULL,
  `sched` varchar(50) NOT NULL,
  `addedBy` varchar(50) NOT NULL,
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_id` int(10) NOT NULL,
  `sec_name` varchar(50) NOT NULL,
  `year_lvl` int(10) NOT NULL,
  `teachersName` varchar(100) NOT NULL,
  `addedBy` varchar(99) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subID` int(10) NOT NULL,
  `subcode` varchar(10) NOT NULL,
  `subName` varchar(90) NOT NULL,
  `schedule` varchar(50) NOT NULL,
  `teachersName` varchar(90) NOT NULL,
  `designatedYear` varchar(99) NOT NULL,
  `addedBy` varchar(99) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MI` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usrtype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `LastName`, `FirstName`, `MI`, `username`, `email`, `password`, `usrtype`) VALUES
(28, 'amaz', 'memes', 't', 'cth', 'cht@blmb4n.ph', '123', 'TEACHER'),
(29, 'solmer', 'lolol', 'm', 'xd', 'ajax@troll.ph', '1234', 'TEACHER'),
(30, 'sample', 'sample', 's', 'sample', 'sample@gmail.com', '123', 'ADMIN'),
(31, 'Godiniez', 'Godas', 'J', 'judes', 'abenasa@ggwp.com', '1234', 'STUDENT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sass`
--
ALTER TABLE `sass`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sass`
--
ALTER TABLE `sass`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sec_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
