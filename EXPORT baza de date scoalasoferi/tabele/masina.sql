-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 09:16 PM
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
-- Table structure for table `masina`
--

CREATE TABLE `masina` (
  `Masina_ID` int(11) NOT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `Nr_Inmatriculare` varchar(10) NOT NULL,
  `Categorie` varchar(3) NOT NULL,
  `Asigurare` tinyint(1) NOT NULL,
  `Data_ITP` date NOT NULL,
  `Tip_Transmisie` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masina`
--

INSERT INTO `masina` (`Masina_ID`, `Marca`, `Model`, `Nr_Inmatriculare`, `Categorie`, `Asigurare`, `Data_ITP`, `Tip_Transmisie`) VALUES
(1, 'Audi', 'A6', 'B-255-DMD', 'B', 1, '2020-11-24', 'manuala'),
(2, 'Tesla', 'Model S', 'B-25-FOX', 'B', 1, '2020-10-24', 'automata'),
(3, 'Honda', 'Rebel CMX 500', 'B-116-LOL', 'A', 1, '2020-09-22', 'manuala'),
(4, 'Man', 'A21', 'B-16-SOS', 'D', 1, '2020-01-20', 'manuala'),
(5, 'Iveco', 'Daily 50c13', 'B-456-NOT', 'C', 1, '2019-02-13', 'manuala'),
(6, 'Urac', 'Bucur LF-CA', 'B-02749', 'Tv', 1, '2020-10-02', 'manuala'),
(7, 'Mercedes-Benz', 'Citaro', 'B-55-VFB', 'D', 1, '2020-10-02', 'manuala'),
(8, 'Dacia', 'Logan', 'B-33-VAI', 'B', 0, '2018-01-21', 'manuala'),
(9, 'Renault', 'Clio', 'B-16-LOV', 'B', 1, '2020-02-12', 'manuala'),
(10, 'Skoda', 'Octavia', 'B-130-IOP', 'B', 0, '2017-03-15', 'manuala'),
(11, 'Ford', 'Kuga', 'B-46-ROT', 'B', 1, '2020-04-13', 'automata'),
(12, 'Hyundai', 'i30', 'B-45-OOP', 'B', 0, '2016-12-02', 'automata'),
(13, 'Toyota', 'Aygo', 'B-235-BUF', 'B', 1, '2020-06-23', 'automata'),
(14, 'Renault', 'Clio', 'B-16-VOV', 'B', 1, '2020-02-12', 'manuala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masina`
--
ALTER TABLE `masina`
  ADD PRIMARY KEY (`Masina_ID`),
  ADD UNIQUE KEY `Nr_Inmatriculare` (`Nr_Inmatriculare`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masina`
--
ALTER TABLE `masina`
  MODIFY `Masina_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
