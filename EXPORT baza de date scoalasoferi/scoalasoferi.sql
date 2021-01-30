-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 09:15 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'vintila.deliana', 'ParolaAdmin2!'),
(1, 'vintila.diana', 'ParolaAdmin1!');

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

-- --------------------------------------------------------

--
-- Table structure for table `plata`
--

CREATE TABLE `plata` (
  `Plata_ID` int(11) NOT NULL,
  `Total` float NOT NULL,
  `Cod_Fiscal` varchar(16) NOT NULL,
  `Tip_Plata` varchar(200) DEFAULT NULL,
  `Data_Plata` date DEFAULT NULL,
  `Durata` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plata`
--

INSERT INTO `plata` (`Plata_ID`, `Total`, `Cod_Fiscal`, `Tip_Plata`, `Data_Plata`, `Durata`) VALUES
(1, 150, '43784378', 'cash', '2020-03-01', 1.5),
(2, 300, '12567893', 'card', '2020-03-08', 3),
(3, 300, '12563893', 'card', '2020-03-15', 3),
(4, 300, '67463893', 'card', '2020-03-22', 1.5),
(5, 300, '128994478', 'cash', '2020-04-08', 3),
(6, 300, '21055289', 'cash', '2020-04-09', 3),
(7, 150, '71091512', 'card', '2020-04-12', 1.5),
(8, 300, '58819871', 'cash', '2020-04-18', 3),
(9, 300, '40235301', 'card', '2020-04-20', 3),
(10, 150, '47984378', 'cash', '2020-04-22', 1.5),
(11, 300, '47904478', 'card', '2020-04-25', 3),
(12, 300, '26894329', 'cash', '2020-04-29', 3),
(13, 150, '58259444', 'card', '2019-01-04', 1.5),
(14, 300, '32567893', 'card', '2019-01-11', 3),
(15, 300, '42563893', 'card', '2019-01-18', 3),
(16, 300, '68463893', 'card', '2019-01-25', 3),
(17, 300, '138994478', 'cash', '2019-02-08', 3),
(18, 300, '21355289', 'cash', '2019-02-09', 3),
(19, 150, '71691512', 'card', '2019-02-12', 1.5),
(20, 300, '58839871', 'cash', '2019-02-28', 3),
(21, 300, '40265301', 'card', '2019-03-20', 3),
(22, 150, '47974378', 'cash', '2019-03-22', 1.5),
(23, 300, '47904578', 'card', '2019-04-05', 3),
(24, 300, '26894326', 'cash', '2019-04-19', 3),
(25, 150, '73784378', 'cash', '2018-12-01', 1.5),
(26, 100, '10184378', 'cash', '2014-06-21', 1),
(27, 150, '53584378', 'cash', '2021-01-10', 1.5),
(28, 300, '53584678', 'card', '2021-01-11', 3),
(29, 300, '42563393', 'cash', '2021-01-12', 3),
(30, 300, '87463893', 'card', '2021-01-25', 1.5),
(31, 300, '90783567', 'cash', '2020-01-05', 3),
(32, 200, '63784378', 'cash', '2014-03-05', 2),
(33, 200, '62564893', 'card', '2014-03-09', 2),
(34, 200, '62563893', 'card', '2014-03-16', 2),
(35, 200, '66463893', 'card', '2014-03-23', 2),
(36, 200, '628994478', 'cash', '2014-04-05', 2),
(37, 200, '61055289', 'cash', '2014-04-07', 2),
(38, 200, '61091512', 'card', '2014-04-17', 2),
(39, 200, '68819871', 'cash', '2014-04-19', 2),
(40, 200, '60235301', 'card', '2014-04-20', 2),
(41, 200, '67984378', 'cash', '2014-04-22', 2),
(42, 200, '67904478', 'card', '2014-05-15', 2),
(43, 200, '66894326', 'cash', '2014-05-29', 2),
(44, 200, '68259444', 'card', '2014-06-14', 2),
(45, 200, '62567893', 'card', '2014-06-17', 2),
(46, 200, '62563842', 'card', '2014-06-18', 2),
(47, 150, '8784378', 'cash', '2017-01-05', 1.5),
(48, 150, '82567893', 'card', '2017-01-09', 1.5),
(49, 150, '82583893', 'card', '2017-02-16', 1.5),
(50, 150, '86463893', 'card', '2017-03-23', 1.5),
(51, 150, '878994478', 'cash', '2017-04-05', 1.5),
(52, 150, '87955289', 'cash', '2017-04-27', 1.5),
(53, 150, '88091512', 'card', '2017-06-17', 1.5),
(54, 150, '88819871', 'cash', '2017-06-19', 1.5),
(55, 200, '97843789', 'cash', '2020-04-23', 2),
(56, 300, '11783378', 'cash', '2021-01-07', 3),
(57, 200, '12567493', 'card', '2014-01-17', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'diana.vintila', 'BunaZiua1!'),
(2, 'deliana.vintila', 'Deliana11_'),
(3, 'maria.vintila', 'Asdfghj_30'),
(4, 'vlad.munteanu', 'O7ya8y1_'),
(5, 'elena.cobaschi', '49p0hI54!'),
(6, 'ion.ionita', 'Y9cx2tr-'),
(7, 'dorian.popa', 'Ffx5b5f_'),
(8, 'ariana.grande', 'Seven_7_rings'),
(9, 'bill.gates', '47swmlsO+'),
(10, 'elon.musk', ' X-Ash-A12'),
(11, 'mark.zuckerberg', 'Cambridge_analytica2018'),
(12, 'jeff.bezos', 'Selling_stocks2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`password`);

--
-- Indexes for table `dosar`
--
ALTER TABLE `dosar`
  ADD PRIMARY KEY (`Dosar_ID`);

--
-- Indexes for table `elev`
--
ALTER TABLE `elev`
  ADD PRIMARY KEY (`Elev_ID`),
  ADD UNIQUE KEY `CNP` (`CNP`),
  ADD UNIQUE KEY `Dosar_ID` (`Dosar_ID`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`Instructor_ID`),
  ADD UNIQUE KEY `CNP` (`CNP`);

--
-- Indexes for table `masina`
--
ALTER TABLE `masina`
  ADD PRIMARY KEY (`Masina_ID`),
  ADD UNIQUE KEY `Nr_Inmatriculare` (`Nr_Inmatriculare`);

--
-- Indexes for table `plata`
--
ALTER TABLE `plata`
  ADD PRIMARY KEY (`Plata_ID`),
  ADD UNIQUE KEY `Cod_Fiscal` (`Cod_Fiscal`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dosar`
--
ALTER TABLE `dosar`
  MODIFY `Dosar_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `elev`
--
ALTER TABLE `elev`
  MODIFY `Elev_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `Instructor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `masina`
--
ALTER TABLE `masina`
  MODIFY `Masina_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `plata`
--
ALTER TABLE `plata`
  MODIFY `Plata_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `elev`
--
ALTER TABLE `elev`
  ADD CONSTRAINT `elev_ibfk_1` FOREIGN KEY (`Dosar_ID`) REFERENCES `dosar` (`Dosar_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elev_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

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
