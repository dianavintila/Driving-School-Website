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
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `Instructor_ID` int(11) NOT NULL,
  `Nume` varchar(100) NOT NULL,
  `Prenume` varchar(100) NOT NULL,
  `Adresa` varchar(200) DEFAULT NULL,
  `CNP` varchar(13) NOT NULL,
  `Telefon` varchar(11) DEFAULT NULL,
  `Categorie_Permis` varchar(20) DEFAULT NULL,
  `Venit` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`Instructor_ID`, `Nume`, `Prenume`, `Adresa`, `CNP`, `Telefon`, `Categorie_Permis`, `Venit`) VALUES
(1, 'Stanciu', 'Marian', 'Aleea Nada Florilor nr. 1, bl. 1, et 2, ap 20, Sector 1, Bucuresti', '1880302789403', '0732892932', 'A, B', 3200),
(2, 'Velicu', 'Valentin', 'Aleea Paris nr. 3, bl. 5, et 11, ap 235, Sector 3, Bucuresti', '1800114016298', '0757893202', 'A, B, C, D', 4500),
(3, 'Ion', 'Vasile', 'Strada Stefan cel Mare nr. 1, bl. 5, et 7, ap 101, Sector 2, Bucuresti', '1720229078669', '0720356783', 'A, B, C, D', 5000),
(4, 'Oprea', 'Mircea', 'Bd. Mircea Eliade  nr. 3, bl. 30, et 10, ap 91, Sector 2, Bucuresti', '1840223307991', '0789320302', 'A, B, C, D, Tv, E', 7300),
(5, 'Acsente', 'Matei', 'Str Ostasilor, Nr. 27, Sector 1, Bucuresti', '1970806278197', '0756789434', 'A, B,C', 2600),
(6, 'Zibas', 'Marius', 'Strada Calea Dorobanti nr. 172, bl. 16, et 3, ap 15, Sector 2, Bucuresti', '1870710201731', '0793895224', 'A, B, C, D', 3500),
(7, 'Ilie', 'Cristian', 'Calea Plevnei, Nr. 3, Sector 6, Bucuresti', '2910126038138', '0986735621', 'B, C, D', 5090),
(8, 'Stanciu', 'Rares', 'Bulevardul Alexandru Ioan Cuza, nr. 30, Sector 1, Bucuresti', '2910726419485', '0111245789', 'A, B, C, D, Tv, E', 7900),
(9, 'Ionescu', 'Bogdan', 'Bdul. Regina Maria 62, Sector 4, Bucuresti', '1890916467604', '0833290467', 'A, B, C, D', 5400),
(10, 'Popescu', 'Mihnea', 'Str. Mihai Bravu, nr. 102A, Sector 2, Bucuresti', '2890415326204', '0789567842', 'B, C, D, Tv, E', 6750);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`Instructor_ID`),
  ADD UNIQUE KEY `CNP` (`CNP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `Instructor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
