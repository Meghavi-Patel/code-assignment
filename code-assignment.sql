-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 07:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code-assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `logintime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rid` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `uploadimg` varchar(100) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `uname`, `dob`, `age`, `phone`, `pass`, `address`, `uploadimg`, `emailid`, `create_datetime`) VALUES
(52, 'Meghavi', '1996-03-05', 24, '709762990', 'Megha@123', 'datt nivas palsana surat', 'https://business.bing.com/api/v3/search/person/photo?id=da98b105-dfb3-4b10-ac14-08ae2942ad5f', 'patelmeghavi.05@gmai', '0000-00-00 00:00:00'),
(53, 'Meghavi', '1996-03-05', 24, '709762990', 'Megha@123', 'datt nivas palsana surat', 'https://business.bing.com/api/v3/search/person/photo?id=da98b105-dfb3-4b10-ac14-08ae2942ad5f', 'patelmeghavi.05@gmai', '0000-00-00 00:00:00'),
(54, 'Meghavi K', '1994-09-26', 25, '+917096762990', '17c1eb805f782ec09e6ba5af68e29312', 'datt nivas', 'C:xampp	mpphpDAB1.tmp', 'meghavipatel.53@gmai', '2020-07-25 20:41:16'),
(55, 'Meghavi K', '1994-09-26', 25, '+917096762990', '17c1eb805f782ec09e6ba5af68e29312', 'datt nivas', 'C:xampp	mpphp53BA.tmp', 'meghavipatel.53@gmai', '2020-07-25 20:41:47'),
(56, 'Meghavi K', '1993-09-26', 26, '7096762990', '17c1eb805f782ec09e6ba5af68e29312', 'datt nivas', 'C:xampp	mpphp83CF.tmp', 'patelmeghavi.05@gmai', '2020-07-25 20:43:05'),
(57, 'Meghavi K', '2019-02-05', 1, '7096762990', '17c1eb805f782ec09e6ba5af68e29312', 'datt nivas', 'C:xampp	mpphp9381.tmp', 'patelmeghavi.05@gmai', '2020-07-25 20:46:25'),
(58, 'Meghavi K', '2019-02-05', 1, '7096762990', '17c1eb805f782ec09e6ba5af68e29312', 'datt nivas', 'C:xampp	mpphp9A29.tmp', 'patelmeghavi.05@gmai', '2020-07-25 20:46:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
