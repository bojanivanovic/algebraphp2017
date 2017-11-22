-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 08:27 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `videoteka_zoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `clan`
--

CREATE TABLE IF NOT EXISTS `clan` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `prezime` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `adresa` varchar(64) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `clan`
--

INSERT INTO `clan` (`id`, `ime`, `prezime`, `adresa`) VALUES
(1, 'ivo', 'ivic', 'zabok 5'),
(2, 'marko', 'markic', 'zagreb 10'),
(3, 'pero', 'peric', 'split 1');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL,
  `naziv` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `redatelj` varchar(32) COLLATE utf8_croatian_ci NOT NULL,
  `godina_snimanja` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `naziv`, `redatelj`, `godina_snimanja`) VALUES
(1, 'Brzi', 'Ken_Russel', 1998),
(2, 'Dark', 'Leo_Nemo', 2014),
(3, 'Moon', 'Jack_Black', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `posudba`
--

CREATE TABLE IF NOT EXISTS `posudba` (
  `id` int(11) NOT NULL,
  `id_filma` int(11) NOT NULL,
  `id_clana` int(11) NOT NULL,
  `datum_posudbe` date NOT NULL,
  `datum_vracanja` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `posudba`
--

INSERT INTO `posudba` (`id`, `id_filma`, `id_clana`, `datum_posudbe`, `datum_vracanja`) VALUES
(1, 1, 1, '2017-11-01', '2017-11-05'),
(4, 2, 2, '2017-11-16', NULL),
(5, 3, 3, '2017-11-14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clan`
--
ALTER TABLE `clan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posudba`
--
ALTER TABLE `posudba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clan`
--
ALTER TABLE `clan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posudba`
--
ALTER TABLE `posudba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
