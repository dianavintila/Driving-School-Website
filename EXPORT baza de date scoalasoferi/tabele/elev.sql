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
-- Table structure for table `elev`
--

CREATE TABLE `elev` (
  `Elev_ID` int(11) NOT NULL,
  `Dosar_ID` int(11) NOT NULL,
  `Nume` varchar(100) NOT NULL,
  `Prenume` varchar(100) NOT NULL,
  `Adresa` varchar(200) DEFAULT NULL,
  `CNP` varchar(13) NOT NULL,
  `Varsta` varchar(11) NOT NULL,
  `Telefon` varchar(11) DEFAULT NULL,
  `Categorie_Permis` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elev`
--

INSERT INTO `elev` (`Elev_ID`, `Dosar_ID`, `Nume`, `Prenume`, `Adresa`, `CNP`, `Varsta`, `Telefon`, `Categorie_Permis`, `id`) VALUES
(1, 1, 'Vintila', 'Diana', 'Aleea Soarelui nr. 1, bl. 1, sc. 4, et. 8, Sector 2, Bucuresti', '2990502409257', '21', '0722359657', 'B', 1),
(2, 2, 'Vintila', 'Deliana', 'Aleea Primaverii nr. 1, bl. 1, sc. 4, et. 8, Sector 2, Bucuresti', '6050511403246', '15', '0744251025', 'B', 2),
(3, 3, 'Vintila', 'Maria', 'Aleea Ionita nr. 1, bl. 1, sc. 3, et. 5, Sector 2, Bucuresti', '2651119032467', '55', '0740362517', 'A', 3),
(4, 4, 'Munteanu', 'Vlad', 'Soseaua Cernica 7, 077145, Ilfov', '2651189032467', '55', '0740362517', 'D', 4),
(5, 5, 'Cobaschi', 'Elena', 'Şos. Mihai Bravu nr. 444 bl. V10 sc. 3 et parter Ap. 66, BUCHAREST - DISTRICT 3, 030332', '2730101456785', '48', '0788743713', 'C', 5),
(6, 6, 'Ionita', 'Ion', 'Calea 13 Septembrie nr. 121 bl. 127 Ap. 21, Bucuresti, Sector 5, 50717', '1900101455835', '31', '0740301356', 'Tv', 6),
(7, 7, 'Popa', 'Dorian', ' Bd. Iuliu Maniu nr. 61 bl. 8P sc. 5 et 1 ap. 170, Bucuresti, Sector 6, 061083', '1880807449668', '32', '0784346890', 'D', 7),
(8, 8, 'Grande', 'Ariana', 'Int. Geneva nr. 7, Bucuresti, Sector 1, 011735', '2930626424726', '27', '0724882351', 'B', 8),
(9, 9, 'Gates', 'Bill', 'Şos. Colentina nr. 24 bl. 10 sc. B et 6 ap. 114, Bucuresti, Sector 2, 021179', '1551028429876', '65', '0752090071', 'B', 9),
(10, 10, 'Musk', 'Elon', 'Soseaua Nicolae Titulescu 3, Bucuresti, Sector 1, 011131', '1710628427777', '49', '0778904246', 'B', 10),
(11, 11, 'Zuckerberg', 'Mark', 'Bulevardul Basarabia 256, Bucuresti, Sector 3, 030352', '1840514427946', '36', '0768905324', 'B', 11),
(12, 12, 'Bezos', 'Jeff', 'Bd. Nicolae Grigorescu nr. 18 bl. 3 bis sc. 4 et 8 ap. 182, Bucuresti, Sector 3, 030453', '1640112421491', '56', '0735689310', 'B', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elev`
--
ALTER TABLE `elev`
  ADD PRIMARY KEY (`Elev_ID`),
  ADD UNIQUE KEY `CNP` (`CNP`),
  ADD UNIQUE KEY `Dosar_ID` (`Dosar_ID`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elev`
--
ALTER TABLE `elev`
  MODIFY `Elev_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `elev`
--
ALTER TABLE `elev`
  ADD CONSTRAINT `elev_ibfk_1` FOREIGN KEY (`Dosar_ID`) REFERENCES `dosar` (`Dosar_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elev_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
