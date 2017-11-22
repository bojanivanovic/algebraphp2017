-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 08:12 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `videoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

CREATE TABLE IF NOT EXISTS `clanovi` (
  `clan_ID` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `telefon` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`clan_ID`, `ime`, `prezime`, `adresa`, `telefon`) VALUES
(1, 'Pero', 'Peric', 'Periceva ulica 3', '000022220033'),
(2, 'Ivo', 'Ivic', 'Iviceva ulica 4', '11122233344'),
(3, 'Marica', 'Maric', 'Mariceva ulica 5', '99223324242');

-- --------------------------------------------------------

--
-- Table structure for table `evidencija`
--

CREATE TABLE IF NOT EXISTS `evidencija` (
  `datum_posudbe` datetime NOT NULL,
  `datum_povratka` datetime NOT NULL,
  `clan_ID` int(11) NOT NULL,
  `film_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evidencija`
--

INSERT INTO `evidencija` (`datum_posudbe`, `datum_povratka`, `clan_ID`, `film_ID`) VALUES
('2017-09-15 00:00:00', '2017-12-28 00:00:00', 2, 2),
('2017-09-26 00:00:00', '2019-03-04 00:00:00', 3, 3),
('2017-10-10 00:00:00', '2017-12-22 00:00:00', 2, 1),
('2017-10-27 00:00:00', '2018-02-20 00:00:00', 3, 2),
('2017-11-19 00:00:00', '2017-11-29 00:00:00', 1, 3),
('2017-11-20 00:00:00', '2017-11-21 00:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE IF NOT EXISTS `filmovi` (
  `film_ID` int(11) NOT NULL,
  `naziv` varchar(75) NOT NULL,
  `zanr` varchar(50) NOT NULL,
  `reziser` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`film_ID`, `naziv`, `zanr`, `reziser`) VALUES
(1, 'Film1', 'komedija', 'jerry lewis'),
(2, 'Film2', 'horor', 'Sasa Fajkovic'),
(3, 'Film3', 'dokumentarac', 'Pero Peric');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`clan_ID`);

--
-- Indexes for table `evidencija`
--
ALTER TABLE `evidencija`
  ADD PRIMARY KEY (`datum_posudbe`);

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`film_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanovi`
--
ALTER TABLE `clanovi`
  MODIFY `clan_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `film_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
