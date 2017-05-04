-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 04:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lib1`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`isbn` int(11) NOT NULL,
  `bname` varchar(40) NOT NULL,
  `authname` varchar(40) NOT NULL,
  `category` int(11) NOT NULL,
  `language` int(11) NOT NULL,
  `image` varchar(139) DEFAULT NULL,
  `pdf` varchar(300) DEFAULT NULL,
  `descript` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `bname`, `authname`, `category`, `language`, `image`, `pdf`, `descript`) VALUES
(15, 'dsnkncks', 'sdkmcksdnk', 2, 1, 'userimage/rsz_1download.jpg', 'Upload/nis_akg2.pdf', ' mmmmm'),
(16, 'hh', 'nbn', 2, 1, 'book/16427385_954683214662935_7783648726', 'Upload/english5.txt', 'bvojijv'),
(17, 'kjhkhj', 'kkjhkjh', 3, 3, 'book/IMG_20170102_125445_HDR.jpg', 'Upload/aa.pdf', '<p>jhghgmjhjk</p>'),
(18, 'nj', 'dsnsfj', 10, 5, 'book/Screenshot (17).png', 'Upload/nis_akg1.pdf', '<p>rgrdfffffffffffffff</p>'),
(19, 'greg', 'erggr', 11, 4, 'book/2415.jpg', 'Upload/Cocomo_Example.pdf', '<p>remmgm</p>'),
(20, 'raj2', 'ennenk', 2, 1, 'book/WIN_20160915_10_04_23_Pro.jpg', 'Upload/DBS_Sess_2_QuestionPaper.pdf', '<p>ef</p>'),
(24, 'kjk', 'kljlkjlk', 3, 3, 'book/WIN_20160915_10_04_18_Pro.jpg', 'Upload/8259A.pdf', 'kljlkjjkkl'),
(29, 'kjkjkhkj', 'kljlkjlk', 3, 3, 'book/WIN_20160915_10_04_18_Pro.jpg', 'Upload/8259A.pdf', 'kljlkjjkkl'),
(31, 'sanket', '123', 3, 3, 'book/WIN_20160915_10_04_18_Pro.jpg', 'Upload/SDP_USE_CASE_DIAGRAM For RRMS.pdf', 'kljlkjjkkl'),
(32, 'jk', 'rajbaraiya', 1, 3, 'book/IMG_6947.JPG', 'Upload/os_vsp1.pdf', 'hhjhjhjhjh'),
(33, 'jk1234', 'rajbaraiya', 1, 3, 'book/IMG_6947.JPG', 'Upload/os_vsp1.pdf', 'hhjhjhjhjh'),
(34, 'raj', 'vb', 2, 1, 'book/2415.jpg', 'Upload/LAB6_SeqDiagram_OES#1.pdf', '<p>nnnnnnnnnnnnnnnnnnnnnnn</p>'),
(35, 'r', 'd', 2, 5, 'book/d_201x191.jpg', 'Upload/LAB5_ActivityD#1.pdf', 'name6'),
(36, 'bb', 'dc', 12, 3, 'book/20150831_55e46ad551392.png', 'Upload/LAB5_ActivityD#1.pdf', 'name6'),
(41, 'swaraj', 'swaraj123', 12, 1, 'book/2415.jpg', 'Upload/Control_Word_and_BSR_Mode_Format.pdf', '<p>hhb</p>'),
(44, 'jjf', 'ddf', 3, 1, 'book/IMG_20160929_130815_1.jpg', 'Upload/aa.pdf', 'name6'),
(46, 'social', '123', 3, 1, 'book/IMG_20170102_125536_HDR.jpg', 'Upload/LAB5_ActivityD#2.pdf', 'nnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `uid` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `authname` varchar(30) NOT NULL,
  `category` int(11) NOT NULL,
  `language` int(11) NOT NULL,
  `image` varchar(220) NOT NULL,
  `pdf` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uid`, `isbn`, `bname`, `authname`, `category`, `language`, `image`, `pdf`) VALUES
(0, 15, 'dsnkncks', 'sdkmcksdnk', 2, 1, 'userimage/rsz_1download.jpg', 'Upload/nis_akg2.pdf'),
(1, 41, 'swaraj', 'swaraj123', 12, 1, 'book/2415.jpg', 'Upload/Control_Word_and_BSR_Mode_Format.pdf'),
(6, 36, 'bb', 'dc', 12, 3, 'book/20150831_55e46ad551392.png', 'Upload/LAB5_ActivityD#1.pdf'),
(6, 15, 'dsnkncks', 'sdkmcksdnk', 2, 1, 'userimage/rsz_1download.jpg', 'Upload/nis_akg2.pdf'),
(6, 19, 'greg', 'erggr', 11, 4, 'book/2415.jpg', 'Upload/Cocomo_Example.pdf'),
(6, 35, 'r', 'd', 2, 5, 'book/d_201x191.jpg', 'Upload/LAB5_ActivityD#1.pdf'),
(6, 15, 'dsnkncks', 'sdkmcksdnk', 2, 1, 'userimage/rsz_1download.jpg', 'Upload/nis_akg2.pdf'),
(6, 31, 'sanket', '123', 3, 3, 'book/WIN_20160915_10_04_18_Pro.jpg', 'Upload/SDP_USE_CASE_DIAGRAM For RRMS.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cid` int(11) NOT NULL,
  `cname` varchar(33) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(2, 'Cooking'),
(3, 'Music'),
(12, 'science'),
(1, 'Science & Technology'),
(13, 'Social'),
(10, 'Speritual'),
(11, 'tys');

-- --------------------------------------------------------

--
-- Table structure for table `category1`
--

CREATE TABLE IF NOT EXISTS `category1` (
`lid` int(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category1`
--

INSERT INTO `category1` (`lid`, `lname`) VALUES
(1, 'Cooking'),
(2, 'Science & Technology'),
(3, 'Story Book'),
(4, 'Business'),
(5, 'Art'),
(6, 'Indian-Law'),
(7, 'Love Story'),
(8, 'Computer & Hacking'),
(9, 'History'),
(10, 'Motivational'),
(11, 'Health & Medicine'),
(12, 'Spiritual');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
`lid` int(200) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`lid`, `lname`) VALUES
(1, 'English'),
(3, 'Guajarati'),
(5, 'gujarati'),
(2, 'Hindi'),
(4, 'Sanskrit'),
(6, 'Spanish');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bname` varchar(40) NOT NULL,
  `authname` varchar(40) NOT NULL,
  `category` int(11) NOT NULL,
  `language` int(11) NOT NULL,
  `image` varchar(44) NOT NULL,
  `pdf` varchar(44) NOT NULL,
  `descript` varchar(109) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`isbn`), ADD UNIQUE KEY `bname` (`bname`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cid`), ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `category1`
--
ALTER TABLE `category1`
 ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
 ADD PRIMARY KEY (`lid`), ADD UNIQUE KEY `lname` (`lname`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `bname` (`bname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `isbn` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category1`
--
ALTER TABLE `category1`
MODIFY `lid` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
MODIFY `lid` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
