-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 08:18 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `videoteka mary`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

CREATE TABLE IF NOT EXISTS `clanovi` (
  `ID clanovi` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `telefon` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`ID clanovi`, `ime`, `prezime`, `telefon`) VALUES
(1, 'marina', 'varovic', 13453466),
(2, 'lucija', 'maric', 15653499),
(3, 'jozo', 'jozic', 13392569);

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE IF NOT EXISTS `filmovi` (
  `ID filmovi` int(11) NOT NULL,
  `naslov filma` varchar(50) NOT NULL,
  `zarn filma` varchar(50) NOT NULL,
  `trajanje` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`ID filmovi`, `naslov filma`, `zarn filma`, `trajanje`) VALUES
(1, 'umri_muski', 'komedija', 120),
(2, 'planet majmuna', 'triler', 140),
(3, 'titanic', 'obiteljski', 130);

-- --------------------------------------------------------

--
-- Table structure for table `posudba_info`
--

CREATE TABLE IF NOT EXISTS `posudba_info` (
  `ID clanovi` int(11) NOT NULL,
  `ID filmovi` int(11) NOT NULL,
  `datum_posudbe` date NOT NULL,
  `datum_povratka` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posudba_info`
--

INSERT INTO `posudba_info` (`ID clanovi`, `ID filmovi`, `datum_posudbe`, `datum_povratka`) VALUES
(1, 1, '2017-11-20', '2017-11-21'),
(2, 2, '2017-10-10', '0000-00-00'),
(3, 3, '2017-11-11', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`ID clanovi`);

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`ID filmovi`);

--
-- Indexes for table `posudba_info`
--
ALTER TABLE `posudba_info`
  ADD PRIMARY KEY (`ID clanovi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanovi`
--
ALTER TABLE `clanovi`
  MODIFY `ID clanovi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `ID filmovi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posudba_info`
--
ALTER TABLE `posudba_info`
  MODIFY `ID clanovi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
