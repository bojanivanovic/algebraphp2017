-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 08:23 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `videotekax`
--

-- --------------------------------------------------------

--
-- Table structure for table `loan_list`
--

CREATE TABLE IF NOT EXISTS `loan_list` (
  `ID_loan` int(11) NOT NULL,
  `ID_movie` int(11) NOT NULL,
  `ID_member` int(11) NOT NULL,
  `date_taken` date NOT NULL,
  `loan_returned` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loan_list`
--

INSERT INTO `loan_list` (`ID_loan`, `ID_movie`, `ID_member`, `date_taken`, `loan_returned`) VALUES
(1, 1, 1, '2017-11-01', 1),
(2, 2, 2, '2017-10-05', 0),
(3, 3, 3, '2017-09-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member_list`
--

CREATE TABLE IF NOT EXISTS `member_list` (
  `ID_member` int(1) NOT NULL,
  `member_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_list`
--

INSERT INTO `member_list` (`ID_member`, `member_name`) VALUES
(1, 'Ivan Ivanovic'),
(2, 'Petar Petric'),
(3, 'Ante Antic');

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE IF NOT EXISTS `movie_list` (
  `ID_movie` int(1) NOT NULL,
  `movie_name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`ID_movie`, `movie_name`) VALUES
(1, 'Gladiator'),
(2, 'Titanic'),
(3, 'Jumanji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan_list`
--
ALTER TABLE `loan_list`
  ADD PRIMARY KEY (`ID_loan`);

--
-- Indexes for table `member_list`
--
ALTER TABLE `member_list`
  ADD PRIMARY KEY (`ID_member`);

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`ID_movie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan_list`
--
ALTER TABLE `loan_list`
  MODIFY `ID_loan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member_list`
--
ALTER TABLE `member_list`
  MODIFY `ID_member` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `ID_movie` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
