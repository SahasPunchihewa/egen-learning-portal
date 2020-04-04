-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 03, 2020 at 06:09 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `egen`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `docId` int(11) NOT NULL,
  `docTitle` varchar(255) NOT NULL,
  `docGrade` int(11) NOT NULL,
  `docType` varchar(10) NOT NULL,
  `docLink` varchar(255) NOT NULL,
  `docDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`docId`, `docTitle`, `docGrade`, `docType`, `docLink`, `docDate`) VALUES
(1, 'Sample File', 2020, 'paper', '', '2020/04/03'),
(2, 'OSI and TCP/IP Model', 2020, 'vid', 'https://www.youtube.com/watch?v=ZNpIr8X_Q4Y', '2020/04/03'),
(3, 'Computer Systems - MCQ 1', 2020, 'tute', 'https://docs.google.com/forms/d/1D8hePjxoLNoSNOx3TiSpC5pjybxxCZmezDcaiAbO7fw/viewform?edit_requested=true', '2020/04/03'),
(4, 'Sample File', 2020, 'paper', '', '2020/04/03'),
(5, 'OSI and TCP/IP Model', 2020, 'vid', 'https://www.youtube.com/watch?v=ZNpIr8X_Q4Y', '2020/04/03'),
(6, 'Computer Systems - MCQ 1', 2020, 'tute', 'https://docs.google.com/forms/d/1D8hePjxoLNoSNOx3TiSpC5pjybxxCZmezDcaiAbO7fw/viewform?edit_requested=true', '2020/04/03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `userMail` varchar(255) NOT NULL,
  `userPassCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userType`, `userMail`, `userPassCode`) VALUES
(1, 'Kushan Shamika', '2020', 'shamikakushan@gmail.com', '123'),
(2, 'Kushan Shamika', 'admin', 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`docId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `docId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
