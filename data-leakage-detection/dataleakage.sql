-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2021 at 07:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataleakage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `askkey`
--

CREATE TABLE `askkey` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `k` varchar(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `askkey`
--

INSERT INTO `askkey` (`id`, `user`, `filename`, `status`, `reciver`, `k`) VALUES
(17, 's', 'UY', 'yes', 'admin', 'as'),
(18, 'sam', 'web', 'yes', 'admin', '12345'),
(19, 'sam', 'UY', 'yes', 'admin', 'HG'),
(20, 'sam', 'UY', 'yes', 'admin', 'HG'),
(21, 'sam', 'afh', 'no', 'admin', ''),
(22, 'sam', 'article', 'yes', 'admin', '12'),
(23, 'sam', 'article', 'yes', 'admin', '12'),
(24, 'vi', 'UY', 'yes', 'admin', 'as'),
(25, 'ka', 'article', 'yes', 'admin', '12'),
(26, 'ka', 'UY', 'no', 'admin', ''),
(27, 'ka', 'web', 'yes', 'admin', '12345'),
(28, 'ka', 'afh', 'yes', 'admin', 'jj'),
(29, 'vi', 'UY', 'no', 'admin', ''),
(30, 'vi', 'web', 'no', 'admin', ''),
(31, 'sam', 'web', 'no', 'admin', ''),
(32, 'sam', 'afh', 'no', 'admin', ''),
(33, '45', 'web', 'yes', 'admin', '12345'),
(34, '12', 'web', 'yes', 'admin', '12345'),
(35, '50', 'web', 'yes', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `leaker`
--

CREATE TABLE `leaker` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `time` date DEFAULT NULL,
  `probability` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaker`
--

INSERT INTO `leaker` (`id`, `name`, `time`, `probability`) VALUES
(12, '12', '0000-00-00', 0.266667),
(13, 'sam', '0000-00-00', 0.8),
(15, 'ka', '0000-00-00', 0.266667),
(16, 'vi', '0000-00-00', 0),
(50, '50', NULL, 0.266667);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(10) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `sender`, `email`, `reciver`, `msg`) VALUES
(3, 'aa', 'jhgnbn', 'rupesh', 'hi '),
(15, 'admin', 'jhg', 'aa', 'khk'),
(16, 'admin', 'uhu', 'mu', 'uhuhuh'),
(18, 'admin', 'sam@gmail.com', 'sam', 'y u leak my file,plz ask me key'),
(19, 'admin', 'kk@gmail.com', 'kk', 'u have leak my file');

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE `presentation` (
  `subject` varchar(50) NOT NULL,
  `Topic` text NOT NULL,
  `fname` varchar(100) NOT NULL,
  `time` date NOT NULL,
  `sendto` varchar(50) NOT NULL,
  `objNames` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`subject`, `Topic`, `fname`, `time`, `sendto`, `objNames`) VALUES
('UY', 'as', 'Unfiled Notes.one', '2015-04-19', 'gh', 't0'),
('web', '12345', 'ketan.docx', '2015-04-08', 'mu', 't1'),
('afh', 'jj', 'CHAPTER 1-9.docx', '2015-04-06', '', 't2'),
('article', '12', 'dk.png', '2015-04-22', '', 't3'),
('art', '1', 'hemen.docx', '2015-04-26', '', 't4'),
('a', 'qq', 'front pages.docx', '0000-00-00', '', 't5'),
('new', 'new', 'SIN TH 1.pdf', '2021-11-08', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `sendto` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `topic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`sendto`, `subject`, `time`, `topic`) VALUES
('ka', 'web', '2021-11-08', '12345'),
('sam', 'article', '2021-11-08', '12'),
('12', 'web', '2021-11-08', '12345'),
('50', 'web', '2021-11-08', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `userid` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `userid`, `password`, `emailid`) VALUES
('12', '12', '12', 'dj@dj.com'),
('50', '50', '50', '50@50.com'),
('ka', 'ka', 'ka', 'ka@gmail.com'),
('rupesh  chaudhari', 'rupesh', '123', 'rup@gmail.com'),
('sam', 'sam', 'sam', 'sam@gmail.com'),
('srishti', '45', '45', 's@gmail.com'),
('sumeet', 's', 's', 's@gmail.com'),
('sumit', 'su', 'su', 'su@gmail.com'),
('viraj', 'vi', 'vi', 'vi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `askkey`
--
ALTER TABLE `askkey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaker`
--
ALTER TABLE `leaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `askkey`
--
ALTER TABLE `askkey`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `leaker`
--
ALTER TABLE `leaker`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
