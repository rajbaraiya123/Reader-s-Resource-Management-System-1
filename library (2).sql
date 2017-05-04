-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 04:59 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(120) DEFAULT NULL,
  `phno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `id`, `password`, `email`, `image`, `phno`) VALUES
(0, 'raj1', 'raj1', 'raj.rk.rb@gmail.com', NULL, 8976578);

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE IF NOT EXISTS `admin1` (
`uid` int(11) NOT NULL,
  `id` varchar(44) NOT NULL,
  `password` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `image` varchar(44) NOT NULL,
  `phno` int(111) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`uid`, `id`, `password`, `email`, `image`, `phno`) VALUES
(1, 'admin1', 'admin1', 'raj.rk.rb@gmail.co', '', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member1`
--

CREATE TABLE IF NOT EXISTS `member1` (
`uid` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(120) DEFAULT NULL,
  `phno` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member1`
--

INSERT INTO `member1` (`uid`, `id`, `password`, `email`, `image`, `phno`) VALUES
(1, 'raj', '1234', 'raj.rk.rb@gmail.com', 'userimage/2415.jpg', 323231),
(2, 'rjjj', '3', 'vraj@gmail.com', 'userimage/rsz_1download.jpg', 123345666),
(4, 'jk', '1234', 'vrajrakesh@gmail.com', 'userimage/f8ff188d-8ecd-463d-9172-ba2d6caf1077.jpg', 456643),
(5, 'keval123', '12345', 'kevalchauhan81@gmail.com', 'Upload/IMG_20170102_125043_HDR.jpg', 2147483647),
(6, 'rajbaraiya', '98', 'rajbaraiya277@gmail.com', 'Upload/IMG_20160927_132356.jpg', 9849),
(7, 'sanket', '982440', 'sanket@gmail.com', 'Upload/IMG_20170102_125223_HDR.jpg', 98388348);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `phno` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `id`, `password`, `email`, `image`, `phno`) VALUES
(3, 'raj123', '123', 'raj.rk.rb@gmail.com', 'userimage/16427385_954683214662935_778364872668240', 937384748),
(6, 'ra1', 'rrr', 'rajbaraiya277@gmail.com', 'userimage/f8ff188d-8ecd-463d-9172-ba2d6caf1077.jpg', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member1`
--
ALTER TABLE `member1`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `email_2` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member1`
--
ALTER TABLE `member1`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
