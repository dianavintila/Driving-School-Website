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
-- Table structure for table `dosar`
--

CREATE TABLE `dosar` (
  `Dosar_ID` int(11) NOT NULL,
  `Data_Inscriere` date NOT NULL,
  `Data_Expirare` date DEFAULT NULL,
  `Categorie_Permis` varchar(10) NOT NULL,
  `Total_Ore` float NOT NULL,
  `Apt_Medical` tinyint(1) NOT NULL,
  `Apt_Psihologic` tinyint(1) NOT NULL,
  `Certificat_Cazier` tinyint(1) NOT NULL,
  `Valabilitate_Cazier` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosar`
--

INSERT INTO `dosar` (`Dosar_ID`, `Data_Inscriere`, `Data_Expirare`, `Categorie_Permis`, `Total_Ore`, `Apt_Medical`, `Apt_Psihologic`, `Certificat_Cazier`, `Valabilitate_Cazier`) VALUES
(1, '2020-02-17', '2021-02-17', 'B', 30, 1, 1, 1, '2020-06-17'),
(2, '2019-01-03', '2020-01-03', 'B', 30, 1, 1, 1, '2019-07-17'),
(3, '2014-06-07', '2015-06-07', 'B', 1, 0, 1, 1, '2015-05-17'),
(4, '2021-01-05', '2022-01-05', 'C', 9, 1, 1, 1, '2022-05-14'),
(5, '2020-12-29', '2021-12-29', 'D', 3, 1, 1, 1, '2021-07-29'),
(6, '2014-02-19', '2015-02-19', 'Tv', 30, 1, 1, 1, '2014-09-30'),
(7, '2018-11-02', '2019-11-02', 'A', 0, 1, 1, 1, '2019-04-28'),
(8, '2017-12-28', '2018-12-28', 'B', 12, 1, 1, 1, '2018-06-03'),
(9, '2020-04-23', '2021-04-23', 'B', 2, 0, 0, 1, '2020-11-17'),
(10, '2020-10-11', '2022-10-11', 'C', 0, 1, 0, 1, '2021-05-26'),
(11, '2021-01-07', '2022-01-07', 'B', 3, 0, 1, 1, '2021-06-20'),
(12, '2021-01-13', '2022-01-17', 'A', 2, 1, 1, 1, '2021-06-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosar`
--
ALTER TABLE `dosar`
  ADD PRIMARY KEY (`Dosar_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosar`
--
ALTER TABLE `dosar`
  MODIFY `Dosar_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
