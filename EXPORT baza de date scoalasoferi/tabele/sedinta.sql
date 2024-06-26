-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 09:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoalasoferi`
--

-- --------------------------------------------------------

--
-- Table structure for table `sedinta`
--

CREATE TABLE `sedinta` (
  `Elev_ID` int(11) NOT NULL,
  `Instructor_ID` int(11) NOT NULL,
  `Masina_ID` int(11) NOT NULL,
  `Plata_ID` int(11) NOT NULL,
  `Nr_Sedinta` int(11) NOT NULL,
  `Data_Sedinta` date NOT NULL,
  `Ora_Inceput` time NOT NULL,
  `Ora_Sfarsit` time NOT NULL,
  `Km_Deplasare` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sedinta`
--

INSERT INTO `sedinta` (`Elev_ID`, `Instructor_ID`, `Masina_ID`, `Plata_ID`, `Nr_Sedinta`, `Data_Sedinta`, `Ora_Inceput`, `Ora_Sfarsit`, `Km_Deplasare`) VALUES
(1, 1, 1, 1, 1, '2020-03-02', '09:30:00', '11:00:00', 150),
(1, 1, 1, 2, 2, '2020-03-08', '18:00:00', '21:00:00', 300),
(1, 1, 1, 3, 3, '2020-03-15', '18:00:00', '21:00:00', 300),
(1, 1, 1, 4, 4, '2020-03-22', '09:30:00', '11:00:00', 150),
(1, 1, 1, 5, 5, '2020-04-08', '08:00:00', '11:00:00', 300),
(1, 1, 1, 6, 6, '2020-04-09', '10:00:00', '13:00:00', 300),
(1, 1, 1, 7, 7, '2020-04-12', '09:30:00', '11:00:00', 150),
(1, 1, 1, 8, 8, '2020-04-18', '18:00:00', '21:00:00', 300),
(1, 1, 1, 9, 9, '2020-04-20', '18:00:00', '21:00:00', 300),
(1, 1, 1, 10, 10, '2020-04-22', '09:30:00', '11:00:00', 150),
(1, 1, 1, 11, 11, '2020-04-25', '08:00:00', '11:00:00', 300),
(1, 1, 1, 12, 12, '2020-04-29', '10:00:00', '13:00:00', 300),
(2, 2, 2, 13, 1, '2019-01-04', '09:30:00', '11:00:00', 150),
(2, 2, 2, 14, 2, '2019-01-11', '18:00:00', '21:00:00', 300),
(2, 2, 2, 15, 3, '2019-01-18', '18:00:00', '21:00:00', 300),
(2, 2, 2, 16, 4, '2019-01-25', '09:30:00', '11:00:00', 150),
(2, 2, 2, 17, 5, '2019-02-08', '08:00:00', '11:00:00', 300),
(2, 2, 2, 18, 6, '2019-02-09', '10:00:00', '13:00:00', 300),
(2, 2, 2, 19, 7, '2019-02-12', '09:30:00', '11:00:00', 150),
(2, 2, 2, 20, 8, '2019-02-28', '18:00:00', '21:00:00', 300),
(2, 2, 2, 21, 9, '2019-03-20', '15:00:00', '18:00:00', 300),
(2, 2, 2, 22, 10, '2019-03-22', '09:30:00', '11:00:00', 150),
(2, 2, 2, 23, 11, '2019-04-05', '08:00:00', '11:00:00', 300),
(2, 2, 2, 24, 12, '2019-04-19', '13:00:00', '16:00:00', 300),
(3, 3, 1, 26, 1, '2014-06-07', '09:30:00', '11:00:00', 100),
(4, 5, 5, 27, 1, '2021-01-10', '09:30:00', '11:00:00', 150),
(4, 5, 5, 28, 2, '2021-01-11', '18:00:00', '21:00:00', 300),
(4, 5, 5, 29, 3, '2021-01-12', '18:00:00', '21:00:00', 300),
(4, 5, 5, 30, 4, '2021-01-25', '09:30:00', '11:00:00', 150),
(5, 6, 7, 31, 1, '2020-01-08', '09:00:00', '11:00:00', 200),
(6, 4, 6, 32, 1, '2014-03-05', '09:30:00', '10:30:00', 200),
(6, 4, 6, 33, 2, '2014-03-09', '18:00:00', '20:00:00', 200),
(6, 4, 6, 34, 3, '2014-03-16', '18:00:00', '20:00:00', 200),
(6, 4, 6, 35, 4, '2014-03-23', '09:30:00', '10:30:00', 200),
(6, 4, 6, 36, 5, '2014-04-05', '08:00:00', '10:00:00', 200),
(6, 4, 6, 37, 6, '2014-04-07', '10:00:00', '12:00:00', 200),
(6, 4, 6, 38, 7, '2014-04-17', '08:00:00', '10:00:00', 200),
(6, 4, 6, 39, 8, '2014-04-19', '18:00:00', '20:00:00', 200),
(6, 4, 6, 40, 9, '2014-04-20', '18:00:00', '20:00:00', 200),
(6, 4, 6, 41, 10, '2014-04-22', '09:30:00', '10:30:00', 200),
(6, 4, 6, 42, 11, '2014-05-15', '08:00:00', '10:00:00', 200),
(6, 4, 6, 43, 12, '2014-05-29', '13:00:00', '15:00:00', 200),
(6, 4, 6, 44, 13, '2014-06-14', '12:00:00', '14:00:00', 200),
(6, 4, 6, 45, 14, '2014-06-17', '13:00:00', '15:00:00', 200),
(6, 4, 6, 46, 15, '2014-06-18', '10:00:00', '12:00:00', 200),
(7, 1, 1, 25, 1, '0000-00-00', '09:30:00', '11:00:00', 150),
(8, 1, 6, 47, 1, '2017-01-05', '09:30:00', '11:00:00', 150),
(8, 1, 6, 48, 2, '2020-01-09', '18:00:00', '19:30:00', 150),
(8, 1, 6, 49, 3, '2017-02-16', '16:00:00', '17:30:00', 150),
(8, 1, 6, 50, 4, '2017-03-23', '09:30:00', '11:00:00', 150),
(8, 1, 6, 51, 5, '2017-04-05', '08:00:00', '09:30:00', 150),
(8, 1, 6, 52, 6, '2017-04-27', '10:00:00', '11:30:00', 150),
(8, 1, 6, 53, 7, '2017-06-17', '09:30:00', '11:00:00', 150),
(8, 1, 6, 54, 8, '2017-06-19', '18:00:00', '19:30:00', 150),
(9, 4, 9, 55, 1, '2020-04-25', '09:00:00', '11:00:00', 200),
(11, 3, 1, 56, 1, '2020-01-28', '17:00:00', '21:00:00', 300),
(12, 9, 3, 57, 1, '2020-02-28', '09:00:00', '11:00:00', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sedinta`
--
ALTER TABLE `sedinta`
  ADD PRIMARY KEY (`Elev_ID`,`Instructor_ID`,`Masina_ID`,`Plata_ID`),
  ADD KEY `Elev_ID` (`Elev_ID`),
  ADD KEY `Instructor_ID` (`Instructor_ID`),
  ADD KEY `Masina_ID` (`Masina_ID`),
  ADD KEY `Plata_ID` (`Plata_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sedinta`
--
ALTER TABLE `sedinta`
  ADD CONSTRAINT `sedinta_ibfk_1` FOREIGN KEY (`Elev_ID`) REFERENCES `elev` (`Elev_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sedinta_ibfk_2` FOREIGN KEY (`Instructor_ID`) REFERENCES `instructor` (`Instructor_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sedinta_ibfk_3` FOREIGN KEY (`Masina_ID`) REFERENCES `masina` (`Masina_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sedinta_ibfk_4` FOREIGN KEY (`Plata_ID`) REFERENCES `plata` (`Plata_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
