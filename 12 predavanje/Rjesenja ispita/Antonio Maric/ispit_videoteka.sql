-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 08:30 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ispit_videoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

CREATE TABLE IF NOT EXISTS `clanovi` (
  `ID` int(11) NOT NULL,
  `Ime` varchar(100) NOT NULL,
  `Prezime` varchar(100) NOT NULL,
  `Datum_Rođenja` date NOT NULL,
  `Spol` char(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`ID`, `Ime`, `Prezime`, `Datum_Rođenja`, `Spol`) VALUES
(1, 'Pero', 'Peric', '1995-12-22', 'M'),
(2, 'Marko', 'Markic', '1983-11-22', 'M'),
(3, 'Ana', 'Anic', '1950-04-28', 'Ž');

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE IF NOT EXISTS `filmovi` (
  `ID` int(11) NOT NULL,
  `Naziv_filma` varchar(50) NOT NULL,
  `Zanr_Filma` varchar(50) NOT NULL,
  `Duljina_Trajanja` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`ID`, `Naziv_filma`, `Zanr_Filma`, `Duljina_Trajanja`) VALUES
(1, 'Star Wars I', 'Sci-fi', 140),
(2, 'Star Wars II', 'Sci-fi', 155),
(3, 'Star Wars III', 'Sci-fi', 160);

-- --------------------------------------------------------

--
-- Table structure for table `kontakt_clanova`
--

CREATE TABLE IF NOT EXISTS `kontakt_clanova` (
  `ID` int(11) NOT NULL,
  `Kontakt` varchar(50) NOT NULL,
  `id_kontakta` int(11) NOT NULL,
  `id_clana` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontakt_clanova`
--

INSERT INTO `kontakt_clanova` (`ID`, `Kontakt`, `id_kontakta`, `id_clana`) VALUES
(1, '0956324021', 1, 1),
(2, '0947894561', 1, 2),
(3, '0956363636', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `posudbe_filmova`
--

CREATE TABLE IF NOT EXISTS `posudbe_filmova` (
  `ID` int(11) NOT NULL,
  `ID_Clana` int(11) NOT NULL,
  `ID_Filma` int(11) NOT NULL,
  `Datum_posudbe` date NOT NULL,
  `Datum_Vracanja` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posudbe_filmova`
--

INSERT INTO `posudbe_filmova` (`ID`, `ID_Clana`, `ID_Filma`, `Datum_posudbe`, `Datum_Vracanja`) VALUES
(1, 1, 1, '2017-11-22', '2017-12-22'),
(2, 2, 2, '2017-10-10', NULL),
(4, 3, 3, '2017-05-11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vrsta_kontakta`
--

CREATE TABLE IF NOT EXISTS `vrsta_kontakta` (
  `ID` int(11) NOT NULL,
  `Vrsta` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vrsta_kontakta`
--

INSERT INTO `vrsta_kontakta` (`ID`, `Vrsta`) VALUES
(1, 'Mobitel'),
(2, 'Email');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kontakt_clanova`
--
ALTER TABLE `kontakt_clanova`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posudbe_filmova`
--
ALTER TABLE `posudbe_filmova`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vrsta_kontakta`
--
ALTER TABLE `vrsta_kontakta`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanovi`
--
ALTER TABLE `clanovi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kontakt_clanova`
--
ALTER TABLE `kontakt_clanova`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posudbe_filmova`
--
ALTER TABLE `posudbe_filmova`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vrsta_kontakta`
--
ALTER TABLE `vrsta_kontakta`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
