-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 03, 2021 at 06:27 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_lrg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matches`
--

CREATE TABLE `tbl_matches` (
  `id` int(10) NOT NULL,
  `names` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `refs` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_matches`
--

INSERT INTO `tbl_matches` (`id`, `names`, `location`, `refs`, `date`) VALUES
(1, 'Senators at Leafs', 'Soctiabank Arena', 'Thomas Chabot\r\nErik Gudbranson\r\nBrady Tkackuk', 'March 31st 2021'),
(2, 'Senators at Canadiens', 'Centre Bell', 'Thomas Chabot\r\nErik Gudbranson\r\nBrady Tkackuk', 'April 2nd 2021'),
(3, 'Senators at Canucks', 'Rogers Arena', 'Thomas Chabot\r\nErik Gudbranson\r\nBrady Tkackuk', 'April 4th 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_ip`) VALUES
(1, 'current name', 'newname', 'password', 'abc@gmail.com', '::1'),
(2, 'new', 'hien', '345', 'nguyenalex1110@gmail.com', '::1'),
(26, 'Hien Nguyen', 'admin', 'pass', 'xuanhien1110@gmail.com', 'no'),
(27, 'New Acc', 'admin', '12345', 'xuanhien1110@gmail.com', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_matches`
--
ALTER TABLE `tbl_matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_matches`
--
ALTER TABLE `tbl_matches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
