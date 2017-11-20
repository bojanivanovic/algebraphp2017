-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 11:51 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caffe_bars`
--

-- --------------------------------------------------------

--
-- Table structure for table `caffe_bar_location`
--

CREATE TABLE `caffe_bar_location` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `work_hours_start` time NOT NULL,
  `work_hours_end` time NOT NULL,
  `seat_number` int(11) NOT NULL,
  `size` decimal(10,0) NOT NULL,
  `accepts_reservations` tinyint(1) NOT NULL,
  `parking_spaces` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caffe_bar_location`
--

INSERT INTO `caffe_bar_location` (`id`, `name`, `work_hours_start`, `work_hours_end`, `seat_number`, `size`, `accepts_reservations`, `parking_spaces`) VALUES
(1, 'Green', '07:00:00', '23:00:00', 50, '70', 0, 0),
(2, 'Blue', '09:00:00', '19:00:00', 80, '120', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `contact_type`
--

CREATE TABLE `contact_type` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_type`
--

INSERT INTO `contact_type` (`id`, `value`) VALUES
(1, 'mobitel'),
(2, 'email'),
(3, 'fiskni');

-- --------------------------------------------------------

--
-- Table structure for table `location_contact_data`
--

CREATE TABLE `location_contact_data` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location_contact_data`
--

INSERT INTO `location_contact_data` (`id`, `value`, `id_type`, `id_location`) VALUES
(1, '01234567', 3, 1),
(2, '09876543', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `location_staff`
--

CREATE TABLE `location_staff` (
  `id` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `id_staff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location_staff`
--

INSERT INTO `location_staff` (`id`, `id_location`, `id_staff`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `sex` char(1) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `start_working_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `iban` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `sex`, `first_name`, `last_name`, `nickname`, `date_of_birth`, `start_working_date`, `iban`) VALUES
(1, 'M', 'Sasa', 'Fajkovic', 'Sale', '1989-05-10', '2016-12-31 23:00:00', 'HR980312098312'),
(2, 'F', 'Maja', 'Majic', 'Maja', '1990-09-09', '2015-05-04 22:00:00', ''),
(3, 'M', 'Ivan', 'Ivic', 'Ivek', '1988-08-08', '2008-08-07 22:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_contact_data`
--

CREATE TABLE `staff_contact_data` (
  `id` int(11) NOT NULL,
  `value` varchar(50) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_staff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff_contact_data`
--

INSERT INTO `staff_contact_data` (`id`, `value`, `id_type`, `id_staff`) VALUES
(1, '0912345678', 1, 1),
(2, 'sasa@fajk.ovic', 2, 1),
(3, '234567', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caffe_bar_location`
--
ALTER TABLE `caffe_bar_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_type`
--
ALTER TABLE `contact_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_contact_data`
--
ALTER TABLE `location_contact_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_location` (`id_location`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `location_staff`
--
ALTER TABLE `location_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_location` (`id_location`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_contact_data`
--
ALTER TABLE `staff_contact_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_staff` (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caffe_bar_location`
--
ALTER TABLE `caffe_bar_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact_type`
--
ALTER TABLE `contact_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `location_contact_data`
--
ALTER TABLE `location_contact_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `location_staff`
--
ALTER TABLE `location_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff_contact_data`
--
ALTER TABLE `staff_contact_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `location_contact_data`
--
ALTER TABLE `location_contact_data`
  ADD CONSTRAINT `location_contact_data_ibfk_1` FOREIGN KEY (`id_location`) REFERENCES `caffe_bar_location` (`id`),
  ADD CONSTRAINT `location_contact_data_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `contact_type` (`id`);

--
-- Constraints for table `location_staff`
--
ALTER TABLE `location_staff`
  ADD CONSTRAINT `location_staff_ibfk_1` FOREIGN KEY (`id_location`) REFERENCES `caffe_bar_location` (`id`),
  ADD CONSTRAINT `location_staff_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id`);

--
-- Constraints for table `staff_contact_data`
--
ALTER TABLE `staff_contact_data`
  ADD CONSTRAINT `staff_contact_data_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `contact_type` (`id`),
  ADD CONSTRAINT `staff_contact_data_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
